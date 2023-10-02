<?php

namespace Liloi\Imperials\API;

use Liloi\API\Manager;
use Liloi\API\Method;

/**
 * @inheritDoc
 */
class Tree
{
    static ?Manager $manager = null;

    /**
     * Collect API methods.
     */
    public static function collect(): void
    {
        $manager = new Manager();

        $manager->add(new Method('Imperials.Imperials.Collection', '\Liloi\Imperials\API\Imperials\Collection\Method::execute'));
        $manager->add(new Method('Imperials.Imperials.Show', '\Liloi\Imperials\API\Imperials\Show\Method::execute'));
        $manager->add(new Method('Imperials.Imperials.Edit', '\Liloi\Imperials\API\Imperials\Edit\Method::execute'));
        $manager->add(new Method('Imperials.Imperials.Save', '\Liloi\Imperials\API\Imperials\Save\Method::execute'));
        $manager->add(new Method('Imperials.Imperials.Create', '\Liloi\Imperials\API\Imperials\Create\Method::execute'));
        $manager->add(new Method('Imperials.Imperials.Remove', '\Liloi\Imperials\API\Imperials\Remove\Method::execute'));

        self::$manager = $manager;
    }

    /**
     * Execute one of the API methods.
     *
     * @return string
     * @throws \Liloi\API\Errors\NotFoundException
     */
    public static function execute(): string
    {
        $response = self::$manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->asJson();
    }
}