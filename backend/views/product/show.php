<div class="content">

    <div class="container-fluid">

        <div id="pad-wrapper">

            <div class="row-fluid head">
                <div class="span5">
                    <h5>商品属性规格</h5>
                </div>
                <div class="span5">
                    <h5>商品名称：Apple MacBook 12英寸笔记本电脑</h5>
                </div>
            </div>

            <div class="row-fluid filter-block">
                <div class="pull-right">
                    <!-- <a href="good-type-add.html" class="btn-flat success">+</a> -->
                </div>
            </div>

            <div class="row-fluid">

                <div class="container">
                    <label>商品类型:</label>
                    <div class="ui-select">
                        <select>
                            <option />手机
                            <option />图书
                            <option />笔记本
                        </select>
                    </div>
                    <label class="label">请选择商品的所属类型，进而完善此商品的属性</label>
                    <hr>
                    <form class="new_user_form inline-input" >
                        <!-- 属性 -->
                        <div class="span6 column">
                            <div class="field-box">
                                <label>生产日期:</label>
                                <input class="span5" type="text" />
                            </div>

                            <div class="field-box">
                                <label>品牌名:</label>
                                <input class="span5" type="text" />
                            </div>

                            <div class="field-box">
                                <label>品牌官网:</label>
                                <input class="span5" type="text" />
                            </div>

                            <div class="field-box">
                                <label>屏幕尺寸:</label>
                                <div class="ui-select">
                                    <select>
                                        <option selected="">13</option>
                                        <option>13.3</option>
                                        <option>15.6</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!-- 规格 -->
                        <div class="span6 column pull-right">
                            <div class="field-box">
                                <label>颜色:</label>
                                <div class="ui-select">
                                    <select>
                                        <option selected="">土豪金</option>
                                        <option>星空灰</option>
                                        <option>玫瑰红</option>
                                    </select>
                                </div>
                                <span class="btn-flat">+</span>
                            </div>

                            <div class="field-box">
                                <label>颜色:</label>
                                <div class="ui-select">
                                    <select>
                                        <option selected="">土豪金</option>
                                        <option>星空灰</option>
                                        <option>玫瑰红</option>
                                    </select>
                                </div>
                                <span class="btn-flat">&#8722;</span>
                            </div>

                            <div class="field-box">
                                <label>颜色:</label>
                                <div class="ui-select">
                                    <select>
                                        <option selected="">土豪金</option>
                                        <option>星空灰</option>
                                        <option>玫瑰红</option>
                                    </select>
                                </div>
                                <span class="btn-flat">&#8722;</span>
                            </div>

                            <div class="field-box">
                                <label>内存:</label>
                                <div class="ui-select">
                                    <select>
                                        <option selected="">4G</option>
                                        <option>8G</option>
                                        <option>16G</option>
                                    </select>
                                </div>
                                <span class="btn-flat">+</span>
                            </div>

                        </div>



                    </form>
                </div>

                <div class="span8 field-box actions pull-right">
                    <input type="button" class="btn-glow primary" value="确认保存" />
                </div>

            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div id="pad-wrapper">

            <!-- products table-->
            <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
            <div class="table-wrapper products-table section">
                <div class="row-fluid head">
                    <div class="span5">
                        <h5>货品组合列表</h5>
                    </div>

                </div>

                <div class="row-fluid filter-block">
                    <div class="pull-right">
                        <a href="<?= \yii\helpers\Url::toRoute('goods-type/show')?>" class="btn-flat success new-product">返回列表</a>
                    </div>
                </div>

                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="span3">
                                <input type="checkbox" />
                                <span class="line"></span>颜色
                            </th>
                            <th class="span3">
                                <span class="line"></span>内存
                            </th>
                            <th class="span3">
                                <span class="line"></span>货号
                            </th>
                            <th class="span3">
                                <span class="line"></span>价格
                            </th>
                            <th class="span3">
                                <span class="line"></span>库存
                            </th>
                            <th class="span3">
                                <span class="line"></span>操作
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
                                土豪金
                            </td>
                            <td>
                                4G
                            </td>
                            <td><span class="label label-success">ECS000063</span></td>
                            <td>888￥</td>
                            <td>110</td>
                            <td class="align-left">
                                <span class="btn-flat new-product">&#8722;</span>
                            </td>
                        </tr>
                        <!-- row -->
                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
                                土豪金
                            </td>
                            <td>
                                8G
                            </td>
                            <td><span class="label label-success">ECS000064</span></td>
                            <td>666￥</td>
                            <td>110</td>
                            <td class="align-left">
                                <span class="btn-flat new-product">&#8722;</span>
                            </td>
                        </tr>
                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
                                <div class="ui-select">
                                    <select>
                                        <option />土豪金
                                        <option />星空灰
                                        <option />玫瑰红
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="ui-select">
                                    <select>
                                        <option />4G
                                        <option />8G
                                        <option />16G
                                    </select>
                                </div>
                            </td>
                            <td>
                                <input type="text" class="span10">
                            </td>
                            <td><input type="text" class="span5"></td>
                            <td><input type="text" class="span5"></td>
                            <td class="align-left">
                                <span class="btn-flat new-product">+</span>
                            </td>
                        </tr>
                        <!-- row -->


                        </tbody>
                    </table>

                    <div class="span8 field-box actions pull-right">
                        <input type="button" class="btn-glow primary" value="确认保存" />
                    </div>

                </div>
            </div>
            <!-- end products table -->
        </div>
    </div>
</div>
