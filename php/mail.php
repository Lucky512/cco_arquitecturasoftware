<?php 
/*
    $to = $_POST['c_email_address'];
    $subject ='Gracias por tu compra en mitienda.com';
    $from = 'tienda@midominio.com';
    $header='MIME-Version 1.0'."\r\n";
    $header.="Content-type: text/html; charset=iso-8859-1\r\n";
    $header.="X-Mailer: PHP/".phpversion();
    $header.= 'From: me@example.com'."\r\n";

*/ 
    $to = "somebody@example.com";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: webmaster@example.com" . "\r\n" .
    "CC: somebodyelse@example.com". "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n" ;
    $headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n"  ;

    
    $message='<html lang="es">

    <body>
        <h1 style="color:#1d1d1d">Gracias por tu compra '.$_POST['c_fname']." ".$_POST['c_lname'].'</h1>
       
        <h3>Detalles de la compra </h3>
        <table>
            <thead>
                <tr>
                    <td>Nombre  del producto </td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>Subtotal</td>
                    
                </tr>
            </thead>
            <tbody>';
    $total = 0;
            
    $arregloCarrito =$_SESSION['carrito'];
    for($i=0;$i<count($arregloCarrito);$i++){
        $total= $total + ( $arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad'] );
        $message.='<tr><td lan="es">'. $arregloCarrito[$i]['Nombre'].'</td>';
        $message.='<td>'. $arregloCarrito[$i]['Precio'].'</td>';
        $message.='<td>'. $arregloCarrito[$i]['Cantidad'].'</td>';
        $message.='<td>'. ($arregloCarrito[$i]['Precio']*$arregloCarrito[$i]['Cantidad']).'</td></tr>';
    }
   
    $message.='</tbody></table>';
    $message.='<h2>Total de la compra: '.$total.'</h2>';
    $message.='<a href="http://localhost/carrito/verpedido.php?id_venta='.$id_venta.'" style="background-color: brown;color:white;padding: 10px;text-decoration: none;">
        Ver Status del pedido
    </a>  </body></html>';
    
    if(mail($to,$subject,$message,$headers)){
        echo "mensaje enviado correctamente";
 }else{
     echo 'no se pudo enviar el email';
 }  

/*
$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com". "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n" ;
$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n"  ;


$message='<html lang="es">

<body>
 <h1 style="color:#1d1d1d1">Gracias por tu compra </h1>
 
 <h3>Detalles de la compra</h3>
 <table>
     <thead>
         <tr>
             <td>Producto</td>
             <td>Precio</td>
             <td>Cantidad</td>
             <td>Subtotal</td>

         </tr>
     </thead>
     <tbody>';
$total = 0;
              
$arregloCarrito =$_SESSION['carrito'];
for($i=0;$i<count($arregloCarrito);$i++){
   $total= $total + ( $arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad'] );
   $message.='<tr><td>'. $arregloCarrito[$i]['Nombre'].'</td';
   $message.='<td>'. $arregloCarrito[$i]['Precio'].'</td';
   $message.='<td>'. $arregloCarrito[$i]['Cantidad'].'</td';
   $message.='<td>'. ($arregloCarrito[$i]['Precio']*$arregloCarrito[$i]['Cantidad']).'</td></tr>';
}

$message.='</tbody></table>';
$message.='<h2>Total de la Compra: '.$total.'</h2>';
$message.='<a href="" style="background-color: brown;color: white;padding: 10px;text-decoration: none;">
  Ver Estado del Pedido
 </a> </body></html>';


if(mail($to,$subject,$message,$headers)){
       echo "mensaje enviado correctamente";
}else{
    echo 'no se pudo enviar el email';
}  
*/ 
?>

            
        
        
       
  

