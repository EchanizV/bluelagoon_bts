<div id="container">
  <h1><?php echo $heading;?></h1>	
    <div class="limiter">
<?php
        echo form_open('Employe/add');
    
    echo form_label('Identité', 'nom');                
    echo form_input('nom' ,'','required placeholder="Nom du nouvel employé"');
    echo "<br>";
    echo form_label('', 'prenom');                
    echo form_input('prenom' ,'','required placeholder="Prénom du nouvel employé"');
    echo "<br><br>";
    
    echo form_label('Adresse', 'rue');                
    echo form_input('rue' ,'','required placeholder="Rue du nouvel employé"');
    echo "<br>";
    echo form_label('', 'cp');                
    echo form_input('cp' ,'','required style="width:53px;" maxlength="5" placeholder="75000"');               
    echo form_input('ville' ,'','required style="width:194px;" placeholder="Paris"');
    echo "<br><br>";
    
    echo form_label('Coordonnées', 'tel');                
    echo form_input('tel' ,'','required placeholder="Téléphone du nouvel employé"');
    echo "<br>";
    echo form_label('', 'mail');                
    echo form_input('mail' ,'','required placeholder="E-mail du nouvel employé"');
    echo "<br><br>";
    
    echo form_label('Password', 'psw');                
    echo form_input('psw' ,'','required placeholder="Password du nouvel employé"');
    echo "<br><br>";
    
    echo form_label('', 'btSubmit');
    echo form_submit('btSubmit','Valider');
    echo form_close();
    echo "<br>";
    $this->load->view('end_file_content');
    ?>
</div>