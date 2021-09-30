<?php
include_once "Patient.php";
include_once "LinkedList.php";
$linkList = new LinkedList();
$patient1 = new Patient("truong1", 3);
$patient2 = new Patient("truong2", 55);
$patient3 = new Patient("truong3", 6);
$patient4 = new Patient("truong4", 65);
$patient5 = new Patient("truong5" ,3);
$patient6 = new Patient("truong6", 22);
$patient7 = new Patient("truong7", 1);

$linkList->addWithSort($patient1);
$linkList->addWithSort($patient2);
$linkList->addWithSort($patient3);
$linkList->addWithSort($patient4);
$linkList->addWithSort($patient5);
$linkList->addWithSort($patient6);
$linkList->addWithSort($patient7);


echo $linkList->moveFirstNode();
 echo "<br>";
 echo "---------";
 echo "<br>";
 $linkList->printList();
