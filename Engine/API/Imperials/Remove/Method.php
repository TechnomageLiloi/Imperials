<?php

namespace Liloi\Imperials\API\Imperials\Remove;

use Liloi\API\Response;
use Liloi\Imperials\API\Method as SuperMethod;
use Liloi\Imperials\Domain\Imperials\Manager;
use Liloi\Imperials\Domain\Imperials\Statuses;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));
        $entity->setStatus(Statuses::OBSOLETE);
        $entity->save();

        return new Response();
    }
}