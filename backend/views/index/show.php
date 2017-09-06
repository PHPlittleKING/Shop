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
    <form action="?r=index/add" method="post">
        <h3>欢迎<?php echo $_COOKIE['username']?>登录</h3>
        <h3>活动添加</h3>
        <table>
            <tr>
                <td>活动标题</td>
                <td><input type="text" name="title" id=""></td>
            </tr>
            <tr>
                <td>活动介绍</td>
                <td><textarea cols="15" rows="3" name="message"></textarea></td>
            </tr>
            <tr>
                <td>活动开始时间</td>
                <td><input type="text" name="begin" id=""></td>
            </tr>
            <tr>
                <td>活动结束时间</td>
                <td><input type="text" name="end" id=""></td>
            </tr>
            <tr>
                <td>人数限制</td>
                <td><input type="text" name="num" id=""></td>
            </tr>
            <tr align="center">
                <td><input type="submit" value="提交活动"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>