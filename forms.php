<?php

require 'vendor/autoload.php';

// Make forms for all the states you have defined...
$leaveForm = new WFA\FormBuilder\Form("undergrad",0,"generation");
$leaveForm->addElement("text","startdate_undergrad","startdate","");
$leaveForm->addElement("text","enddate_undergrad","enddate","");
$leaveForm->addElement("radio","acadpurpose_undergrad","for academic purpose","TRUE");
$leaveForm->addElement("radio","otherpurpose_undergrad","Others","TRUE");
$leaveForm->addElement("text","reason_undergrad","reason","");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->addDatabaseElement("owner_undergrad","username","text");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();

// 
$leaveForm = new WFA\FormBuilder\Form("postgrad",1,"generation");
$leaveForm->addElement("text","startdate_postgrad","startdate","");
$leaveForm->addElement("text","enddate_postgrad","enddate","");
$leaveForm->addElement("radio","acadpurpose_postgrad","for academic purpose","TRUE");
$leaveForm->addElement("radio","otherpurpose_postgrad","Others","TRUE");
$leaveForm->addElement("text","reason_postgrad","reason","");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->addDatabaseElement("owner_postgrad","username","text");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();


$leaveForm = new WFA\FormBuilder\Form("faculty",2,"generation");
$leaveForm->addElement("text","startdate_faculty","startdate","");
$leaveForm->addElement("text","enddate_faculty","enddate","");
$leaveForm->addElement("radio","acadpurpose_faculty","for academic purpose","TRUE");
$leaveForm->addElement("radio","otherpurpose_faculty","Others","TRUE");
$leaveForm->addElement("text","reason_faculty","reason","");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->addDatabaseElement("owner_faculty","username","text");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();


$leaveForm = new WFA\FormBuilder\Form("faculty_advisor",3,"generation");
$leaveForm->addElement("text","startdate_faculty_advisor","startdate","");
$leaveForm->addElement("text","enddate_faculty_advisor","enddate","");
$leaveForm->addElement("radio","acadpurpose_faculty_advisor","for academic purpose","TRUE");
$leaveForm->addElement("radio","otherpurpose_faculty_advisor","Others","TRUE");
$leaveForm->addElement("text","reason_faculty_advisor","reason","");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->addDatabaseElement("owner_faculty_advisor","username","text");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();


$leaveForm = new WFA\FormBuilder\Form("pglevel2",4,"generation");
$leaveForm->addElement("text","startdate_pglevel2","startdate","");
$leaveForm->addElement("text","enddate_pglevel2","enddate","");
$leaveForm->addElement("radio","acadpurpose_pglevel2","for academic purpose","TRUE");
$leaveForm->addElement("radio","otherpurpose_pglevel2","Others","TRUE");
$leaveForm->addElement("text","reason_pglevel2","reason","");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->addDatabaseElement("owner_pglevel2","username","text");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();


$leaveForm = new WFA\FormBuilder\Form("hod",6,"generation");
$leaveForm->addElement("text","startdate_hod","startdate","");
$leaveForm->addElement("text","enddate_hod","enddate","");
$leaveForm->addElement("radio","acadpurpose_hod","for academic purpose","TRUE");
$leaveForm->addElement("radio","otherpurpose_hod","Others","TRUE");
$leaveForm->addElement("text","reason_hod","reason","");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->addDatabaseElement("owner_hod","username","text");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();



$leaveForm = new WFA\FormBuilder\Form("faculty_advisor",3,"translation");
$leaveForm->addElement("radio","forwardtohod_faculty_advisor","Forward to HOD for permission","TRUE");
$leaveForm->addElement("radio","reject_faculty_advisor","Reject request","TRUE");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();


$leaveForm = new WFA\FormBuilder\Form("pglevel2",4,"translation");
$leaveForm->addElement("radio","forwardtohod_postgrad","Forward to HOD for permission","TRUE");
$leaveForm->addElement("radio","reject_postgrad","Reject request","TRUE");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();



$leaveForm = new WFA\FormBuilder\Form("hod",6,"translation");
$leaveForm->addElement("radio","forwardtodofa_fac","Forward to DOFA for permission","TRUE");
$leaveForm->addElement("radio","accept_student","Accept request","TRUE");
$leaveForm->addElement("radio","reject_all","Reject request","TRUE");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();


$leaveForm = new WFA\FormBuilder\Form("dofa",8,"translation");
$leaveForm->addElement("radio","accept_fac","Accept request","TRUE");
$leaveForm->addElement("radio","reject_fac","Reject request","TRUE");
$leaveForm->addElement("submit","submit","","submit");
$leaveForm->buildFormTemplate();
$leaveForm->buildFormInputFieldTable();

// Create the Ulitimate walla database
WFA\Utils::buildRequestHandlingMainTable();