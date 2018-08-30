<?php
require_once "resources/class.database.php";
$db = conecta_SYNC();
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://carrillosteam.com/public/css/demo.css">
        <link rel="stylesheet" href="https://carrillosteam.com/public/css/sky-forms-ie8.css">
        <link rel="stylesheet" href="https://carrillosteam.com/public/css/sky-forms-blue.css">
        <link rel="stylesheet" href="https://carrillosteam.com/public/css/sky-forms-orange.css">
        <link rel="stylesheet" href="https://carrillosteam.com/public/css/sky-forms-green.css">
        <link rel="stylesheet" href="https://carrillosteam.com/public/css/sky-forms-coqueiro.css">
        <link rel="stylesheet" href="https://carrillosteam.com/public/css/sky-forms.css">        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container bg-green">
            <div class="row">
                <form class="sky-form" action="generator.php" method="POST" name="FORMGEN">
                    <header>Generacion de Clases en PHP</header>
                    <fieldset>
                        <section>
                            <div class="row">
                                <label class="label col col-4">Nombre de la Tabla</label>
                                <div class="col col-8">
                                    <label class="select">
                                        <select name="tablename">
                                            <?php
                                            $sql = "SHOW TABLES";
                                            $stmt = $db->prepare($sql);
                                            $stmt->execute();
                                            $tablelist = $stmt->fetchAll();
                                            foreach ($tablelist as $table) {
                                                echo '<option value="' . $table[0] . '">' . $table[0] . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="row">
                                <label class="label col col-4">Nombre de la clase a generar</label>
                                <div class="col col-8">
                                    <label class="input">
                                        <i class="icon-append fa fa-phone"></i>
                                        <input type="text" name="classname" size="50" value="">
                                    </label>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="row">
                                <label class="label col col-4">Nombre del Campo clave</label>
                                <div class="col col-8">
                                    <label class="input">
                                        <i class="icon-append fa fa-phone"></i>
                                        <input type="text" name="keyname" size="50" value="">
                                    </label>
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="row">
                                <label class="label col col-4">Nombre del Objeto en la Clase</label>
                                <div class="col col-8">
                                    <label class="input">
                                        <i class="icon-append fa fa-phone"></i>
                                        <input type="text" name="objeto" size="50" value="">
                                    </label>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                    <footer>
                        <button type="submit" class="button">Generar Clase</button>
                        <p class="help-block">Agregara una nueva clase.</p>
                    </footer>
                </form>       
            </div>
        </div>
        <script src="https://carrillosteam.com/public/js/jquery.form.min.js"></script>
        <script src="https://carrillosteam.com/public/js/jquery.maskedinput.min.js"></script>
        <script src="https://carrillosteam.com/public/js/jquery.modal.js"></script>
        <script src="https://carrillosteam.com/public/js/jquery.validate.min.js"></script>
        <script src="https://carrillosteam.com/public/js/utils.js"></script>
        <script src="https://carrillosteam.com/public/js/slider.js"></script>
        <!--[if lt IE 10]>
                <script src="https://carrillosteam.com/public/js/jquery.placeholder.min.js"></script>
        <![endif]-->		
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="https://carrillosteam.com/public/js/sky-forms-ie8.js"></script>
        <![endif]-->        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    </body>
</html>


