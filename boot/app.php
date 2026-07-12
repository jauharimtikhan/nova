<?php

use Novalites\Application\Application;

Application::boot(dirname(__DIR__))
    ->withRouting(
        web: dirname(__DIR__) . "/routes/web.php",
        api: dirname(__DIR__) . "/routes/api.php"
    )
    ->run();
