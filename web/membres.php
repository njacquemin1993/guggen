<?php include("header.php"); ?>
  <img src="images/band_membres.jpg"/>
  <div class="content">

    <table class="selector"><tr><td>Les Membres</td><td><a href="commissions.php">Comité et commissions</a></td></tr></table>

    <table class="members" border="3" cellpadding="1" cellspacing="1"><tbody>
    <?php
      $array = array(
        "direction" => array(
          array("Terry", "Roduit", "membre depuis 2010<br/>au comité, membre<br/>commission musicale"),
        ),
        "sousdirection" => array(
          array("Jeremy", "Guex", "membre depuis 2013<br>commission musicale"),
        ),
        "batteries" => array(
          array("Fred", "Bellani", "<b>membre fondateur</b><br/>chef percussions"),
          array("Jérôme", "Chappot", "membre depuis 2007<br>président de 2012 à 2016<br>au comité, membre<br>commission musicale<br>"),
          array("Fabien", "Claret", "membre depuis 2018<br>comission costume et maquillage"),
          array("Nicolas", "Jacquemin", "membre depuis 2009"),
          array("Anthony", "Pradegan", "membre depuis 2014<br>commission costume et maquillage<br>au COSA, food & beverage"),
        ),
        "cymbale" => array(
          array("Laurène", "Abbet", "membre depuis 1998<br>archiviste"),
          array("Fred", "Délez", "<b>membre fondateur</b><br>président de 2000 à 2012"),
          array("Fernando", "Fanelli", "membre depuis 1998<br>doyen de la guggen"),
        ),
        "grossec" => array(
          array("Marc", "Biselx", "membre depuis 2013"),
          array("Alexandre", "Pfister", "membre depuis 2017"),
        ),
        "woodblock" => array(
          array("Michaël", "Fumeaux", "membre depuis 2013<br>au comité, responsable des sorties"),
          array("Elodie", "Monnet", "membre depuis 2010"),
          array("Sarah", "Pellisier", "membre depuis 2017"),
        ),
        "sousa" => array(
          array("Christian", "Baudoin", "<b>membre fondateur</b><br>président de 1997 à 2000<br>président d'honneur"),
          array("Patrick", "Viglino", "membre depuis 1998"),
        ),
        "trombones" => array(
          array("Fabien", "Gay", "membre depuis 1999<br>commission musicale"),
          array("Sophie", "Giroud", "membre depuis 2013<br>comission costumes et maquillages, responsable"),
          array("Anna", "Guérin", "membre depuis 2015"),
          array("Jeremy", "Guex", "membre depuis 2013<br>sous directeur<br>commission musicale"),
          array("Benoît", "Jonneret", "<b>membre fondateur</b><br>directeur à 3 reprises entre 1997 et 2012<br>au comité, président<br>chef de la commission musicale<br>arrangeur des morceaux"),
          array("Céline", "Michellod", "membre depuis 2017"),
          array("Charlène", "Morend", "membre depuis 2017"),
          array("Amandine", "Müller", "membre depuis 2014"),
        ),
        "trompettes" => array(
          array("Mélody", "Arlettaz", "membre depuis 2013"),
          array("Rosy", "Cotter", "membre depuis 2002"),
          array("Mélanie", "Delaloye", "membre depuis 2009<br>au comité, membre"),
          array("Anthony", "Duvoisin", "membre depuis 2015<br>comission costumes et maquillages"),
          array("Michaël", "Fanelli", "membre depuis 2010"),
          array("Sabrina", "Guex", "membre depuis 2015 (En congé)"),
          array("Michel", "Jacquemin", "membre depuis 1999<br>au comité, caissier<br>au COSA, caissier"),
          array("Aurélie", "Lugon", "membre depuis 2014<br>au comité, secrétaire et vice-présidente"),
          array("Laetitia", "Pfister", "membre depuis 2017"),
          array("Aline", "Rosset", "membre depuis 2001"),
          array("Emilie", "Solliard", "membre depuis 2018<br>au COSA, bénévoles"),
          array("Alain", "Viglino", "membre depuis 1999<br>comission musicale"),
        ),
        "photographe" => array(
        ),
        "drapeau" => array(
        ),
        "mokshunets" => array(
          array("Jessica", "Biselx", "membre depuis 2014<br>ancienne trompette<br>trombone en formation"),
          array("Michaël", "Hariau", "grosse-caisse en formation"),
          array("Corentin", "Petoud", "membre depuis 2013<br>au COSA, chef constructions<br>ancien trombone<br>grosse caisse en formation"),
          array("Thomas", "Petoud", "trombone en formation"),
        ),
      );
      $unwanted_array = array('à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                              'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i',
                              'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o',
                              'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y');
      foreach($array as $section => $list){
        echo '<tr><td colspan=6 style="vertical-align: top; background-color: white;"><img src="images/band_' . htmlspecialchars($section) . '.jpg" class="members_banners"/></td></tr>';
        if (!$list) {
          echo '<td style="text-align: center" colspan=6> La place est libre, <a href="join.php"> rejoins nous</a></td>';
        } else {
          foreach($list as $element){
            $src = 'imgmembres/minmembres/' . htmlspecialchars(strtolower(strtr($element[0], $unwanted_array))) . '-' . htmlspecialchars(strtolower(strtr($element[1], $unwanted_array))) . '.jpg';
            if (!file_exists($src)){
              $src = 'imgmembres/minmembres/nophoto.jpg';
            }
            echo '<tr><td><img class="members" src="' . $src . '"></td>';
            echo '<td colspan=2>' . htmlspecialchars($element[0]) . ' ' . htmlspecialchars($element[1]) . '</td>';
            echo '<td colspan=3>' . $element[2] . '</td></tr>';
          }
        }
      }
    ?>
    <tr><td style="text-align: center" colspan="6">... courage à tous nos Mokshûnets</td>
  </tbody></table>
</div>

<?php include("footer.php"); ?>
