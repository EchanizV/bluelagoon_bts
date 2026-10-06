<div id="container">
  <h1><?php echo $heading;?></h1>	
    <div class="limiter">
        
        <?php
            echo form_open('Login/check_Form');

            echo form_label('Adresse e-mail', 'login');                
            echo form_input('login' ,'','required placeholder="bluelagoon@bluelagoon.com"');
            echo "<br>";
            echo form_label('Password', 'pwd');                
            echo form_password('pwd' ,'','required  placeholder="Password"');
            echo "<br><br>";
            echo form_label('', 'btSubmit');
            echo form_submit('btSubmit','Valider');
            echo form_close();
            ?>
    </div>