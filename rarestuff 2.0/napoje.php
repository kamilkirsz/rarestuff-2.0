<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rare Stuff</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
<link rel="icon" 
      type="image/png" 
      href="img/rarestufffavicon.png" width="8%" height="10%">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <a class="navbar-brand" href="index.html"><img src="img/rarestuff.png" height="39.5px" width="92.5px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="napoje.html">Produkty</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-danger" href="hotdeals.html">HOT DEALS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kontakt.html">Kontakt</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-warning" href="nowosci.html">Nowości</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Szukaj" id="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="button">Szukaj</button>
            </form>
        </div>
    </nav>




                 <div class="container-fluid">
                       <h1 id="chuj"> </h1>
                        <div class="row">
                        <form action="napoje.php">
                            
                    
                         <?php
    $conn = mysqli_connect("localhost", "root", "", "rarestuff");
     if(!$conn){
        echo "Błąd połączenia:".mysqli_error_list($conn);
    }else{
        $sql1 = "SELECT * FROM produkty";
        $result1 = mysqli_query($conn, $sql1);        
$chuj = 
         
     }
    
        
        mysqli_close($conn);
        ?>
            </form>
         </div>
          <div class="row" id="footer">
           <div class="col">
      
            
                    <a href="#"><img src="img/rarestuff.png" height="39.5px" width="92.5px" style="margin-right:1em;"></a>
              
         
           
                    <a href="#"> <img src="img/t2.png" width="32px" height="32px;" class="sm"></a>
                    <a href="#"><img src="img/i2.png" width="32px" height="32px;" class="sm"></a>
                    <a href="#"> <img src="img/y2.png" width="32px" height="32px;" class="sm"></a>
        </div>
         
<div class="col">
                <p><a href="#">REGULAMIN</a></p>
                <p><a href="#">FAQ</a></p>
                <p><a href="#">KONTAKT</a></p>
                <p><a href="#">O NAS</a></p>
      </div>
           <div class="col">
                <p><a href="#">KONTAKT</a></p>
                <p><a href="#">+48 133 769 696</a></p>
                <p><a href="#">KONTAKT@RARESTUFF.PL</a></p>
            

           </div>
  </div>
    
         <div class="row" id="sign">
           <div class="col">
            <p>&copy;RARESTUFF 2021</p>
             <p>Jest to projekt sklepu internetowego - zdjęcia przedstawiające loga znanych firm nie należą do mnie.</p>
             </div>
              </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
