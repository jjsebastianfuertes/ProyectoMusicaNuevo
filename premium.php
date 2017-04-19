<html lang="es">

<head>
<meta charset="utf-8" />
<title>Artistas</title>
<link rel="stylesheet" href="masterEstilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
            function desplegar(){
                document.getElementById("InicioSesion").style.display="block";
            }

            function cerrar(){
                document.getElementById("InicioSesion").style.display="none";
            }

            function desplegarRegistro(){
                document.getElementById("registro").style.display="block";
            }

            function cerrarRegistro(){
                document.getElementById("registro").style.display="none";
            }


            $(document).ready(function(){
      $("#flip-Genero").click(function(){
          $("#panel-Genero").slideToggle("slow");
      });
  });

  $(document).ready(function(){
$("#flip-Instrumentos").click(function(){
$("#panel-Instrumentos").slideToggle("slow");
});
});


  </script>

</head>
<body>


    <div class="bgVentana" id="InicioSesion">
        <div class="ventana">
            <form>
                <a href="javascript:cerrar();">x</a>
                <p>Usuario:</p><input type="text" class="Search" name="usuario" placeholder="Usuario" style="width:60%; height: 40px;">
                <p>Contraseña:</p><input type="password" class="Search" name="contraseña" placeholder="Contraseña"
                                         style="width:60%; height: 40px; border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;"><br>
                <button type="submit" class="Submit" name="Iniciar sesión" value="Iniciar Sesión" style="margin-top: 15px; width: auto; margin-bottom: 5px;">Iniciar sesión</button>
            </form>
        </div>
    </div>

    <div class="bgVentana" id="registro">
        <div class="ventana">
               <form>
                  <a href="javascript:cerrarRegistro();">x</a>
                  <p>Usuario:</p><input type="text" class="Search" name="usuario" placeholder="Usuario" style="width:60%; margin-top:0px;height: 40px;">
                  <p>Correo electrónico</p><input type="email" class="Search" name="correo" placeholder="Correo Electrónico" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;">
                  <p>Contraseña:</p><input type="password" class="Search" name="contraseña" placeholder="Contraseña" style="width:60%;height: 40px;border: 1px solid #ccc; border-radius: 2px; padding-left: 8%;"><br>
                  <button type="submit" class="Submit" name="Registrarse" value="Registrarse" style="margin-top: 15px; width: auto; margin-bottom: 10px;">Registrarse</button>
               </form>
        </div>
    </div>



<header>

  <div class="buscador">
    <form>
    <input type="text" name="search" >
    </form>
  </div>

  <div  class="idioma">
    <a  href="#">ES</a>
    <a  href="#">EN</a>
  </div>

  <div class="logo">
    <a  href="index.php">Tu Banda</a>
  </div>

</header>



<nav>
  <div class="menu" id="BarraResponsive">
  <a href="javascript:desplegarRegistro();">Registrarse</a>
  <a href="javascript:desplegar();">Iniciar Sesion</a>
  <a href="#">Premium</a>
  <a href="bandas.php">Bandas</a>
  <a href="artistas.php">Musicos</a>
  <a href="javascript:void(0);" class="icon" onclick="MenuResponsive()">&#9776;</a>
  </div>

</nav>

<section>




</section>



<footer>
<div class="container-redes">
    <p style="padding: 0px;">
      <a href="#"><img class="redes" src="redesSociales/FBv.svg" alt="Facebook LOGO"></a>
      <a href="#"><img class="redes" src="redesSociales/instagram.svg" alt="instagram LOGO"></a>
      <a href="#"><img class="redes" src="redesSociales/twitter.svg" alt="twitter LOGO"></a>
      <a href="#"><img class="redes" src="redesSociales/soundcloud.svg" alt="soundcloud LOGO"></a>
    </p>
</div>


      <div class="container-TuBanda">

          <div class="logo" style="margin-left: 100px;">Tu Banda</div>
          <br>

          <p style="color:#d8e2dc; font-size: 14px; margin-left: 28%;">
            Todos los derechos y Copyright reservados <br/>
          <br>
            TuBanda 2017
          </p>
      </div>

    <div class="container-contactanos">
      <p style="color:#d8e2dc; font-size: 15px;">
          Contactanos <br/><br>
        0972876564 | 0978765735 <br/>
        consultas@tubanda.com.ec <br/>
        servicioalcliente@tubanda.com.ec
      </p>
    </div>
</footer>

</body>
<script>
function MenuResponsive()
{
  var x = document.getElementById("BarraResponsive");
   if (x.className === "menu") {
       x.className += " responsive";
   } else {
       x.className = "menu";
   }
 }
</script>
