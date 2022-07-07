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
                <p class="">Se você tem alguma sugestão, dúvida ou solicitação a fazer, utilize esse espaço para entrar em contato conosco. Teremos satisfação em responde.</p>
            </div>
            <form class="mt-4 px-0 px-lg-5 py-2 mx-0 mx-md-5">
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Nome completo" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <input type="tel"  name="telefone" placeholder="telefone" class="form-control" id="email" required>
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

