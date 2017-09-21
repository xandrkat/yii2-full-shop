<?php
/**
 * Created by PhpStorm.
 * User: volynets
 * Date: 19.09.17
 * Time: 13:59
 */

/* @var $this \yii\web\View */
/* @var $content string */

?>
<?php $this->beginContent('@frontend/views/layouts/main.php') ?>
<div class="container">
    <div class="row">

        <div class="col-md-3 col-lg-2">

            <?= \frontend\widgets\Blog\CategoriesWidget::widget() ?>

            <div class="responsive-img">
                <img src="images/b.png" alt="">
            </div>

        </div>
        <div class="col-md-9 col-lg-10">
            <div class="bread_crumbs">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Статьи</a></li>
                </ul>
            </div>
            <?= $content ?>
        </div>
    </div>

</div>



<?php $this->endContent() ?>