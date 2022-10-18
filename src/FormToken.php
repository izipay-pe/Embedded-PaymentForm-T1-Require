<?php

    $data = array(
        "amount" => $_POST['precio']*100, 
        "currency" => $_POST['moneda'], 
        "orderId" => uniqid("MyOrderId"),
        "customer" => array(
        "email" => "sample@example.com"
        )
    );
        
    $data_string = json_encode($data);                                                                                   
    $ch = curl_init('https://server-node-izipay.herokuapp.com/CreatePayment');
    //curl_setopt($ch, CURLOPT_USERPWD, "user:pwd");                                                                       
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);                                                                    
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                         
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   
    $result = curl_exec($ch);
    $formtoken = trim($result);
    //var_dump($result);
    //echo $formtoken;
    
?>