<?php include("header.php"); ?>

<img src="images/band_liens.jpg"/>
<div class="content">

  <table class="selector"><tr>
    <td>Les Guggens</td>
    <td><a href="liensfetes.php">Les Fêtes</a></td>
    <td><a href="liensdivers.php">Divers</a></td>
  </tr></table>

  <table><tbody>
  <?php
    $array = array(
      "valais" => array(
        array("La GAVRO, L'amicale des Guggens du Valais Romand", "http://www.gavro.ch/", "www.gavro.ch"),
        array("Batranouilles, Massongex", "http://www.batranouilles.ch/", "www.batranouilles.ch"),
        array("Carnaband, Bramois", "http://www.carnaband.ch/", "www.carnaband.ch"),
        array("Chenegaudes, Saint-Martin", "http://www.chenegaudes.ch/", "www.chenegaudes.ch"),
        array("Chenegouga, Bagnes", "http://www.chenegouga.ch", "www.chenegouga.ch"),
        array("Chouettes, Sion", "http://www.chouettes.ch", "www.chouettes.ch"),
        array("Chtaguébaugnes, St-Maurice", "http://www.chtaguebaugnes.ch",  "www.chtaguebaugnes.ch"),
        array("Eksapette, Sion", "http://www.eksapette.ch/", "www.eksapette.ch"),
        array("Glouglouggen, Liddes", "http://www.glouglouggen.ch/", "www.glouglouggen.ch"),
        array("Gugg'Dragons, Chermignon", "http://www.guggdragons.ch/", "www.guggdragons.ch"),
        array("Kamikaze, Monthey", "http://www.kamikaze.ch", "www.kamikaze.ch"),
        array("L'Os Clodos, Vionnaz", "http://www.losclodos.ch/", "www.losclodos.ch"),
        array("Los Diablos, Chippis", "http://www.diablos.ch/", "www.diablos.ch"),
        array("Merd'en...sons, Vollèges", "http://www.merdensons.ch", "www.merdensons.ch"),
        array("Peinsâclicks, Hérémence", "http://www.peinsaclicks.ch/", "www.peinsaclicks.ch"),
        array("Piit Bulh, Monthey", "http://www.piitbulh.com", "www.piitbulh.com"),
        array("Schtrabatze, Saxon", "http://www.schtrabatze.ch/", "www.schtrabatze.ch"),
        array("Suze-Aphones, Port-Valais", "http://www.suze-aphones.com", "www.suze-aphones.com"),
        array("Zikadonf, St-Léonard", "http://www.zikadonf.ch/", "www.zikadonf.ch"),
      ),
      "neuch" => array(
        array("Les Britchons, Fleurier", "http://www.britchons.ch", "www.britchons.ch"),
      ),
      "jura" => array(
        array("Les Loitchou's Band, Saignelégier", "http://www.loitchous-band.com", "www.loitchous-band.com"),
        array("La Tripet Clique, Glovelier", "http://www.tripet-clique.ch", "www.tripet-clique.ch"),
        array("La Vicaclique, Vicques", "http://www.vicaclique.ch", "www.vicaclique.ch"),
      ),
      "frib" => array(
        array("La Crystal Guggen, Ménières", "https://www.facebook.com/crystalguggen.menieres", "sur Facebook"),
        array("La Frénégonde, Semsales", "http://www.frenegonde.com", "www.frenegonde.com"),
        array("Au Pas de la Boille, Bulle", "http://www.aupasdelaboille.ch/", "www.aupasdelaboille.ch"),
        array("La Pacotière, Broc", "http://www.lapacotiere.ch", "www.lapacotiere.ch"),
        array("La Décapsuleuse, Romont", "http://www.ladecaps.com", "www.ladecaps.com"),
        array("Les 3 Canards, Fribourg", "http://www.3canards.ch/", "www.3canards.ch"),
        array("Les Gouilles Agasses, Le Mouret", "http://www.lesgouillesagasses.com", "www.lesgouillesagasses.com"),
      ),
      "tessin" => array(
        array("Carnasc Band, Cadenazzo", "http://www.carnasc.ch/", "www.carnasc.ch"),
        array("Fracasoi Cerott Band", "https://www.facebook.com/groups/157709316367/?fref=ts", "sur Facebook"),
        array("Spacatimpan Ciass, Chiasso", "http://www.spacatimpan.com/", "www.spacatimpan.com"),
      ),
      "genf" => array(
        array("Les Dek'Onex, Onex", "http://www.dekonex.ch/", "www.dekonex.ch"),
      ),
      "vaud" => array(
        array("Les Bedzules, Lausanne ", "http://www.bedzules.ch/", " www.bedzules.ch"),
        array("Les Krepiuls, Orbe ", "http://www.leskrepiuls.ch/", " www.leskrepiuls.ch"),
        array("Les Clok's, Lausanne ", "http://www.lescloks.ch/", " www.lescloks.ch"),
        array("Les Méneguezes, Payerne ", "http://www.meneguezes.ch/index.html", " www.meneguezes.ch"),
        array("La Moudelmouzik, Moudon ", "http://www.moudelmouzik.ch/", " www.moudelmouzik.ch"),
        array("Les Pampana's, Cudrefin ", "http://www.pampanas.ch", " www.pampanas.ch"),
      ),
      "lucerne" => array(
        array("RuessSuuger, Emmen", "http://www.ruesssuuger.ch/", "www.ruesssuuger.com"),
        array("Schuegumugger, Emmen", "http://www.schuegu.ch/", "www.schuegu.ch"),
      ),
      "zoug" => array(
        array("Grütlihüüler, Allenwinden", "http://www.gruehue.ch", "www.gruehue.ch"),
      ),
      "france" => array(
        array("Les Savoises'ries, Ville le Grand ", "http://www.savoiseries.com", "www.savoiseries.com"),
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
  </table></body>
  <p align=center><a href="mailto:infos@mlions.ch">Proposez un site</a></p>
</div>

<?php include("footer.php"); ?>
