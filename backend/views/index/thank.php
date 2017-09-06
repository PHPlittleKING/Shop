<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <h3>活动列表</h3>
    <table border="1">
        <th>活动标题</th>
        <th>活动介绍</th>
        <th>活动开始时间</th>
        <th>活动结束时间</th>
        <th>人数限制</th>
        <th>查看报名人数</th>
        <?php foreach($data as $k=>$v){?>
            <tr>
                <td><?php echo $v['title']?></td>
                <td><?php echo $v['message']?></td>
                <td><?php echo $v['begin']?></td>
                <td><?php echo $v['end']?></td>
                <td><?php echo $v['num']?></td>
                <td><a href="?r=index/num&id=<?php echo $v['pid']?>">点击查看</a></td>
            </tr>
        <?php }?>
    </table>
</center>
</body>
</html>