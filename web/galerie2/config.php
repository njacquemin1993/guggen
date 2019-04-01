<?php
/*
MINIGAL NANO
- A PHP/HTML/CSS based image gallery script

This script and included files are subject to licensing from Creative Commons (http://creativecommons.org/licenses/by-sa/2.5/)
You may use, edit and redistribute this script, as long as you pay tribute to the original author by NOT removing the linkback to www.minigal.dk ("Powered by MiniGal Nano x.x.x")

MiniGal Nano is created by Thomas Rybak

Copyright 2010 by Thomas Rybak
Support: www.minigal.dk
Community: www.minigal.dk/forum

Please enjoy this free script!
*/

// EDIT SETTINGS BELOW TO CUSTOMIZE YOUR GALLERY
$thumbs_pr_page 		= "1000"; //Number of thumbnails on a single page
$gallery_width 			= "80%"; //Gallery width. Eg: "500px" or "70%"
$backgroundcolor 		= "white"; //This provides a quick way to change your gallerys background to suit your website. Use either main colors like "black", "white", "yellow" etc. Or HEX colors, eg. "#AAAAAA"
$templatefile 			= "exhibition"; //Template filename (must be placed in 'templates' folder)
$title 					= "Albums Photos 2006-2019"; // Text to be displayed in browser titlebar
$author 				= "Mokshû Lion's";
$folder_color 			= "black"; // Color of folder icons: blue / black / vista / purple / green / grey
$sorting_folders		= "date"; // Sort folders by: [name][date]
$sorting_files			= "date"; // Sort files by: [name][date][size]
$sortdir_folders		= "ASC"; // Sort direction of folders: [ASC][DESC]
$sortdir_files			= "ASC"; // Sort direction of files: [ASC][DESC]

//LANGUAGE STRINGS
$label_home 			= "Accueil"; //Name of home link in breadcrumb navigation
$label_new 				= "Nouveau"; //Text to display for new images. Use with $display_new variable
$label_page 			= "Page"; //Text used for page navigation
$label_all 				= "Toutes les images"; //Text used for link to display all images in one page
$label_noimages 		= "Dossier vide"; //Empty folder text
$label_loading 			= "Chargement..."; //Thumbnail loading text

//ADVANCED SETTINGS
$thumb_size 			= 200; //Thumbnail height/width (square thumbs). Changing this will most likely require manual altering of the template file to make it look properly!
$label_max_length 		= 33; //Maximum chars of a folder name that will be displayed on the folder thumbnail
$display_exif			= 0;
?>
