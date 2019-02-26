
<?php include("header.php"); ?>
<img src="images/band_index.jpg"/>
<div class="content">
  <img alt="Martigny-Bourg" src="images/accueil.jpg"/>
  <div class="row">
    <div class="news">
      <img src="images/band_news.jpg" />
      <h2> VOYAGE EN MARTINIQUE</h2>
      <img alt="Martinique" src="images/groupeplage.jpg" />
      <p> En ce 27 février 2019, une trentaine de membres va s'envoler pour les Antilles, destination la Martinique.</p>
      <p> Pour la 3ème fois après 2001 et <a href="martinique.php">2007</a>, les Mokshû Lion's vont fêter le carnaval au soleil avec leurs amis du Baryl Band. </p>
      <p> De nombreuses parades sont au programme. Pour ne rien louper, rendez vous sur notre <a href="https://www.facebook.com/guggenmokshulions" target="_blank">page facebook</a>.</p>
      <p> Merci au différents journaux pour les articles: </p>
      <ul>
        <li> <a href="https://www.lenouvelliste.ch/articles/valais/martigny-region/destination-martinique-pour-la-guggenmusik-mokshu-lion-s-de-martigny-822758" target="_blank">Le Nouvelliste</a></li>
        <li> <a href="https://la1ere.francetvinfo.fr/martinique/suisses-martigny-apportent-leur-sonorite-au-carnaval-martinique-685744.html" target="_blank">France Info</a></li>
      </ul>
      <p> Retrouvez nous également en live sur Rhône FM le 1er, 4 et 6 mars à 17h30: </p>
      <audio tabindex="0" id="player" controls="controls"></audio>
      <ul id="playlist">
        <?php
        $morceaux = array(
          "01.03.2019",
        );
        foreach ($morceaux as $title){
          echo '<li><a href="martinique/RhoneFM-' . htmlspecialchars($title) . '.mp3" onclick="loadSong()">' . htmlspecialchars($title) . '</a></li>';
        }
        ?>
      </ul>
      <p align="center"><div class="iframewrapper"><iframe src="https://www.youtube.com/embed/t2Xcadvntl0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></p>
    </div>
    <div class="hsep">
      <div class="vspace"></div>
      <hr/>
    </div>
    <div class="vsep">
      <img alt="cle sol" src="images/barsep-xxxl.jpg"/>
    </div>
    <div class="infos">
      <div class="vspace"></div>
      <a href="https://www.facebook.com/guggenmokshulions" target="_blank">
        <img alt="" src="images/facebook-suivez-nous.jpg" style="width: 60%;"/>
      </a>
      <div class="vspace"></div>
      <hr/>
      <div class="vspace"></div>
      <div><a href="cd-2014.php">
        <p align="center">Notre CD</p>
        <p align="center">20.- en vente ici</p>
        <img style="border:2px solid black; width:60%;" alt="CD" src="images/Pochette-page1S.jpg" />
      </a></div>
      <div class="vspace"></div>
      <hr/>
      <div class="vspace"></div>
      <div><a href="join.php">
        <p align="center">Tu aimes la guggen?</p>
        <p align="center">Alors rejoins-nous</p>
        <img style="border:2px solid; width:60%;" alt="we want you !" src="images/wewantyou2.jpg" />
        <p align="center" style="color: rgb(204, 0, 0);">On cherche :</p>
        <p align="center">trombone, </p>
        <p align="center">trompette,</p>
        <p align="center">grosse caisse...</p>
      </a> </div>
    </div>
  </div>
</div>
<div class="vspace"></div>
<h1 style="text-align: center;"> Nos sponsors 2018 - un grand merci à eux ! </h1>
<hr/>
<a href="http://www.decarte.ch/">
  <img class="sponsor" alt="" src="images/logo-decarte.jpg" />
</a>
&nbsp;
<a href="http://www.fvsgroup.ch/fr/">
  <img class="sponsor" alt="" src="images/logo-fvsgroup.jpg" />
</a>
&nbsp;
<a href="http://www.rhonefm.ch/fr/">
  <img class="sponsor" alt="" src="images/logo-rhonefm.jpg" />
</a>
<a href="https://www.kouski.ch/">
  <img class="sponsor" alt="" src="images/logo-kouski.jpg" />
</a>
&nbsp;
<a href="https://www.cavesorsat.ch/fr/">
  <img class="sponsor" alt="" src="images/logo-orsat.jpg" />
</a>
&nbsp;
<a href="http://www.sonoval.ch/">
  <img class="sponsor" alt="" src="images/logo-sonoval.jpg" />
</a>
<?php include("footer.php"); ?>
