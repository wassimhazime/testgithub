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
    </head>
    <body>
        <?php
echo 'wassim hazime';
if(isset($_POST)){
    var_dump($_POST);
}

        ?>
        <form action="#">
            <input type="text" name="nom">
            <input type="password" name="password">
            <input type="submit" value="ok" name="ok">
        </form>


     
   ?>

    </body>
</html>
