<?php include("header.php"); ?>
<img src="images/band_liens.jpg"/>

<div class="content">
  <table class="selector"><tr>
    <td><a href="liens.php">Les Guggens</a></td>
    <td>Les Fêtes</td>
    <td><a href="liensdivers.php">Divers</a></td>
  </tr></table>

  <table><tbody>

  <?php
    $array = array(
      "suisse" => array(
        array("Brandons de Payerne", "http://www.brandonspayerne.ch", "www.brandonspayerne.ch"),
        array("Brandons de Bovernier", "http://www.brandons.populus.ch", "www.brandons.populus.ch"),
        array("Brandons de Moudon", "http://www.brandons.ch", "www.brandons.ch"),
        array("Carnaval de Fully", "http://www.carnafully.ch", "www.carnafully.ch"),
        array("Carnaval de Martigny-Bourg", "https://www.facebook.com/carnaval.dubourg/", "sur Facebook"),
        array("Carnaval de Sion", "http://www.carnaval-sion.ch", "www.carnaval-sion.ch"),
        array("Carnaval de Bussigny", "http://www.carnavaldebussigny.ch", "www.carnavaldebussigny.ch"),
        array("Amicale des Guggen Valaisannes GAVsRO", "http://www.gavro.ch", "www.gavro.ch"),
        array("Fédération carnavalesque Suisse HEFARI", "http://www.hefari.ch", "www.hefari.ch"),
        array("Fête des vendanges de Neuchâtel", "http://www.fete-des-vendanges.ch", "www.fete-des-vendanges.ch"),
      ),
      "france" => array(
        array("Comité des Fêtes du Grand Sud", "http://www.comitedesfetes.org", "www.comitedesfetes.org"),
        array("Dax et sa Feria", "http://www.dax.fr", "www.dax.fr"),
      ),
      "belge" => array(
         array("Carnaval de Florenville", "http://www.carnaval-florenville.be", "www.carnaval-florenville.be"),
      )
    );
    foreach($array as $place => $list){
      echo '<tr><td colspan=3><img src="images/band_' . htmlspecialchars($place) . '.jpg" align="middle" border="0" width="100%" /></td></tr>';
      foreach($list as $element){
        echo '<tr><td width=5%></td><td>' . htmlspecialchars($element[0]) . '</td>';
        echo '<td><a style="color: blue;" target="_blank" href="' . htmlspecialchars($element[1]) . '">' . htmlspecialchars($element[2]) . '</a></td></tr>';
      }
    }
  ?>
  </tbody></table>
  <p align=center><a href="mailto:infos@mlions.ch">Proposez un site</a></p>
</div>

<?php include("footer.php"); ?>
