<?php
$visitCounter = 1;
$lastVisit = '';

if (isset($_COOKIE["visitCounter"])) {
    $visitCounter = $_COOKIE["visitCounter"];
    $visitCounter++;
}
if ($_COOKIE["lastVisit"]) {
    if(date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
        $lastVisit = (int)$_COOKIE["lastVisit"];
    }
}
