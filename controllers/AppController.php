<?php
/**
 * Created by PhpStorm.
 * User: Dezrill
 * Date: 06.04.2021
 * Time: 10:32
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr) {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}