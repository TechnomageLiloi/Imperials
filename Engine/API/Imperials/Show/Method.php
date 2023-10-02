<?php

namespace Liloi\Imperials\API\Imperials\Show;

use Liloi\API\Response;
use Liloi\Imperials\API\Method as SuperMethod;
use Liloi\Imperials\Domain\Imperials\Manager as QuestsManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $response = new Response();

        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'collection' => QuestsManager::loadCollection()
        ]));

        return $response;
    }
}