<?php 

require_once 'lib/classes/MysqliDb.php';

$db = new MysqliDb('localhost', 'root', '', 'cms_db');

$email = "admin@gmail.com";
$password = password_hash(1234, PASSWORD_BCRYPT);

$data =  [
    'firstname' => 'Bishwagit',
    'lastname' => 'Das',
    'email' => $email,
    'password' => $password,
    'type' => 1
];
if($db->insert('users',$data)){
    echo 'Admin Inserted Succesfully';
}



?>