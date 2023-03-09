<?php
if(isset($_POST['submit'])){
    if (empty($nombres)) {
        echo "<p>* Agrega tu nombre</p>";
    }else{
        if (strlen($nombres) > 15) {
        echo "<p>* El nombre es muy largo</p>";
        }
    }
    if(empty($correo)){
        echo "<p>* Agrega tu correo</p>";
    }else{
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "<p>* El correo es incorrecto</p>";
        }
    }
}