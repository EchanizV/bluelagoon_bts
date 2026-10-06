<div id="container">
  <h1><?php echo $heading;?></h1>	
    <div class="limiter">

        <table>
          <thead>
            <tr class="table100-head">
                <th class="column1">ID</th>
                <th class="column2">Nom</th>
                <th class="column3">Date Séance</th>
                <th class="column4">Durée Séance</th>
                <th class="column5">Semaine</th>
                <th class="column6">Type activité</th>
                <th class="column7">Employé</th>
                <th class="column8">Fiche Employé</th>
                
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($content as $act) {
                echo '<tr><td class="column1">'.$act->idSeance.'</td>';
                echo '<td class="column2">'.$act->nomSeance.'</td>';
                echo '<td class="column3">'.$act->dateSeance.'</td>';
                echo '<td class="column4">'.$act->dureeSeance.'</td>';
                echo '<td class="column5">'.$act->idSemaine.'</td>';
                echo '<td class="column6">'.$act->idTA.'</td>';
                echo '<td class="column7">'.$act->idEmploye.'</td>';
                echo '<td class="column8">'.anchor('Employe/afficheremp/'.$act->idEmploye.'','Afficher').'</td>';
            }
            ?>
          </tbody>
        </table>
    </div>
</div>