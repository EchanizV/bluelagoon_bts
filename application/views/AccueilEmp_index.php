<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="container">
    <h1>Bienvenue sur le système de reservation d'activité de <i>Blue Lagoon : Employé</i></h1>

    <div id="body">
        <h2>Menu principal</h2>

        <p>Accéder à l'interface d'employé</p>
        <code>
            <?php echo anchor('Activite/getAct/1/', 'Accéder à mes activités'); ?><br>
            <?php echo anchor('', 'Modifier mes activités'); ?>
        </code>

        <p>Accéder à l'interface de configuration</p>
        <code>
            <?php echo anchor('Label/', 'Ajouter/Modifier/Supprimer des employés'); ?><br>
            <?php echo anchor('Equipement/', 'Accéder aux journals des incidents'); ?><br>
        </code>
    </div>
</div>