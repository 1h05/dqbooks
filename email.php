<?php
$From=$_POST["themail"];
$Replyto="dqbooks@1h05.com";
$To="dqbooks@1h05.com";
$Subject=$_POST["thesubject"];
$Content="From : ".$_POST["themail"]."\r\n\n".$_POST["thetexte"];
$Headers  = "Return-path: $To\n";
$Headers .= "Content-Type:text/plain;charset=iso-8859-1\n";
$Headers .= "Content-Disposition:inline\n";
$Headers .= "Content-Transfer-Encoding:8bit\n";
mail($To,$Subject,$Content,$Headers);
?>