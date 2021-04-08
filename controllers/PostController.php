<?php
/**
 * Created by PhpStorm.
 * User: Dezrill
 * Date: 06.04.2021
 * Time: 10:53
 */

namespace app\controllers;


use app\models\Category;
use app\models\TestForm;

class PostController extends AppController
{
    public $layout='basic';

    public function actionIndex() {

        //$items=['Item 1', 'Item 2', 'Item 3'];
        //$this->debug(\Yii::$app);
        if (\Yii::$app->request->isAjax) {
            //debug($_POST);
            //debug(\Yii::$app->request->post());
            return 'test';
        }

        /*$post=TestForm::findOne(2); // обновление
        $post->email='202@gmail.com';
        $post->save();*/

        //$post=TestForm::findOne(2); // удаление
        //$post->delete();

        //TestForm::deleteAll(['>', 'id', '3']); // массовое удаление || без параметров - буду удалены все записи

        $model=new TestForm(); // будет операция INSERT
        /*$model->name='Автор';
        $model->email='dezrillll@gmail.com';
        $model->text='Текст сообщения';
        $model->save();*/


        if ($model->load(\Yii::$app->request->post())) {
            if ($model->save()){
                \Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }
            else {
                \Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        $this->view->title="Все статьи";
        return $this->render('test', compact('model'));
    }

    public function actionShow() {
        //$this->layout='basic';
        $this->view->title='One article';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...',]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...',]);

        //$cats=Category::find()->all();
        //$cats=Category::find()->orderBy(['id' => SORT_DESC])->all();
        //$cats=Category::find()->asArray()->all();
        //$cats=Category::find()->asArray()->where('parent=691')->all();
        //$cats=Category::find()->asArray()->where(['parent' => 691])->all();
        //$cats=Category::find()->asArray()->where(['like', 'title', 'pp'])->all();
        //$cats=Category::find()->asArray()->where(['<=', 'id', '695'])->all();
        //$cats=Category::find()->asArray()->where('parent=691')->limit(2)->all();
        //$cats=Category::find()->asArray()->where('parent=691')->one();
        //$cats=Category::findOne(['parent'=>691]);
        //$cats=Category::findAll(['parent'=>691]);
        //$query="SELECT * FROM categories WHERE title LIKE '%pp%'";
        //$query="SELECT * FROM categories WHERE title LIKE :search";
        //$cats=Category::findBySql($query, [':search' => '%pp%'])->all();

        //$cats=Category::findOne(694);
        //$cats=Category::find()->with('products')->where('id=694')->all();
        //$cats=Category::find()->all(); // отложенная загрузка
        $cats=Category::find()->with('products')->all(); // жадная загрузка

        return $this->render('show', compact('cats'));
    }
}