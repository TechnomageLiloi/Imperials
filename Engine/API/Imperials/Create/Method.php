<?php

namespace Liloi\Imperials\API\Imperials\Create;

use Liloi\API\Response;
use Liloi\Imperials\API\Method as SuperMethod;
use Liloi\Imperials\Domain\Imperials\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        Manager::create();
        return new Response();
    }
}