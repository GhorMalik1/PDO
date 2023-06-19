<?php
session_start();

 if (isset($_SESSION['product_code'])) {
     foreach ($_SESSION['product_code'] as $productCode) {
        echo "Productcode: $productCode<br>";

     }
    }


?>