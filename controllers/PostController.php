<?php
/**
 * Created by PhpStorm.
 * User: Dezrill
 * Date: 06.04.2021
 * Time: 10:53
 */

namespace app\controllers;


class PostController extends AppController
{
    public $layout='basic';

    public function actionIndex() {
        $items=['Item 1', 'Item 2', 'Item 3'];

        //$this->debug(\Yii::$app);

        if (\Yii::$app->request->isAjax) {
            //debug($_POST);
            //debug(\Yii::$app->request->post());
            return 'test';
        }

        return $this->render('test', ['items' => $items]);
    }

    public function actionShow() {
        //$this->layout='basic';
        return $this->render('show');
    }
}