<?php include("header.php"); ?>
<img src="images/band_liens.jpg" />
<div class="content">

  <table class="selector"><tr>
    <td><a href="liens.php">Les Guggens</a></td>
    <td><a href="liensfetes.php">Les Fêtes</a></td>
    <td>Divers</td>
  </tr></table>

  <table><tbody>
  <?php
    $array = array(
      "suisse" => array(
        array("Guggemusig.ch / Gugge & Fasnacht", "http://www.guggemusig.ch", "www.guggemusig.ch"),
    	  array("Sonoval / Notre light-show", "http://www.sonoval.ch", "www.sonoval.ch"),
      ),
      "france" => array(
        array("Baryl Band / La Martinique", "https://www.facebook.com/pages/Baryl-band/318543782419", "sur Facebook"),
    	  array("Notre agent Alain Blanchard", "http://eurofanfare.free.fr/", "http://eurofanfare.free.fr/"),
      ),
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
