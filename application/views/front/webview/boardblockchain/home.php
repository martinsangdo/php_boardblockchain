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
    <!-- END GADWP Universal Tracking -->

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
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>">
                                                <img src="<?php echo $data_block[$i]->thumb_url;?>"
                                                     class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image"
                                                     alt="<?php echo $data_block[$i]->title; ?>"
                                                     title="<?php echo $data_block[$i]->title; ?>"/></a>
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


                    <div class="dt-highlighted-news-holder">
                        <figure class="dt-highlighted-news-img">
                            <a href="https://daisythemes.com/easymag/2016/03/06/white-house-may-be-vetting-appeals-judge-for-supreme-court-vacancy/" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/photo-1453945619913-79ec89a82c51-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="White House May Be Vetting Appeals Judge for Supreme Court Vacancy" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy" /></a>                    </figure><!-- .dt-highlighted-news-img -->

                        <div class="dt-highlighted-news-desc">
                        <span class="dt-highlighted-news-cat" style="background: rgba( 204,41,54,0.75 )">
                           <a href="https://daisythemes.com/easymag/category/politics/" title="Politics">Politics</a>
                        </span>

                            <h2 class="transition5"><a href="https://daisythemes.com/easymag/2016/03/06/white-house-may-be-vetting-appeals-judge-for-supreme-court-vacancy/" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy">White House May Be Vetting Appeals Judge for Supreme Court Vacancy</a></h2>
                        </div><!-- .dt-highlighted-news-desc -->
                    </div><!-- .dt-highlighted-news-holder -->



                    <div class="dt-highlighted-news-holder">
                        <figure class="dt-highlighted-news-img">
                            <a href="https://daisythemes.com/easymag/2016/03/06/meghan-trainor-on-why-her-new-single-no-sounds-nothing-like-meghan-trainor/" title="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/15411665243_903255c5ba_k-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor" title="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor" /></a>                    </figure><!-- .dt-highlighted-news-img -->

                        <div class="dt-highlighted-news-desc">
                        <span class="dt-highlighted-news-cat" style="background: rgba( 204,41,54,0.75 )">
                           <a href="https://daisythemes.com/easymag/category/entertainment/" title="Entertainment">Entertainment</a>
                        </span>

                            <h2 class="transition5"><a href="https://daisythemes.com/easymag/2016/03/06/meghan-trainor-on-why-her-new-single-no-sounds-nothing-like-meghan-trainor/" title="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor">Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor</a></h2>
                        </div><!-- .dt-highlighted-news-img -->
                    </div><!-- .dt-highlighted-news-holder -->



                    <div class="dt-highlighted-news-holder">
                        <figure class="dt-highlighted-news-img">
                            <a href="https://daisythemes.com/easymag/2016/03/06/tom-brady-will-play-for-patriots-through-2019/" title="Tom Brady Will Play for Patriots Through 2019"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/800px-Italy_vs_Wales_Six_Nations_rugby-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Tom Brady Will Play for Patriots Through 2019" title="Tom Brady Will Play for Patriots Through 2019" /></a>                    </figure><!-- .dt-highlighted-news-img -->

                        <div class="dt-highlighted-news-desc">
                       <span class="dt-highlighted-news-cat" style="background: rgba( 204,41,54,0.75 )">
                           <a href="https://daisythemes.com/easymag/category/sports/" title="Sports">Sports</a>
                        </span>

                            <h2 class="transition5"><a href="https://daisythemes.com/easymag/2016/03/06/tom-brady-will-play-for-patriots-through-2019/" title="Tom Brady Will Play for Patriots Through 2019">Tom Brady Will Play for Patriots Through 2019</a></h2>
                        </div><!-- .dt-highlighted-news-desc -->
                    </div><!-- .dt-highlighted-news-holder -->



                    <div class="dt-highlighted-news-holder">
                        <figure class="dt-highlighted-news-img">
                            <a href="https://daisythemes.com/easymag/2016/03/06/spacex-scrubs-mission-ses-9-for-third-time-in-a-week/" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/24589505473_74c0268b7e_o-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="SpaceX Scrubs Mission SES-9 for Third Time in a Week" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week" /></a>                    </figure><!-- .dt-highlighted-news-img -->

                        <div class="dt-highlighted-news-desc">
                        <span class="dt-highlighted-news-cat" style="background: rgba( 204,41,54,0.75 )">
                           <a href="https://daisythemes.com/easymag/category/science/" title="Science">Science</a>
                        </span>

                            <h2 class="transition5"><a href="https://daisythemes.com/easymag/2016/03/06/spacex-scrubs-mission-ses-9-for-third-time-in-a-week/" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week">SpaceX Scrubs Mission SES-9 for Third Time in a Week</a></h2>
                        </div><!-- .dt-highlighted-news-desc -->
                    </div><!-- .dt-highlighted-news-holder -->



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
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">Business<span><a href="https://daisythemes.com/easymag/category/business/">[ View All ]</a></span></h2>

                            <div class="dt-news-layout1">


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/pexels-photo-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/rich-people-are-buying-more-super-yachts/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/rich-people-are-buying-more-super-yachts/" title="Rich People Are Buying More Super-Yachts">

                                                Rich People Are Buying More Super-Yachts
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculi...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/gettyimages-486234008-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/these-are-the-5-best-companies-to-work-for/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/these-are-the-5-best-companies-to-work-for/" title="These Are the 5 Best Companies to Work For">

                                                These Are the 5 Best Companies to Work For
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Curabitur blandit mollis lacus. Nam adipiscing. Vestibulum eu odio. Vivamus laoreet. Nullam tincidunt adipiscing enim. Phasellus tempus. Proin viverra, ligu...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/gettyimages-461830344-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/heres-every-airline-that-wants-to-fly-to-cuba/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/heres-every-airline-that-wants-to-fly-to-cuba/" title="Here’s Every Airline That Wants to Fly to Cuba">

                                                Here’s Every Airline That Wants to Fly to Cuba
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Morbi mollis tellus ac sapien. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/mcdonalds-brazil-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/mcdonalds-under-criminal-investigation-in-brazil/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/mcdonalds-under-criminal-investigation-in-brazil/" title="McDonald’s Under Criminal Investigation in Brazil">

                                                McDonald’s Under Criminal Investigation in Brazil
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netu...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/160219_03act_lewis-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/how-one-entrepreneur-launched-a-thriving-business-while-working-full-time/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/how-one-entrepreneur-launched-a-thriving-business-while-working-full-time/" title="How One Entrepreneur Launched a Thriving Business While Working Full-time">

                                                How One Entrepreneur Launched a Thriving Business While Working Full-time
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et n...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->



                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    <div class="dt-news-list-2">
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">World News<span><a href="https://daisythemes.com/easymag/category/world/">[ View All ]</a></span></h2>

                            <div class="dt-news-layout2">

                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/detention-of-brazils-former-president-could-mark-the-end-of-a-dynasty/" title="Detention of Brazil’s Former President Could Mark the End of a Dynasty"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/1280px-Lula_Al-Assad_Itamaraty_2010-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Detention of Brazil’s Former President Could Mark the End of a Dynasty" title="Detention of Brazil’s Former President Could Mark the End of a Dynasty" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/detention-of-brazils-former-president-could-mark-the-end-of-a-dynasty/" title="Detention of Brazil’s Former President Could Mark the End of a Dynasty">
                                                Detention of Brazil’s Former President Could Mark the End of...                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/12-ways-your-tax-dollars-were-squandered-in-afghanistan/" title="12 Ways Your Tax Dollars Were Squandered in Afghanistan"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/1280px-Afghan_refugees_returning_from_Pakistan_in_2004-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="12 Ways Your Tax Dollars Were Squandered in Afghanistan" title="12 Ways Your Tax Dollars Were Squandered in Afghanistan" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/12-ways-your-tax-dollars-were-squandered-in-afghanistan/" title="12 Ways Your Tax Dollars Were Squandered in Afghanistan">
                                                12 Ways Your Tax Dollars Were Squandered in Afghanistan                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/vatican-official-who-didnt-act-on-abuse-claim-i-should-have-done-more/" title="Vatican Official Who Didn&#8217;t Act on Abuse Claim: &#8216;I Should Have Done More&#8217;"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/160303-george-pell-0423_a1bb724cfeaffb6207569498824d31f3.nbcnews-ux-2880-1000-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Vatican Official Who Didn&#8217;t Act on Abuse Claim: &#8216;I Should Have Done More&#8217;" title="Vatican Official Who Didn&#8217;t Act on Abuse Claim: &#8216;I Should Have Done More&#8217;" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/vatican-official-who-didnt-act-on-abuse-claim-i-should-have-done-more/" title="Vatican Official Who Didn&#8217;t Act on Abuse Claim: &#8216;I Should Have Done More&#8217;">
                                                Vatican Official Who Didn&#8217;t Act on Abuse Claim: &#8216;I Should...                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/1-5-million-may-die-if-mosul-dam-fails-iraq-expert/" title="1.5 Million May Die if Mosul Dam Fails: Iraq Expert"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/160303-mosul-dam-tigris-river-yh-0754a_ab7797d9aef6363d9b7ade1546859660.nbcnews-ux-2880-1000-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="1.5 Million May Die if Mosul Dam Fails: Iraq Expert" title="1.5 Million May Die if Mosul Dam Fails: Iraq Expert" srcset="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/160303-mosul-dam-tigris-river-yh-0754a_ab7797d9aef6363d9b7ade1546859660.nbcnews-ux-2880-1000-410x260.jpg 410w, https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/160303-mosul-dam-tigris-river-yh-0754a_ab7797d9aef6363d9b7ade1546859660.nbcnews-ux-2880-1000-300x191.jpg 300w, https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/160303-mosul-dam-tigris-river-yh-0754a_ab7797d9aef6363d9b7ade1546859660.nbcnews-ux-2880-1000-768x488.jpg 768w, https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/160303-mosul-dam-tigris-river-yh-0754a_ab7797d9aef6363d9b7ade1546859660.nbcnews-ux-2880-1000-1024x651.jpg 1024w, https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/160303-mosul-dam-tigris-river-yh-0754a_ab7797d9aef6363d9b7ade1546859660.nbcnews-ux-2880-1000.jpg 1574w" sizes="(max-width: 410px) 100vw, 410px" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/1-5-million-may-die-if-mosul-dam-fails-iraq-expert/" title="1.5 Million May Die if Mosul Dam Fails: Iraq Expert">
                                                1.5 Million May Die if Mosul Dam Fails: Iraq Expert                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Vivamus aliquet elit ac nisl. Fusce fermentum odio...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/chinese-kaifeng-jews-seek-new-lives-in-israel/" title="Chinese Kaifeng Jews Seek New Lives in Israel"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/shavei-photo_1ebc564fc01f2d7824d5dd564c789ac5.nbcnews-ux-2880-1000-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Chinese Kaifeng Jews Seek New Lives in Israel" title="Chinese Kaifeng Jews Seek New Lives in Israel" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/chinese-kaifeng-jews-seek-new-lives-in-israel/" title="Chinese Kaifeng Jews Seek New Lives in Israel">
                                                Chinese Kaifeng Jews Seek New Lives in Israel                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Suspendisse feugiat. Suspendisse enim...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/europe-to-economic-migrants-your-journey-will-be-all-for-nothing/" title="Europe to Economic Migrants: Your Journey Will Be ‘All for Nothing’"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/gettyimages-513559306-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Europe to Economic Migrants: Your Journey Will Be ‘All for Nothing’" title="Europe to Economic Migrants: Your Journey Will Be ‘All for Nothing’" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/europe-to-economic-migrants-your-journey-will-be-all-for-nothing/" title="Europe to Economic Migrants: Your Journey Will Be ‘All for Nothing’">
                                                Europe to Economic Migrants: Your Journey Will Be ‘All for...                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna....
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                            </div><!-- .dt-news-layout2 -->
                            <div class="clearfix"></div>
                        </div><!-- .dt-news-layout-wrap -->

                    </div>



                    <a href="https://daisythemes.com/wordpress-themes/" title="wide Ads" rel="dofollow" target="_blank"><img src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/fashion-store-2.png" alt="wide Ads"> </a>


                    <div class="dt-news-list-3">
                        <div class="dt-news-layout-wrap dt-news-layout-half">



                            <h2 class="widget-title">Health<span><a href="https://daisythemes.com/easymag/category/health/">[ View All ]</a></span></h2>


                            <div class="dt-news-layout3">


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/time-50-healthiest-foods-salmon-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/eat-this-for-dinner-to-sleep-better-tonight/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/eat-this-for-dinner-to-sleep-better-tonight/" title="Eat This for Dinner to Sleep Better Tonight">

                                                Eat This for Dinner to Sleep Better Tonight
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Suspendisse feugiat. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, n...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/energy-drink-ban-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/college-bans-energy-drinks-for-contributing-to-high-risk-sexual-activity/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/college-bans-energy-drinks-for-contributing-to-high-risk-sexual-activity/" title="College Bans Energy Drinks for Contributing to ‘High-Risk Sexual Activity’">

                                                College Bans Energy Drinks for Contributing to ‘High-Risk Sexual Activity’
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum ullamcorper mauris at ligula. Fusce fermentum. N...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/flibanserin-female-viagra-pill-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/female-viagra-doesnt-work-very-well-study/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/female-viagra-doesnt-work-very-well-study/" title="‘Female Viagra’ Doesn’t Work Very Well: Study">

                                                ‘Female Viagra’ Doesn’t Work Very Well: Study
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id puru...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/50-healthiest-foods-dandelion-greens1-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/cheaper-healthy-food-would-save-millions-of-lives/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/cheaper-healthy-food-would-save-millions-of-lives/" title="Cheaper Healthy Food Would Save Millions of Lives">

                                                Cheaper Healthy Food Would Save Millions of Lives
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculi...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                            </div><!-- .dt-news-layout3 -->


                        </div><!-- .dt-news-layout-wrap .dt-news-layout-half -->

                        <div class="dt-news-layout-wrap dt-news-layout-half dt-half-last">


                            <h2 class="widget-title">Lifestyle<span><a href="https://daisythemes.com/easymag/category/lifestyle/">[ View All ]</a></span></h2>


                            <div class="dt-news-layout3">


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/wine-video-tease-002-today-160224_2fcefd97e30ea7fab4bf31b8dcc58a33.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/womans-wine-workout-video-is-getting-buzz-fitness-can-be-fun/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/womans-wine-workout-video-is-getting-buzz-fitness-can-be-fun/" title="Woman&#8217;s wine workout video is getting buzz: &#8216;Fitness can be fun&#8217;">

                                                Woman&#8217;s wine workout video is getting buzz: &#8216;Fitness can be...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Fusce pharetra convallis urna. Quisque ut nisi. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Suspendisse non nisl sit amet velit h...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/chick-fil-a-cell-phone-inline-today-160302_94ffc298ad934bc0d9c314c28d7aa719.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/chick-fil-as-cell-phone-coop-other-eateries-encourage-diners-to-unplug/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/chick-fil-as-cell-phone-coop-other-eateries-encourage-diners-to-unplug/" title="Chick-fil-A&#8217;s &#8216;cell phone coop,&#8217; other eateries encourage diners to unplug">

                                                Chick-fil-A&#8217;s &#8216;cell phone coop,&#8217; other eateries encourage diners to unplug
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Quisque malesuada placerat nisl. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Vestibulum facilisis, purus nec pulvinar iaculis...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/olsen-twin-sunglasses-today-inline-1-160302_75beff4b708ec8de25f316237ea5ccd3.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/this-springs-hot-trends-in-sunglasses-round-pastel-all-black-and-cool-cat-eye/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/this-springs-hot-trends-in-sunglasses-round-pastel-all-black-and-cool-cat-eye/" title="This spring&#8217;s hot trends in sunglasses: Round, pastel, all black and cool cat eye">

                                                This spring&#8217;s hot trends in sunglasses: Round, pastel, all black...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidu...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/img_4305_901ae8529f6505ce25fa48dff0ba8798.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/do-you-really-need-a-bridal-party-5-things-i-wish-i-knew-before-my-wedding/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/do-you-really-need-a-bridal-party-5-things-i-wish-i-knew-before-my-wedding/" title="Do you really need a bridal party? 5 things I wish I knew before my wedding">

                                                Do you really need a bridal party? 5 things I...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibul...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                            </div><!-- .dt-news-layout3 -->



                        </div>
                        <div class="clearfix"></div>
                    </div>



                    <div class="dt-news-list-2">
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">Science<span><a href="https://daisythemes.com/easymag/category/science/">[ View All ]</a></span></h2>

                            <div class="dt-news-layout2">

                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/spacex-scrubs-mission-ses-9-for-third-time-in-a-week/" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/24589505473_74c0268b7e_o-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="SpaceX Scrubs Mission SES-9 for Third Time in a Week" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/spacex-scrubs-mission-ses-9-for-third-time-in-a-week/" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week">
                                                SpaceX Scrubs Mission SES-9 for Third Time in a Week                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Nullam tincidunt adipiscing enim. Phasellus tempus. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Fusce...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/the-lingering-effects-of-fukushima-on-fish/" title="The Lingering Effects of Fukushima on Fish"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/fukushima-fifth-anniversary-410x260.jpeg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="The Lingering Effects of Fukushima on Fish" title="The Lingering Effects of Fukushima on Fish" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/the-lingering-effects-of-fukushima-on-fish/" title="The Lingering Effects of Fukushima on Fish">
                                                The Lingering Effects of Fukushima on Fish                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Curabitur suscipit suscipit tellus. Praesent vestibulum dapibus nibh....
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/see-an-astronauts-last-orbital-sunrise-after-a-year-in-space/" title="See an Astronaut’s Last Orbital Sunrise After a Year in Space"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/astronaut-last-sunrise-from-space-scott-kelly1-410x260.gif" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="See an Astronaut’s Last Orbital Sunrise After a Year in Space" title="See an Astronaut’s Last Orbital Sunrise After a Year in Space" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/see-an-astronauts-last-orbital-sunrise-after-a-year-in-space/" title="See an Astronaut’s Last Orbital Sunrise After a Year in Space">
                                                See an Astronaut’s Last Orbital Sunrise After a Year in...                                    </a>
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



                    <a href="https://daisythemes.com/wordpress-themes/" title="Wide ADS" rel="dofollow" target="_blank"><img src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/MOUNT-BIKE-1.png" alt="Wide ADS"> </a>


                    <div class="dt-news-list-4">
                        <div class="dt-news-layout-wrap dt-sidebar-news">


                            <h2 class="widget-title">Politics<span><a href="https://daisythemes.com/easymag/category/politics/">[ View All ]</a></span></h2>

                            <div class="dt-news-layout4">

                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <a href="https://daisythemes.com/easymag/2016/03/06/white-house-may-be-vetting-appeals-judge-for-supreme-court-vacancy/" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/photo-1453945619913-79ec89a82c51-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="White House May Be Vetting Appeals Judge for Supreme Court Vacancy" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy" /></a>
                                        <a href="https://daisythemes.com/easymag/2016/03/06/white-house-may-be-vetting-appeals-judge-for-supreme-court-vacancy/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/white-house-may-be-vetting-appeals-judge-for-supreme-court-vacancy/" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy">White House May Be Vetting Appeals Judge for Supreme Court Vacancy</a></h3>
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <a href="https://daisythemes.com/easymag/2016/03/06/donald-trumps-boxing-strategy-for-winning-the-nomination/" title="Donald Trump’s Boxing Strategy for Winning the Nomination"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/trump-strategy-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Donald Trump’s Boxing Strategy for Winning the Nomination" title="Donald Trump’s Boxing Strategy for Winning the Nomination" /></a>
                                        <a href="https://daisythemes.com/easymag/2016/03/06/donald-trumps-boxing-strategy-for-winning-the-nomination/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/donald-trumps-boxing-strategy-for-winning-the-nomination/" title="Donald Trump’s Boxing Strategy for Winning the Nomination">Donald Trump’s Boxing Strategy for Winning the Nomination</a></h3>
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <a href="https://daisythemes.com/easymag/2016/03/06/obama-plans-to-stay-in-washington-after-his-presidency-ends/" title="Obama Plans to Stay in Washington After His Presidency Ends"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/obama-family-dc-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Obama Plans to Stay in Washington After His Presidency Ends" title="Obama Plans to Stay in Washington After His Presidency Ends" /></a>
                                        <a href="https://daisythemes.com/easymag/2016/03/06/obama-plans-to-stay-in-washington-after-his-presidency-ends/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/obama-plans-to-stay-in-washington-after-his-presidency-ends/" title="Obama Plans to Stay in Washington After His Presidency Ends">Obama Plans to Stay in Washington After His Presidency Ends</a></h3>
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <a href="https://daisythemes.com/easymag/2016/03/06/trump-agrees-with-democrats-on-high-speed-trains/" title="Trump Agrees With Democrats on High-Speed Trains"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/trains-high-speed-donald-trump-election-2016-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Trump Agrees With Democrats on High-Speed Trains" title="Trump Agrees With Democrats on High-Speed Trains" /></a>
                                        <a href="https://daisythemes.com/easymag/2016/03/06/trump-agrees-with-democrats-on-high-speed-trains/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/trump-agrees-with-democrats-on-high-speed-trains/" title="Trump Agrees With Democrats on High-Speed Trains">Trump Agrees With Democrats on High-Speed Trains</a></h3>
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <a href="https://daisythemes.com/easymag/2016/03/06/vote-now-who-won-the-eleventh-republican-debate/" title="Vote Now: Who Won the Eleventh Republican Debate?"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/gettyimages-513614502-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Vote Now: Who Won the Eleventh Republican Debate?" title="Vote Now: Who Won the Eleventh Republican Debate?" /></a>
                                        <a href="https://daisythemes.com/easymag/2016/03/06/vote-now-who-won-the-eleventh-republican-debate/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/vote-now-who-won-the-eleventh-republican-debate/" title="Vote Now: Who Won the Eleventh Republican Debate?">Vote Now: Who Won the Eleventh Republican Debate?</a></h3>
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <a href="https://daisythemes.com/easymag/2016/03/06/utah-senator-blocks-federal-aid-for-flint-water-crisis/" title="Utah Senator Blocks Federal Aid for Flint Water Crisis"><img width="230" height="184" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/mike-lee2-230x184.jpg" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="Utah Senator Blocks Federal Aid for Flint Water Crisis" title="Utah Senator Blocks Federal Aid for Flint Water Crisis" /></a>
                                        <a href="https://daisythemes.com/easymag/2016/03/06/utah-senator-blocks-federal-aid-for-flint-water-crisis/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/utah-senator-blocks-federal-aid-for-flint-water-crisis/" title="Utah Senator Blocks Federal Aid for Flint Water Crisis">Utah Senator Blocks Federal Aid for Flint Water Crisis</a></h3>
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post -->


                                <div class="clearfix"></div>
                            </div><!-- .dt-news-layout4 -->


                        </div><!-- .dt-news-layout-wrap .dt-sidebar-news -->
                    </div>



                    <div class="dt-news-list-1">
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">Sports<span><a href="https://daisythemes.com/easymag/category/sports/">[ View All ]</a></span></h2>

                            <div class="dt-news-layout1">


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/800px-Italy_vs_Wales_Six_Nations_rugby-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/tom-brady-will-play-for-patriots-through-2019/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/tom-brady-will-play-for-patriots-through-2019/" title="Tom Brady Will Play for Patriots Through 2019">

                                                Tom Brady Will Play for Patriots Through 2019
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Curabitur turpis. Vestibulum suscipit nulla quis orci. Fusce ac felis sit amet ligula pharetra condimentum. Maecenas egestas arcu quis ligula mattis placerat. Duis lobortis massa imperdiet quam. Suspendisse potenti. Pell...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/gettyimages-512851564-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/stephen-curry-the-antidote-to-americas-anger-problem/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/stephen-curry-the-antidote-to-americas-anger-problem/" title="Stephen Curry: The Antidote to America’s Anger Problem">

                                                Stephen Curry: The Antidote to America’s Anger Problem
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum ullamcorper mauris at ligula. Fusce fermentum. N...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/darmouth-football-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" srcset="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/darmouth-football-410x260.jpg 410w, https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/darmouth-football-300x189.jpg 300w, https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/darmouth-football-768x485.jpg 768w, https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/darmouth-football-1024x646.jpg 1024w, https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/darmouth-football.jpg 1100w" sizes="(max-width: 410px) 100vw, 410px" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/ivy-league-football-coaches-move-to-end-tackling-in-regular-season-practices/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/ivy-league-football-coaches-move-to-end-tackling-in-regular-season-practices/" title="Ivy League Football Coaches Move to End Tackling in Regular-Season Practices">

                                                Ivy League Football Coaches Move to End Tackling in Regular-Season...
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/olympics-rio-tickets-sales-down-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/less-than-half-of-summer-olympics-tickets-have-been-sold/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/less-than-half-of-summer-olympics-tickets-have-been-sold/" title="Less Than Half of Summer Olympics Tickets Have Been Sold">

                                                Less Than Half of Summer Olympics Tickets Have Been Sold
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsu...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="407" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/brandi-chastain-cte-407x260.jpeg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/soccer-star-brandi-chastain-pledges-to-donate-brain-to-cte-research/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/soccer-star-brandi-chastain-pledges-to-donate-brain-to-cte-research/" title="Soccer Star Brandi Chastain Pledges to Donate Brain to CTE Research">

                                                Soccer Star Brandi Chastain Pledges to Donate Brain to CTE...
                                            </a></h3>



                                        <div class="dt-news-post-desc">

                                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel,...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->



                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    <a href="https://daisythemes.com/wordpress-themes/" title="Wide ads" rel="dofollow" target="_blank"><img src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/rafting-ads-2.png" alt="Wide ads"> </a>


                    <div class="dt-news-list-2">
                        <div class="dt-news-layout-wrap">

                            <h2 class="widget-title">Technology<span><a href="https://daisythemes.com/easymag/category/technology/">[ View All ]</a></span></h2>

                            <div class="dt-news-layout2">

                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/twitter-google-and-the-associated-press-partner-on-voter-tracking-tool/" title="Twitter, Google and the Associated Press Partner on Voter Tracking Tool"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/google-president-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Twitter, Google and the Associated Press Partner on Voter Tracking Tool" title="Twitter, Google and the Associated Press Partner on Voter Tracking Tool" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/twitter-google-and-the-associated-press-partner-on-voter-tracking-tool/" title="Twitter, Google and the Associated Press Partner on Voter Tracking Tool">
                                                Twitter, Google and the Associated Press Partner on Voter Tracking...                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/review-superhot-is-a-shooter-youll-love-even-if-youre-terrible-at-shooters/" title="Review: Superhot Is a Shooter You’ll Love Even If You’re Terrible at Shooters"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/superhot-2-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Review: Superhot Is a Shooter You’ll Love Even If You’re Terrible at Shooters" title="Review: Superhot Is a Shooter You’ll Love Even If You’re Terrible at Shooters" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/review-superhot-is-a-shooter-youll-love-even-if-youre-terrible-at-shooters/" title="Review: Superhot Is a Shooter You’ll Love Even If You’re Terrible at Shooters">
                                                Review: Superhot Is a Shooter You’ll Love Even If You’re...                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna....
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                                <div class="dt-news-post transition5">
                                    <figure class="dt-news-post-img">

                                        <a href="https://daisythemes.com/easymag/2016/03/06/3-things-to-know-about-amazons-new-echo/" title="3 Things to Know About Amazon’s New Echo"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/echodot_slate01_-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="3 Things to Know About Amazon’s New Echo" title="3 Things to Know About Amazon’s New Echo" /></a>
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-month">Mar<br/>2016</span>
                                            <span class="dt-news-post-day">06</span>
                                        </div><!-- .dt-news-post-meta -->
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <h3>
                                            <a href="https://daisythemes.com/easymag/2016/03/06/3-things-to-know-about-amazons-new-echo/" title="3 Things to Know About Amazon’s New Echo">
                                                3 Things to Know About Amazon’s New Echo                                    </a>
                                        </h3>

                                        <div class="dt-news-post-desc">

                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->
                                </div><!-- .dt-news-post transition5 -->


                            </div><!-- .dt-news-layout2 -->
                            <div class="clearfix"></div>
                        </div><!-- .dt-news-layout-wrap -->

                    </div>



                    <div class="dt-news-list-3">
                        <div class="dt-news-layout-wrap dt-news-layout-half">



                            <h2 class="widget-title">Travel<span><a href="https://daisythemes.com/easymag/category/travel/">[ View All ]</a></span></h2>


                            <div class="dt-news-layout3">


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/3821489872_e6a2159b55_b-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/travel-startup-offers-half-price-hotel-deals-if-youre-willing-to-share-with-a-stranger/" title="Travel startup offers half-price hotel deals if you&#8217;re willing to share with a stranger">

                                                Travel startup offers half-price hotel deals if you&#8217;re willing to...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tem...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/orlando-visit-the-orlando-eye2-today-160104-01_cb860cac8283e6e1860165d7a52a4595.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/5-family-friendly-places-to-visit-in-orlando-florida/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/5-family-friendly-places-to-visit-in-orlando-florida/" title="5 family-friendly places to visit in Orlando, Florida">

                                                5 family-friendly places to visit in Orlando, Florida
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Praesent ac sem eget est egestas volutpat. Vivamus consectetuer hendrerit lacus. Cras non dolor. Vivamus in erat ut urna cursus vestibulum. Fusce commodo aliquam arcu. Nam commodo suscipit quam. Quisque id odio. Praesent...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/paris-romantic-couple-stock-today-160203-tease_ab0a3e12e016ba5ec0ca5cb868d202e8.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/americans-pick-paris-as-the-worlds-most-romantic-city-in-expedia-travel-study/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/americans-pick-paris-as-the-worlds-most-romantic-city-in-expedia-travel-study/" title="Americans pick Paris as the world&#8217;s most romantic city in Expedia travel study">

                                                Americans pick Paris as the world&#8217;s most romantic city in...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Nunc sed turpis. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Nulla porta dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hym...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/bucuti-tara-beach-resort-aruba-today-160201-tease_bece592b46d054cd1353fc564bb305a7.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/most-romantic-hotels-in-us-and-the-world-rated-by-tripadvisor/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/most-romantic-hotels-in-us-and-the-world-rated-by-tripadvisor/" title="Most romantic hotels in US and the world rated by TripAdvisor">

                                                Most romantic hotels in US and the world rated by...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Fusce pharetra convallis urna. Quisque ut nisi. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Suspendisse non nisl sit amet velit h...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/02_baia_do_sancho_fernando_de_noronha_brazil_03_0ac946ca0e32e41f1b54ab1b2ef8f142.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/10-best-beaches-in-the-us-and-world-according-to-tripadvisor/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/10-best-beaches-in-the-us-and-world-according-to-tripadvisor/" title="10 best beaches in the US and world according to TripAdvisor">

                                                10 best beaches in the US and world according to...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Quisque id mi. Ut tincidunt tincidunt erat. Etiam feugiat lorem non metus. Vestibulum dapibus nunc ac augue...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/longest-lasting-cars-tease-2-160218_a658facb0246919e9b201bffd099c5fd.today-inline-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/top-10-longest-lasting-cars-and-vehicles-according-to-iseecars-com-study/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/top-10-longest-lasting-cars-and-vehicles-according-to-iseecars-com-study/" title="Top 10 longest-lasting cars and vehicles according to iSeeCars.com study">

                                                Top 10 longest-lasting cars and vehicles according to iSeeCars.com study
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rho...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                            </div><!-- .dt-news-layout3 -->


                        </div><!-- .dt-news-layout-wrap .dt-news-layout-half -->

                        <div class="dt-news-layout-wrap dt-news-layout-half dt-half-last">


                            <h2 class="widget-title">Entertainment<span><a href="https://daisythemes.com/easymag/category/entertainment/">[ View All ]</a></span></h2>


                            <div class="dt-news-layout3">


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/15411665243_903255c5ba_k-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/meghan-trainor-on-why-her-new-single-no-sounds-nothing-like-meghan-trainor/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/meghan-trainor-on-why-her-new-single-no-sounds-nothing-like-meghan-trainor/" title="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor">

                                                Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque ha...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/the-family-tv-show-abc-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/viewers-deserve-more-shows-like-the-family/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/viewers-deserve-more-shows-like-the-family/" title="Viewers Deserve More Shows Like The Family">

                                                Viewers Deserve More Shows Like The Family
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium t...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/gettyimages-480340506-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/mark-hamill-says-luke-skywalker-could-be-gay/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/mark-hamill-says-luke-skywalker-could-be-gay/" title="Mark Hamill Says Luke Skywalker Could Be Gay">

                                                Mark Hamill Says Luke Skywalker Could Be Gay
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies ...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/gettyimages-513650882-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/someone-immortalized-leonardo-dicaprios-oscar-win-with-a-giant-mural/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/someone-immortalized-leonardo-dicaprios-oscar-win-with-a-giant-mural/" title="Someone Immortalized Leonardo DiCaprio’s Oscar Win With a Giant Mural">

                                                Someone Immortalized Leonardo DiCaprio’s Oscar Win With a Giant Mural
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Aliquam erat volutpat. Etiam vitae tortor. Morbi vestibulum volutpat enim. Aliquam eu nunc. Nunc sed turpis. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Nulla porta...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/zooptopia-film-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/review-zootopia-gives-the-old-teachable-moment-a-jolt-of-life/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/review-zootopia-gives-the-old-teachable-moment-a-jolt-of-life/" title="Review: Zootopia Gives the Old Teachable Moment a Jolt of Life">

                                                Review: Zootopia Gives the Old Teachable Moment a Jolt of...
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Mauris sollicitudin fermentum libero. P...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


                                <div class="dt-news-post">
                                    <figure class="dt-news-post-img">
                                        <img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/jk-rowling-harry-potter-chair-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="" />
                                        <a href="https://daisythemes.com/easymag/2016/03/06/j-k-rowlings-harry-potter-writing-chair-will-be-auctioned-off/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
                                    </figure><!-- .dt-news-post-img -->

                                    <div class="dt-news-post-content">
                                        <div class="dt-news-post-meta">
                                            <span class="dt-news-post-date"><i class="fa fa-calendar"></i> March 6, 2016</span>

                                            <span class="dt-news-post-comments"><i class="fa fa-comments"></i> No Responses</span>
                                        </div><!-- .dt-news-post-meta -->

                                        <h3><a href="https://daisythemes.com/easymag/2016/03/06/j-k-rowlings-harry-potter-writing-chair-will-be-auctioned-off/" title="J.K. Rowling’s Harry Potter Writing Chair Will Be Auctioned Off">

                                                J.K. Rowling’s Harry Potter Writing Chair Will Be Auctioned Off
                                            </a></h3>

                                        <div class="dt-news-post-desc">

                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna. In hac habitasse platea dictums...
                                        </div><!-- .dt-news-post-desc -->
                                    </div><!-- .dt-news-post-content -->

                                    <div class="clearfix"></div>
                                </div><!-- .dt-news-post -->


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
            </div><!-- .col-lg-4 -->

        </div><!-- .row -->
    </div><!-- .container -->



    <footer class="dt-footer">

        <div class="container">
            <div class="dt-footer-cont">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <aside id="text-3" class="widget widget_text"><h2 class="widget-title">EasyMag</h2>			<div class="textwidget">EasyMag is a Professional WordPress News and Magazine theme is fully responsive for all the screen sizes. It includes theme customizer to customize and setup basic settings logo, color, and layouts. You can have 6 different news layouts, social icons to create beautiful homepage and do support different advertisement banner size. </div>
                        </aside><aside id="meta-2" class="widget widget_meta"><h2 class="widget-title">Meta</h2>			<ul>
                                <li><a rel="nofollow" href="https://daisythemes.com/easymag/wp-login.php">Log in</a></li>
                                <li><a href="https://daisythemes.com/easymag/feed/">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="https://daisythemes.com/easymag/comments/feed/">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>			</ul>
                        </aside>					</div><!-- .col-lg-3 .col-md-3 .col-sm-6 -->

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <aside id="recent-posts-2" class="widget widget_recent_entries">		<h2 class="widget-title">Recent Posts</h2>		<ul>
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
                        </aside>					</div><!-- .col-lg-3 .col-md-3 .col-sm-6 -->

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <aside id="categories-2" class="widget widget_categories"><h2 class="widget-title">Categories</h2>		<ul>
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
                        </aside>					</div><!-- .col-lg-3 .col-md-3 .col-sm-6 -->

                    <div class="col-lg-3 col-md-3 col-sm-6">

                        <a href="https://daisythemes.com/wordpress-themes/" title="Footer ADS" rel="dofollow" target="_blank"><img style="margin-top: 20px" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/menu.png" alt="Footer ADS"> </a>

                    </div><!-- .col-lg-3 .col-md-3 .col-sm-6 -->
                </div><!-- .row -->
            </div><!-- .dt-footer-cont -->
        </div><!-- .container -->


        <div class="dt-footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="dt-copyright">
                            Copyright &copy; 2018 <a href="https://daisythemes.com/easymag/" title="EasyMag">EasyMag</a>. All rights reserved.						</div><!-- .dt-copyright -->
                    </div><!-- .col-lg-6 .col-md-6 -->

                    <div class="col-lg-6 col-md-6">
                        <div class="dt-footer-designer">
                            Designed by <a href="http://daisythemes.com/" target="_blank" rel="designer">Daisy Themes</a>
                        </div><!-- .dt-footer-designer -->
                    </div><!-- .col-lg-6 .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .dt-footer-bar -->
    </footer><!-- .dt-footer -->

    <a id="back-to-top" class="transition35"><i class="fa fa-angle-up"></i></a><!-- #back-to-top -->

</div><!-- .dt-body-wrap -->


</body>
</html>
