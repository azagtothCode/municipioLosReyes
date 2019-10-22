<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../imgs/menu.png" type="image/gif" sizes="16x16">
    <title>Los Reyes la Paz</title>
  </head>
  <body id="bodyPage" ng-app="myApp">
    <!-- Bar navigation and bar socials -->
    <div class="menuContainer"></div>

    <!-- Header Section -->
    <div class="container-fluid" style="background:#60000F; min-height:200px; padding-top:50px; text-align: center;">
      <h1 id="showHistory"  style="color:#FFF; letter-spacing:2px;">Noticias</h1>
      <p style="color:#FFF;">
       En esta sección podrás encontrar las noticias más relevantes del ayuntamiento.
      </p>
    </div>
    <!-- Content Notice -->
    <div ng-controller="noticesCtrl">
      <div class="container" style="margin-top:15px;">
        <div class="card-deck" >
          <div class="row">
            <div class="col-12" ng-repeat="a in notices | orderBy : '-fechaNoticia'">
              <a href="noticia.php?notice={{ a.idNoticia }}" target="_blank" class="card-link">
                <div id="content-photo-notice-inline" class="card" style="margin-bottom:10px; ">
                  <div class="containerImg">
                    <img class="imageNotice" src="../imgs/{{a.imgNoticia }}" class="card-img-top" alt="...">
                    <div class="card-body overlay">
                      <p class="card-text">{{ a.tituloNoticia }}</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer content -->
    <div class="footerOtherSites"></div>
    <!-- Code Modals -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <p style="text-align: center; font-size: 18px; font-weight: bold" class="modal-title" id="exampleModalLabel">¿De que se trata tu petición?<br>
            </p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" id="message-text" placeholder="Presenta tu duda, opinión o comentarios, y haz valer el derecho de dirigirte respetuosamente a cualquier funcionario público."></textarea>
              </div>
            </form>
          </div>
          <span style="text-align: center; padding: 10px;"> Escribe el asunto de tu petición y da clic en Enviar para recibir una respuesta específica.</span>
          <div class="modal-footer">
            <a href="mailto:atencionciudadana@losreyeslapaz.gob.mx" class="btn btn-lg" role="button" aria-disabled="true">Enviar</a>
          </div>
        </div>
      </div>
    </div>

    <div id="linkModalT" class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" style="text-align: center;">
        <div class="modal-content">
          <div class="modal-body">
            <div class="column">
                <a href="https://www.ipomex.org.mx/ipo/lgt/indice/lapaz.web" target="_blank"><img src="../imgs/ipomex.png"></a>
            </div>
            <div class="column">
              <a href="https://www.saimex.org.mx/saimex/ciudadano/login.page" target="_blank"> <img src="../imgs/logoSaimex.png"></a>
            </div>
            <div class="column">
              <a href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page" target="_blank"><img src="../imgs/sarcomex.svg"></a>
            </div>
            <div class="column">
              <a href="https://www.plataformadetransparencia.org.mx/web/guest/inicio" target="_blank"><img src="../imgs/transparencia.png"></a>
            </div>
            <div class="column">
              <a href="" target="_blank"><img src="../imgs/conac.png"></a>
            </div>
            <div class="column">
              <a href="" target="_blank"><img src="../imgs/datos.png"></a>
            </div>
            <div class="column">
              <h1 class="titleSiteModal">Gaceta Municipal</h1>
              <div class="row" >
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <a class="btn btn-primary" href="http://www.losreyeslapaz.gob.mx/PDF/gaceta1.pdf"  target="_blank" role="button" style="width: 100%">ENERO - FEBREO 2019</a>
                </div>
                <div id="colServices" class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <a class="btn btn-primary" href="http://www.losreyeslapaz.gob.mx/PDF/gaceta2.pdf"  target="_blank" role="button"style="width: 100%" >MARZO 2019</a>
                </div>
              </div>
            </div>
            <div class="column">
              <h1 class="titleSiteModal">Publicaciones y Comunicados</h1>
                <div class="row" >
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <a class="btn btn-primary" href="http://www.losreyeslapaz.gob.mx/PDF/lineamientosprogamas.pdf"  target="_blank" role="button" style="width: 100%">Lineamientos Generales</a>
                  </div>
                  <div id="colServices" class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <a class="btn btn-primary" href="http://www.losreyeslapaz.gob.mx/PDF/PAE2019LaPaz.pdf" role="button"style="width: 100%" target="_blank" >PAE 2019 LA PAZ</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <!-- Optional JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
      
    var w = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

    var h = window.innerHeight
    || document.documentElement.clientHeight
    || document.body.clientHeight;

    var x = document.getElementById("bodyPage");

    if(w>991){
      // Detectamos cuando el usuario desplace la pantalla
      window.onscroll = function (){

        // Obtenemos la posicion del scroll en pantalla
        var scroll = document.documentElement.scrollTop || document.body.scrollTop;
        var elemento = document.getElementById("navPrincipal");

        // Realizamos alguna accion cuando el scroll este entre la posicion 300 y 400
        if(scroll > 106){
            elemento.className = "container-fluid topnavFixed";
        }else {
          elemento.className = "container topnav";
        }
      }
    }

    if(w<=991){
      var elementoContainer = document.getElementById("contentSm");
      elementoContainer.className = "container-fluid fixed-top";
    }

    var app = angular.module("myApp", []);

    app.controller('noticesCtrl', function($scope, $http, $timeout) {

        $http.get("../connections/noticesIndex.php")
        .then(function (response) {
            $scope.notices = response.data.records;
            console.log($scope.notices)

            // $scope.notices = [];
            // function showNext(array, index){
            //   $timeout(function(x){
            //     $scope.notices.push(x);
            //     if(++index < array.length)
            //       showNext(array, index);
            //   }, 900, true, array[index])
            // }
            // showNext($scope.noticesI, 0);
        
        }
      );
    });

    $(document).ready(function () {
      $('.menuContainer').load('../whoPages/menu.html');
      $('.footerOtherSites').load('../whoPages/footer.html');
    });

  </script>
</html>