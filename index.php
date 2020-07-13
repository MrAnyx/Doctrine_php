<?php

use App\Entity\User;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/bootstrap.php";

$users = $entityManager->getRepository(User::class)->findAll();


echo "<ul>";
foreach ($users as $user) {
   echo "<li>" . $user->getUsername() . "</li>";
}
echo "</ul>";
