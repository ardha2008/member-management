<?php
// Rainbo Design PDF to JPG Conversion Thumbnail Maker
// Copyright (C) 2013 by Richard L. Trethewey
// All Rights Reserved
// http://www.rainbodesign.com/pub/
// 05/22/13 RLT

// User Settings
// -------------
$pdfPath = $_SERVER['DOCUMENT_ROOT'] . '/';			// Path to PDF files on the server
$imagesPath = $_SERVER['DOCUMENT_ROOT'] . '/images/';		// Path to your images directory on the server
$thumbsPath = $imagesPath . 'thumbs/';				// Path to image thumbnails directory
$thumbsize = 250;						// Width of thumbnail images (set to 0 for full size)
$pageNo = 0;							// Page # from PDF to convert (ordinal!)

// Constants and Defaults
// ----------------------
$theWMType = 'jpg:';
$extension = '.jpg';
$pdf = '';
$error = '';

// Fetch user settings and default overrides via query string
 if (isset($_GET['src'])) { $pdf = $_GET['src']; }
 if (isset($_GET['path'])) { $pdfPath = $_SERVER['DOCUMENT_ROOT'] . '/' . $_GET['path']; }
 if (isset($_GET['width'])) { $thumbsize = $_GET['width']; }
 if (isset($_GET['page'])) { $pageNo = $_GET['page'] - 1; }	// Page # is ordinal in ImageMagick!

 if ($pdf == '') { $error .= "Source Image Not Specified.<br>\n"; }

$original = $pdfPath . $pdf;					// Add file path to PDF file name
$originalBase = basename($pdf,'.pdf');				// Extract PDF file name basename w/o extension
$thumbnail = $thumbsPath . $originalBase . $extension;		// Use basename for the thumbnail .jpg file name

 if (!file_exists($original)) {					// Make sure PDF file exists
  $error .= "Source PDF Document Not Found<br>\n" . $original . "<br>\n";
 }

// Fix file name(s) to select 1st page of PDF and enquote $original if it/they contain <space>s.
  if (strpos($original, ' ') !== false) {
    $original = "\"" . $original . "[$pageNo]\"";		// Enclose file name in quotes and add Page #
    $thumbnail = str_replace(' ', '_', $thumbnail);		// Replace <space>s with underscores
   } else {
    $original = $original . "[$pageNo]";			// Just add Page # to PDF $original
  }

// Check to see if the thumbnail already exists in the "cache"
 if (!file_exists($thumbnail)) {

// No! Convert PDF to JPG with ImageMagick/GhostScript now!
   if ($error == '') {
    $wmCmd = "convert $original";
    if ($thumbsize != 0) { $wmCmd .= " -resize " . $thumbsize . "x"; }
    $wmCmd .= " $theWMType$thumbnail";
    $result = exec($wmCmd);
   } // endif $error == ''

// A little error-checking overkill
  if (!file_exists($thumbnail)) {
   $error .= "Convert Failed!  Can't find $thumbnail<br>\n";
   $error .= $result . "<br>\n" . $original . "<br>\n" . $thumbnail . "<br>\n";
  } // endif !file_exists

 } // endif !file_exists($thumbnail)

  if ($error != '') {				// Did we see an error?
   header("Content-type: text/html\n");		// Yes! Send MIME-type header for HTML files
   echo($error);
    } else {
   header("Content-type: image/jpeg\n");	// No.  OK, send MIME-type header for JPEG files
   echo(file_get_contents($thumbnail));		// Fetch image file contents and send it!
  } // endif $error

   exit;

?>
