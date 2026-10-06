<div id="container">
  <h1><?php echo $heading;?></h1>	
    <div class="limiter">
<?php
        echo form_open('Activite/mod/'.$emp->idSeance);
    
    echo form_label('Identité', 'nomS');                
    echo form_input('nom' ,''.$emp->nomSeance.'','required placeholder="'.$emp->nomSeance.'"');
    echo "<br>";
  
    
    echo form_label('', 'btSubmit');
    echo form_submit('btSubmit','Valider');
    echo form_close();
    echo "<br>";
    $this->load->view('end_file_content');
    ?>
</div>