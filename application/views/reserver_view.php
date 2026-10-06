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
    <h1><?php echo "Fiche de l'activité : ". $act->nomSeance ." ayant pour ID : " . $act->idSeance ?></h1>
</head>
<body>
    <div class="limiter">
    
        <article>
        <?php
        echo form_open('Activite/res/'.$act->idSeance);
        
        echo "Nom de l'activité : ".$act->nomSeance."<br><br>";
        echo "Date de l'activité : ".$act->dateSeance . "<br><br>";
        echo "La séance durera : ".$act->dureeSeance. "<br><br>";
        
        
        echo form_label('Nombre de réservation', 'res');                
        echo form_input('res') ." /".$act->nbrPlaces ;
        echo '<br>';   
        echo "<br>";
        
        
        echo form_label('', 'btSubmit');
        echo form_submit('btSubmit','Réserver');
        echo form_close();
         echo "<br>";
            $this->load->view('end_file_content');
        ?>
        </article>
    </div>   
</body>
    
  
        
        	