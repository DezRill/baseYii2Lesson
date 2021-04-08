<?php
/**
 * Created by PhpStorm.
 * User: Dezrill
 * Date: 08.04.2021
 * Time: 9:49
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName() {
        return 'products';
    }

    public function getCategories() {
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }
}