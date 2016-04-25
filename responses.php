<?php

require 'vendor/autoload.php';

$sagar = new WFA\DefineResponses\DefineResponses("student",0,"generation");
$sagar->DefineParameters(['acadpurpose_student','otherpurpose_student']);
$sagar->addResponses(['TRUE', 'FALSE'], "0");
$sagar->addResponses(['FALSE', 'TRUE'], "0");

$sagar = new WFA\DefineResponses\DefineResponses("faculty",1,"generation");
$sagar->DefineParameters(['acadpurpose_faculty','otherpurpose_faculty']);
$sagar->addResponses(['TRUE', 'FALSE'], "1");
$sagar->addResponses(['FALSE', 'TRUE'], "1");

$sagar = new WFA\DefineResponses\DefineResponses("faculty",1,"translation");
$sagar->DefineParameters(['forwardtohod_student','reject_student']);
$sagar->addResponses(['TRUE', 'FALSE'], "0");
$sagar->addResponses(['FALSE', 'TRUE'], "2");

$sagar = new WFA\DefineResponses\DefineResponses("hod",2,"translation");
$sagar->DefineParameters(['accept_request','reject_request']);
$sagar->addResponses(['TRUE', 'FALSE'], "1");
$sagar->addResponses(['FALSE', 'TRUE'], "0");