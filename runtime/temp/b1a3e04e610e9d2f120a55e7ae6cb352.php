<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:80:"E:\phpStudy\WWW\haiyounet\comic\public/../application/index\view\read\index.html";i:1554369180;s:77:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\seo_header.html";i:1554100371;s:85:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\link_resource_read.html";i:1554252679;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\header.html";i:1554363904;s:84:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\facebook_comments.html";i:1553843867;s:80:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\return_to_top.html";i:1553652383;}*/ ?>
<!DOCTYPE html>
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $seo_config['header']['title']; ?></title>
<meta name="description" content="<?php echo $seo_config['header']['description']; ?>"/>
<meta name="keywords" content="<?php echo $seo_config['header']['keywords']; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta property="fb:app_id" content="<?php echo $facebook_app_id; ?>" />


    <link rel="icon" href="/assets/img/frontend/common/logo.ico" type="image/x-icon">
<link rel="shortcut icon" href="/assets/img/frontend/common/logo.ico" type="image/x-icon">
<link rel="stylesheet"href="/assets/css/common/bootstrap.min.css?time=<?php echo $now; ?>">
<link rel="stylesheet"href="/assets/css/common/common.css">
<link rel="stylesheet" href="/assets/css/frontend/read/read.css">
<link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet"href="/assets/css/common/bootstrap-select.min.css">
<script src="/assets/js/common/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="/assets/js/common/jquery.autocomplete.min.js" ></script>
<script src="/assets/js/common/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/common/bootstrap-select.min.js" type="text/javascript"></script>
    <!--延迟加载图片用-->
    <script src="/assets/js/common/jquery.unveil.js" type="text/javascript"></script>
    <script src="/assets/js/common/jquery.plugins.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="/assets/js/common/html5shiv.js"></script>
    <script src="/assets/js/common/respond.min.js"></script>
    <![endif]-->

    </head>
<body class="read-background">
<script>
    // ===== Scroll to Top ====
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 500) {        // If page is scrolled more than 50px
            $('#page_code').fadeIn(200);    // Fade in the arrow
        } else {
            $('#page_code').fadeOut(200);   // Else fade out the arrow
        }
    });
</script>
<script type="text/javascript">
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
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
<div class="container-fluid">
    <div class="pager-cnt">
        <div class="row">
            <div class="col-xs-12">
                <p>
                    <a href="/index">
                        Home
                    </a> &gt;&gt;	<a href="/detail/<?php echo $comic_info['search_name']; ?>.html"><?php echo $comic_info['name']; ?></a> &gt;&gt;  <?php echo $chapter_info['name']; ?>
                </p>
            </div>

            <div class="col-xs-12">

                <!-- Binbin-->
                <div class="read-background col-sm-12" >
                    <div class="col-sm-4">
                        <select class="selectpicker fl col-sm-push-1" data-width="100%" style="outline:none;" onchange="window.open('/read/<?php echo $comic_info['search_name']; ?>/'+this.value+'.html','_self');" >
                            <?php if(is_array($chapter_list) || $chapter_list instanceof \think\Collection || $chapter_list instanceof \think\Paginator): $i = 0; $__LIST__ = $chapter_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $data['id']; ?>" <?php if($data['id']==$chapter_info['id']): ?>selected="selected"<?php endif; ?> >chapter: <?php echo $data['name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <?php if(!empty($next_chapter_link)): ?>
                    <div class="col-sm-4 pull-right">
                        <a href="<?php echo $next_chapter_link; ?>">
                            <button type="button" class="btn btn-primary fr ">next→ chapter</button>
                        </a>
                    </div>
                    <?php endif; if(!empty($last_chapter_link)): ?>
                    <div class="col-sm-4 pull-right">
                        <a href="<?php echo $last_chapter_link; ?>">
                        <button type="button" class="btn btn-primary fr col-sm-pull-1">←prev chapter</button>
                        </a>
                    </div>
                    <?php endif; ?>

            </div>
        </div>
    </div>


    <div class="viewer-cnt">
        <div class="row">
            <div class="col-sm-2 hidden-xs" style="position: relative">
                <div style="left: 0; right: 0; margin: 0 auto; position: absolute; display: table;">

                    <br>

                </div>
            </div>
            <div class="col-xs-12 col-sm-8">
                <div id="all" class="row" style="">
                    <div id="page_code" class="read-background col-sm-6" style="display:none;position:fixed;top:0px;left:25%;" >
                        <div class="col-sm-4">
                            <select class="selectpicker fl col-sm-push-1" data-width="100%" style="outline:none;" onchange="window.open('/read/<?php echo $comic_info['search_name']; ?>/'+this.value+'.html','_self');">
                                <?php if(is_array($chapter_list) || $chapter_list instanceof \think\Collection || $chapter_list instanceof \think\Paginator): $i = 0; $__LIST__ = $chapter_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $data['id']; ?>" <?php if($data['id']==$chapter_info['id']): ?>selected="selected"<?php endif; ?>>chapter: <?php echo $data['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <?php if(!empty($next_chapter_link)): ?>
                        <div class="col-sm-4 pull-right">
                            <a href="<?php echo $next_chapter_link; ?>">
                                <button type="button" class="btn btn-primary fr ">next→ chapter</button>
                            </a>
                        </div>
                        <?php endif; if(!empty($last_chapter_link)): ?>
                        <div class="col-sm-4 pull-right">
                            <a href="<?php echo $last_chapter_link; ?>">
                                <button type="button" class="btn btn-primary fr col-sm-pull-1">←prev chapter</button>
                            </a>
                        </div>
                        <?php endif; ?>

                    </div>
                    <?php if(is_array($image_list) || $image_list instanceof \think\Collection || $image_list instanceof \think\Paginator): $k = 0; $__LIST__ = $image_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <img class="img-responsive" style="padding-bottom: 1px;padding-top : 0;" src="/assets/img/frontend/common/loading.gif" data-src="<?php echo $image_prefix; ?><?php echo $vo['image']; ?> " alt="<?php echo $comic_info['name']; ?> Manga Episode <?php echo $chapter_info['name']; ?> <?php echo $k; ?>">
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
            </div>
            <div class="col-sm-2 hidden-xs" style="position: relative">
                <div style="left: 0; right: 0; margin: 0 auto; position: absolute; display: table;">

                    <br>

                </div>
            </div>
        </div>
    </div>

    <div class="ads">
        <div class="row">
            <div class="col-xs-12">
                <div class="ads-large text-center" style="max-width: 890px; display: table; margin: 20px auto 10px;">

                </div>
                <div style="display: table; margin: 0px auto 0px;">
                    <div class="pull-left ads-sqre1" style="margin-right: 0px;">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pager-cnt">

        <div class="row">
            <div class="col-xs-12">
                <!-- Binbin-->
                <div class="row">
                    <div class="col-xs-12">
                        <p>
                            <a href="/index">
                                Home
                            </a> &gt;&gt;	<a href="/detail/<?php echo $comic_info['search_name']; ?>.html"><?php echo $comic_info['name']; ?></a> &gt;&gt;  chapter:<?php echo $chapter_info['name']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- comment -->
    <div class="row" style="max-width: 890px; margin:15px auto;">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#fb" aria-controls="fb" role="tab" data-toggle="tab">Facebook</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" >
                <div role="tabpanel" class="tab-pane active" id="fb">
                    <style>
    .fb_iframe_widget span, .fb_iframe_widget span iframe {width: 100% !important;}
</style>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2">
</script>
<div class="fb-comments"   data-width="1000px" data-numposts="5"   >
</div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        var initialized = false;
        <!-- 实现图片懒加载-->
        jQuery(document).ready(function () {
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 200);
            $('.selectpicker').selectpicker();
            if ($("div#all").is(":visible")){
                $("div#all img").unveil(300);
            }
        });

        // refresh test
        /*
        $('a#modePPP').click(function (e) {
            e.preventDefault();
            $('.pager-cnt .page-nav').show();
            $('div#ppp').show();
            $('div#all').hide();
            $(document).on('keyup', function (e) {
                KeyCheck(e);
            });
        });

        $('a#modeALL').click(function (e) {
            e.preventDefault();
            $('.pager-cnt .page-nav').hide();
            $('div#ppp').hide();
            $('div#all').show();
            $(document).off('keyup');
            $("div#all img").unveil(300);
        });
        */
        $('select#page-list').on('change', function () {
            changePage(this.value);
        });

        // $(document).on('keyup', function (e) {
        //     KeyCheck(e);
        // });
        //
        // function KeyCheck(e) {
        //     var ev = e || window.event;
        //     ev.preventDefault();
        //     var KeyID = ev.keyCode;
        //     switch (KeyID) {
        //         case 36:
        //             //window.location = "https://komikmanga.com/manga/tate-no-yuusha-no-nariagari";
        //             break;
        //         //case 33:
        //         case 37:
        //             //prevPage();
        //             prevChap();
        //             break;
        //         //case 34:
        //         case 39:
        //             //nextPage();
        //             nextChap();
        //             break;
        //     }
        // }

    </script>
</div>


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
