<?php

require 'vendor/autoload.php';

// WFA\Utils::buildRequestHandlingMainTable();

// $sagar = new WFA\RequestHandling\FiniteAutomata();
// $sagar->addState("S1",0);
// $sagar->addState("S2",2);
// $sagar->addState("S3",3);
// $sagar->addTransition("T1","S1","S2","0");
// $sagar->addTransition("T2","S2","S3","0");
// $sagar->addTransition("T3","S2","S3","1");
// $sagar->addTransition("T4","S3","S3","1");
// $sagar->addTransition("T5","S3","S1","0");
// $sagar->saveToDatabase();
// var_dump($sagar->_states)
$sagar = new WFA\Auth\CreateLogin("Login", "WFA", "username", "password");

// $sagar = new WFA\FormBuilder\Form("S3", 3);
// $sagar->addElement("text","Name","Name","");
// $sagar->addElement("text","Age","Age","");

// $sagar->addElement("radio","DepartmentCSE","CSE","True");
// $sagar->addElement("submit","submit","submit","");

// $sagar->addDatabaseElement("name","username","text");
// $sagar->addDatabaseElement("name","password","text");
// $sagar->addDatabaseElement("name","username","text");

// $sagar->buildFormTemplate();
// $sagar->buildFormInputFieldTable();
// $sagar->buildDatabase();

// $sagar = new WFA\DefineResponses\DefineResponses();
// $sagar->DefineParameters("S1",['Age']);
// $sagar->addResponses("S1",['18'],'0');

?>
