<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
echo 'wassim hazime and achraf hazime';
if(isset($_POST)&& (empty($_POST)==FALSE)){
    
    var_dump($_POST);
    
      $a=($_POST["nom"]."   ".$_POST["password"]);
      
      echo $a;
}

        ?>
        
        
        <form action="#" method="POST">
            <input type="text" name="nom">
            <input type="password" name="password">
            <input type="submit" value="ok" name="ok">
        </form>


     
   

    </body>
</html>
