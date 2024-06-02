<!-- mod_contact.php -->
<link rel="stylesheet" href="mods/mod_contact/mod_contact.css?<?php echo filemtime('mods/mod_contact/mod_contact.css'); ?>">

<div class="modulo-contact">
    <div class="mod_contact-columna-1">
        <h2>Contacto</h2>
        <p>Sus preguntas, comentarios y sugerencias son importantes para nosotros!</p>
        <form name="sentMessage" id="contactForm" novalidate action="mods/mod_contact/contact_me.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Su nombre *" id="name" name="name" required data-validation-required-message="Por favor, escriba su nombre.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Su email *" id="email" name="email" required data-validation-required-message="Por favor, escriba su email.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" placeholder="Su teléfono *" id="phone" name="phone" required data-validation-required-message="Por favor, escriba su número de teléfono.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Su mensaje *" id="message" name="message" required data-validation-required-message="Por favor, escriba su mensaje."></textarea>
                <p class="help-block text-danger"></p>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>

<!-- Incluir los archivos JavaScript -->
<script src="mods/mod_contact/jqBootstrapValidation.js"></script>
<script src="mods/mod_contact/contact_me.js"></script>
