<?php
include __DIR__.'/db.php'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    
    <title>natk-museum</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/stylesheet.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    
   
    
 
</head>
<body>
 
  <header>
  
   <nav>
     <div class="container">

     <div class="logo"><a href="index.html"><img src="img/home.png" alt=""> <span>НАТК-МУЗЕЙ</span></a></div>
     <div class="feedback"><a href="">333455.geee@gamil.com</a></div>
     
  <!--<div class="more_inf">
    доп информация 
  </div>-->
      


  </div>

  </nav>
  
<!--<div class="main-photo">
    <div class="opacity-photo">
      <img src="img/main .jpg" alt="">
  </div>
<div class="main-text">Музей Новосибиского авиационного технического колледжа имени Б.С.Галущака</div>
  </div>-->
</header>

<main class="page-personalities-main">
  <div class="container-fluid">
  <div class="personalites_gallery">
    <h2></h2>
    <p></p>
    
 
<div class="demh">
        <div class="grid">
          <?php foreach($result as $photo){
           echo '<picture class="wrapper">
               
                
          <a href="personality_page.php"><img  class="img" src="tmp/'.$photo[1] .'"></a>  
            </picture>';
          }
          
          ?>
          </div>
     </div>
    </div>
  </div>  
  
</main>




</body>
</html>
