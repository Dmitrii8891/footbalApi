<?php
use yii\data\ArrayDataProvider;
?>
<h2>Statistic</h2>

<?php
//var_dump($data);
$provider = new ArrayDataProvider([
    'allModels' => $data,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => ['country_name', 'league_name'],
    ],
]);
//var_dump($data);die();
echo \yii\grid\GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'country_name',
        'league_name',
        'match_hometeam_name',
    ]
]);
?>