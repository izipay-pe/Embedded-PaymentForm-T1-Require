<?php
    
    $answer['kr-answer'] = json_decode($_POST['kr-answer'], true);

    $formAnswer = $answer['kr-answer'];
    $transaction = $formAnswer['transactions'][0];

    /*
    $registro = array(
        "orderStatus" => $formAnswer['orderStatus']."\n",
        "orderId" => $formAnswer['orderDetails']['orderId']."\n",
        "email" => $formAnswer['customer']['email']."\n",
        "idTransaction" => $transaction['transactionDetails']['cardDetails']['legacyTransId']."\n",
        "uuid" => $transaction['uuid']."\n",
        "amount" => $transaction['amount']."\n",
        "fechaCreacion" => $transaction['creationDate']."\n",
        "token" => $transaction['paymentMethodToken']."\n",
        "card" => $transaction['transactionDetails']['cardDetails']['effectiveBrand']."\n",
    );   
    echo implode(" ",$registro)."\n"; 
    print_r($registro)."\n";
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Respuesta IPN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

</head>
<body>

    <div class="container shadow p-3 mb-5 rounded" style="align-items: center;width: 35%">
        <div class="card center text-center">
            <div class="card-header">
                
            </div>
            <div class="card-body"style="color: #2A3F54">
                <h5 class="card-title">Respuesta de la IPN</h5>
                <p class="card-text">Se muestran algunos datos a consultar de la compra</p>
                
            </div>
            <div class="card-footer text-muted">
                
            </div>
        </div>
    </div>

    <!--
    <div class="container-fluid bg-white" style="width: 80%">
        <table class="table table-bordered shadow p-3 mb-5 bg-white rounded text-center">
            <thead style="background: #2A3F54; color: #ffffff">
                    <th>Nº</th>
                    <th>orderStatus</th>
                    <th>orderId</th>
                    <th>email</th>
                    <th>idTransaction</th>
                    <th>uuid</th>
                    <th>amount</th>                    
                    <th>fechaCreacion</th>   
                    <th>token</th>
                    <th>card</th>  
            </thead>
                <?php           
                $cont=1;                                      
                ?>
            <tbody class="bg-white">
                    <td class="align-middle"><?php echo $cont?></td>
                    <td class="align-middle"><?php echo $formAnswer['orderStatus']?></td>
                    <td class="align-middle"><?php echo $formAnswer['orderDetails']['orderId']?></td>
                    <td class="align-middle"><?php echo $formAnswer['customer']['email']?></td>
                    <td class="align-middle"><?php echo $transaction['transactionDetails']['cardDetails']['legacyTransId']?></td>
                    <td class="align-middle"><?php echo $transaction['uuid']?></td>   
                    <td class="align-middle"><?php echo $transaction['amount']?></td>
                    <td class="align-middle"><?php echo $transaction['creationDate']?></td>
                    <td class="align-middle"><?php echo $transaction['paymentMethodToken']?></td>
                    <td class="align-middle"><?php echo $transaction['transactionDetails']['cardDetails']['effectiveBrand']?></td>                    
                <?php
                $cont=$cont+1;                            
                ?>
            </tbody>
        </table>

    </div>
    -->


    <div class="container shadow p-3 mb-5 rounded" style="background: #2A3F54; color: #ffffff; width: 35%">
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-3">orderStatus</div>
                <div class="col-8 col-sm-8">: <?php echo $formAnswer['orderStatus']?></div>

                <div class="col-8 col-sm-3">orderId</div>
                <div class="col-8 col-sm-8">: <?php echo $formAnswer['orderDetails']['orderId']?></div>
            </div>

            <div class="row">
                <div class="col-8 col-sm-3">email</div>
                <div class="col-8 col-sm-8">: <?php echo $formAnswer['customer']['email']?></div>              

                <div class="col-8 col-sm-3">idTransaction</div>
                <div class="col-8 col-sm-8">: <?php echo $transaction['transactionDetails']['cardDetails']['legacyTransId']?></div>
            </div>

            <div class="row">
                <div class="col-8 col-sm-3">uuid</div>
                <div class="col-8 col-sm-8">: <?php echo $transaction['uuid']?></div>              

                <div class="col-8 col-sm-3">amount</div>
                <div class="col-8 col-sm-8">: <?php echo $transaction['amount']?></div>                
            </div>

            <div class="row">
                <div class="col-8 col-sm-3">fechaCreacion</div>
                <div class="col-8 col-sm-8">: <?php echo $transaction['creationDate']?></div>              

                <div class="col-8 col-sm-3">token</div>
                <div class="col-8 col-sm-8">: <?php echo $transaction['paymentMethodToken']?></div>                
            </div>

            <div class="row">
                <div class="col-8 col-sm-3">card</div>
                <div class="col-8 col-sm-8">: <?php echo $transaction['transactionDetails']['cardDetails']['effectiveBrand']?></div>              

                <div class="col-8 col-sm-3"></div>
                <div class="col-8 col-sm-8"></div>                
            </div>
        </div>              
    </div>

    

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>