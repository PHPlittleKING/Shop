<?php
/* @var $this yii\web\View */
?>
<!DOCTYPE html>
<html>
<head>
    <title>必应商城 - 后台管理</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/elements.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />

    <!-- libraries -->
    <link href="css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/tables.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' /> -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!-- navbar -->

<!-- end navbar -->

<!-- sidebar -->
<!-- end sidebar -->


<!-- main container -->
<div class="content">


    <div class="container-fluid">
        <div id="pad-wrapper">

            <!-- products table-->
            <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
            <div class="table-wrapper products-table section">
                <div class="row-fluid head">
                    <div class="span12">
                        <h4>规格属性列表</h4>
                    </div>
                </div>
            <?= \yii\helpers\Html::beginForm()?>
                <div class="row-fluid filter-block">
                    <div class="pull-right">
                        <div class="ui-select">
                            <?= \yii\helpers\Html::dropDownList('tid','')?>
                        </div>
                        <input type="text" class="search" />
                        <a href="<?= \yii\helpers\Url::toRoute('attribute/add')?>" class="btn-flat success new-product">+ 添加属性</a>
                    </div>
                </div>
            <?= \yii\helpers\Html::endForm(); ?>
                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="span3">
                                <input type="checkbox" />
                                属性名称
                            </th>
                            <th class="span3">
                                <span class="line"></span>所属类型
                            </th>
                            <th class="span3">
                                <span class="line"></span>类别
                            </th>
                            <th class="span3">
                                <span class="line"></span>可选值列表
                            </th>
                            <th class="span3">
                                <span class="line"></span>排序
                            </th>
                            <th class="span2">
                                <span class="line"></span>操作
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
                                <a href="#" class="name">内存类型 </a>
                            </td>
                            <td class="description">
                                笔记本电脑
                            </td>
                            <td><span class="label label-success">规格</span></td>
                            <td>4G 8G 16G</td>
                            <td>50</td>
                            <td class="align-left">
                                <a href="#">修改</a> |
                                <a href="#">删除</a>
                            </td>
                        </tr>
                        <!-- row -->
                        <tr>
                            <td>
                                <input type="checkbox" />
                                <a href="#" class="name">处理器类型</a>
                            </td>
                            <td class="description">
                                笔记本电脑
                            </td>
                            <td><span class="label label-info">属性</span></td>
                            <td>I3 I5 I7</td>
                            <td>50</td>
                            <td class="align-left">
                                <a href="#">修改</a> |
                                <a href="#">删除</a>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end products table -->

            <div class="pagination pull-right">
                <ul>
                    <li><a href="#">&#8249;</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&#8250;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end main container -->

<!-- scripts -->
<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/theme.js"></script>

</body>
</html>