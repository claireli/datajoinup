<h1>Hash Encrryption Sample</h1>
<?php
$pass = $_POST['pass'];
echo "The user account's password will be encrypted and stored as: ";
echo md5($pass);
?>   