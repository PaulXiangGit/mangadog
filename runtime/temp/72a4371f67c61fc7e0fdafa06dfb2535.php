<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"E:\phpStudy\WWW\haiyounet\comic\public/../application/index\view\classification\test.html";i:1553484575;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>basic-demo</title>
    <script src="/assets/js/common/template-web.js"></script>
</head>
<body>
<div id="content"></div>
<script id="test" type="text/html">
    <h1>{{title}}</h1>
    <ul>
        {{each list as value i}}
        <li>索引 {{i + 1}} ：{{value}}</li>
        {{/each}}
    </ul>
</script>
<script>
    var data = {
        title: '基本例子',
        isAdmin: true,
        list: ['文艺', '博客', '摄影', '电影', '民谣', '旅行', '吉他']
    };
    var html = template('test', data);
    document.getElementById('content').innerHTML = html;
</script>
</body>
</html>