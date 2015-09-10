<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $categ = $_GET["subject"];
 
  include 'lib/nusoap.php';
 // $client = new soapclient ("http://localhost/phpwebserve/server.php?wsdl");
  //$result    =    $client->multichoice("civics");

  //Secondly, we need to instantiate the soapclient class.
  //We pass in the URL of the SOAP Server we are dealing with.
  $soapClient = new SoapClient('http://localhost/phpwebserve/server.php?wsdl', array('trace'=>1));
   // echo htmlentities($soapClient->__getFunctions());
    //Assume that has output 'someFunction' (among others)
    try {
        $results = $soapClient->multiplechoice($categ);
        echo $results;
    }
    catch (SoapFault $soapFault) {
        var_dump($soapFault);
        echo "Request :<br>", htmlentities($soapClient->__getLastRequest()), "<br>";
        echo "Response :<br>", htmlentities($soapClient->__getLastResponse()), "<br>";
    }

