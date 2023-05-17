<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">


    <title>CV - Ing. Jeferson Fonseca Soto</title>



    <meta name="author" content="Ing. Jeferson Fonseca Soto" />
    <meta name="description" content="Ingeniero de Sistemas, especialista en aplicación de las TIC para la enseñanza
      y desarrollador Full Stack (Junior)" />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include 'includes\header.php';?>


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Inicio-tab-pane" role="tabpanel" aria-labelledby="Inicio-tab"
            tabindex="0">
            <?php include 'includes\inicio.php';?>
        </div>

        <div class="tab-pane fade" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
            <?php include 'includes\basic.php';?>
        </div>

        <div class="tab-pane fade" id="perfil-tab-pane" role="tabpanel" aria-labelledby="perfil-tab" tabindex="0">
            <?php include 'includes\perfil.php';?>
        </div>

        <div class="tab-pane fade" id="skills-tab-pane" role="tabpanel" aria-labelledby="skills-tab" tabindex="0">
            <?php include 'includes\skills.php';?>
        </div>

        <div class="tab-pane fade" id="expeciancia-tab-pane" role="tabpanel" aria-labelledby="expeciancia-tab" tabindex="0">
            <?php include 'includes\expeciancia.php';?>
        </div>

        <div class="tab-pane fade" id="portafolio-tab-pane" role="tabpanel" aria-labelledby="portafolio-tab"
            tabindex="0">
            <?php include 'includes\portafolio.php';?>
        </div>
    </div>

    <?php include 'includes\footer.php';?>

    <script>
        function activarDiv(event, div) {
            console.log(div);
            event.preventDefault(); // Prevenimos el comportamiento por defecto del enlace

            //elimina las clases show active de todos los div para ocultar el contenido del tab
            document.getElementsByClassName("tab-pane fade show active")[0].className = "tab-pane fade";

            //elimina la etiqueta active para cambiar el estadod e los tabs
            document.getElementsByClassName("nav-link active")[0].className = "nav-link";

            // Buscamos el div correspondiente
            //agrega clase show active a el div seleccionado
            switch (div) {
                case "skills":
                    console.log("class = " + div);
                    document.getElementById("skills-tab-pane").classList.add("show", "active");
                    document.getElementById("skills-tab").classList.add("active");
                    break;
                case "portafolio":
                    console.log("class = " + div);
                    document.getElementById("portafolio-tab-pane").classList.add("show", "active");
                    document.getElementById("portafolio-tab").classList.add("active");
                    break;
                case "experiencia":
                    console.log("class = " + div);
                    document.getElementById("expeciancia-tab-pane").classList.add("show", "active");
                    document.getElementById("expeciancia-tab").classList.add("active");
                    break;
                case "-":
                    console.log("class = " + div);
                    document.getElementById("contacto-tab-pane").classList.add("show", "active");
                    document.getElementById("contacto-tab").classList.add("active");
                    break;
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>