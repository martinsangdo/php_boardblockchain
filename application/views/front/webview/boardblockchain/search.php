<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <title>Latest news about blockchain and cryptocurrency</title>

    <?php require_once 'common_head.php'; ?>
    <script type="text/javascript" src="/public/js/category.js"></script>

</head>

<body class="archive category category-business category-11">
    <div class="dt-body-wrap">
        <?php require_once 'common_menu.php'; ?>

        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-9">
                    <div class="dt-category-wrap">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">

                                <div class="dt-category-posts">

                                    <div class="dt-news-post-list">
                                        <?php
                                        for ($i=0; $i<10; $i++) {
                                            if (isset($posts[$i])){
                                        ?>
                                        <div class="dt-news-post">
                                            <figure class="dt-news-post-img">
                                                <a href="<?php echo detail_uri($posts[$i]->slug); ?>">
                                                    <img src="<?php echo $posts[$i]->thumb_url;?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image cat-center-cropped center-cropped-fill" alt=""/></a>
                                            </figure><!-- .dt-news-post-img -->

                                            <div class="dt-news-post-content">
                                                <div class="dt-news-post-meta">
                                                    <span class="dt-news-post-date"><i class="fa fa-calendar"></i> <?php echo format_post_time($posts[$i]->time); ?></span>
                                                </div><!-- .dt-news-post-meta -->
                                                <h3 class="g-height-80"><a href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a></h3>
                                                <div class="dt-news-post-desc ellipsis5lines"><?php echo $posts[$i]->excerpt; ?></div><!-- .dt-news-post-desc -->
                                            </div><!-- .dt-news-post-content -->
                                        </div><!-- .dt-news-post -->
                                        <?php } } //end for?>

                                    </div><!-- .dt-category-posts -->

                                    <div class="clearfix"></div>
                                    <br/><br/>
                                    <div class="dt-pagination-nav">
                                        <?php echo $pagination; ?>
                                    </div><!---- .jw-pagination-nav ---->


                                </div></main><!-- #main -->
                        </div><!-- #primary -->
                    </div><!-- .dt-category-wrap -->
                </div><!-- .col-lg-9-->

                <div class="col-lg-3 col-md-3">

                    <div id="secondary" class="widget-area dt-sidebar" role="complementary">

                        <div class="dt-news-list-4">
                            <div class="dt-news-layout-wrap dt-sidebar-news">

                                <h2 class="widget-title">Related posts</h2>

                                <div class="dt-news-layout4" id="random_posts_container">
                                    <?php
                                    for ($i=10; $i<20; $i++) {
                                        if (isset($posts[$i])){
                                        ?>
                                        <div class="dt-news-post">
                                            <figure class="dt-news-post-img">
                                                <a href="">
                                                    <img src="<?php echo $posts[$i]->thumb_url;?>" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt=""/></a>
                                            </figure><!-- .dt-news-post-img -->

                                            <div class="dt-news-post-content">
                                                <h3><a href="<?php echo detail_uri($posts[$i]->slug); ?>"><?php echo $posts[$i]->title; ?></a></h3>
                                            </div><!-- .dt-news-post-content -->
                                        </div><!-- .dt-news-post -->
                                    <?php } } //end for?>
                                    <div class="clearfix"></div>
                                </div>

                            </div><!-- .dt-news-layout-wrap .dt-sidebar-news -->
                        </div>


                        <a href="#!" title="Sidebar Ads" rel="dofollow" target="_blank">
                            <img style="margin-top: 20px" src="<?php echo PUBLIC_FOLDER; ?>img/shoes-ads.png" alt="Sidebar Ads"/>
                        </a>

                        </div><!-- #secondary -->

                </div>

            </div><!-- .row -->
        </div>

        <?php require_once 'common_footer.php'; ?>

    </div>

</body>
</html>