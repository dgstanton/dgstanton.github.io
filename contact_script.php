<?php

mail("dgstanton324@gmail.com","Website email from " . $_POST['name'], "Phone: " . $_POST['phone'] . "\n \n" . $_POST['message'], "From: " . $_POST['email'] );
?>