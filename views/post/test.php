<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Index Action</h1>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <?php echo '<script language="javascript">' ?>
    <?php echo 'alert("' . Yii::$app->session->getFlash('success') . '")'?>
    <?php echo '</script>' ?>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <?php echo '<script language="javascript">' ?>
    <?php echo 'alert("' . Yii::$app->session->getFlash('error') . '")'?>
    <?php echo '</script>' ?>
<?php endif; ?>

<?php $form=ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email')->input('email') ?>
    <?= $form->field($model, 'text')->textarea(['rows' => 10]) ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
