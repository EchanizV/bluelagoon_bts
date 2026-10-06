<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="container">
    <h1>Bienvenue sur le système d'administration de <i>Blue Lagoon</i></h1>

    <div id="body">
        <h2>Menu principal</h2>

        <p>Gérer les employés</p>
        <code>
            <?php echo anchor('Employe/', 'Accéder aux panels des employés'); ?><br>
            <?php echo anchor('Employe/addemploye', 'Ajouter un employé'); ?>
        </code>

        <p>Gérer les activités</p>
        <code>
            <?php echo anchor('Activite/', 'Accéder aux panels des activités'); ?><br>
            <?php echo anchor('Activite/modifAct', 'Modifier une/des activité(s)'); ?><br>
        </code>
    </div>
</div>