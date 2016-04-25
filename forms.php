<?php

require 'vendor/autoload.php';

// Make forms for all the states you have defined...
$sagar = new WFA\FormBuilder\Form("student",0,"generation");
$sagar->addElement("text","startdate_student","startdate","");
$sagar->addElement("text","enddate_student","enddate","");
$sagar->addElement("radio","acadpurpose_student","for academic purpose","TRUE");
$sagar->addElement("radio","otherpurpose_student","Others","TRUE");
$sagar->addElement("text","reason","reason","");
$sagar->addElement("submit","submit","","submit");
$sagar->addDatabaseElement("owner_student","username","text");
$sagar->buildFormTemplate();
$sagar->buildFormInputFieldTable();

$sagar = new WFA\FormBuilder\Form("faculty",1,"generation");
$sagar->addElement("text","startdate_faculty","startdate","");
$sagar->addElement("text","enddate_faculty","enddate","");
$sagar->addElement("radio","acadpurpose_faculty","for academic purpose","TRUE");
$sagar->addElement("radio","otherpurpose_faculty","Others","TRUE");
$sagar->addElement("submit","submit","","submit");
$sagar->addDatabaseElement("owner_faculty","username","text");
$sagar->buildFormTemplate();
$sagar->buildFormInputFieldTable();

$sagar = new WFA\FormBuilder\Form("faculty",1,"translation");
$sagar->addElement("radio","forwardtohod_student","Forward to HOD for permission","TRUE");
$sagar->addElement("radio","reject_student","Reject request","TRUE");
$sagar->addElement("submit","submit","","submit");
$sagar->buildFormTemplate();
$sagar->buildFormInputFieldTable();

$sagar = new WFA\FormBuilder\Form("hod",2,"translation");
$sagar->addElement("radio","accept_request","Accept Request","TRUE");
$sagar->addElement("radio","reject_request","Reject request","TRUE");
$sagar->addElement("submit","submit","","submit");
$sagar->buildFormTemplate();
$sagar->buildFormInputFieldTable();

// Create the Ulitimate walla database
WFA\Utils::buildRequestHandlingMainTable();

