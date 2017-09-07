<?php

use \yii\helpers\url;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\LinkPager;



?>
<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>品牌列表</h3>
                <div class="span10 pull-right">
                    <input type="text" class="span5 search" placeholder="Type a user's name..." />

                    <div class="ui-dropdown">
                        <button class="btn">Search</button>
                    </div>

                    <a href="<?= Url::toRoute('brand/add')?>" class="btn-flat success pull-right">
                        <span>&#43;</span>
                        添加新品牌
                    </a>
                </div>
            </div>

            <!-- Users table -->
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="span4 sortable">
                            品牌名/简短描述
                        </th>

                        <th class="span2 sortable">
                            <span class="line"></span>排序
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>是否展示
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <!-- row -->
                    <?php foreach ($sql as $key => $value): ?>
                        <tr class="first">
                            <td>
                                <img src="img/contact-img.png" class="img-circle avatar thumbnail hidden-phone" />
                                <a href="user-profile.html" class="name"><?=$value['b_name'] ?></a>
                                <span class="subtext"><?=$value['b_desc']?></span>
                            </td>
                            <td><?=$value['sort']?></td>
                            <td>
                                <?=$value['is_show']?>
                            </td>
                            <td class="align-right">
                                <a href="<?= Url::toRoute(['brand/update','id'=>$value['id']])?>">修改</a> |
                                <a href="<?= Url::toRoute('brand/del')?>">回收站</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
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

            <!-- end users table -->
        </div>
    </div>
</div>
<!-- end main container -->


