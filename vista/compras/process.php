<?php 
session_start();
include('recursos/confi.php');
if(!empty($_POST)){
$q1 = $conn->query("insert into cart(client_email,created_at) value(\"$_POST[email]\",NOW())");
if($q1){
$cart_id = $conn->insert_id;
foreach($_SESSION["cart"] as $c){
$q1 = $conn->query("insert into cart_product(product_id,q,cart_id) value($c[product_id],$c[q],$cart_id)");
}
unset($_SESSION["cart"]);
}
}
print "<script>alert('Venta procesada exitosamente');window.location='?controlador=inicio&accion=principal';</script>";
?>