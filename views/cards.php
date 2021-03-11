<?php
include("../app/helpers/header_templates.php")
?>
    <main>
        <div class="container">
            <div class="row">
                <!--s12 y m7 son clases responsivas con materialize,col significa que se va a trabjar con el sistema de 
            columnas,las clases responsivas deben estar dentro de una etiqueta con la clase row para que funcione-->
                <!--s12: tarjeta ocupara todo el ancho de pantalla cuando sea pequeña-->
                <!--m7:tarjeta ocupara el medio de la pantalla-->
                <div class="col s12 m6 l4 ">
                    <div class="card">
                        <div class="card-image">
                            <img src="../resources/img/cards/image01.jpg">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 ">
                    <div class="card">
                        <div class="card-image">
                            <img src="../resources/img/cards/image03.jpg">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 ">
                    <div class="card">
                        <div class="card-image">
                            <img src="../resources/img/cards/image02.jpg">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php
include("../app/helpers/footer_templates.php");
?>