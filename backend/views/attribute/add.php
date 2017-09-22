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
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/new-user.css" type="text/css" media="screen" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/form-showcase.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/form-showcase.css" type="text/css" media="screen" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<!-- navbar -->
<!-- end navbar -->

<!-- sidebar -->
<!-- end sidebar -->


<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>新增规格属性</h3>
            </div>

            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                    <div class="container">
                        <form class="new_user_form inline-input" />
                        <div class="span12 field-box">
                            <label>属性名:</label>
                            <input class="span9" type="text" />

                        </div>
                        <div class="field-box">
                            <label>所属商品类型:</label>
                            <select style="width:200px" class="select2">
                                <option />
                                <option value="AK" />Alaska
                                <option value="HI" />Hawaii
                                <option value="CA" />California
                            </select>
                        </div>
                        <div class="field-box">
                            <label>是否参与购买:</label>
                            <div class="span8">
                                <label class="radio">
                                    <input type="radio" name="optionsRadios" value="option1" checked="" />
                                    规格
                                </label>
                                <label class="radio">
                                    <input type="radio" name="optionsRadios" value="option2" />
                                    属性
                                </label>
                            </div>
                        </div>
                        <div class="span12 field-box textarea">
                            <label>可选值列表:</label>
                            <textarea class="span9"></textarea>
                        </div>

                        <div class="span11 field-box actions">
                            <input type="button" class="btn-glow primary" value="Create user" />
                            <span>OR</span>
                            <input type="reset" value="Cancel" class="reset" />
                        </div>
                        </form>
                    </div>
                </div>

                <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="btn-group toggle-inputs hidden-tablet">
                        <button class="glow left active" data-input="inline">INLINE INPUTS</button>
                        <button class="glow right" data-input="normal">NORMAL INPUTS</button>
                    </div>
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>
                        点击上面看到内联和正常输入表单上的区别
                    </div>
                    <h6>侧边栏文本说明</h6>
                    <p>按Enter键，录入多个可选值，每一行为一个可选值</p>
                    <p>选择下列快速通道:</p>
                    <ul>
                        <li><a href="#">品牌列表</a></li>
                        <li><a href="#">分类列表</a></li>
                        <li><a href="#"发布商品</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main container -->


<!-- scripts -->
<script src="js/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/theme.js"></script>

<script type="text/javascript">
    $(function () {


    });
</script>

</body>
</html>