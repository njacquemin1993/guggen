<?php include("header.php"); ?>

<img src="images/band_cd.jpg" />
<div class="content">
  <p align=center>Huit années après notre 1er CD, nous sommes fiers de vous présenter notre nouveau bébé.</p>
  <p align=center>Enregistré au Studio Fab avec Jean-Michel Hugon, le son est excellent, ça déchire !</p>
  <p align=center>À commander pour Fr. 20.- sur <a href="mailto:info@mlions.ch?subject=Commande%20du%20CD%20des%20Mokshu">info@mlions.ch</a></p>
  <img style="border: 1px solid; width: 100%; max-width: 400px;" alt="CD" src="images/Pochette-page1S.jpg" />
  <img style="border: 1px solid ; width: 100%; max-width: 400px;" alt="Pochette dernière page" src="images/Pochette-page8S.jpg" />

  <div align=center>
    <p>Écouter des extraits :</p>
    <audio tabindex="0" id="player" controls="controls"></audio>
    <ul id="playlist">
      <?php
      $morceaux = array(
        "Shakira",
        "Lady Gaga",
        "Scotty",
        "Guetta",
        "The Pogues",
        "Percu",
        "Maldon",
        "Telephone",
        "Rasputine",
        "La Parade",
        "Renaud",
        "Dany",
        "Finale Bonus",
      );

      foreach ($morceaux as $title){
        $file = strtolower(str_replace(' ', '', $title));
        echo '<li><a href="cd/' . htmlspecialchars($file) . '30s.mp3" onclick="loadSong()">' . htmlspecialchars($title) . '</a></li>';
      }
      ?>
    </ul>
  </div>

  <a href="galerie/thumbnails.php?album=109"><img alt="enregistrement studio" src="images/cd-studio.jpg" /></a>
  <p align="center">Cliquez sur l'image pour voir toutes les photos de l'enregistrement du CD au Studio Fab</p>
</div>

<?php include("footer.php"); ?>
