
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <title><?php echo $article_detail->title; ?></title>
    <meta property="og:title" content="<?php echo $article_detail->title; ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars(preg_replace( "/\r|\n/", "", strip_tags($article_detail->excerpt))); ?>" />
    <meta property="og:url" content="<?php echo full_url($_SERVER); ?>" />
    <meta property="og:image" content="<?php echo $article_detail->thumb_url; ?>"  />
    <meta property="og:image:url" content="<?php echo $article_detail->thumb_url; ?>" />

    <?php require_once 'common_head.php'; ?>
    <script src="/public/js/article_detail.js"></script>
</head>

<body class="post-template-default single single-post postid-377 single-format-standard">
<div class="dt-body-wrap">

    <?php require_once 'common_menu.php'; ?>

    <div class="dt-default-single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <main id="main" class="site-main" role="main">

                        <article id="post-377" class="post-377 post type-post status-publish format-standard has-post-thumbnail hentry category-featured category-science">
                            <header class="entry-header">
                                <h1 class="entry-title"><?php echo $article_detail->title; ?></h1>
                                <div class="entry-meta">
                                    <span class="posted-on">Posted on <?php echo format_post_time($article_detail->time); ?></span></div><!-- .entry-meta -->
                            </header><!-- .entry-header -->

                            <div class="entry-content" id="content_detail">
                                <?php echo $article_detail->content; ?>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer">
                                <span class="cat-links">Source: <?php echo $site_detail->name; ?></span>
                            </footer><!-- .entry-footer -->
                            <?php if ($tag_list){ ?>
                                <h6 class="g-color-gray-dark-v1">
                                    <strong class="g-mr-5">Tags:</strong>
                                    <?php
                                    for ($i=0; $i<count($tag_list); $i++){
                                        ?>
                                        <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover
                                        g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="/category/<?php echo $tag_list[$i]->slug; ?>/<?php echo $tag_list[$i]->_id; ?>"><?php echo $tag_list[$i]->name; ?></a>
                                    <?php } //end for ?>
                                </h6>
                            <?php } //end if ?>

                            <div class="dt-news-layout-wrap dt-related-posts">
                                <h2>Related posts</h2>

                                <ul>
                                    <?php
                                    for ($i=0; $i<count($related_posts); $i++){
                                    ?>
                                    <li class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <a href="">
                                                <img src="<?php echo $related_posts[$i]->thumb_url; ?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image center-cropped-fill d1-center-cropped" alt="" /></a>
                                            <a href="<?php echo detail_uri($related_posts[$i]->slug); ?>" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                        </figure>

                                        <h3 class="g-height-80"><a href="<?php echo detail_uri($related_posts[$i]->slug); ?>" rel="bookmark" title="<?php echo $related_posts[$i]->title; ?>"><?php echo $related_posts[$i]->title; ?></a></h3>
                                    </li>
                                    <?php } //end for ?>
                                    <div class="clearfix"></div>
                                </ul>
                            </div>


                        </article><!-- #post-## -->


                        <div id="comments" class="comments-area">

                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/easymag/2016/03/06/nasa-wants-to-build-a-quieter-supersonic-jet/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="#!" method="post" id="commentform" class="comment-form" novalidate>
                                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required='required' /></p>
                                    <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' /></p>
                                    <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200" /></p>
                                    <p class="form-submit"><input name="button" type="button" id="button" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='377' id='comment_post_ID' />
                                        <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="6082a92171" /></p><p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="46"/></p>			</form>
                            </div><!-- #respond -->

                        </div><!-- #comments -->

                    </main><!-- #main -->
                </div><!-- .col-lg-9 -->

                <div class="col-lg-3 col-md-3">

                    <div id="secondary" class="widget-area dt-sidebar" role="complementary">

                        <div class="dt-news-list-4">
                            <div class="dt-news-layout-wrap dt-sidebar-news">

                                <h2 class="widget-title">Popular</h2>

                                <div class="dt-news-post hidden" id="post_tmpl">
                                    <figure class="dt-news-post-img">
                                        <a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/" title="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/3821489872_e6a2159b55_b-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger" title="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger" /></a>
                                        <a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/" title="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger">Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger</a></h3>
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post -->

                                <div class="dt-news-layout4" id="random_posts_container">

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-layout4 -->


                            </div><!-- .dt-news-layout-wrap .dt-sidebar-news -->
                        </div>


                        <a href="#!" title="Sidebar Ads" rel="dofollow" target="_blank">
                            <img style="margin-top: 20px" src="<?php echo PUBLIC_FOLDER; ?>img/shoes-ads.png" alt="Sidebar Ads"/>
                        </a>

                    </div><!-- #secondary -->

                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .dt-default-single-page -->

    <?php require_once 'common_footer.php'; ?>
    <div id="meta_data_container">
        <input type="hidden" id="post_id" value="<?php echo $article_detail->_id; ?>"/>
        <input type="hidden" id="site_api_uri" value="<?php echo $site_detail->api_uri; ?>"/>
        <input type="hidden" id="original_post_id" value="<?php echo $article_detail->original_post_id; ?>"/>
        <input type="hidden" id="site_type" value="<?php echo $site_detail->type; ?>"/>
        <div class="hidden" id="post_excerpt"><?php echo htmlspecialchars_decode($article_detail->excerpt); ?></div>
        <input type="hidden" id="original_url" value="<?php echo $article_detail->original_url; ?>"/>
        <input type="hidden" id="extra_ids" value="<?php echo $extra_ids; ?>"/>
    </div>
</div><!-- .dt-body-wrap -->

<script type='text/javascript' src='https://daisythemes.com/easymag/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript' src='https://daisythemes.com/easymag/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.7'></script>
<script type='text/javascript' src='https://daisythemes.com/easymag/wp-content/themes/easymag/js/jquery.newsticker.min.js?ver=4.9.5'></script>
<script type='text/javascript' src='https://daisythemes.com/easymag/wp-content/themes/easymag/js/custom.js?ver=4.9.5'></script>
<script type='text/javascript' src='https://daisythemes.com/easymag/wp-includes/js/comment-reply.min.js?ver=4.9.5'></script>
<script type='text/javascript' src='https://daisythemes.com/easymag/wp-includes/js/wp-embed.min.js?ver=4.9.5'></script>
<script type='text/javascript' src='https://daisythemes.com/easymag/wp-content/plugins/akismet/_inc/form.js?ver=3.3.4'></script>

</body>
</html>
