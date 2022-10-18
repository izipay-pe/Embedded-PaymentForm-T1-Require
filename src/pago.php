<?php
//require('./FormToken.php');
require_once __DIR__ . '/FormToken.php';
//echo $formtoken;
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" 
   content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Javascript library. Should be loaded in head section -->

<script type="text/javascript">
    // RequireJS Configuration
    var requirejs = {
        paths: {
            krypton:      'https://api.micuentaweb.pe/static/js/krypton-client/V4.0/stable/kr-payment-form.min',
            kryptonTheme: 'https://api.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic'
        }
    };
  </script>

<link rel="stylesheet" 
  href="https://static.micuentaweb.pe/static/js/krypton-client/V4.0/ext/classic-reset.css">

<script src="https://requirejs.org/docs/release/2.3.6/minified/require.js" type="text/javascript"></script>
  
  <!-- Javascript form library loaded with requirejs-->
  <script type="text/javascript">
    requirejs(['krypton', 'kryptonTheme'], function() {
      // use KR global variable to manipulate the form library
      // for example here, we intercept the error message
      KR.onError( function(event) { 
        var code = event.errorCode;
        var message = event.errorMessage;
        var myMessage = code + ": " + message; 
        console.log(myMessage);
      });
    });    
  </script>

  <link rel="stylesheet" href="css/classic-reset.css"> <!-- Estilo personalizado para Izipay -->


  <title>Prueba Izipay</title>

  
</head>
<body>


      <div class="kr-embedded" kr-public-key="51447378:testpublickey_3SNSOCewrXOZNL2oNYoixUO4q9RaBwClYyCIEofTLGs2g"
       kr-post-url-success="../Ejemplo PHP JR/RespuestaIPN.php"
       kr-post-url-refused="/refused.php"
       kr-form-token="<?php echo $formtoken;?>">


</div>    

</body>
</html>

