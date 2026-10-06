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
                <th class="column6">Nombres places</th>
                <th class="column7">Action</th>
                
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
                echo '<td class="column6">'.$act->nbrPlaces.' / '. $act->nbrPlace.'</td>';
                echo '<td class="column7">'.anchor('Login/','Se connecter pour réserver').'</td>';
            }
            ?>
          </tbody>
        </table>
    </div>
</div>