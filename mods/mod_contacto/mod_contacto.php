<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mod_contacto.css">
    <title>Contacto</title>
</head>
<body>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contacto</h3>
                        <p class="white-text">Sus preguntas, comentarios y sugerencias son importantes para nosotros!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Su nombre *" id="name" required data-validation-required-message="Por favor, escriba su nombre.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Su email *" id="email" required data-validation-required-message="Por favor, escriba su email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Su teléfono *" id="phone" required data-validation-required-message="Por favor, escriba su numero de teléfono.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Su mensaje *" id="message" required data-validation-required-message="Por favor, escriba su mensaje."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="site/js/jquery-2.1.1.min.js"></script>
    <script src="site/asset/js/bootstrap.min.js"></script>
    <script src="site/js/jqBootstrapValidation.js"></script>
    <script src="site/js/contact_me.js"></script>
</body>
</html>
