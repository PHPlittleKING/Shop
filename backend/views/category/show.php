
<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>分类列表</h3>
                <div class="span10 pull-right">
                    <input type="text" class="span5 search" placeholder="Type a user's name..." />

                    <a href="<?= \yii\helpers\Url::to(['category/add']);?>" class="btn-flat success pull-right">
                        <span>&#43;</span>
                        添加新分类
                    </a>
                </div>
            </div>

            <?= $this->render('/common/message');?>

            <!-- Users table -->
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="span3 sortable">
                            <span class="line"></span>分类名
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row -->
                    <tr class="first">
                        <td>
                            男装
                        </td>
                        <td class="align-right">
                            <a href="#">修改 |</a>
                            <a href="#">删除</a>

                        </td>
                    </tr>
                    <!-- row -->
                    <!-- row -->
                    <tr class="first">
                        <td>
                            |-----男士短裤
                        </td>
                        <td class="align-right">
                            <a href="#">修改 |</a>
                            <a href="#">删除</a>
                        </td>
                    </tr>
                    <!-- row -->


                    </tbody>
                </table>
            </div>
            <div class="pagination pull-right">

            </div>
            <!-- end users table -->
        </div>
    </div>
</div>
<!-- end main container -->


