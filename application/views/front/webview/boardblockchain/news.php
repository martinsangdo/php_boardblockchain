
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


                                <h2 class="widget-title">Popular posts</h2>

                                <div class="dt-news-layout4">

                                    <div class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/" title="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/3821489872_e6a2159b55_b-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger" title="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger" /></a>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3><a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/" title="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger">Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger</a></h3>
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post -->


                                    <div class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <a href="https://daisythemes.com/easymag/2016/03/06/5-family-friendly-places-to-visit-in-orlando-florida/" title="5 family-friendly places to visit in Orlando, Florida"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/orlando-visit-the-orlando-eye2-today-160104-01_cb860cac8283e6e1860165d7a52a4595.today-inline-large-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="5 family-friendly places to visit in Orlando, Florida" title="5 family-friendly places to visit in Orlando, Florida" /></a>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/5-family-friendly-places-to-visit-in-orlando-florida/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3><a href="https://daisythemes.com/easymag/2016/03/06/5-family-friendly-places-to-visit-in-orlando-florida/" title="5 family-friendly places to visit in Orlando, Florida">5 family-friendly places to visit in Orlando, Florida</a></h3>
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post -->


                                    <div class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <a href="https://daisythemes.com/easymag/2016/03/06/americans-pick-paris-as-the-worlds-most-romantic-city-in-expedia-travel-study/" title="Americans pick Paris as the world&#8217;s most romantic city in Expedia travel study"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/paris-romantic-couple-stock-today-160203-tease_ab0a3e12e016ba5ec0ca5cb868d202e8.today-inline-large-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Americans pick Paris as the world&#8217;s most romantic city in Expedia travel study" title="Americans pick Paris as the world&#8217;s most romantic city in Expedia travel study" /></a>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/americans-pick-paris-as-the-worlds-most-romantic-city-in-expedia-travel-study/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3><a href="https://daisythemes.com/easymag/2016/03/06/americans-pick-paris-as-the-worlds-most-romantic-city-in-expedia-travel-study/" title="Americans pick Paris as the world&#8217;s most romantic city in Expedia travel study">Americans pick Paris as the world&#8217;s most romantic city in Expedia travel study</a></h3>
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post -->


                                    <div class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <a href="https://daisythemes.com/easymag/2016/03/06/most-romantic-hotels-in-us-and-the-world-rated-by-tripadvisor/" title="Most romantic hotels in US and the world rated by TripAdvisor"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/bucuti-tara-beach-resort-aruba-today-160201-tease_bece592b46d054cd1353fc564bb305a7.today-inline-large-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Most romantic hotels in US and the world rated by TripAdvisor" title="Most romantic hotels in US and the world rated by TripAdvisor" /></a>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/most-romantic-hotels-in-us-and-the-world-rated-by-tripadvisor/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3><a href="https://daisythemes.com/easymag/2016/03/06/most-romantic-hotels-in-us-and-the-world-rated-by-tripadvisor/" title="Most romantic hotels in US and the world rated by TripAdvisor">Most romantic hotels in US and the world rated by TripAdvisor</a></h3>
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post -->


                                    <div class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <a href="https://daisythemes.com/easymag/2016/03/06/10-best-beaches-in-the-us-and-world-according-to-tripadvisor/" title="10 best beaches in the US and world according to TripAdvisor"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/02_baia_do_sancho_fernando_de_noronha_brazil_03_0ac946ca0e32e41f1b54ab1b2ef8f142.today-inline-large-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="10 best beaches in the US and world according to TripAdvisor" title="10 best beaches in the US and world according to TripAdvisor" /></a>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/10-best-beaches-in-the-us-and-world-according-to-tripadvisor/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3><a href="https://daisythemes.com/easymag/2016/03/06/10-best-beaches-in-the-us-and-world-according-to-tripadvisor/" title="10 best beaches in the US and world according to TripAdvisor">10 best beaches in the US and world according to TripAdvisor</a></h3>
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post -->


                                    <div class="dt-news-post">
                                        <figure class="dt-news-post-img">
                                            <a href="https://daisythemes.com/easymag/2016/03/06/top-10-longest-lasting-cars-and-vehicles-according-to-iseecars-com-study/" title="Top 10 longest-lasting cars and vehicles according to iSeeCars.com study"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/longest-lasting-cars-tease-2-160218_a658facb0246919e9b201bffd099c5fd.today-inline-large-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Top 10 longest-lasting cars and vehicles according to iSeeCars.com study" title="Top 10 longest-lasting cars and vehicles according to iSeeCars.com study" /></a>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/top-10-longest-lasting-cars-and-vehicles-according-to-iseecars-com-study/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3><a href="https://daisythemes.com/easymag/2016/03/06/top-10-longest-lasting-cars-and-vehicles-according-to-iseecars-com-study/" title="Top 10 longest-lasting cars and vehicles according to iSeeCars.com study">Top 10 longest-lasting cars and vehicles according to iSeeCars.com study</a></h3>
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post -->


                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-layout4 -->


                            </div><!-- .dt-news-layout-wrap .dt-sidebar-news -->
                        </div>


                        <a href="https://daisythemes.com/wordpress-themes/" title="Sidebar Ads" rel="dofollow" target="_blank"><img style="margin-top: 20px" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/shoes-ads.png" alt="Sidebar Ads"> </a>


                        <div class="dt-news-list-2">
                            <div class="dt-news-layout-wrap">

                                <h2 class="widget-title">Featured Posts<span><a href="https://daisythemes.com/easymag/category/featured/">[ View All ]</a></span></h2>

                                <div class="dt-news-layout2">

                                    <div class="dt-news-post transition5">
                                        <figure class="dt-news-post-img">

                                            <a href="https://daisythemes.com/easymag/2016/03/06/nasa-wants-to-build-a-quieter-supersonic-jet/" title="NASA Wants to Build a ‘Quieter’ Supersonic Jet"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/16-022-supersoniccontract-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="NASA Wants to Build a ‘Quieter’ Supersonic Jet" title="NASA Wants to Build a ‘Quieter’ Supersonic Jet" /></a>
                                            <div class="dt-news-post-meta">
                                                <span class="dt-news-post-month">Mar<br/>2016</span>
                                                <span class="dt-news-post-day">06</span>
                                            </div><!-- .dt-news-post-meta -->
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3>
                                                <a href="https://daisythemes.com/easymag/2016/03/06/nasa-wants-to-build-a-quieter-supersonic-jet/" title="NASA Wants to Build a ‘Quieter’ Supersonic Jet">
                                                    NASA Wants to Build a ‘Quieter’ Supersonic Jet                                    </a>
                                            </h3>

                                            <div class="dt-news-post-desc">

                                                Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet,...
                                            </div><!-- .dt-news-post-desc -->
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post transition5 -->


                                    <div class="dt-news-post transition5">
                                        <figure class="dt-news-post-img">

                                            <a href="https://daisythemes.com/easymag/2016/03/06/female-viagra-doesnt-work-very-well-study/" title="‘Female Viagra’ Doesn’t Work Very Well: Study"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/flibanserin-female-viagra-pill-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="‘Female Viagra’ Doesn’t Work Very Well: Study" title="‘Female Viagra’ Doesn’t Work Very Well: Study" /></a>
                                            <div class="dt-news-post-meta">
                                                <span class="dt-news-post-month">Mar<br/>2016</span>
                                                <span class="dt-news-post-day">06</span>
                                            </div><!-- .dt-news-post-meta -->
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3>
                                                <a href="https://daisythemes.com/easymag/2016/03/06/female-viagra-doesnt-work-very-well-study/" title="‘Female Viagra’ Doesn’t Work Very Well: Study">
                                                    ‘Female Viagra’ Doesn’t Work Very Well: Study                                    </a>
                                            </h3>

                                            <div class="dt-news-post-desc">

                                                Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus...
                                            </div><!-- .dt-news-post-desc -->
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post transition5 -->


                                    <div class="dt-news-post transition5">
                                        <figure class="dt-news-post-img">

                                            <a href="https://daisythemes.com/easymag/2016/03/06/rich-people-are-buying-more-super-yachts/" title="Rich People Are Buying More Super-Yachts"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/pexels-photo-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Rich People Are Buying More Super-Yachts" title="Rich People Are Buying More Super-Yachts" /></a>
                                            <div class="dt-news-post-meta">
                                                <span class="dt-news-post-month">Mar<br/>2016</span>
                                                <span class="dt-news-post-day">06</span>
                                            </div><!-- .dt-news-post-meta -->
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3>
                                                <a href="https://daisythemes.com/easymag/2016/03/06/rich-people-are-buying-more-super-yachts/" title="Rich People Are Buying More Super-Yachts">
                                                    Rich People Are Buying More Super-Yachts                                    </a>
                                            </h3>

                                            <div class="dt-news-post-desc">

                                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et...
                                            </div><!-- .dt-news-post-desc -->
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post transition5 -->


                                    <div class="dt-news-post transition5">
                                        <figure class="dt-news-post-img">

                                            <a href="https://daisythemes.com/easymag/2016/03/06/trump-agrees-with-democrats-on-high-speed-trains/" title="Trump Agrees With Democrats on High-Speed Trains"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/trains-high-speed-donald-trump-election-2016-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Trump Agrees With Democrats on High-Speed Trains" title="Trump Agrees With Democrats on High-Speed Trains" /></a>
                                            <div class="dt-news-post-meta">
                                                <span class="dt-news-post-month">Mar<br/>2016</span>
                                                <span class="dt-news-post-day">06</span>
                                            </div><!-- .dt-news-post-meta -->
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3>
                                                <a href="https://daisythemes.com/easymag/2016/03/06/trump-agrees-with-democrats-on-high-speed-trains/" title="Trump Agrees With Democrats on High-Speed Trains">
                                                    Trump Agrees With Democrats on High-Speed Trains                                    </a>
                                            </h3>

                                            <div class="dt-news-post-desc">

                                                In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum ullamcorper mauris at ligula. Fusce fermentum. Nullam cursus lacinia...
                                            </div><!-- .dt-news-post-desc -->
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post transition5 -->


                                    <div class="dt-news-post transition5">
                                        <figure class="dt-news-post-img">

                                            <a href="https://daisythemes.com/easymag/2016/03/06/louis-c-k-on-donald-trump-the-guy-is-hitler/" title="Louis C.K. on Donald Trump: The Guy Is Hitler"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/louis-ck-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Louis C.K. on Donald Trump: The Guy Is Hitler" title="Louis C.K. on Donald Trump: The Guy Is Hitler" /></a>
                                            <div class="dt-news-post-meta">
                                                <span class="dt-news-post-month">Mar<br/>2016</span>
                                                <span class="dt-news-post-day">06</span>
                                            </div><!-- .dt-news-post-meta -->
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3>
                                                <a href="https://daisythemes.com/easymag/2016/03/06/louis-c-k-on-donald-trump-the-guy-is-hitler/" title="Louis C.K. on Donald Trump: The Guy Is Hitler">
                                                    Louis C.K. on Donald Trump: The Guy Is Hitler                                    </a>
                                            </h3>

                                            <div class="dt-news-post-desc">

                                                Pellentesque dapibus hendrerit tortor. Praesent egestas tristique nibh. Sed a libero. Cras varius. Donec vitae orci sed dolor rutrum auctor. Fusce egestas elit eget...
                                            </div><!-- .dt-news-post-desc -->
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post transition5 -->


                                    <div class="dt-news-post transition5">
                                        <figure class="dt-news-post-img">

                                            <a href="https://daisythemes.com/easymag/2015/12/27/justin-bieber-supports-rival-top-christmas-song/" title="Justin Bieber supports rival for top Christmas song"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2015/12/Justin-bieber-Justin-Bieber-Wallpaper-justin-bieber-tickets-justin-bieber-songs-38-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Justin Bieber supports rival for top Christmas song" title="Justin Bieber supports rival for top Christmas song" /></a>
                                            <div class="dt-news-post-meta">
                                                <span class="dt-news-post-month">Dec<br/>2015</span>
                                                <span class="dt-news-post-day">27</span>
                                            </div><!-- .dt-news-post-meta -->
                                        </figure><!-- .dt-news-post-img -->

                                        <div class="dt-news-post-content">
                                            <h3>
                                                <a href="https://daisythemes.com/easymag/2015/12/27/justin-bieber-supports-rival-top-christmas-song/" title="Justin Bieber supports rival for top Christmas song">
                                                    Justin Bieber supports rival for top Christmas song                                    </a>
                                            </h3>

                                            <div class="dt-news-post-desc">

                                                Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna...
                                            </div><!-- .dt-news-post-desc -->
                                        </div><!-- .dt-news-post-content -->
                                    </div><!-- .dt-news-post transition5 -->


                                </div><!-- .dt-news-layout2 -->
                                <div class="clearfix"></div>
                            </div><!-- .dt-news-layout-wrap -->

                        </div>



                        <a href="https://daisythemes.com/wordpress-themes/" title="Sidebar Ads" rel="dofollow" target="_blank"><img style="margin-top: 20px" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/super-sasle-ads.png" alt="Sidebar Ads"> </a>

                        <aside id="recent-posts-6" class="widget widget_recent_entries">		<h2 class="widget-title">Post in Numbers</h2>		<ul>
                                <li>
                                    <a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/">Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger</a>
                                </li>
                                <li>
                                    <a href="https://daisythemes.com/easymag/2016/03/06/5-family-friendly-places-to-visit-in-orlando-florida/">5 family-friendly places to visit in Orlando, Florida</a>
                                </li>
                                <li>
                                    <a href="https://daisythemes.com/easymag/2016/03/06/americans-pick-paris-as-the-worlds-most-romantic-city-in-expedia-travel-study/">Americans pick Paris as the world&#8217;s most romantic city in Expedia travel study</a>
                                </li>
                                <li>
                                    <a href="https://daisythemes.com/easymag/2016/03/06/most-romantic-hotels-in-us-and-the-world-rated-by-tripadvisor/">Most romantic hotels in US and the world rated by TripAdvisor</a>
                                </li>
                                <li>
                                    <a href="https://daisythemes.com/easymag/2016/03/06/10-best-beaches-in-the-us-and-world-according-to-tripadvisor/">10 best beaches in the US and world according to TripAdvisor</a>
                                </li>
                            </ul>
                        </aside><aside id="categories-3" class="widget widget_categories"><h2 class="widget-title">Categories</h2>		<ul>
                                <li class="cat-item cat-item-11"><a href="https://daisythemes.com/easymag/category/business/" >Business</a>
                                </li>
                                <li class="cat-item cat-item-7"><a href="https://daisythemes.com/easymag/category/entertainment/" >Entertainment</a>
                                </li>
                                <li class="cat-item cat-item-15"><a href="https://daisythemes.com/easymag/category/featured/" >Featured</a>
                                </li>
                                <li class="cat-item cat-item-10"><a href="https://daisythemes.com/easymag/category/health/" >Health</a>
                                </li>
                                <li class="cat-item cat-item-6"><a href="https://daisythemes.com/easymag/category/lifestyle/" >Lifestyle</a>
                                </li>
                                <li class="cat-item cat-item-5"><a href="https://daisythemes.com/easymag/category/politics/" >Politics</a>
                                </li>
                                <li class="cat-item cat-item-17"><a href="https://daisythemes.com/easymag/category/science/" >Science</a>
                                </li>
                                <li class="cat-item cat-item-4"><a href="https://daisythemes.com/easymag/category/sports/" >Sports</a>
                                </li>
                                <li class="cat-item cat-item-3"><a href="https://daisythemes.com/easymag/category/technology/" >Technology</a>
                                </li>
                                <li class="cat-item cat-item-8"><a href="https://daisythemes.com/easymag/category/travel/" >Travel</a>
                                </li>
                                <li class="cat-item cat-item-1"><a href="https://daisythemes.com/easymag/category/uncategorized/" >Uncategorized</a>
                                </li>
                                <li class="cat-item cat-item-2"><a href="https://daisythemes.com/easymag/category/world/" >World</a>
                                </li>
                            </ul>
                        </aside></div><!-- #secondary -->

                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .dt-default-single-page -->

    <?php require_once 'common_footer.php'; ?>

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
