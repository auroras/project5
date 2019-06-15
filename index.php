<?php
$text1=$_POST['text1'];
$text2=$_POST['text2'];
$text3=$_POST['text3'];
$text4=$_POST['text4'];
$radio1=$_POST['radio'];
$radio2=$_POST['radio'];
$radio3=$_POST['radio'];
$select2=$_POST['mp'];
$text5=$_POST['text5'];
$textarea=$_POST['textarea'];

echo "<p>Geia sou ", $text1, "</p><br>";
echo "Επώνυμο:", $text2, "<br>";
echo "Διεύθυνση:", $text3, "<br>";
echo "Τηλέφωνο:", $text4, "<br><br>";
if ($radio1=="margarita")
echo $radio1; 
else if ($radio2=="special")
echo $radio2;
else if ($radio3=="allantikon")
echo $radio3;
 
if ($select2=="1")
  echo "  8", "<br>";
else if ($select2=="2")
  echo " 12", "<br>";
else if ($select2=="3")
  echo " 16", "<br>";

echo "Ποσότητα: ", $text5, "<br>";
echo "σχολιο: "$textarea;
?>