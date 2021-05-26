<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!--iconos material icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <!--CHARTS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

    <title>I-Queue empresas</title>
    </head>
    <body>
       <!--contenedor-->
<div class="container" style="min-width: 261px;">
    <!--menu-->

    <nav class="nav-extended">
        <div class="nav-wrapper" style="margin-left: 8px;" >
            <a href="{{ url('/home') }}" class="brand-logo"><span class=".center-align">I-Queue</span></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="{{ url('/login') }}"><img src="./images/userlogin.png" style=" padding: 5px 0px 5px 0px; margin-top: 10px;" alt=""></a></li>
            </ul>

            <a href="{{ url('/login') }}" data-target="mobile-demo" class="sidenav-trigger"  style=" margin: 10px 0px 0px 0px; padding-left: 10px; height: 20px;" ><img src="./images/userlogin.png" alt=""></a>
          </div>
         <div class="nav-content">
          <ul class="tabs tabs-transparent">
            <li><a href="{{ url('/contactoempresas') }}">Empresas</a></li>
            <li><a href="{{ url('/sobrenosotros') }}">Sobre nosotros</a></li>
          </ul>
      </div>
     </nav>
    <!--fin menu-->
   <h2 class="center-align"><b>I-Queue Empresas</b></h2>


<div class="center-align">
    <div class="row">
        <div class="col s12"><h5><b>Ventajas</b></h5></div>

          <div class="row">
            <div class="col s12 m6 l6"><p> <h5>Para tu negocio</h5>


                    <ul class="collection" style="background-color:antiquewhite; padding-left:20px; padding-right:20px">
                        <li><p class="left-align" ><i class="material-icons" style="vertical-align: middle; padding:5px">alarm</i>Adapta y mejora el tiempo empleado en tu negocio</p></li>
                        <li><p class="left-align"><i class="material-icons" style="vertical-align: middle; padding:5px">euro_symbol</i>Reduce costes conociendo tu volumen de tu negocio</p></li>
                        <li><p class="left-align"><i class="material-icons" style="vertical-align: middle; padding:5px">supervisor_account</i>Conoce quién y cuándo precisa de tu servicio</p></li>
                        <li><p class="left-align"><i class="material-icons" style="vertical-align: middle; padding:5px">add_location</i>Destaca tu establecimiento en nuestro mapa de negocios</p></li>
                      </ul>
                </div>
            <div class="col s12 m6 l6"><p> <h5>Para tus clientes</h5>

                <ul class="collection" style="background-color:antiquewhite; padding-left:20px; padding-right:20px" >
                    <li><p class="left-align" ><i class="material-icons" style="vertical-align: middle; padding:5px">alarm</i>Evitar esperas y control de horarios actualizados</p></li>
                    <li><p class="left-align"><i class="material-icons" style="vertical-align: middle; padding:5px">euro_symbol</i>Posibilidad de obtener promociones para usuarios Iqueue</p></li>
                    <li><p class="left-align"><i class="material-icons" style="vertical-align: middle; padding:5px">supervisor_account</i>Conoce cuando te toca sin importar el orden de llegada</p></li>
                    <li><p class="left-align"><i class="material-icons" style="vertical-align: middle; padding:5px">add_location</i>Encuentra negocios y servicios a través de la app</p></li>
                  </ul>
                </div>

          </div>



 <ul class="collapsible popout" style="background-color: antiquewhite">
    <li>
      <div class="collapsible-header" style="background-color: rgb(245, 190, 119)">

          <div class="container">

           <i class="material-icons">work</i><h5><b>Solicitar unirse a IQueue Empresas</b></h5>
          </div>

        </div>
      <div class="collapsible-body"><b>Formulario de contacto</b>

        <form method="GET" action="{{ url('/contactoempresas') }}">

            <div class="input-field col s12 m6 ">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Nombre completo</label>
              </div>
              <div class="input-field col s12 m6">
                <i class="material-icons prefix">email</i>
                <input id="icon_telephone" type="tel" class="validate">
                <label for="icon_telephone">Correo electrónico</label>
              </div>

              <div class="input-field col s12 m6">
                <i class="material-icons prefix">business</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Nombre de la empresa</label>
              </div>
              <div class="input-field col s12 m6">
                <i class="material-icons prefix">phone</i>
                <input id="icon_telephone" type="tel" class="validate">
                <label for="icon_telephone">Teléfono de contacto</label>
              </div>
              <b>Explique brevemente su actividad comercial</b>
              <div class="input-field col s12 ">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="comentario" class="materialize-textarea" style="background-color: rgb(208, 240, 230); padding-left:10px"></textarea>
              </div>
            <p class="center-align">
              <button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>Enviar solicitud</button>
            </p>
         </form>

    </div>
    </li>
  </ul>
</div>

 <br>





       <!-- Footer -->
       <footer class="page-footer">
         <div class="container">
           <div class="row">
             <div class="col l6 s12">
               <h5 class="white-text">Info</h5>
               <p class="grey-text text-lighten-4"> I-Queue es la aplicación multiplataforma desarrollada por el equipo de la promoción 2020-2021 de Escuela Estech del Grado Superior en Desarrollo de Aplicaciones multiplataforma. La idea está basada en la digitalización, monitorización y adaptación de la misma para una gran cantidad de modelos de negocio de cara a la mejora e implementación de sus servicios de cara al público.</p>
             </div>
             <div class="col l4 offset-l2 s12">
               <h5 class="white-text">Descárgate la app</h5>
               <ul>
                 <li><a class="grey-text text-lighten-3" href="#!"><img src="./images/appstore.PNG" alt=""></a></li>
                 <br>
                 <li><a class="grey-text text-lighten-3" href="#!"><img src="./images/androidstore.PNG" alt=""></a></li>
                 <li><h5>Redes sociales</h5>
                   <a class="grey-text text-lighten-3" href="#!"><img src="./images/facebook.png" alt=""></a>
                   <a class="grey-text text-lighten-3" href="#!"><img src="./images/correoelectronico.png" alt=""></a>
                   <a class="grey-text text-lighten-3" href="#!"><img src="./images/gorjeo.png" alt=""></a>
                   <a class="grey-text text-lighten-3" href="#!"><img src="./images/instagram.png" alt=""></a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
         <div class="footer-copyright">
           <div class="container">
         <p class="center-align">© 2021 Copyright  I-Queue team</p>
           </div>
         </div>
       </footer>
     <!--fin footer-->


</div>
<!--fin contenedor-->
</body>


<script>
    //formulario empresas init
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);
      });
    </script>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    </body>
</html>
