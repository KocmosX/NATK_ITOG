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
    
<main>
   <div class="personality_send">
     <div class="container">
        <form action="personality_send.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="person-name" id="person-name" value="name">
            <input type="text" name="person-surname" id="person-surname" value="surname">
            <input type="text" name="person-description" id="person-description">
            <input type="file" name="personality-file" id="person-photo">
            <input type="submit" value="отправить ">
        </form>
     </div>
   </div>
        

  
</main>




</body>
</html>
