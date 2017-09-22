<?php
use yii\helpers\Url;
use \yii\widgets\ActiveForm;
use \yii\bootstrap\Html;
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link href="/statics/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/statics/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/statics/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/statics/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/statics/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/statics/css/icons.css" />

    <!-- libraries -->
    <link href="/statics/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="/statics/css/compiled/tables.css" type="text/css" media="screen" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!-- main container -->
<div class="content">


    <div class="container-fluid">
        <div id="pad-wrapper">

            <!-- products table-->
            <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
            <div class="table-wrapper products-table section">
                <div class="row-fluid head">
                    <div class="span12">
                        <h4>商品类型</h4>
                    </div>
                </div>

                <div class="row-fluid filter-block">
                    <div class="pull-right">
                        <a href="<?= Url::to(['goods-type/add'])?>" class="btn-flat success new-product">+ 添加商品类型</a>
                    </div>
                </div>

                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="span3">
                                <input type="checkbox" />
                                类型名
                            </th>
                            <th class="span3">
                                <span class="line"></span>分组
                            </th>
                            <th class="span3">
                                <span class="line"></span>状态
                            </th>
                            <th class="span3">
                                <span class="line"></span>操作
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <?php foreach($model as $value) {?>
                            <tr class="first">
                                <td>
                                    <input type="checkbox" />
                                    <?= $value['type_name'] ?>
                                </td>
                                <td class="description">
                                    <?= $value['attr_group'] ?>
                                </td>
                                <td><span class="label label-success">Active</span></td>
                                <td class="align-left">
                                    <a href="<?= Url::to(['attribute/show','tid'=>$value['type_id']]) ?>">属性列表</a> |
                                    <a href="<?= Url::to(['goods-type/update','tid'=>$value['type_id']])?>">修改</a> |
                                    <a href="<?= Url::to(['goods-type/del','tid'=>$value['type_id']])?>">删除</a>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end products table -->

            <div class="pagination pull-right">

                <!--                    <ul>-->
                <!--                        <li><a href="#">&#8249;</a></li>-->
                <!--                        <li><a class="active" href="#">1</a></li>-->
                <!--                        <li><a href="#">2</a></li>-->
                <!--                        <li><a href="#">3</a></li>-->
                <!--                        <li><a href="#">4</a></li>-->
                <!--                        <li><a href="#">5</a></li>-->
                <!--                        <li><a href="#">&#8250;</a></li>-->
                <!--                    </ul>-->
            </div>
        </div>
    </div>
</div>