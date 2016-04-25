<?php

require 'vendor/autoload.php';

$leaveResponse = new WFA\DefineResponses\DefineResponses("undergrad",0,"generation");
$leaveResponse->DefineParameters(['acadpurpose_undergrad','otherpurpose_undergrad']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "0");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "0");

$leaveResponse = new WFA\DefineResponses\DefineResponses("postgrad",1,"generation");
$leaveResponse->DefineParameters(['acadpurpose_postgrad','otherpurpose_postgrad']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "0");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "0");

$leaveResponse = new WFA\DefineResponses\DefineResponses("faculty",2,"generation");
$leaveResponse->DefineParameters(['acadpurpose_faculty','otherpurpose_faculty']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "0");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "0");

$leaveResponse = new WFA\DefineResponses\DefineResponses("faculty_advisor",3,"generation");
$leaveResponse->DefineParameters(['acadpurpose_faculty_advisor','otherpurpose_faculty_advisor']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "2");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "2");

$leaveResponse = new WFA\DefineResponses\DefineResponses("pglevel2",4,"generation");
$leaveResponse->DefineParameters(['acadpurpose_pglevel2','otherpurpose_pglevel2']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "2");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "2");

$leaveResponse = new WFA\DefineResponses\DefineResponses("hod",6,"generation");
$leaveResponse->DefineParameters(['acadpurpose_hod','otherpurpose_hod']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "10");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "10");

$leaveResponse = new WFA\DefineResponses\DefineResponses("faculty_advisor",3,"translation");
$leaveResponse->DefineParameters(['forwardtohod_faculty_advisor','reject_faculty_advisor']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "0");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "1");

$leaveResponse = new WFA\DefineResponses\DefineResponses("pglevel2",4,"translation");
$leaveResponse->DefineParameters(['forwardtohod_postgrad','reject_postgrad']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "0");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "1");

$leaveResponse = new WFA\DefineResponses\DefineResponses("hod",6,"translation");
$leaveResponse->DefineParameters(['forwardtodofa_fac','accept_student','reject_all']);
$leaveResponse->addResponses(['TRUE', 'FALSE','FALSE'], "7");
$leaveResponse->addResponses(['TRUE', 'FALSE','FALSE'], "8");
$leaveResponse->addResponses(['TRUE', 'FALSE','FALSE'], "9");
$leaveResponse->addResponses(['FALSE', 'TRUE','FALSE'], "0");
$leaveResponse->addResponses(['FALSE', 'TRUE','FALSE'], "3");
$leaveResponse->addResponses(['FALSE', 'FALSE','TRUE'], "1");
$leaveResponse->addResponses(['FALSE', 'FALSE','TRUE'], "2");
$leaveResponse->addResponses(['FALSE', 'FALSE','TRUE'], "4");
$leaveResponse->addResponses(['FALSE', 'FALSE','TRUE'], "5");
$leaveResponse->addResponses(['FALSE', 'FALSE','TRUE'], "6");


$leaveResponse = new WFA\DefineResponses\DefineResponses("dofa",8,"translation");
$leaveResponse->DefineParameters(['accept_fac','reject_fac']);
$leaveResponse->addResponses(['TRUE', 'FALSE'], "0");
$leaveResponse->addResponses(['TRUE', 'FALSE'], "1");
$leaveResponse->addResponses(['TRUE', 'FALSE'], "2");
$leaveResponse->addResponses(['TRUE', 'FALSE'], "3");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "4");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "5");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "6");
$leaveResponse->addResponses(['FALSE', 'TRUE'], "7");
