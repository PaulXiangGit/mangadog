<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"E:\phpStudy\WWW\haiyounet\comic\public/../application/index\view\keywordsearch\test.html";i:1553559054;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Autocomplete - Scrollable results</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .ui-autocomplete {
            max-height: 150px; //默认最大高度150像素
        overflow-y: auto; //添加滚动条
            /* prevent horizontal scrollbar */
        overflow-x: hidden;
        }
        /* IE 6 doesn't support max-height
         * we use height instead, but this forces the menu to always be this tall
         */
        * html .ui-autocomplete {
            height: 150px; //解决IE6下不识别max-height
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            var availableTags = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];
            $( "#tags" ).autocomplete({
                source: '/index/keywordsearch'
            });
        } );
    </script>
</head>
<body>
<div class="ui-widget">
    <label for="tags">Tags: </label>
    <input id="tags">
</div>
</body>
</html>