<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="fr-ch">
  <head>
    <meta name="description" content="Bienvenue sur le site internet de la guggen Mokshû Lion's de Martigny en Suisse" />
    <meta name="keywords" content="guggen, guggenmusik, Mokshû Lion's, Martigny, Valais, Suisse, carnaval, fête, animation musicale, musique, soirée guggen, CERM" />
    <meta name="author" content="Régis Meunier" />
    <meta name="Copyright" content="" moksh="" lion="" s="" 2009="" />
    <meta http-equiv="Content-Language" content="fr" />
    <meta charset="UTF-8"/>
    <title>Guggen Mokshû Lion's, Martigny - Suisse </title>
    <link href="style.css?v=1.1" rel="stylesheet" type="text/css" />
    <script language="JavaScript" type="text/javascript">
      function OpenPopup(page,largeur,hauteur,options) {
      var top=(screen.height-hauteur)/2;
      var left=(screen.width-largeur)/2;
      window.open(page,"","top="+top+",left="+left+",width="+largeur+",height="+hauteur+","+options);
      }
      function MM_preloadImages() { //v3.0
      var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
      var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
      if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
      }
      function MM_swapImgRestore() { //v3.0
      var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
      }
      function MM_findObj(n, d) { //v4.01
      var p,i,x; if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
      d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
      if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
      for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
      if(!x && d.getElementById) x=d.getElementById(n); return x;
      }
      function MM_swapImage() { //v3.0
      var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
      if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
      }
      function loadSong(elt, e) {
      if(!e) var e = window.event;
      document.getElementById("player").src=elt.href;
      document.getElementById("player").load();
      document.getElementById("player").play();
      return false;
      }
      window.onload = function() {
        links = document.getElementById("playlist").getElementsByTagName("a");
        for(var i = 0; i<links.length; i++) {
          links[i].onclick=function(e) { return loadSong(this, e); };
        }
      }
    </script>
  </head>

  <body>
    <div class="container">
      <header onload="MM_preloadImages('images/bar-menu_02.gif','images/menu2_02.gif','images/menu2_04.gif','images/menu2_06.gif','images/menu2_08.gif','images/menu2_10.gif','images/menu2_12.gif','images/menu2_14.gif','images/menu2_16.gif','images/menu2_18.gif','images/menu2_20.gif')">
        <div style="background-color: black;">
          <img src="images/header.jpg" border="0" width="100%" />
        </div>
        <table>
          <tbody>
            <tr>
              <td> <a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image15','','images/menu2_02.gif',1)" href="accueil.php"><img class="header" src="images/bar-menu_02.gif" name="Image15" id="Image15" border="0" style="max-width:67px; width:100%;" /></a></td>
              <td> <a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image16','','images/menu2_04.gif',1)" href="presentation.php"><img class="header" src="images/bar-menu_04.gif" name="Image16" id="Image16" border="0" style="max-width:109px; width:100%;" /></a></td>
              <td> <a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image17','','images/menu2_06.gif',1)" href="membres.php"><img class="header" src="images/bar-menu_06.gif" name="Image17" id="Image17" border="0" style="max-width:83px; width:100%;" /></a></td>
              <td> <a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image18','','images/menu2_08.gif',1)" href="agenda.php"><img class="header" src="images/bar-menu_08.gif" name="Image18" id="Image18" border="0" style="max-width:70px; width:100%;" /></a></td>
              <td> <a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image19','','images/menu2_10.gif',1)" href="galerie/index.php" target="_blank"><img class="header" src="images/bar-menu_10.gif" name="Image19" id="Image19" border="0" style="max-width:63px; width:100%;" /></a></td>
              <td> <a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image21','','images/menu2_14.gif',1)" href="liens.php"><img class="header" src="images/bar-menu_14.gif" name="Image21" id="Image21" border="0" style="max-width:47px; width:100%;" /></a></td>
              <td> <a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image22','','images/menu2_16.gif',1)" href="contact.php"><img class="header" src="images/bar-menu_16.gif" name="Image22" id="Image22" border="0" style="max-width:71px; width:100%;" /></a></td>
            </tr>
          </tbody>
        </table>
      </header>
      <div class="content">
