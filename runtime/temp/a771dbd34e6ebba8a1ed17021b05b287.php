<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:82:"E:\phpStudy\WWW\haiyounet\comic\public/../application/index\view\detail\index.html";i:1554370471;s:77:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\seo_header.html";i:1554100371;s:80:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\link_resource.html";i:1554252666;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\header.html";i:1554363904;s:73:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\footer.html";i:1554256851;s:80:"E:\phpStudy\WWW\haiyounet\comic\application\index\view\public\return_to_top.html";i:1553652383;}*/ ?>
<!doctype html>
<!--[if lt IE 8 ]><html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
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
    .fb_iframe_widget span, .fb_iframe_widget span iframe {width: 100% !important;}
    .bgw{background-color:white;}
    dd>a{color:#54c2f3;}dd>a:hover,dd>a:focus{color:#007299;}
</style>
<body class=" layout-boxed " style="color:#000000;">

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
        <input type="hidden" name="comic_id" value="<?php echo $comic_info['id']; ?>" />
        <!-- row -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="widget-title fs" style="display: inline-block;"><?php echo $comic_info['name']; ?> Manga</h1>
                <hr/>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="boxed" style="width: 250px; height: auto;text-align:center;margin:0 auto;">
                            <img class="img-responsive" src="<?php echo $image_prefix.$comic_info['image']; ?>"  alt='<?php echo $comic_info['image_alt']; ?>' style="width:200px;height:250px;"/>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <dl class="dl-horizontal">
                            <dt>Status</dt>
                            <dd>
                                <span class="label label-success"><?php echo $comic_info['state']; ?></span>
                            </dd>
                            <dt>Artist</dt>
                            <dd>
                                <?php if(!empty($comic_info['artist'])): if(is_array($comic_info['artist']) || $comic_info['artist'] instanceof \think\Collection || $comic_info['artist'] instanceof \think\Paginator): $k = 0; $__LIST__ = $comic_info['artist'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(($k != 1)): ?>
                                            ,
                                        <?php endif; ?>
                                        <a href="/artist/<?php echo $vo; ?>.html" >
                                            <?php echo $vo; ?>
                                        </a>
                                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
                                    Anonymous
                                <?php endif; ?>
                            </dd>
                            <dt>Type</dt>
                            <dd>
                                manga
                            </dd>
                            <dt>Genres</dt>
                            <dd>
                                <?php if(is_array($classification_list) || $classification_list instanceof \think\Collection || $classification_list instanceof \think\Paginator): $k = 0; $__LIST__ = $classification_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                <a href="/genre/<?php echo $vo['search_name']; ?>.html" >
                                    <?php if($k!=1): ?>,<?php endif; ?><?php echo $vo['name']; ?>
                                </a>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </dd>
                            <dt>Views</dt>
                            <dd><?php echo $comic_info['views']; ?></dd>

                        </dl>

                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="well cw">
                            <h2 class="fs15"><strong><?php echo $comic_info['name']; ?> Mange English</strong></h2>
                            <p>
                                <?php echo $comic_info['intro']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="widget-title" style="display: inline-block;"><?php echo $comic_info['name']; ?> Related Manga</h2>
                <hr/>
                <div class="row">
                    <div class="col-lg-12">
                        <?php if(is_array($recommend_comic_list) || $recommend_comic_list instanceof \think\Collection || $recommend_comic_list instanceof \think\Paginator): $i = 0; $__LIST__ = $recommend_comic_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <div class="col-lg-3 col-sm-12 tcenter" >
                            <a href="/detail/<?php echo $vo['search_name']; ?>.html">
                                <img class="img-responsive w90 h90 l5" src="<?php echo $image_prefix.$vo['image']; ?>"  alt='<?php echo $vo['image_alt']; ?>' style="margin:0 auto;height:275px;width:95%;" />
                            </a>
                            <!--
                            <a class="anone cblack" href="/index/classification/index/name/<?php echo $vo['main_subject_text']; ?>.html"><?php echo $vo['main_subject_text']; ?></a><br/>
                            -->
                            <a class="anone md-title" href="/detail/<?php echo $vo['search_name']; ?>.html"><?php echo $vo['name']; ?></a>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12" style="color:#000000;min-height:620px;">
                        <h2 class="widget-title"><?php echo $comic_info['name']; ?> Chapters</h2>
                        <hr/>

                        <ul class="chapters tcenter" id="chapters">
                            <img src="/assets/img/frontend/common/loading.gif" style="margin:auto auto;" display="none"/>

                        </ul>
                    </div>
                </div>
                <div class="row col-sm-12 tcenter" style="padding-left:50px;">
                    <ul id="pagination">

                    </ul>
                </div>
                <!-- comment -->
                <div class="hrule"><br/></div>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2">
                </script>

                <div class="row" style="margin:15px auto;">
                    <div class="col-xs-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#fb" aria-controls="fb" role="tab" data-toggle="tab">Facebook</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="fb">
                                <div class="fb-comments"   data-width="1000px" data-numposts="5"   >
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
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
    </div>
</div>
</div>
<script id="chapter_list_tpl" type="text/html">
    {{each data value i}}
    <li style="padding: 3px 0;" class="volume-">
        <h5 class="chapter-title-rtl text-left">
            <a href="/read/<?php echo $comic_info['search_name']; ?>/{{value.id}}.html" ><?php echo $comic_info['name']; ?> Manga {{value.name}}</a>
        </h5>
        <div class="action ">
            <div style="float:right" class="date-chapter-title-rtl hidden-xs">
                {{value.create_date}}
            </div>
        </div>
    </li>
    {{/each}}
</script>
<script>
    var comic_id = $("input[name='comic_id']").val();
    function render(page,comic_id) {
        $("#chapters").children("img").show();
        $("#chapters li").remove();
        $.ajax({
            url: "/index/detail/getChapterList",
            data: {
                comic_id:comic_id,
                page:page
            },
            dataType: "json",
                traditional:true,
                success: function (result) {
                    var data=result.data;
                    if(data.data.length>0) {
                        var html = template('chapter_list_tpl', data);
                    }else{
                        var html = "<h4>no search result</h4>";
                    }
                    $("#chapters").children("img").hide();
                    $("#chapters").append(html);
                    $('#pagination').bootstrapPaginator({
                        currentPage: page,//当前的请求页面。
                        onPageClicked:function(e,originalEvent,type,page){
                            render(page,comic_id);
                        },
                        totalPages:data.pageNum ,//一共多少页。
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
        });
    }
    render(1,comic_id);
</script>
</body>
</html>