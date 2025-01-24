<?php
    $wsdl = "http://localhost:8080/calculator?wsdl";

    try{
        $client = new SoapClient($wsdl);
        $params = [
            'arg0' => 5,
            'arg1' => 10,
        ];
        $result = $client->__soapCall('add', [$params]);
        echo "The result of addition is: " . $result->return;
    } catch (SoapFault $fault) {
        echo "Error: " . $fault->getMessage();
    }
?>