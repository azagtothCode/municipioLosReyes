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
    <div id="contentSm">
      <div class="container containerSocials">
        <div class="row">
          <div id="paddingSmall" class="col-5 ">
            <span id="hashTag">
              #GobiernoYPuebloCambioVerdadero
            </span>
          </div>
          <div class="col-7 contentIconsTop">
            <a href="https://www.facebook.com/GMLosReyesLapaz/" target="_blank">
              <i id="iconsSocials" class="fa fa-facebook-square"></i>
            </a>
            <a href="https://twitter.com/GMLosReyesLaPaz" target="_blank">
              <i id="iconsSocials"  class="fa fa-twitter-square" ></i>
            </a>
            <a href="mailto:presidencia@losreyeslapaz.gob.mx" target="_blank">
              <i id="iconsSocials"  class="fa fa-youtube-square" ></i>
            </a>
            <a href="mailto:presidencia@losreyeslapaz.gob.mx" target="_blank">
              <i id="iconsSocials"  class="fa fa-camera-retro" ></i>
            </a>
            <a href="mailto:presidencia@losreyeslapaz.gob.mx">
              <i id="iconsSocials"  class="fa fa-envelope-square" ></i>
            </a>
          </div>
        </div>
      </div>
      <div id="navPrincipal" class="container topnav">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
            <nav class="navbar navbar-expand-lg navbar-light " style="padding:0px" >
              <a class="navbar-brand" href="#" >
                  <img src="../imgs/menu.png" alt="..." style="width:65%;">
              </a>
              <button style="background: #F8F9FA;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul id="listNav" class="navbar-nav mr-auto" >
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#WhoIs" id="linkInicio" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Municipio<span class="sr-only">(current)</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="whoPages/whoIs.html" target="_blank">Historia</a>
                      <a class="dropdown-item" href="whoPages/palace.html" target="_blank">Identidad</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a id="linkInicio" class="nav-link" href="" data-toggle="modal" data-target=".bd-example-modal-lg" >Atención Ciudadana</a>
                  </li>
                  <li class="nav-item">
                    <a id="linkInicio" class="nav-link" href="#">Noticias</a>
                  </li>
                  <li id="liHidden" class="nav-item">
                    <a href="../index.html" target="_blank">
                      <img id="logoReyes" src="../imgs/menu.png" alt="Logo La Paz">
                    </a>
                  </li>
                  <li class="nav-item">
                    <a id="linkInicio" class="nav-link" href="whoPages/organigrama.html" target="_blank">Cabildo</a>
                  </li>
                  <li class="nav-item">
                    <a id="linkInicio" class="nav-link" data-toggle="modal" href="" data-target="#linkModalT">Transparencia</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#WhoIs" id="linkInicio" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Mejora Regulatoria
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="" target="_blank">Catalogo Municipal de Regulaciones</a>
                          <a class="dropdown-item" href="" target="_blank">Registro Municipal de Tramites y Servicios</a>
                          <a class="dropdown-item" href="" target="_blank">Protesta Ciudadana</a>
                          <a class="dropdown-item" href="" target="_blank">Consulta Pública</a>
                        </div>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Content Notice -->
    <div ng-controller="noticesCtrl">
      <div class="container" style="margin-top:15px;">
      <div class="card-deck" >
        <div class="row">
          <div class="col-12" ng-repeat="a in noticesI | limitTo : 6 | orderBy : '-fechaNoticia'">
            <div class="card"  style="margin-bottom:10px; ">
              <img src="../imgs/{{a.imgNoticia }}" class="card-img-top" alt="...">
              <div class="card-body">
                <!-- <h5 class="card-title">BOLETIN DE PRENSA</h5> -->
                <p class="card-text">{{ a.tituloNoticia }}</p>
              </div>
              <div class="card-footer">
                <a  class="card-link">{{ a.fechaNoticia }}</a>
                <a href="noticia.php?notice={{ a.idNoticia }}" target="_blank" class="card-link">Ver más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!--  -->
    <!-- Footer content -->
    <div class="container-fluid" style="background: #610010; color:#FFF; font-size: 15px; padding-top: 35px;">
      <div class="container">
        <div id="rowFooter" class="row">
          <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7 col-12">
              <p style="font-weight: bold;">ATENCIÓN CIUDADANA</br></br>
                <a id="linksFooter" href="" >Centro de mando municipal: 58564285</a></br>
                <a id="linksFooter" href="" >Bomberos: 58570990</a> </br>
                <a id="linksFooter" href="" >Protección civil: 58572028</a> </br>
              </p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-12">
            <p style="font-weight: bold;">ENLACES EXTERNOS</br></br>
              <a id="linksFooter" href="https://www.gob.mx/presidencia" target="_blank">Presidencia de la República</a></br>
              <a id="linksFooter" href="http://edomex.gob.mx/" target="_blank">Gobierno del Estado de Mexico</a> </br>
              <a id="linksFooter" href="https://www.ine.mx/" target="_blank">Instituto Nacional Electoral</a> </br>
            </p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-3 col-sm-7 col-12">
            <p style="font-weight: bold;">TRANSPARENCIA</br></br>
              <a id="linksFooter" href="https://www.plataformadetransparencia.org.mx/web/guest/inicio" target="_blank">Plataforma Nacional de Transparencia</a></br>
              <a id="linksFooter" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page" target="_blank">SARCOEM</a></br>
              <a id="linksFooter" href="hhttps://www.saimex.org.mx/saimex/ciudadano/login.page" target="_blank">SAIMEX</a></br>
              <a id="linksFooter" href="https://www.ipomex.org.mx/ipo/lgt/indice/lapaz.web" target="_blank">IPOMEX</a></br>
              <a id="linksFooter" href="" >CONAC</a></br>
              <a id="linksFooter" href="" >TITULO IV</a></br>
              <a id="linksFooter" href="" >TITULO V</a></br>
              <a id="linksFooter" href="http://www.lapazopdapas.gob.mx">OPDAPAS La Paz</a></br>
              <a id="linksFooter" href="http://www.diflapaz.gob.mx/">DIF Municipal La Paz</a></br>
              <a id="linksFooter" href="http://www.imcufidelapaz.gob.mx/">IMCUFIDE La Paz</a></br>
            </p>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-12" >
                  <p style="font-weight: bold;">SIGUENOS EN</p>
                  <a href="https://www.facebook.com/GMLosReyesLapaz/" target="_blank" title="Facebook"><i id="iconsSocialsFooter"  class="fa fa-facebook-square" ></i></a>
                  <a href="https://twitter.com/GMLosReyesLaPaz?ref_src=twsrc%5Etfw" target="_blank" title="Twiiter"><i id="iconsSocialsFooter"  class="fa fa-twitter-square" ></i></a>
                  <a href="" target="_blank" title="youtube"><i id="iconsSocialsFooter"  class="fa fa-youtube-square" ></i></a>
                  <a href="" target="_blank" title="Instagram"><i id="iconsSocialsFooter"  class="fa fa-envelope-square" ></i></a>
                  <a href="" target="_blank" title="Instagram"><i id="iconsSocialsFooter"  class="fa fa-camera-retro" ></i></a><br><br>
                  PRESIDENCIA MUNICIPAL<br>
                  PLAZA GENERAL LUIS CERON S/N,<br>
                  CENTRO, LA PAZ, MEX. CP. 56400 <br><br>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12" >
              <a id="linksFooter" href="" target="_blank" title="Facebook">
                <i id="iconsSocialsFooter"  class="fa fa-institution" ></i>
                ¿Como llegar?
              </a>
                <br><br>
              <a id="linksFooter" href="" target="_blank" title="youtube">
                  <i id="iconsSocialsFooter"  class="fa fa-file" ></i>
                Aviso de Privacidad
              </a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" >
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3" style="text-align:center;">
              <img style="width: 100%; margin-top: 40px;" src="../imgs/glifo1.png">
          </div>
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9 col-9">
            <div class="row">
              <div >
                <p id="linksFooter"><br>
                Hecho en México, Los Reyes La Paz Edo. de Mex., todos los derechos reservados 2019.
                Esta página y sus contenidos pueden ser reproducidos con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica.
                De otra forma, requiere permiso previo por escrito del Palacio Municipal.
                <br><br>
                Sitio web administrado por el Gobierno Municipal.
                Cualquier asunto relacionado con este portal favor de dirigirse a:
                <br><br>
                Última actualización: 19/06/2019
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- Optional JavaScript -->
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
          // Obtenemos la posicion del scroll en pantall
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
    app.controller('noticesCtrl', function($scope, $http) {
        $http.get("../connections/noticesIndex.php")
        .then(function (response) {$scope.noticesI = response.data.records;
            console.log($scope.noticesI)}
        );
    });
    
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="../js/servicesCtrl.js"></script> -->

  </body>
</html>