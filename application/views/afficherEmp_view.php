<div id="container">
    <!DOCTYPE html>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    <h1><?php echo "Fiche de l'employé : ". $emp->nomEmploye ." ". $emp->prenomEmploye ." ayant pour ID : " . $emp->idEmploye ?></h1>
</head>
<body>
    <div class="limiter">
    
        <article>
        <?php
        echo "Nom : ".$emp->nomEmploye. "<br><br>";
        echo "Prénom : ".$emp->prenomEmploye . "<br><br>";
        echo "Adresse : ".$emp->adresseEmploye. " ". $emp->cpEmploye. " ". $emp->villeEmploye. "<br><br>";
        echo "Téléphone : ".$emp->telEmploye . "<br><br>";
        echo "E-mail : ".$emp->mailEmploye . "<br><br> ";
        ?>
        </article>
    </div>   
</body>
    
  
        
        	