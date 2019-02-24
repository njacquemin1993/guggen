<?php include("header.php"); ?>
  <img src="images/band_membres.jpg" border="0"/>

  <table class="selector"><tr><td><a href="membres.php">Les Membres</a></td><td>Comité et commissions</td></tr></table>

  <table class="comissions" border="1" cellpadding="0" cellspacing="0"><tbody>
    <tr><td colspan="3" align="center"><h3> Le comité et les commissions - saison 2016 / 2017</h3></td></tr>
  <?php
    $array = array(
      "comite" => array(
        "Benoît Jonneret, président",
        "Aurélie Lugon, vice-présidente et secrétaire",
        "Michel Jacquemin, caissier",
        "Jérôme Chappot, membre",
        "Mélanie Delaloye, membre",
        "Michaël Fumeaux, responsable des sorties",
        "Terry Roduit, membre",
      ),
      "cosa" => array(
        "Le comité, épaulé par:",
        "Corentin Petoud, constructions",
        "Emilie Solliard, bénévoles",
        "Anthony Pradegan, food and beverages",
      ),
      "commus" => array(
        "Benoît Jonneret, responsable",
        "Terry Roduit, directeur",
        "Jeremy Guex, sous-directeur",
        "Jérôme Chappot, membre",
        "Fabien Gay, membre",
        "Alain Viglino, membre",
      ),
      "commaqu" => array(
        "Sophie Giroud, responsable",
        "Anthony Duvoisin, membre",
        "Anthony Pradegan, membre",
        "Fabien Claret, membre"
      ),
    );
    foreach($array as $comite => $list){
      echo '<tr><td colspan="3" align="center"><img src="images/band_' .  htmlspecialchars($comite) . '.jpg" /></td></tr>';
      foreach($list as $element){
        echo '<tr><td>' . $element . '</td></tr>';
      }
    }
  ?>
</tbody></table></body>

<?php include("footer.php"); ?>
