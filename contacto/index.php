<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Contacto | Esculturas en hierro</title>
    <meta name="description" content="Esculturas fabricadas completamente a mano y con materiales reciclados" />
    <meta name="keywords" content="esculturas, pintura, arte, hecho a mano, hierro forjado, esculturas en hierro forjado, esculturas en hierro, animales en forja, bichos en hierro, encargos de esculturas, esculturas a medida, escultura, forma de arte visual, arte visual, pintura, forma de arte visual, trabajo artesano" />
    <link rel="icon" href="images/Logo.png" type="image/png">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="../js/main.js" type="text/javascript"></script>
    <script src="../js/enviar.js" type="text/javascript"></script>
    <link href="../css/contacto.css" type="text/css" rel="stylesheet" />
    <link href="../css/reset.css" type="text/css" rel="stylesheet" />
    <link href="../css/fonts.css" type="text/css" rel="stylesheet" />
    <link href="../css/icons.css" type="text/css" rel="stylesheet" />
    <link href="../css/generales.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1>Esculturas en Hierro</h1>
        <ul class="menu">
            <li><a href="../">INICIO</a></li>
            <li><a href="../obras/">OBRAS</a></li>
            <li class="logo">
                <a href="../"><img src="../images/Logo.svg"></a>
            </li>
            <li><a href="../carlos/">CARLO5</a></li>
            <li class="actual"><a href="../contacto/">CONTACTO</a></li>
        </ul>
        <div class="menu-responsive">
            <a href="../" class="logo-responsive"><img src="../images/Logo.svg"></a>
            <a href="#" class="boton-responsive"><img src="../images/menu.svg"></a>
            <ul class="submenu-responsive">
                <li><a href="../obras/">OBRAS</a></li>
                <li><a href="../carlos/">CARLO5</a></li>
                <li><a href="../contacto/">CONTACTO</a></li>
            </ul>
        </div>
    </header>
    <section>
        <form class="formulario" method="post">
            <input type="text" placeholder="* Nombre" name="nombre" id="nombre">
            <span class="error" id="errorNombre"></span>
            <input type="email" placeholder="* E-mail" name="email" id="email">
            <span class="error" id="errorEmail"></span>
            <textarea cols="40" rows="10" placeholder="* Mensaje" name="mensaje" id="mensaje"></textarea>
            <span class="error" id="errorMensaje"></span>
            <div class="enviar">
                <input type="submit" value="Enviar">
                <img class="loading" src="../images/loading.gif" alt="">
            </div>
            <span class="respuesta"></span>
        </form>
    </section>
    <div class="subir">
        <img src="../images/subir.svg" alt="">
    </div>
    <footer>
        <div>
            <span>Teléfono</span>
            <span>619-854-809</span>
        </div>
        <div>
            <span>E-mail</span>
            <span>dominguezgomezjc@gmail.com</span>
        </div>
        <div>
            <a href="https://www.facebook.com/DominguezGomezJuanCarlos" target="_blank"><i class="icon-facebook"></i></a>
        </div>
    </footer>
</body>

</html>
