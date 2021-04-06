<?php
/**
 * Created by PhpStorm.
 * User: Dezrill
 * Date: 06.04.2021
 * Time: 10:33
 */

namespace app\controllers;


class TestController extends AppController
{
    public function actionIndex($id = null)
    {
        $text="Sample text";
        $items=['Item 1', 'Item 2', 'Item 3'];

        if (!$id) $id='Test';

        return $this->render('index', compact('text', 'items', 'id'));
    }
}