<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <title>Latest news about blockchain and cryptocurrency</title>

    <link rel="canonical" href="http://boardblockchain.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Latest news about blockchain and cryptocurrency" />
    <meta property="og:url" content="http://boardblockchain.com" />
    <meta property="og:site_name" content="BoardBlockchain" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Latest news about blockchain and cryptocurrency" />

    <?php require_once 'common_head.php'; ?>
    <script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/home.js"></script>
</head>

<body class="home">
<div class="dt-body-wrap">

    <div class="dt-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                </div><!-- .col-lg-6 .col-md-6 .col-sm-8 .col-xs-7 -->

                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5">
                    <div class="dt-top-social">
                        <span class="dt-search-icon"><a><i class="fa fa-search transition35"></i></a></span>
                    </div><!-- .dt-top-social -->
                </div><!-- .col-lg-6 .col-md-6 .col-sm-4 .col-xs-5 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    <div class="dt-search-bar transition35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="dt-search-wrap">
                        <aside id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="#!">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                                </label>
                                <input type="submit" class="search-submit" value="Search" />
                            </form>
                        </aside>
                    </div><!-- .dt-search-wrap -->
                </div><!-- .col-lg-12 .col-md-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .dt-search-bar .transition35 -->

    <header class="dt-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="dt-logo">

                        <h1><a href="<?php echo base_url(); ?>" rel="home">Blockchain news</a></h1>

                    </div><!-- .dt-logo -->
                </div><!-- .col-lg-4 .col-md-4 -->

                <div class="col-lg-8 col-md-8">
                    <div class="dt-top-ads">

                        <a href="#!" title="Header Advertisement" rel="dofollow" target="_blank"><img src="<?php echo PUBLIC_FOLDER; ?>img/wide-ads.png" alt="Header Advertisement"> </a>

                    </div><!-- .dt-top-ads -->
                </div><!-- .col-lg-8 col-md-8 -->

            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .dt-header -->


    <nav class="dt-menu-bar dt-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="dt-main-menu">
                        <div class="menu-main-menu-container">
                            <ul id="primary-menu" class="menu">
                                <li id="menu-item-16" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16"><a href="#!">Cryptocurrency</a></li>
                                <li id="menu-item-11" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-11"><a href="#!">Investment</a></li>
                                <li id="menu-item-7" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7"><a href="#!">Business</a></li>
                                <li id="menu-item-8" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8"><a href="#!">Research</a></li>
                                <li id="menu-item-10" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-10"><a href="#!">Data</a></li>
                                <li id="menu-item-9" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9"><a href="#!">Download</a></li>
                                <li id="menu-item-373" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-373"><a href="#!">Market</a></li>
                                <li id="menu-item-454" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-454"><a href="#!">Contact us</a></li>
                            </ul>
                        </div>
                    </div><!-- .dt-main-menu -->
                </div><!-- .col-lg-12 .col-md-12 -->
            </div><!-- .row -->
        </div><!-- .container -->

    </nav><!-- .dt-menu-bar -->

    <div class="container">
        <div class="row">
            <?php $data_block = $block_key_1; ?>
            <div class="col-lg-6 col-md-6">
                <div class="dt-featured-post-slider-wrap">
                    <div class="dt-featured-post-slider">
                        <div class="swiper-wrapper">

                            <?php
                            for ($i=0; $i<3; $i++) {
                                ?>
                                <div class="swiper-slide">
                                    <div class="dt-featured-posts-wrap">
                                        <figure class="dt-featured-post-img">
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                <img src="<?php echo $data_block[$i]->thumb_url;?>"
                                                     class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image"
                                                     alt="<?php echo $data_block[$i]->title; ?>"/></a>
                                        </figure><!-- .dt-featured-post-img -->
                                        <h2>
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                        </h2>
                                    </div><!-- .dt-featured-posts-wrap -->
                                </div><!-- .swiper-slide -->
                                <?php } //end for?>
                        </div><!-- .swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next transition5"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-button-prev transition5"><i class="fa fa-angle-left"></i></div>
                    </div><!-- .dt-featured-post-slider -->
                </div><!-- .dt-featured-post-slider-wrap -->
            </div><!-- .col-lg-6 .col-md-6 -->

            <div class="col-lg-6 col-md-6">

                <div class="dt-highlighted-news">

                    <?php
                    for ($i=3; $i<7; $i++) {
                    ?>
                    <div class="dt-highlighted-news-holder">
                        <figure class="dt-highlighted-news-img">
                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image"
                                     alt="<?php echo $data_block[$i]->title; ?>" title="<?php echo $data_block[$i]->title; ?>" /></a>                    </figure><!-- .dt-highlighted-news-img -->

                        <div class="dt-highlighted-news-desc">
                            <h2 class="transition5"><a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                        </div><!-- .dt-highlighted-news-desc -->
                    </div><!-- .dt-highlighted-news-holder -->
                    <?php } //end for?>
                    <div class="clearfix"></div>
                </div>
            </div><!-- .col-lg-6. col-md-6 -->
        </div><!-- .row -->
    </div><!-- .container -->

    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="dt-news-main">

                    <div class="dt-news-list-1">
                        <?php $data_block = $block_key_2; ?>
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">Business<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout1">

                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[0]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> <?php echo format_post_time($data_block[0]->time); ?></span>
                                        </div><!-- .dt-news-post-meta -->
                                        <h3><a href="<?php echo detail_uri($data_block[0]->slug); ?>"><?php echo $data_block[0]->title; ?></a></h3>
                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[0]->excerpt; ?></div>
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->

                                <?php
                                for ($i=1; $i<5; $i++) {
                                ?>
                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                    </figure><!-- .dt-news-post-img -->
                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> <?php echo format_post_time($data_block[$i]->time); ?></span>
                                        </div><!-- .dt-news-post-meta -->
                                        <h5 class="margin-t-0"><a href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h5>
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->
                                <?php } //end for?>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    <div class="dt-news-list-2">
                        <?php $data_block = $block_key_3; ?>
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">World News<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout2">
                                <?php
                                for ($i=0; $i<6; $i++) {
                                ?>
                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">
                                        <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                            <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" /></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5 class="g-height-60">
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                        </h5>

                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[$i]->excerpt; ?></div>
                                        <!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->
                                <?php } //end for?>

                            </div><!-- .dt-news-layout2 -->
                            <div class="clearfix"></div>
                        </div><!-- .dt-news-layout-wrap -->

                    </div>


                    <a href="#!" title="wide Ads" rel="dofollow" target="_blank"><img src="<?php echo PUBLIC_FOLDER; ?>img/fashion-store-2.png" alt="wide Ads"> </a>


                    <div class="dt-news-list-3">
                        <div class="dt-news-layout-wrap dt-news-layout-half g-height-820">

                            <h2 class="widget-title">Health<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout3">
                                <?php $data_block = $block_key_4; ?>

                                <div class="dt-news-post g-height-357">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[0]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image center-cropped-fill home2-center-cropped" alt="" />
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5><a href="<?php echo detail_uri($data_block[0]->slug); ?>"><?php echo $data_block[0]->title; ?></a></h5>

                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[0]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                    </div>
                                    <!-- .dt-news-post-content -->
                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->

                                <?php
                                for ($i=1; $i<4; $i++) {
                                ?>
                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5><a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a></h5>
                                    </div>
                                    <!-- .dt-news-post-content -->
                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->
                                <?php } //end for?>

                            </div><!-- .dt-news-layout3 -->


                        </div><!-- .dt-news-layout-wrap .dt-news-layout-half -->

                        <div class="dt-news-layout-wrap dt-news-layout-half dt-half-last g-height-820">
                            <h2 class="widget-title">Lifestyle<span><a href="#!">[ View All ]</a></span></h2>
                            <div class="dt-news-layout3">

                                <div class="dt-news-post g-height-357">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[5]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image center-cropped-fill home2-center-cropped" alt="" />
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5><a href="<?php echo detail_uri($data_block[5]->slug); ?>"><?php echo $data_block[5]->title; ?></a></h5>

                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[5]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                    </div>
                                    <!-- .dt-news-post-content -->
                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->

                                <?php
                                for ($i=6; $i<9; $i++) {
                                ?>
                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5><a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a></h5>
                                    </div>
                                    <!-- .dt-news-post-content -->
                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->
                                <?php } //end for?>

                            </div><!-- .dt-news-layout3 -->



                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <div class="dt-news-list-2">
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">Science<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout2">
                                <?php $data_block = $block_key_6; ?>
                                <?php
                                for ($i=0; $i<3; $i++) {
                                ?>
                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">
                                        <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                            <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="<?php echo $data_block[$i]->title; ?>"/></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5 class="g-height-60">
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                        </h5>

                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[$i]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->
                                <?php } //end for?>

                            </div><!-- .dt-news-layout2 -->
                            <div class="clearfix"></div>
                        </div><!-- .dt-news-layout-wrap -->

                    </div>

                    <a href="#!" title="Wide ADS" rel="dofollow" target="_blank"><img src="<?php echo PUBLIC_FOLDER; ?>img/MOUNT-BIKE-1.png" alt="Wide ADS"> </a>


                    <div class="dt-news-list-4">
                        <div class="dt-news-layout-wrap dt-sidebar-news">

                            <h2 class="widget-title">Politics<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout4">
                                <?php $data_block = $block_key_7; ?>
                                <?php
                                for ($i=0; $i<6; $i++) {
                                ?>
                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                            <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image center-cropped-fill home0-center-cropped" alt="" /></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5 class="g-mt-0 g-height-60"><a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a></h5>
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post -->
                                <?php } //end for?>

                                <div class="clearfix"></div>
                            </div><!-- .dt-news-layout4 -->


                        </div><!-- .dt-news-layout-wrap .dt-sidebar-news -->
                    </div>



                    <div class="dt-news-list-1">
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">Sports<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout1">
                                <?php $data_block = $block_key_8; ?>
                                <?php
                                for ($i=0; $i<5; $i++) {
                                ?>
                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5><a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a></h5>

                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[$i]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->
                                <?php } //end for?>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    <a href="#!" title="Wide ads" rel="dofollow" target="_blank"><img src="<?php echo PUBLIC_FOLDER; ?>img/rafting-ads-2.png" alt="Wide ads"> </a>


                    <div class="dt-news-list-2">
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">Technology<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout2">
                                <?php $data_block = $block_key_9; ?>
                                <?php
                                for ($i=0; $i<3; $i++) {
                                ?>
                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">
                                        <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                            <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image center-cropped-fill home1-center-cropped" alt=""/></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5 class="g-height-60">
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                        </h5>

                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[$i]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->
                                <?php } //end for?>

                            </div><!-- .dt-news-layout2 -->
                            <div class="clearfix"></div>
                        </div><!-- .dt-news-layout-wrap -->

                    </div>



                    <div class="dt-news-list-3">
                        <div class="dt-news-layout-wrap dt-news-layout-half">
                            <h2 class="widget-title">Travel<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout3">
                                <?php $data_block = $block_key_10; ?>

                                <div class="dt-news-post g-height-427">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[0]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image center-cropped-fill home2-center-cropped" alt="" />
                                    </figure><!-- .dt-news-post-img -->
                                    <div class="dt-news-post-content">
                                        <h5><a href="<?php echo detail_uri($data_block[0]->slug); ?>" ><?php echo $data_block[0]->title; ?></a></h5>

                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[0]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->

                                <?php
                                for ($i=1; $i<5; $i++) {
                                ?>
                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h5><a href="<?php echo detail_uri($data_block[$i]->slug); ?>" ><?php echo $data_block[$i]->title; ?></a></h5>
                                    </div><!-- .dt-news-post-content -->
                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->
                                <?php } //end for?>

                            </div><!-- .dt-news-layout3 -->


                        </div><!-- .dt-news-layout-wrap .dt-news-layout-half -->

                        <div class="dt-news-layout-wrap dt-news-layout-half dt-half-last">
                            <h2 class="widget-title">Entertainment<span><a href="#!">[ View All ]</a></span></h2>

                            <div class="dt-news-layout3">
                                <?php $data_block = $block_key_11; ?>

                                <div class="dt-news-post g-height-427">
                                    <figure class="dt-news-post-img">
                                        <img src="<?php echo $data_block[0]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image center-cropped-fill home2-center-cropped" alt="" />
                                    </figure><!-- .dt-news-post-img -->
                                    <div class="dt-news-post-content">
                                        <h5><a href="<?php echo detail_uri($data_block[0]->slug); ?>" ><?php echo $data_block[0]->title; ?></a></h5>

                                        <div class="dt-news-post-desc ellipsis5lines"><?php echo $data_block[0]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->

                                <?php
                                for ($i=1; $i<5; $i++) {
                                    ?>
                                    <div class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h5><a href="<?php echo detail_uri($data_block[$i]->slug); ?>" ><?php echo $data_block[$i]->title; ?></a></h5>
                                        </div><!-- .dt-news-post-content -->
                                        <div class="clearfix"></div>
                                    </div><!-- .dt-news-post -->
                                <?php } //end for?>

                            </div><!-- .dt-news-layout3 -->

                        </div>
                        <div class="clearfix"></div>
                    </div>


                </div><!-- .dt-news-main -->
            </div><!-- .col-lg-9 -->

            <div class="col-lg-3 col-md-3">
                <div style="margin-top: 20px">
                    <div id="secondary" class="widget-area dt-sidebar" role="complementary">
                        <div class="dt-news-list-4">
                            <div class="dt-news-layout-wrap dt-sidebar-news">
                                <h2 class="widget-title">Popular posts</h2>

                                <div class="dt-news-layout4">
                                    <?php $data_block = $block_key_12; ?>
                                    <?php
                                    for ($i=0; $i<6; $i++) {
                                    ?>
                                    <div class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="" /></a>
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h5><a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a></h5>
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post -->
                                    <?php } //end for?>

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-layout4 -->


                            </div><!-- .dt-news-layout-wrap .dt-sidebar-news -->
                        </div>


                        <a href="#!" title="Sidebar Ads" rel="dofollow" target="_blank">
                            <img style="margin-top: 20px" src="<?php echo PUBLIC_FOLDER; ?>img/shoes-ads.png" alt="Sidebar Ads"> </a>


                        <div class="dt-news-list-2">
                            <div class="dt-news-layout-wrap">

                                <h2 class="widget-title">Featured Posts<span><a href="#!">[ View All ]</a></span></h2>

                                <div class="dt-news-layout2">
                                    <?php $data_block = $block_key_13; ?>
                                    <?php
                                    for ($i=0; $i<6; $i++) {
                                    ?>
                                    <div class="dt-news-post transition5">
                                        <figure class="dt-news-post-img">
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>" >
                                                <img src="<?php echo $data_block[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image"/></a>
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h5>
                                                <a href="<?php echo detail_uri($data_block[$i]->slug); ?>"><?php echo $data_block[$i]->title; ?></a>
                                            </h5>

                                            <div class="dt-news-post-desc ellipsis4lines"><?php echo $data_block[$i]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post transition5 -->
                                    <?php } //end for?>

                                </div><!-- .dt-news-layout2 -->
                                <div class="clearfix"></div>
                            </div><!-- .dt-news-layout-wrap -->

                        </div>


                        <a href="#!" title="Sidebar Ads" rel="dofollow" target="_blank">
                            <img style="margin-top: 20px" src="<?php echo PUBLIC_FOLDER; ?>img/super-sasle-ads.png" alt="Sidebar Ads"> </a>

                        <aside id="recent-posts-6" class="widget widget_recent_entries">
                            <h2 class="widget-title">Post in Numbers</h2>
                            <ul>
                                <?php $data_block = $block_key_14; ?>
                                <?php
                                for ($i=0; $i<10; $i++) {
                                ?>
                                <li>
                                    <a href="<?php echo detail_uri($data_block[$i]->slug); ?>" class="g-font-14px"><?php echo $data_block[$i]->title; ?></a>
                                </li>
                                <?php } //end for?>
                            </ul>
                        </aside>

                    </div><!-- #secondary -->

                </div>
            </div><!-- .col-lg-4 -->

        </div><!-- .row -->
    </div><!-- .container -->

    <footer class="dt-footer">

        <div class="dt-footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="dt-copyright">
                            Copyright &copy; 2018 <a href="<?php echo base_url(); ?>">BoardBlockchain</a>. All rights reserved.						</div><!-- .dt-copyright -->
                    </div><!-- .col-lg-6 .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .dt-footer-bar -->
    </footer><!-- .dt-footer -->

    <a id="back-to-top" class="transition35"><i class="fa fa-angle-up"></i></a><!-- #back-to-top -->

</div><!-- .dt-body-wrap -->

</body>
</html>
