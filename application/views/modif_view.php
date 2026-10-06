<div id="container">
  <h1><?php echo $heading;?></h1>	
    <div class="limiter">
<?php
        echo form_open('Employe/modifier/'.$emp->idEmploye);
    
    echo form_label('Identité', 'nom');                
    echo form_input('nom' ,''.$emp->nomEmploye.'','required placeholder="'.$emp->nomEmploye.'"');
    echo "<br>";
    echo form_label('', 'prenom');                
    echo form_input('prenom' ,''.$emp->prenomEmploye.'','required placeholder="'.$emp->prenomEmploye.'"');
    echo "<br><br>";
    
    echo form_label('Adresse', 'rue');                
    echo form_input('rue' ,''.$emp->adresseEmploye.'','required placeholder=""');
    echo "<br>";
    echo form_label('', 'cp');                
    echo form_input('cp' ,''.$emp->cpEmploye.'','required style="width:53px;" maxlength="5" placeholder="'.$emp->adresseEmploye.'"');               
    echo form_input('ville' ,''.$emp->villeEmploye.'','required style="width:194px;" placeholder="Ville"');
    echo "<br><br>";
    
    echo form_label('Coordonnées', 'tel');                
    echo form_input('tel' ,''.$emp->telEmploye.'','required placeholder="Téléphone"');
    echo "<br>";
    echo form_label('', 'mail');                
    echo form_input('mail' ,''.$emp->mailEmploye.'','required placeholder="E-mail"');
    echo "<br><br>";
    
    echo form_label('', 'btSubmit');
    echo form_submit('btSubmit','Valider');
    echo form_close();
    echo "<br>";
    $this->load->view('end_file_content');
    ?>
</div>