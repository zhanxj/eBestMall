<?php

namespace app\controllers;

use Yii;
use app\models\Goods;
use app\models\Store;

class GoodsController extends Controller
{
    public function actionIndex($id, $sku_id = '')
    {
        // TODO: sku 待开发

        $model = new Goods();

        $goods = $model->find()
            ->where(['goods_id' => $id, 'status' => Store::STATUS_ACTIVE])
            ->with('store')
            ->asArray()
            ->one();

        if ($goods) {
            return $this->render('index', [
                'goods' => $goods,
            ]);
        } else {
            return $this->redirect(Yii::$app->homeUrl);
        }
    }

}