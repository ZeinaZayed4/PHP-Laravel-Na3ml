<?php

use SMS\NotificationService;
use SMS\Vodafone;

spl_autoload_register(function ($class) {
    $path = $class . '.php';
    require $path;
});

$notifyService = new NotificationService();

$notifyService->sendNewPostNotification(new Vodafone());
