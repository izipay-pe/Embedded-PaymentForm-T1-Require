# Embedded-PaymentForm-T1-Require

 Teoria de la tecnilogia y como o para que se utiliza con el formulario de Izipay.

<p align="center">
  <img src="/src/formulario_incrustado.png?raw=true" alt="Formulario"/>
</p>  


## Este es un ejemplo de como poder integrar un formulario embebido utilizando el framework "nombre de tu tecnología". Este ejemplo es solo una guía para poder realizar la integración de la pasarela de pagos, puede realizar las modificaciones necesarias para su proyecto.


<a name="Requisitos_Previos"></a>

## Requisitos Previos

* Acceso al Back Office Vendedor (BOV) y Claves de autenticación. [Guía Aquí](https://github.com/izipay-pe/obtener-credenciales-de-conexion)
* Servidor web o servidor local.

## 1.- Crear el proyecto

Descargar el proyecto .zip haciendo click [Aquí](https://github.com/izipay-pe/Embedded-PaymentForm-T1-Require/archive/refs/heads/main.zip) o clonarlo desde Git.  
```sh
git clone https://github.com/izipay-pe/Embedded-PaymentForm-T1-Require.git
``` 

## 2.- Configurar datos de conexión

Editar el archivo `keys.example.php` en la ruta raiz del proyecto `public_html/`.

![Clave](https://github.com/izipay-pe/Embedded-PaymentFormT1-Php/blob/main/images/key.png)

**Nota**: Reemplace **[CHANGE_ME]** con sus credenciales de `API REST` extraídas desde el Back Office Vendedor en el archivo `carpta_raiz/keys.example.php` de la ruta raíz del proyecto, ver [Requisitos Previos](#Requisitos_Previos).   

```sh
// Identificador de su tienda
IzipayController::setDefaultUsername("~ CHANGE_ME_USER_ID ~");

// Clave de Test o Producción
IzipayController::setDefaultPassword("~ CHANGE_ME_PASSWORD ~");

// Clave Pública de Test o Producción
IzipayController::setDefaultPublicKey("~ CHANGE_ME_PUBLIC_KEY ~");

// Clave HMAC-SHA-256 de Test o Producción
IzipayController::setDefaultHmacSha256("~ CHANGE_ME_HMAC_SHA_256 ~");

// URL del servidor de Izipay
IzipayController::setDefaultEndpointApiRest("https://api.micuentaweb.pe");
``` 

## 3.- Transacción de prueba

El formulario de pago está listo, puede intentar realizar una transacción utilizando una tarjeta de prueba con la barra de herramientas de depuración (en la parte inferior de la página).

![tarjetas de prueba](https://github.com/izipay-pe/Embedded-PaymentForm-T1.Net/blob/main/images/tarjetasprueba2.png)

Para obtener más información, eche un vistazo a:

* [Formulario incrustado: prueba rápida](https://secure.micuentaweb.pe/doc/es-PE/rest/V4.0/javascript/quick_start_js.html)
* [Primeros pasos: pago simple](https://secure.micuentaweb.pe/doc/es-PE/rest/V4.0/javascript/guide/start.html)
* [Servicios web - referencia de la API REST](https://secure.micuentaweb.pe/doc/es-PE/rest/V4.0/api/reference.html)

NOTA: 

1.- Paso de la tienda al modo PRODUCTION 
    Modifique su implementación para utilizar:
    la contraseña de producción,
    clave pública de producción,
    la clave HMAC-SHA-256 de producción para calcular la firma contenida en el campo kr-hash.
    Ingrese correctamente la URL de notificación al final del pago en modo PRODUCTION en el menú Configuración > Reglas de notificación .

2.- No tengo una cuenta activa

   | CARACTERÍSTICAS | VALOR |
   | ------------- | ------------- |
   | Usuario de prueba  | 89289758  |
   | Contraseña de prueba  | testpassword_7vAtvN49E8Ad6e6ihMqIOvOHC6QV5YKmIXgxisMm0V7Eq  |
   | Clave pública de prueba  | 89289758:testpublickey_TxzPjl9xKlhM0a6tfSVNilcLTOUZ0ndsTogGTByPUATcE  |
   | Clave HMAC SHA256 de prueba  | fva7JZ2vSY7MhRuOPamu6U5HlpabAoEf8VmFHQupspnXB  |
   | URL de base  | https://api.micuentaweb.pe |
   | URL para el cliente JavaScript | https://static.micuentaweb.pe/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js  |

## 4.- Implementar IPN

* Ver manual de implementacion de la IPN [Aquí](https://secure.micuentaweb.pe/doc/es-PE/rest/V4.0/kb/payment_done.html).

* Ver el ejemplo de la respuesta IPN con PHP [Aquí](https://github.com/izipay-pe/Redirect-PaymentForm-IpnT1-PHP).

* Ver el ejemplo de la respuesta IPN con NODE.JS [Aquí](https://github.com/izipay-pe/Response-PaymentFormT1-Ipn).

