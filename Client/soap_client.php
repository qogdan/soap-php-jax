<?php
    $wsdl = "http://localhost:8080/calculator?wsdl";

    try{
        $client = new SoapClient($wsdl);
        $result = $client->add(['a' => 5, 'b' => 10]);
        echo "The result of addition is: " . $result->return;
    } catch (Exception $e){
        echo "Error: " . $e->getMessage();
    }
?>