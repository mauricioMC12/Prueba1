<!DOCTYPE html>
<html>

<head>
    <!--Se establece la codificacion de caracteres para el documento -->
     <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../resources/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../resources/css/styles.css" media="screen,projection" />
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Materialize</title>
</head>

<body>
    <!--El video se quedo en 1:16:23 -->
    <header>
        <!--Menu principal del sitio web-->
        <nav class="teal darken-3">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">logo</a>
                <!--Al ser el tamaño pequeño se activa esta opcion y las opciones dentro de el <ul> dentro de <nav>
                 se ocultan para mostrar el nuevo menu plegable del <ul> debajo del <nav> -->
                <!-- data-target llama por medio del id el <ul id="mobile-demo">-->
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="cards.php">cards</a></li>
                    <li><a href="contact.php">contacts</a></li>
                    <li><a href="collapsible.html">Javascript</a></li>
                    <li><a href="mobile.html">Mobile</a></li>
                </ul>
            </div>
        </nav>
        <!--Menu responsive para pantallas pequeñas y medianas, es inicializado por medio de class="sidenav"que esta invocado dentro de 
         initialization.js en controllers-->
        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </header>