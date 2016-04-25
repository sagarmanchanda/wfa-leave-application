<?php

require 'vendor/autoload.php';

//Define your states here...
$leave = new WFA\RequestHandling\FiniteAutomata();
$leave->addState("undergrad", 0, "generation");
$leave->addState("postgrad", 1, "generation");
$leave->addState("faculty", 2, "generation");
$leave->addState("faculty_advisor", 3, "generation");
$leave->addState("pglevel2", 4, "generation");
$leave->addState("hod", 6, "generation");


$leave->addState("faculty_advisor", 3, "translation");
$leave->addState("hod", 6, "translation");
$leave->addState("pglevel2", 4, "translation");
$leave->addState("dofa", 8, "translation");

$leave->addState("COMPLETED", 9, "final");
$leave->addState("REJECTED", 10, "final");


// Define Transitions here...

// Undergrad Workflow
$leave->addTransition("undergradLeave(0,3)","undergrad","faculty_advisor","0");
$leave->addTransition("undergradLeave(3,10)","faculty_advisor","REJECTED","1");
$leave->addTransition("undergradLeave(3,6)","faculty_advisor","hod","0");
$leave->addTransition("undergradLeave(6,9)","hod","COMPLETED","0");
$leave->addTransition("undergradLeave(6,10)","hod","REJECTED","1");

// Postgrad Workflow
$leave->addTransition("postgradLeave(1,4)","postgrad","pglevel2","0");
$leave->addTransition("postgradLeave(4,10)","pglevel2","REJECTED","1");
$leave->addTransition("postgradLeave(4,6)","pglevel2","hod","0");
$leave->addTransition("postgradLeave(6,10)","hod","REJECTED","2");
$leave->addTransition("postgradLeave(6,9)","hod","COMPLETED","3");

// Faculty Workflow
$leave->addTransition("facultyLeave(2,6)","faculty","hod","0");
$leave->addTransition("facultyLeave(6,8)","hod","dofa","7");
$leave->addTransition("facultyLeave(6,10)","hod","REJECTED","4");
$leave->addTransition("facultyLeave(8,9)","dofa","COMPLETED","1");
$leave->addTransition("facultyLeave(8,10)","dofa","REJECTED","5");

// Faculty advisor Workflow
$leave->addTransition("faculty_advisorLeave(3,6)","faculty_advisor","hod","2");
$leave->addTransition("faculty_advisorLeave(6,8)","hod","dofa","8");
$leave->addTransition("faculty_advisorLeave(6,10)","hod","REJECTED","5");
$leave->addTransition("faculty_advisorLeave(8,9)","dofa","COMPLETED","2");
$leave->addTransition("faculty_advisorLeave(8,10)","dofa","REJECTED","6");

// pglevel2 includes TA_guide, Project_guide, dpcc
$leave->addTransition("pglevel2Leave(4,6)","pglevel2","hod","2");
$leave->addTransition("pglevel2Leave(6,8)","hod","dofa","9");
$leave->addTransition("pglevel2Leave(6,10)","hod","REJECTED","6");
$leave->addTransition("pglevel2Leave(8,9)","dofa","COMPLETED","3");
$leave->addTransition("pglevel2Leave(8,10)","dofa","REJECTED","7");

// hod Workflow
$leave->addTransition("hodLeave(6,8)","hod","dofa","10");
$leave->addTransition("hodLeave(8,9)","dofa","COMPLETED","0");
$leave->addTransition("hodLeave(8,10)","dofa","REJECTED","4");

//Save the DFA to database...
$leave->saveToDatabase();