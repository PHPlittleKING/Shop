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
    <table>
        <th>姓名</th>
        <th>手机号</th>
        <?php foreach($data as $k=>$v){?>
            <tr>
                <td><?php echo $v['tel']?></td>
                <td><?php echo $v['username']?></td>
            </tr>
        <?php }?>
    </table>
</center>
</body>
</html>