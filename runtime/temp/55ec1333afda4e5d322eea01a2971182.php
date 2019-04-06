<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:90:"E:\phpStudy\WWW\haiyounet\comic\public/../application/index\view\classification\index.html";i:1554372350;s:77:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\seo_header.html";i:1554100371;s:80:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\link_resource.html";i:1554252666;s:80:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\return_to_top.html";i:1553652383;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\header.html";i:1554370878;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\footer.html";i:1554256851;}*/ ?>
<!DOCTYPE html>
<!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
    </title>
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
<body class=" layout-boxed ">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<script>
    // ===== Scroll to Top ====
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $(document).ready($('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    }));
</script>

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
                <a class="navbar-brand" href="/">
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

    <div class=" container ">
        <!-- row -->
        <div class="row">
            <div class="col-sm-12">
            </div>
        </div>
        <!--/ row -->

        <!-- row -->
        <div class="row">
            <div class="col-sm-4 col-sm-push-8">
                <div class="image-version-sidebar">
                    <div class="panel panel-default" style="border:1px solid #54c2f3;">
                        <div class="panel-heading" style="background-color:#54c2f3;">Search Manga By Genres</div>
                        <div class="panel-body" >
                            <ul class="list-category">
                                <?php if(is_array($classification_list) || $classification_list instanceof \think\Collection || $classification_list instanceof \think\Paginator): $i = 0; $__LIST__ = $classification_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                                <li>
                                    <a href="<?php echo $data['url']; ?>"  style="color:#00a1d7;"><?php echo $data['name']; ?></a>
                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-sm-8 col-sm-pull-4">
                <div class="col-sm-12">
                    <input type="hidden" name="type" value="<?php echo $type; ?>" />
                    <input type="hidden" name="classification" value="<?php echo $classification; ?>" />
                    <input type="hidden" name="artist" value="<?php echo $artist; ?>" />
                    <input type="hidden" name="current_page" value="<?php echo $page; ?>" />
                    <input type="hidden" name="state" value="<?php echo $state; ?>" />
                    <div class="type-content">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="filter-text pull-left">
                                    <?php if(!empty($classification_text)): ?>
                                    <?php echo $classification_text; elseif(!empty($artist)): ?>
                                    <?php echo $artist; else: ?>
                                    Top Rank
                                    <?php endif; ?>
                                </div>
                                <!--
                                <div class="pull-right">
                                    Sort by:
                                    <div id="sort-types" class="btn-group" role="group" data-toggle="buttons">

                                        <div class="btn-group" role="group">
                                            <label class="btn btn-default">
                                                <input type="radio" name="sort-type" id="views"> dilihat
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                        <div class="row cb col-sm-12" id="comic_list" style="min-height:500px;">
                            <div id="loading-img" style="margin:auto auto;height:175px;width:175px;">
                            <img src="/assets/img/frontend/common/loading.gif"  />
                            </div>
                        </div>
                        <div class="row col-sm-12" style="padding-left:50px;">
                            <ul id="pagination">

                            </ul>
                        </div>

                    </div>
                </div>
            </div>



        </div>
        <script id="comic_list_tpl" type="text/html">
            {{each data value i}}
            <div class="col-sm-6 row-eq-height" style="height:200px;">
                <div class="media" style="margin-bottom: 20px;">
                    <div class="media-left">
                        <a href="/detail/{{value.search_name}}.html" class="comic-cover-border" >
                            <img class="comic-cover-size" src="<?php echo $image_prefix; ?>{{value.image}}" alt="{{value.name}}">
                        </a>
                    </div>
                    <div class="media-body" >
                        <h5 class="media-heading">
                            <a href="/detail/{{value.search_name}}.html" class="chart-title md-title" style="color:#54c2f3;">
                                <strong>{{value.name}}</strong>
                            </a>
                        </h5>
                        <div style="font-size:12px;">
                            <i class="fa fa-eye"></i> {{value.views}}
                        </div>
                        <div style="font-size:12px;">
                            <span class="label label-success">{{value.state}}</span>

                        </div>


                        <a href="{{value.main_subject_text.url}}" class="md-title">{{value.main_subject_text.text}}</a>
                        {{each value.sub_subject_text subject j}}
                        ,&nbsp;
                        <a href="{{subject.url}}" class="md-title">
                            {{subject.text}}
                        </a>
                        {{/each}}
                    </div>
                </div>
            </div>
            </div>
            {{/each}}
        </script>
        <script type="text/javascript">
            function render(type,current_page) {
                $("#comic_list").html();
                $("#loading-img").show();
                if(type=="classification"){
                    let classification = $("input[name='classification']").val();
                    let state = $("input[name='state']").val();
                    getClassificationResult(current_page,classification,state)
                }else if(type=="artist"){
                    let artist = $("input[name='artist']").val();
                    getArtistResult(current_page,artist);
                }else{
                    return false;
                }
            }
            var type = $("input[name='type']").val();
            var current_page = $("input[name='current_page']").val();
            render(type,current_page);
            function getClassificationResult(current_page,classification,state)
            {
                $.ajax({
                    url: "/index/classification/search",
                    data: {
                        page:current_page,
                        classification:classification,
                        state:state,
                    },
                    dataType: "json",
                    traditional:true,
                    success: function (result) {
                        console.log(result);
                        //rederComicTemplate("classification",current_page,classification,state,result);
                    }
                })
            }

            function getArtistResult(current_page,artist){
                $.ajax({
                    url: "/index/classification/searchartist",
                    data: {
                        page:current_page,
                        artist:artist,
                    },
                    dataType: "json",
                    traditional:true,
                    success: function (result) {
                        console.log(result);
                        rederComicTemplate("artist",current_page,artist,"",result);
                    }
                })
            }
            function rederComicTemplate(type,current_page,param,state,result){
                $("#loading-img").hide();
                // 使用template-web.js将数据渲染到页面
                var data=result.data;
                if(data.data.length>0) {
                    var html = template('comic_list_tpl', data);
                }else{
                    var html = "<h4>no search result</h4>";
                }
                $("#comic_list").children(".row-eq-height").remove();
                $("#comic_list").append(html);
                if(data.pageNum==0){
                    return false;
                }
                rederPageNum(current_page,data.pageNum,type,param);
            }

            function rederPageNum(current_page,pageNum,search_type,param){
                $('#pagination').bootstrapPaginator({
                    currentPage: current_page,//当前的请求页面。
                    onPageClicked:function(e,originalEvent,type,page){
                        if(search_type=="classification") {
                            //window.location.href = "/index/classification/" + param + "/page/" + page + ".html";
                            render("classification",page);
                        }else if(search_type=="artist"){
                            //window.location.href = "/index/classification/artist/name/" +param + "/page/" + page + ".html";
                            render("artist",page);
                        }
                    },
                    totalPages:pageNum ,//一共多少页。
                    size:"normal",//应该是页眉的大小。
                    bootstrapMajorVersion: 3,
                    alignment:"right",
                    numberOfPages:5,//一页列出多少数据。
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
        </script>
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
        <script type="text/javascript">
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

<script type="text/javascript">
    // ===== Scroll to Top ====
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $(document).ready($('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    }));
</script>