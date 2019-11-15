<?php
echo("voer een nummer in ");
$nummer1 = readline();
echo("voer nog een nummer in ");
$nummer2 = readline();
echo("wil je optellen of aftrekken ");
$plusofmin = readline();
if ($plusofmin == "+") {
    print("het antwoord is " . $nummer1+$nummer2);
}
if ($plusofmin == "-") {
    print("het antwoord is " . $nummer1-$nummer2);
}
if ($plusofmin == "optellen") {
    print("het antwoord is " . $nummer1+$nummer2);
}
if ($plusofmin == "aftrekken") {
    print("het antwoord is " . $nummer1-$nummer2);
}
?>