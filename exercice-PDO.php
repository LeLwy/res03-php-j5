<?php

require('User.php');

$user = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$clarkKent = new User($user['firstName'], $user['lastName'], $user['email']);

$host = "db.3wa.io";
$port = "3306";
$dbname = "louischancioux_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "louischancioux";
$password = "e1657392b3cd3a9bb9acef7eddd5a20c";

$db = new PDO(
    $connexionString,
    $user,
    $password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

$query = $db->prepare('SELECT users.* FROM users LIMIT 1');
        $query->execute();
        $lastUser = $query->fetch(PDO::FETCH_ASSOC);
        
var_dump($lastUser);

$newUser2 = new User($lastUser['first_name'], $lastUser['last_name'], $lastUser['email']);

var_dump($newUser2);

$query = $db->prepare('SELECT users.* FROM users');
        $query->execute();
        $allUsers = $query->fetchAll(PDO::FETCH_ASSOC);
        
var_dump($allUsers);

$newUsers = [];

for($i = 0; $i < count($allUsers); $i++){
    
    $newUser = new User($allUsers[$i]['first_name'], $allUsers[$i]['last_name'], $allUsers[$i]['email']);
    
    array_push($newUsers, $newUser);
}

var_dump($newUsers);

var_dump($clarkKent);

    $query = $db->prepare("INSERT INTO users VALUES (null, :firstName, :lastName, :email)");
    
    $parameters = [
        
    'firstName' => $clarkKent->getFirstName(),
    'lastName' => $clarkKent->getLastName(),
    'email' => $clarkKent->getEmail()
    
    ];
    
    $query->execute($parameters);
    
    $updatedUsers = $query->fetchAll(PDO::FETCH_ASSOC);
        
var_dump($updatedUsers);

?>