<div id="container">
  <h1><?php echo $heading;?></h1>	
    <div class="limiter">
        <table>
          <thead>
            <tr class="table100-head">
                <th class="column1">ID</th>
                <th class="column2">Nom</th>
                <th class="column4">Prénom</th>
                <th class="column3">Adresse</th>
                <th class="column5">Téléphone</th>
                <th class="column6">E-mail</th>
                <th class="column7">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($content as $empee) {
                echo '<tr><td class="column1">'.$empee->idEmploye.'</td>';
                echo '<td class="column2">'.$empee->nomEmploye.'</td>';
                echo '<td class="column4">'.$empee->prenomEmploye.'</td>';
                echo '<td class="column3">'.$empee->adresseEmploye.' '.$empee->cpEmploye.' '.$empee->villeEmploye.'</td>';
                echo '<td class="column5">'.$empee->telEmploye.'</td>';
                echo '<td class="column6">'.$empee->mailEmploye.'</td>';
                echo '<td class="column7">'. anchor('Employe/formmodifier/'.$empee->idEmploye,'Modifier').'</td></tr>';
            }
            ?>
          </tbody>
        </table>
        
    <?php echo anchor('AccueilAdmin/', '>> Retour à l\'accueil') ?>
    </div>
</div>