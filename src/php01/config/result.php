<?php

$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
print "私の名前は、" . $name . "<br />";

$radio = htmlspecialchars($_POST["radio"], ENT_QUOTES);
print "ご希望の商品は、" . $radio . "<br />";

$number = htmlspecialchars($_POST["number"], ENT_QUOTES);
print "ご注文は、" . $number . "<br />";