<?php

require 'vendor/autoload.php';

//Define your states here...
$sagar = new WFA\RequestHandling\FiniteAutomata();
$sagar->addState("student",0,"generation");
$sagar->addState("faculty",1,"translation");
$sagar->addState("faculty",1,"generation");
$sagar->addState("hod",2,"translation");
$sagar->addState("COMPLETED",3,"final");
$sagar->addState("REJECTED",4,"final");
//Define transitions...
$sagar->addTransition("studentleave(0,1)","student","faculty","0");
$sagar->addTransition("studentleave(1,2)","faculty","hod","0");
$sagar->addTransition("leave(2,3)","hod","COMPLETED","1");
$sagar->addTransition("leave(2,4)","hod","REJECTED","0");
$sagar->addTransition("facultyleave(1,2)","faculty","hod","1");
$sagar->addTransition("studentleave(1,4)","faculty","REJECTED","2");
//Save the DFA to database...
$sagar->saveToDatabase();