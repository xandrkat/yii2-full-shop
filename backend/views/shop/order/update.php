<?php
/**
 * Created by PhpStorm.
 * User: volynets
 * Date: 13.09.17
 * Time: 16:22
 */

/* @var $this yii\web\View */
/* @var $order core\entities\Shop\Order\Order */
/* @var $model core\forms\manage\Shop\Order\OrderEditForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Update Order: ' . $order->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $order->id, 'url' => ['view', 'id' => $order->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-update">

    <?php $form = ActiveForm::begin() ?>

    <div class="box box-default">
        <div class="box-header with-border">Customer</div>
        <div class="box-body">
            <?= $form->field($model->customer, 'firstName')->textInput() ?>
            <?= $form->field($model->customer, 'lastName')->textInput() ?>
            <?= $form->field($model->customer, 'phone')->textInput() ?>
            <?= $form->field($model->customer, 'email')->textInput() ?>
        </div>
    </div>

    <div class="box box-default">
        <div class="box-header with-border">Delivery</div>
        <div class="box-body">
            <?= $form->field($model->delivery, 'method')->dropDownList($model->delivery->deliveryMethodsList(), ['prompt' => '--- Select ---']) ?>
            <?= $form->field($model->delivery, 'address')->textarea(['rows' => 3]) ?>
        </div>
    </div>

    <div class="box box-default">
        <div class="box-header with-border">Payment</div>
        <div class="box-body">
            <?= $form->field($model->payment, 'method')->dropDownList($model->payment->paymentMethodsList(), ['prompt' => '--- Select ---']) ?>
        </div>
    </div>

    <div class="box box-default">
        <div class="box-header with-border">Note</div>
        <div class="box-body">
            <?= $form->field($model, 'note')->textarea(['rows' => 3]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
