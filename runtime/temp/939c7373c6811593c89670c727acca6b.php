<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:88:"E:\phpStudy\WWW\haiyounet\comic\public/../application/index\view\latestupdate\index.html";i:1554368782;s:77:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\seo_header.html";i:1554100371;s:80:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\link_resource.html";i:1554252666;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\header.html";i:1554363904;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\footer.html";i:1554256851;}*/ ?>
<!doctype html>
<!--[if lt IE 8 ]><html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title><?php echo $seo_config['header']['title']; ?></title>
<meta name="description" content="<?php echo $seo_config['header']['description']; ?>"/>
<meta name="keywords" content="<?php echo $seo_config['header']['keywords']; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta property="fb:app_id" content="<?php echo $facebook_app_id; ?>" />

    <link rel="icon" href="/assets/img/frontend/common/logo.ico" type="image/x-icon">
<link rel="shortcut icon" href="/assets/img/frontend/common/logo.ico" type="image/x-icon">
<link rel="stylesheet" href="/assets/css/common/bootstrap.min.css?time=<?php echo $now; ?>"/>
<link rel="stylesheet" href="/assets/css/frontend/index/style.css?time=<?php echo $now; ?>" />
<link rel="stylesheet" href="/assets/css/common/common.css?time=<?php echo $now; ?>"/>
<link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="/assets/js/frontend/index/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="/assets/js/common/jquery-3.3.1.min.js" ></script>
<!--
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
-->
<script src="/assets/js/common/bootstrap.min.js" ></script>
<script src="/assets/js/common/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/assets/js/common/jquery.autocomplete.min.js" ></script>
<!--
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->
<script src="/assets/js/frontend/index/main.js"></script>
<!--[if lt IE 9]>
<script src="/assets/js/common/html5shiv.js"></script>
<script src="/assets/js/common/respond.min.js"></script>
<![endif]-->
<script>if (window != top)
    top.location.href = location.href
</script>
    <!--分页类-->
    <script src="/assets/js/common/bootstrap-paginator.min.js"></script>
    <!--分页类结束-->
    <!--模板渲染-->
    <script src="/assets/js/common/template-web.js"></script>
    <!--模板渲染结束-->
</head>
<style>
    #comic_list{color:black;min_height:500px;}
    .manga-item{margin-bottom:30px;}
</style>
<body class=" layout-boxed " style="color:black;">
<div class="wrapper">
    <!-- Website Menu -->

    <style>
    .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus{color:#006aa3;}
    .navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus{color:#006aa3;}
</style>
<nav class="navbar navbar-default" role="navigation"  style="background-color:#54c2f3;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>

            <h1 class="" style="margin:0;">
                <a class="navbar-brand" href="/index">
                    mangadog.club
                </a>
            </h1>
        </div>
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav  navbar-right ">
                <li class="search dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                    <div class="dropdown-menu">
                        <form class="navbar-form">
                            <div class="navbar-form  navbar-right " role="search">
                                <div class="form-group" style="width: 250px;">
                                    <input id="autocomplete" class="form-control" type="text" placeholder="search manga" style="border-radius:0; width: 100%;"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
            <!--
            <ul class="nav navbar-nav  navbar-right ">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="caret"></span></a>
                    <ul class="dropdown-menu profil-menu">
                        <li>
                            <a href="register.htm" >
                                <i class="fa fa-pencil-square-o"></i> Register
                            </a>
                        </li>
                        <li>
                            <a href="login.htm" >
                                <i class="fa fa-sign-in"></i> Login
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            -->


        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <!-- menu -->
            <ul class="nav navbar-nav  navbar-right ">
                <li >
                    <a href="/genre.html"
                       title="mangadog">
                        Genre
                    </a>
                </li>
                <li >
                    <a href="/latest-released.html"
                       title="Update Terbaru">
                        Latest Released
                    </a>
                </li>
                <li >
                    <a href="/completed"
                       title="Completed">
                        Completed
                    </a>
                </li>
                <li >
                    <a href="/ongoing"
                       title="Ongoing">
                        Ongoing
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<style>
    .searching {
        background-image: url('/assets/img/frontend/common/ajax-loader.gif');
        background-position: 95% 50%;
        background-repeat: no-repeat;
    }
</style>
<script type="text/javascript">
    $('#autocomplete').autocomplete({
        serviceUrl: "/index/keywordsearch/index",
        onSearchStart: function (query) {
            $('#autocomplete').addClass('searching');
        },
        onSearchComplete: function (query, suggestions) {
            $('#autocomplete').removeClass('searching');
        },
        onSelect: function (suggestions) {
            showURL = "/detail/SELECTION";
            window.location.href = showURL.replace('SELECTION', suggestions.data);
        }
    });
</script>
    <!--/ Website Menu -->
    <div class=" container ">
        <!-- row -->
        <div class="row">
            <div class="col-sm-10 col-sm-push-1">
                <h2 class="listmanga-header">
                    <i class="fa fa-calendar-o"></i>Latest Released
                </h2>
                <hr/>
                <input type="hidden" name="current_page" value="<?php echo $page; ?>" />
                <div id="comic_list" >
                    <div id="loading-img" style="margin:auto auto;height:175px;width:175px;">
                    <img src="/assets/img/frontend/common/loading.gif" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 text-center">
                        <ul id="pagination">
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!--/ row -->

        <!--/ row -->
        <div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="manga-footer">
                <!-- menu -->
                <ul class=" pull-right ">
                    <!--
                    <li >
                        <a href="latest-blog.htm"
                           title="Blog">
                            Blog
                        </a>
                    </li>

                    <li >
                        <a href="dmca.htm"
                           title="DMCA">
                            DMCA
                        </a>
                    </li>
                    <li >
                        <a href="privacy-policy-kebijakan-privacy.htm"
                           title="Privacy">
                            Privacy
                        </a>
                    </li>
                    <li >
                        <a href="tos-aturan-penggunaan.htm"
                           title="ToS">
                            ToS
                        </a>
                    </li>
                    <li >
                        <a href="contact-us.htm"
                           title="Contact">
                            Contact
                        </a>
                    </li>
                    -->
                    <!--
                    <li >
                        <a href="javascript:if(confirm(%27https://twitter.com/komikmangacom  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/komikmangacom%27"
                           target="_blank"    title="Twitter">
                            Twitter
                        </a>
                    </li>
                    <li >
                        <a href="pasang-iklan.htm"
                           title="Pasang Iklan">
                            Pasang Iklan
                        </a>
                    </li>
                    -->
                </ul>
                &copy;&nbsp;2019&nbsp;
                <a href="index.htm" >mangadog.com</a>
                &nbsp;
                <!--
                <a href="contact-us.htm"  title="Contact us"><i class="fa fa-envelope-square"></i></a>
                &nbsp;
                <a href="feed"  title="RSS feed" style="color: #FF9900"><i class="fa fa-rss-square"></i></a>
                -->
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var url = window.location.href;
        var element = $('ul.nav a').filter(function () {
            if (url.charAt(url.length - 1) == '/') {
                url = url.substring(0, url.length - 1);
            }

            return this.href == url;
        }).parent();

        if (element.is('li')) {
            element.addClass('active');
        }
    });
</script>

    </div>
</div>
</div>
<script id="comic_list_tpl" type="text/html">
    {{each data value i}}
    <div class="manga-item">
        <h3 class="manga-heading  pull-left ">
            <i class="fa fa-book"></i>
            <a href="/detail/{{value.search_name}}.html" style="color:#54c2f3;">{{value.comic_name}}</a>
        </h3>
        <small class=" pull-right " style="direction: ltr;">
            {{value.create_date}}
        </small>
        <div class="manga-chapter">
            {{each value.chapters chapter j}}
            <h6 class="events-subtitle">
                <a href="/read/{{chapter.comic_search_name}}/{{chapter.chapter_id}}.html">chapter:{{chapter.name}} </a>
            </h6>
            {{/each}}
        </div>
    </div>
    {{/each}}
</script>
<script>
    function render(current_page) {
        $("#comic_list").html();
        $("#loading-img").show();
        $.ajax({
            url: "/index/latestupdate/getUpdateResult",
            data: {
                page: current_page,
            },
            dataType: "json",
            success: function (result) {
                // 使用template-web.js将数据渲染到页面
                //var data=JSON.parse(result);
                if(result.data.length>0) {
                    var html = template('comic_list_tpl', result);
                }else{
                    var html = "<h4>Sorry,no update results</h4>";
                }
                $("#loading-img").hide();
                $("#comic_list").children(".manga-item").remove();
                $("#comic_list").append(html);
                $('#pagination').bootstrapPaginator({
                    currentPage: current_page,//当前的请求页面。
                    //pageUrl:"/index/classification/index?classification="+classification+"&page"+page, //页码
                    onPageClicked:function(e,originalEvent,type,page){
                        //window.location.href="latest-released/"+page;
                        render(page);
                    },
                    totalPages:result.code ,//一共多少页。
                    size:"normal",//应该是页眉的大小。
                    bootstrapMajorVersion: 3,
                    alignment:"right",
                    numberOfPages:6,//一页列出多少数据。
                    itemTexts: function (type, page, current) {
                        switch (type) {
                            case "first": return "<<";
                            case "prev": return "<";
                            case "next": return ">";
                            case "last": return ">>";
                            case "page": return page;
                        }
                    }
                });
            }
        })
    }
    var current_page = $("input[name='current_page']").val();
    render(current_page);
</script>
</body>
</html>