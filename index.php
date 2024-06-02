<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con columnas</title>
    <link rel="stylesheet" href="css/styles.css?<?php echo filemtime('styles.css'); ?>">

</head>
<body>
    <div class="header">
        <?php include 'mods/mod_menu/mod_menu.php'; ?>
    </div>
    <div class="container">
        <div class="left-column">
            <?php include 'mods/mod1_izq/mod1_izq.php'; ?>
        </div>
        
        <div class="center-column">
        <div id="contenido_dinamico">
			<?php include 'mods/mod1/mod1.php'; ?></div>
        <div>
			<?php include 'mods/mod_ytube/mod_ytube.php'; ?>
        </div>
            
        </div>
        
        <div class="right-column">
            <?php include 'mods/mod1_der/mod1_der.php'; ?>
        </div>
    </div>
    <div class="section_ppal1">
    	<?php include 'mods/mod_gmaps/mod_gmaps.php'; ?>
        <?php include 'mods/mod_contact/mod_contact.php'; ?>
        <?php include 'mods/mod_antefooter/mod_antefooter.php'; ?>
    </div>
    <div class="section_ppal2">
        <?php include 'mods/mod_antefooter2/mod_antefooter2.php'; ?>
    </div>
    <div class="section-footer">
        <?php include 'mods/mod_footer/mod_footer.php'; ?>
    </div>

</body>
</html>