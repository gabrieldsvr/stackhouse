<?php

use Source\Controllers\ImovelController;

$v->layout("_theme", [
    "title" => $title
]);
?>
<section class="fabrx-section bg-white">
    <div class="container">
        <div class="fabrx-middle-box text-center px-0 px-md-5">
            <div class="hero-caption px-0 px-md-5">
                <h4 class="mb-0">FALE CONOSCO</h4>
                <hr>
                <p class="">Se você tem alguma sugestão, dúvida ou solicitação a fazer, utilize esse espaço para entrar em contato conosco. Teremos satisfação em responder.</p>
            </div>
            <form class="mt-4 px-0 px-lg-5 py-2 mx-0 mx-md-5" id="formContato" action="" method="POST">
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Nome completo" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <input type="tel"  name="telefone" placeholder="telefone" class="form-control" id="telefone" required>
                </div>
                <div class="col-md-12 form-group ">
                        <div class="quform-input">
                            <textarea class="form-control" id="body" name="body" rows="3" placeholder="Mande uma mensagem" required></textarea>
                        </div>
                <div class="d-grid my-3">
                    <button type="submit" class="btn btn-xl btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>


<?php $v->start("js") ?>
<script src="<?=url("assets/js/jquery-validation/jquery.validate.min.js")?>"></script>

<script>
    resetToastPosition = function () {
        $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
        $(".jq-toast-wrap").css({
            "top": "",
            "left": "",
            "bottom": "",
            "right": ""
        });

    };
    showDangerToast = function() {
        'use strict';
        resetToastPosition();
        $.toast({
            heading: 'Erro!',
            text: 'Ocorreu um erro inesperado no envio da mensagem',
            showHideTransition: 'slide',
            icon: 'error',
            loaderBg: '#f2a654',
            position: 'top-right'
        })
    };
    showSuccessToast = function() {
        'use strict';
        resetToastPosition();
        $.toast({
            heading: 'Sucesso!',
            text: 'Mensagem enviada com sucesso!',
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#f96868',
            position: 'top-right'
        })
    };
    showInfoToast = function() {
        'use strict';
        resetToastPosition();
        $.toast({
            heading: 'Atenção...',
            text: 'Enviando sua mensagem.',
            showHideTransition: 'slide',
            icon: 'info',
            loaderBg: '#46c35f',
            position: 'top-right'
        })
    };

    $("#formContato").validate({
        rules: {
            nome: "required",
            email: "required",
            telefone: "required",
            body: "required",
        },
        messages: {
            nome: "Insira seu nome",
            email: "Insira seu email para entrar em contato",
            telefone: "Insira seu telefone de contato",
            body: "Insira a sua mensagem",
        },

        errorPlacement: function (label, element) {
            label.addClass('mt-2 text-danger');
            label.insertAfter(element);
        },
        highlight: function (element, errorClass) {
            $(element).parent().addClass('has-danger')
            $(element).addClass('form-control-danger')
        },
        submitHandler: function (form, event) {
            event.preventDefault();
            var form = $("#formContato");
            $.ajax({
                type: "POST",
                url: "<?=url_pesquisa("mail")?>",
                data:  form.serialize(),
                dataType: 'json',
                beforeSend: function () {
                    showInfoToast();
                },
                success: function (data) {
                    showSuccessToast();
                    document.getElementById("formContato").reset();
                },
                error: function (data) {
                    showDangerToast();
                    console.error(data)
                }
            });
        }
    });

</script>
<?php $v->end("js") ?>





