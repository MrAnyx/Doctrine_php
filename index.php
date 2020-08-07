<?php

use App\Entity\User;
use App\Entity\Group;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/bootstrap.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// $user = $entityManager->getRepository(User::class)->findAll();
// dd($user->getGroup());

$user = new User();

$entityManager->persist($user);
$entityManager->flush();
