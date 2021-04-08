<?php

namespace app\models;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'posts';
    }

    public function attributeLabels()
    {
        return [
            'name' =>'Имя',
            'email' =>'Электронная почта',
            'text' =>'Текст сообщения',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            ['email', 'email'],
            //['name', 'string', 'min' => 2, 'tooShort' => 'Мало'],
            //['name', 'string', 'max' => 10, 'tooLong' => 'Много'],
            ['name', 'string', 'length' => [3,10]],
            //['name', 'newRule'],
            ['text', 'trim'],
        ];
    }

//    public function newRule($attr) {
//        if (!in_array($this->$attr, ['Name', 'Surname'])) {
//            $this->addError($attr, 'Wrong!');
//        }
//    }
}