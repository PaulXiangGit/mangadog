<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:81:"E:\phpStudy\WWW\haiyounet\comic\public/../application/index\view\index\index.html";i:1554365111;s:77:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\seo_header.html";i:1554100371;s:80:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\link_resource.html";i:1554252666;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\header.html";i:1554363904;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\footer.html";i:1554256851;s:80:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\return_to_top.html";i:1553652383;}*/ ?>
<!doctype html>
<!--[if lt IE 8 ]><html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
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

    <script>
    if (window != top)
        top.location.href = location.href
    </script>

</head>
<style>

</style>
<body class=" layout-boxed ">
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
            <div class="col-sm-12">
            </div>
        </div>
        <!--/ row -->

        <!-- row -->
        <div class="row">

            <div class="col-sm-4 col-sm-push-8 mt50">

                <!-- About Me -->
                <div class="alert alert-success text-center" style="margin: 0px;background-color:#315c73;border:1px solid #315c73;color:#a6c3d2;">
                    <div class="about">
                        <h2><?php echo $seo_config['content_right']['title']; ?></h2>
                        <h6 style="margin:15px auto;"><?php echo $seo_config['content_right']['description']; ?></h6>
                        <p class="hidden-xs">
                           <?php echo $seo_config['content_right']['keywords']; ?>
                        </p>
                    </div>
                </div>
                <!--/ About Me -->
                <div class="panel panel-success hidden-xs mt50" style="border:1px solid #54c2f3;">
                    <div class="panel-heading" style="background-color:#54c2f3;">
                        <h3 class="panel-title"><strong>Top Manga</strong></h3>
                    </div>
                    <ul>
                        <?php if(is_array($top_rank_list) || $top_rank_list instanceof \think\Collection || $top_rank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $top_rank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="/detail/<?php echo $vo['search_name']; ?>.html">
                                        <img src="<?php echo $image_prefix.$vo['image']; ?>" alt='<?php echo $vo['name']; ?>' style="width:50px;height:50px;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="/detail/<?php echo $vo['search_name']; ?>.html" class="chart-title" ><strong><?php echo $vo['name']; ?></strong></a></h5>
                                    <i class="fa fa-eye"></i> <?php echo $vo['views']; ?>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

                <div style="clear:both"></div>
            </div>
            <div class="col-sm-8 col-sm-pull-4">
                <div class="col-sm-12" style="padding: 0px;color:#000000;">
                    <h2 class="hotmanga-header"><i class="fa fa-star"></i>Hot Manga Updates</h2>
                    <hr/>

                    <ul class="hot-thumbnails">
                        <?php if(is_array($comic_list) || $comic_list instanceof \think\Collection || $comic_list instanceof \think\Paginator): $i = 0; $__LIST__ = $comic_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="col-sm-4">
                            <div class="photo" style="position: relative;">
                                <div class="manga-name">
                                    <a class="label label-warning" href="/detail/<?php echo $vo['search_name']; ?>.html">
                                        <?php echo $vo['name']; ?>
                                    </a>
                                </div>
                                <a class="thumbnail" style="position: relative; /*z-index: 10;*/ background: rgb(255, 255, 255) none repeat scroll 0% 0%;" href="/detail/<?php echo $vo['search_name']; ?>.html">
                                    <img src="<?php echo $image_prefix.$vo['image']; ?>"  alt='<?php echo $vo['image_alt']; ?>' style="height:275px;width:95%;" />
                                </a>
                                <div class="well" style="background-color:#54c2f3;">
                                    <a href="/read/<?php echo $vo['search_name']; ?>/<?php echo $vo['latest_chapter_id']; ?>.html" >
                                        <p  class="latest-chapter-name">
                                            <i class="fa fa-book"></i>
                                            <?php echo $vo['latest_chapter_name']; ?>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>
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
</body>
</html>