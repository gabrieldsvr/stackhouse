<?php
$v->layout("_theme", [
    "title" => $title
]);
?>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css' rel='stylesheet'/>


<section class="fabrx-section ">
    <div class="container">
        <div id='map'  style='max-width: 100%; height: 800px;'></div>
    </div>
</section>


<?php $v->start("js") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FicmllbGRzdnIiLCJhIjoiY2w0bjg1aXo0MDBqcTNrcGhlcnhvbnUwZSJ9.OzSQkTNC9a0McnRrm6tyJQ';




    let dados = {};
    $.ajax({
        url: "<?=url_pesquisa('map/jsonMap')?>",
        type: 'get',
        data:'',
        success: function (data) {
            let features = [];
            dados = JSON.parse(data)
            dados.forEach(function (obj,index) {
                let imovelFeature = {};
                imovelFeature.json = JSON.parse(obj.json);
                imovelFeature.id = obj.id;

                if (imovelFeature.json.localization){
                    imovelFeature.type = 'Feature';
                    imovelFeature.properties = {
                        'description' :  '<img class="card-img-top" style="max-height: 150px" src="'+imovelFeature.json.imagem_destaque +'" alt="Card Image"><hr><div><h6>R$ '+imovelFeature.json.valor+'</h6><br>' + imovelFeature.json.bairro + " " +  imovelFeature.json.cidade + '<br>' + imovelFeature.json.caracteristicas.cama + ' Quartos ' + imovelFeature.json.caracteristicas.banheiro + ' banheiros </br> ' + imovelFeature.json.caracteristicas.garagem + ' Vagas ' + imovelFeature.json.caracteristicas.area + ' m²</div><br><a href="<?=url_pesquisa("imovel/")?>'+imovelFeature.id+'" class="btn btn-sm btn-primary"> Detalhes</a'
                    };
                    imovelFeature.geometry = {
                        'type' : 'Point',
                        'coordinates': [imovelFeature.json.localization.lat, imovelFeature.json.localization.lon]
                    };
                    features.push(imovelFeature)
                }
            });


            const map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [<?= isset($imovel_focus) ? $imovel_focus->localization->lat :-48.54720252493149 ?>, <?= isset($imovel_focus) ? $imovel_focus->localization->lon : -27.5940347620746 ?>],
                zoom: 14
            });

            map.on('load', () => {
                map.addSource('places', {
                    'type': 'geojson',
                    'data': {
                        'type': 'FeatureCollection',
                        'features': features
                    }
                });
// Add a layer showing the places.
                map.addLayer({
                    'id': 'places',
                    'type': 'circle',
                    'source': 'places',
                    'paint': {
                        'circle-color': '#4264fb',
                        'circle-radius': 6,
                        'circle-stroke-width': 2,
                        'circle-stroke-color': '#ffffff'
                    }
                });

// Create a popup, but don't add it to the map yet.
                const popup = new mapboxgl.Popup({
                    closeButton: false,
                    closeOnClick: false
                });
                map.on('click', 'places', (e) => {
// Copy coordinates array.
                    const coordinates = e.features[0].geometry.coordinates.slice();
                    const description = e.features[0].properties.description;

// Ensure that if the map is zoomed out such that multiple
// copies of the feature are visible, the popup appears
// over the copy being pointed to.
                    while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                        coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                    }

                    new mapboxgl.Popup()
                        .setLngLat(coordinates)
                        .setHTML(description)
                        .addTo(map);
                });

// Change the cursor to a pointer when the mouse is over the places layer.
                map.on('mouseenter', 'places', () => {
                    map.getCanvas().style.cursor = 'pointer';
                });

// Change it back to a pointer when it leaves.
                map.on('mouseleave', 'places', () => {
                    map.getCanvas().style.cursor = '';
                });

            });
        }
    });


</script>

<?php $v->end("js") ?>
