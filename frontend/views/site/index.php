<?php
/* @var $this yii\web\View */
$this->title = 'XBP Programming Test';
use yii\grid\GridView;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Programming Rocks!</h1>

        <p class="lead">Below is the database results for the XBP programming test for John Christiansen</p>
    </div>

    <div class="body-content">

        <!-- c. Within your 'index' view write the code necessary to show one of Yii's widgets called GridView (it is simply a table) somewhere in the '.body-content' div. Use the data provider object you passed from the controller to configure the widget. -->
       
       <?= GridView::widget([
           'dataProvider' => $dataProvider,
           'columns' => [
               'id',
               'city',
               'state',
               'zip_5',
               //...
           ],
       ]) ?>

    </div>
</div>
