<?php
namespace backend\controllers;

use backend\models\Goods;
use backend\models\GoodsType;
use common\models\Brand;
use common\models\Category;
use common\models\GoodsGallery;
use common\models\UploadForm;
use yii\data\Pagination;
use Yii;

use Qiniu\Processing\PersistentFop;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

class GoodsController extends IndexController
{
    public function actionAdd()
    {
        $this->layout = 'main';

        $model = new Goods();
        $Category = new Category();
        $Brand = new Brand();

        $typeList = GoodsType::getGoodsList();
        $catList = $Category::getCategory(category::find()->asArray()->all());
        $catList = $Category->dropDownList($catList);
        $result = $Brand::getBrand(brand::find()->asArray()->all());
        $result = $Brand->dropDownList($result);


        if(Yii::$app->request->isPost)
        {
            $data = Yii::$app->request->post();
            if($model->load($data))
            {
                $sql = $model->save();
                if($sql)
                {
                    $this->success('添加商品成功',['goods/show']);
                }
                else
                {
                    var_dump($model->getErrors());

                    $this->error('商品添加失败');
                }
            }
        }

        return $this->render('add',['model'=>$model,'catList'=>$catList,'result'=>$result,'typeList'=>$typeList]);
    }

    public function actionDel()
    {
        return $this->render('del');
    }

    public function actionShow($brand_id = null,$cat_id = null,$goodsList_id = null,$is_on_sale = null,$goods_name = null)
    {
        $map = ['brand_id'=>$brand_id,'cat_id'=>$cat_id,'goodsList_id'=>$goodsList_id,'is_on_sale'=>$is_on_sale,'goods_name'=>$goods_name];
//       var_dump($map);

        $this->layout = 'main';
        $Category = new Category();
        $Brand = new Brand();
        $model = new Goods();
        $catList = $Category::getCategory(category::find()->asArray()->all());
        $catList = $Category->dropDownList($catList);
        $result = $Brand::getBrand(brand::find()->asArray()->all());
        $result = $Brand->dropDownList($result);

        $query = Goods::find();
//        var_dump($query);
        $query = $this->search($map,$query);


        $page = new Pagination(['defaultPageSize'=>Yii::$app->params['pageSize'],'totalCount'=>$query->count()]);

        $pagination = $query->offset($page->offset)->limit($page->limit)->all();
    return $this->render('show',['catList'=>$catList,'page'=>$page,'result'=>$result,'pagination'=>$pagination,'map'=>$map]);
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

    private function search($map,$query)
    {
            //品牌id
            if(!empty($map['brand_id']))
            {
                $query = $query->andWhere(['brand_id'=>$map['brand_id']]);
            }
            //分类id
            if(!empty($map['cat_id']))
            {
//                $catList = Category::getCategory(Category::find()->asArray()->all(),$map['cat_id']);
//                var_dump($catList);
//                $catIds = ArrayHelper::getColumn('cat_id');
//                var_dump($catIds);
                $query = $query->andWhere(['cat_id'=>$map['cat_id']]);
            }
            //商品属性
            if(isset($map['goodsList_id']) &&!empty($map['goodsList_id']) )
            {
                $query = $query->andWhere([$map['goodsList_id']=>1]);
            }
            //是否上架
            if(isset($map['is_on_sale']))
            {
                $query = $query->andWhere(['is_on_sale'=>$map['is_on_sale']]);
            }
            //商品id
            if(!empty($map['goods_name']))
            {
                $query = $query->andWhere(['like','goods_name',$map['goods_name']]);
            }
            return $query;
    }


    public function actionImg($gid='',$gname='')
    {
        if(Yii::$app->request->isPost && Yii::$app->request->isAjax)
        {
            // 上传至七牛云
            $upForm = new UploadForm();
            $upForm->imageFile = UploadedFile::getInstance($upForm,'imageFile');
            $result = $upForm->uploadToQiNiu();
            if($result['code'] == 0)
            {
                // 入库
                $gid = Yii::$app->request->post('gid');
                $data = ['goods_id'=>$gid,'original_img'=>$result['data']['src']];
                if(!(new GoodsGallery())->createGallery($data))
                {
                    $result['code'] = 200;
                    $result['msg'] = '图片入库失败.';
                }
            }
            Yii::$app->response->format = Response::FORMAT_JSON;
            // 响应 JSON
            return $result;
        }
        // 该商品下的图片
        $galleries = (new GoodsGallery())->getGalleries($gid);
        return $this->render('gallery',['gname'=>$gname,'gid'=>$gid,'galleries'=>$galleries]);
    }


}