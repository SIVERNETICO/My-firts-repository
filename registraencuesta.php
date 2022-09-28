
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title style="color:red;">Encuestas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

 <script>
    function enviar()
    {
      window.alert("Muchas gracias por participar!!!");       
    }     
  </script>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Encuenta Gaseosas Favoritas </h3><br>
  <div class ="row">
    <p class ="p">Gracias por tu seleccion</p><br>
  </div>
  <div class="row">
     
    <div class="col-sm-12">
      <?php
        $opcionseleccionada=$_GET["opcion"];
            
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="bdencuesta1";

        //crear coneccion
        $conn=new mysqli($servername,$username,$password,$dbname);

        //check coneccion

        if ($conn->connect_error)
        {
          die("Coneccion fallada".$conn->connect_error);
        }

        $sql = "UPDATE tableencuesta SET cantidad=cantidad+1 WHERE id=$opcionseleccionada";

        if ($conn->query($sql) === TRUE)
        {
           echo "Encuesta Registrada";
        }
        else
        {
          echo "Error updating record: " . $conn->error;
        }
              
        $conn->close();
      ?>     
    </div>

  </div>

  <div class="row">
         <br> <br>
         <a href="index.html"> Volver a la Encuesta</a>     
  </div>

</div>

</body>
</html>