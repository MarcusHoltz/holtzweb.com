<?php
$password = "4";
?>

<html>
<head>
<title>Development Site</title>
<link rel="icon" type="image/ico" href="/favicon.ico"/>
<link rel="shortcut icon" href="/favicon.png" type="image/png">
<link rel="shortcut icon" type="image/png" href="/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>

@-webkit-keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }

  50% {
    opacity: 1;
  }
}

@keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }

  50% {
    opacity: 1;
  }
}


input[name=password] {
    background: rgba(95, 175, 225, .75);
     box-shadow: 0 2px 1px rgba(22,22,22,.75) inset;
    color: #1784cd;
    font-size: 0.85em;
    padding-top: 5px;
	margin-right: 3px;
    border-radius: 5px;
    border-width: 0 0 3px;
}

input[name=password]:focus  {
    border-color: #3582B2;
    border-radius: 0px;
    transition: border-width 0.3s ease 0s, border-color 0.3s ease 0s;
}


.jk { text-align:center;  -webkit-animation-name: zoomIn;  animation-name: zoomIn;  -webkit-animation-duration: .76s;  animation-duration: .76s;  -webkit-animation-fill-mode: both;  animation-fill-mode: both; } 

span {
  text-align: center;
  font-weight: normal;
  color: #F0E68C;
  text-transform: uppercase;
  font-size: 3em;
  white-space: nowrap;
  z-index: 1000;
  font-family: Impact, Charcoal, sans-serif;
  text-shadow: 0px 2px 3px rgba(0,0,0,0.4), 0px 4px 7px rgba(0,0,0,0.1), 0px 9px 12px rgba(0,0,0,0.1); 
  -moz-transform: skew(0, -6.7deg);
  -ms-transform: skew(0, -6.7deg);
  -webkit-transform: skew(0, -6.7deg);
  transform: skew(0, -6.7deg);
  -moz-transition-property: font-size;
  -o-transition-property: font-size;
  -webkit-transition-property: font-size;
  transition-property: font-size;
  -moz-transition-duration: 0.75s;
  -o-transition-duration: 0.75s;
  -webkit-transition-duration: 0.75s;
  transition-duration: 0.75s;
}

@media screen and (max-width: 50em) {
  span {
    font-size: 10vw;
  }
}

body { text-align:center; color: #3b9bbf; font-family: "Arial Black", Gadget, sans-serif;  font-size: 1.25em; text-shadow: 2px 2px 6px rgba(0,0,0,0.2); background: #fcfcfc; } 
body b { color: #2c7f9e; } 
</style>



</head>
<body>

<?php 
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<table style="width: 100%; height: 97%;" border="0">
<tbody>
<tr>
<td style="width: 100%;">

<?php

echo "<iframe src=\"file.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";

?>

</td>
</tr>
</table>


<?php 
}
else
{



// Wrong password or no password entered display this message

if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">";
  echo '<div class="jk">';
  print "<span>Gift shop right ahead</span>";
  echo '</div>';
  print "<br><br> What does <b>2 + 2</b> equal? Enter into field below<br></br> ";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
  echo '<br/> ';
}
  
?>
<BR>



</body>
</html>
