<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MapeaLA - Tu app inmobiliaria</title>
    <link rel="stylesheet" href="estilos.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- SUBIDO POR SANTI PARA PROBAR LOS MERGE
        REQUISITO TRABAJO PIN DE TEXTO CENTRADO-->

    <div class="centeredText">
        <h1>MapeaLA</h1>
        <h2>La aplicación inmobiliario de América Latina</h2>
    </div>

    <div class="container">
        <div class="container--searchbox">
            <form action="../../form-result.php" method="post" target="_blank">

                <p>

                    Búsqueda de propiedades: <input type="search" name="busquedainmueble" placeholder="Localidad, Provincia, etc">

                    <input type="submit" value="Buscar">

                </p>

            </form>
        </div>
        <!-- 
        Comentario de prueba tercer commit -->
        <div class="container--map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d510694.0567447779!2d-78.71075044877844!3d-0.18590533014281463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1639094394697!5m2!1ses-419!2sar" width="100%" height="600"
                style="border:0; " allowfullscreen=" " loading="lazy "></iframe>
        </div>
    </div>
</body>

</html>