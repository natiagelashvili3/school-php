<?php
/* Template Name: Home */
?>
<?php get_header(); ?>

<?php

$recentPosts = get_posts(
    array(
        'numberposts'      => 20,
        "suppress_filters" => false
    )
);

?>


<div class="content col-md-12" id="home_page">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <div id="pl-2" class="panel-layout row">
                <!-- 1 Row -->
                <?php
                    $recentFirst = $recentPosts[0];
                ?>
                <div id="pg-2-0" class="panel-grid panel-no-style col-md-10">
                    <div id="pgc-2-0-0" class="panel-grid-cell">
                        <div id="panel-2-0-0-0"
                             class="so-panel widget widget_eds_news_hero_block_extended eds_news_hero_block_extended panel-first-child panel-last-child"
                             data-index="0">
                            <div class="ed_news_hero_block">
                                <div class="row ed_grids_style_fly">
                                    <div class="col-md-6 gird_list force-pull-5">
                                        <ul class="post-categories">
                                            <li>
                                                <a href="<?= get_category_link(get_the_category($recentFirst->ID)[0]); ?>" rel="category">
                                                    <?= get_the_category($recentFirst->ID)[0]->name; ?>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="<?= get_permalink($recentFirst->ID); ?>" rel="bookmark"  class="ed_media hero_block_main_image">
                                            <span>
                                                <?= get_the_post_thumbnail( $recentFirst->ID, 'Medium' ); ?>
                                            </span>
                                        </a>
                                        <div class="ed_caption">
                                            <h4>
                                                <a href="<?= get_permalink($recentFirst->ID); ?>"><?= $recentFirst->post_title ?></a>
                                            </h4>
                                            <ul class="list-inline ed_meta">
                                                <li>
                                                    <time class="entry-date published updated"
                                                          datetime="2014-11-02T08:54:49+00:00"><?= get_the_date('F d, Y'); ?>
                                                    </time>
                                                </li>
                                                <li class="comments-link">
                                                    <a href="<?= get_permalink($recentFirst->ID).'#comments'; ?>">
                                                        <?php _e( 'Leave a Comment', 'newsbd24' ); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="short-decr">
                                                <?php
                                                $content_arr = get_extended($recentFirst->post_content);
                                                echo apply_filters('the_content', $content_arr['main']);
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <?php foreach (array_slice($recentPosts, 1, 4) as $key => $value ): ?>
                                            <div class="col-md-6 col-sm-6 gird_list margin_bottom_5">
                                                <a href="<?= get_permalink($value->ID); ?>" rel="bookmark" class="ed_media hero_block_child_image">
                                                    <span>
                                                        <?= get_the_post_thumbnail( $value->ID, 'Thumbnail' ); ?>
                                                    </span>
                                                </a>
                                                <div class="ed_caption">
                                                    <span class="single_post_category ">
                                                        <a href="<?= get_category_link(get_the_category($value->ID)[0]); ?>"><?= get_the_category($value->ID)[0]->name; ?></a>
                                                    </span>
                                                    <h5>
                                                        <a href="<?= get_permalink($value->ID); ?>">
                                                            <?= $value->post_title ?>
                                                        </a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
					<!-- block-1 -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-9872896406240993"
					     data-ad-slot="7892703824"
					     data-ad-format="auto"
					     data-full-width-responsive="true"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
                </div>

                <!-- 2 Row -->
                <?php
                    $recentSecond = $recentPosts[5];
                ?>
                <div class="col-md-2">	
					<!-- block-2 -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-9872896406240993"
					     data-ad-slot="6652430889"
					     data-ad-format="auto"
					     data-full-width-responsive="true"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
                </div>
                <div id="pl-2" class="panel-layout col-md-10">
                    <div id="pg-2-0" class="panel-grid panel-no-style">
                        <div id="pgc-2-0-0" class="panel-grid-cell">
                            <div id="panel-2-0-0-0"
                                 class="so-panel widget widget_eds_news_hero_block_extended eds_news_hero_block_extended panel-first-child panel-last-child"
                                 data-index="0">
                                <div class="ed_news_hero_block">
                                    <div class="row ed_grids_style_fly">

                                        <div class="col-md-6">
                                            <div class="row">
                                                <?php foreach (array_slice($recentPosts, 6, 4) as $key => $value ): ?>
                                                    <div class="col-md-6 col-sm-6 gird_list margin_bottom_5">
                                                        <a href="<?= get_permalink($value->ID); ?>" rel="bookmark" class="ed_media hero_block_child_image">
                                                    <span>
                                                        <?= get_the_post_thumbnail( $value->ID, 'Large' ); ?>
                                                    </span>
                                                        </a>
                                                        <div class="ed_caption">
                                                    <span class="single_post_category ">
                                                        <a href="<?= get_category_link(get_the_category($value->ID)[0]); ?>">
                                                            <?= get_the_category($value->ID)[0]->name; ?>
                                                        </a>
                                                    </span>
                                                            <h5>
                                                                <a href="<?= get_permalink($value->ID); ?>">
                                                                    <?= $value->post_title ?>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 gird_list force-pull-5">
                                            <ul class="post-categories">
                                                <li>
                                                    <a href="<?= get_category_link(get_the_category($recentSecond->ID)[0]); ?>" rel="category">
                                                        <?= get_the_category($recentSecond->ID)[0]->name; ?>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a href="<?= get_permalink($recentFirst->ID); ?>" rel="bookmark"  class="ed_media hero_block_main_image">
                                            <span>
                                                <?= get_the_post_thumbnail( $recentSecond->ID, 'Large' ); ?>
                                            </span>
                                            </a>
                                            <div class="ed_caption">
                                                <h4>
                                                    <a href="<?= get_permalink($recentFirst->ID); ?>"><?= $recentSecond->post_title ?></a>
                                                </h4>
                                                <ul class="list-inline ed_meta">
                                                    <li>
                                                        <time class="entry-date published updated"
                                                              datetime="2014-11-02T08:54:49+00:00"><?= get_the_date('F d, Y'); ?>
                                                        </time>
                                                    </li>
                                                    <li class="comments-link"><a href="<?= get_permalink($recentFirst->ID); ?>#comment">
                                                            Leave a Comment
                                                            <span class="screen-reader-text"> on How we make choices</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <?php
                                                $content_arr = get_extended($recentSecond->post_content);
                                                echo apply_filters('the_content', $content_arr['main']);
                                                ?>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- 3 Row -->
                <?php
                $recentFirst = $recentPosts[10];
                ?>
                <div id="pg-2-0" class="panel-grid panel-no-style">
                    <div id="pgc-2-0-0" class="panel-grid-cell">
                        <div id="panel-2-0-0-0"
                             class="so-panel widget widget_eds_news_hero_block_extended eds_news_hero_block_extended panel-first-child panel-last-child"
                             data-index="0">
                            <div class="ed_news_hero_block">
                                <div class="row ed_grids_style_fly">
                                    <div class="col-md-6 gird_list force-pull-5">
                                        <ul class="post-categories">
                                            <li>
                                                <a href="<?= get_category_link(get_the_category($recentFirst->ID)[0]); ?>" rel="category">
                                                    <?= get_the_category($recentFirst->ID)[0]->name; ?>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="<?= get_permalink($recentFirst->ID); ?>" rel="bookmark"  class="ed_media hero_block_main_image">
                                            <span>
                                                <?= get_the_post_thumbnail( $recentFirst->ID, 'Large' ); ?>
                                            </span>
                                        </a>
                                        <div class="ed_caption">
                                            <h4>
                                                <a href="<?= get_permalink($recentFirst->ID); ?>"><?= $recentFirst->post_title ?></a>
                                            </h4>
                                            <ul class="list-inline ed_meta">
                                                <li>
                                                    <time class="entry-date published updated"
                                                          datetime="2014-11-02T08:54:49+00:00"><?= get_the_date('F d, Y'); ?>
                                                    </time>
                                                </li>
                                                <li class="comments-link">
                                                    <a href="<?= get_permalink($recentFirst->ID).'#comments'; ?>">
                                                        Leave a Comment
                                                    </a>
                                                </li>
                                            </ul>
                                            <?php
                                            $content_arr = get_extended($recentFirst->post_content);
                                            echo apply_filters('the_content', $content_arr['main']);
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <?php foreach (array_slice($recentPosts, 11, 4) as $key => $value ): ?>
                                                <div class="col-md-6 col-sm-6 gird_list margin_bottom_5">
                                                    <a href="<?= get_permalink($value->ID); ?>" rel="bookmark" class="ed_media hero_block_child_image">
                                                    <span>
                                                        <?= get_the_post_thumbnail( $value->ID, 'Large' ); ?>
                                                    </span>
                                                    </a>
                                                    <div class="ed_caption">
                                                    <span class="single_post_category ">
                                                        <a href="<?= get_category_link(get_the_category($value->ID)[0]); ?>"><?= get_the_category($value->ID)[0]->name; ?></a>
                                                    </span>
                                                        <h5>
                                                            <a href="<?= get_permalink($value->ID); ?>">
                                                                <?= $value->post_title ?>
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- 4 Row -->
                <?php
                $recentSecond = $recentPosts[15];
                ?>
                <div id="pl-2" class="panel-layout">
                    <div id="pg-2-0" class="panel-grid panel-no-style">
                        <div id="pgc-2-0-0" class="panel-grid-cell">
                            <div id="panel-2-0-0-0"
                                 class="so-panel widget widget_eds_news_hero_block_extended eds_news_hero_block_extended panel-first-child panel-last-child"
                                 data-index="0">
                                <div class="ed_news_hero_block">
                                    <div class="row ed_grids_style_fly">

                                        <div class="col-md-6">
                                            <div class="row">
                                                <?php foreach (array_slice($recentPosts, 16, 4) as $key => $value ): ?>
                                                    <div class="col-md-6 col-sm-6 gird_list margin_bottom_5">
                                                        <a href="<?= get_permalink($value->ID); ?>" rel="bookmark" class="ed_media hero_block_child_image">
                                                    <span>
                                                        <?= get_the_post_thumbnail( $value->ID, 'Large' ); ?>
                                                    </span>
                                                        </a>
                                                        <div class="ed_caption">
                                                    <span class="single_post_category ">
                                                        <a href="<?= get_category_link(get_the_category($value->ID)[0]); ?>">
                                                            <?= get_the_category($value->ID)[0]->name; ?>
                                                        </a>
                                                    </span>
                                                            <h5>
                                                                <a href="<?= get_permalink($value->ID); ?>">
                                                                    <?= $value->post_title ?>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 gird_list force-pull-5">
                                            <ul class="post-categories">
                                                <li>
                                                    <a href="<?= get_category_link(get_the_category($recentSecond->ID)[0]); ?>" rel="category">
                                                        <?= get_the_category($recentSecond->ID)[0]->name; ?>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a href="<?= get_permalink($recentFirst->ID); ?>" rel="bookmark"  class="ed_media hero_block_main_image">
                                            <span>
                                                <?= get_the_post_thumbnail( $recentSecond->ID, 'Large' ); ?>
                                            </span>
                                            </a>
                                            <div class="ed_caption">
                                                <h4>
                                                    <a href="<?= get_permalink($recentFirst->ID); ?>"><?= $recentSecond->post_title ?></a>
                                                </h4>
                                                <ul class="list-inline ed_meta">
                                                    <li>
                                                        <time class="entry-date published updated"
                                                              datetime="2014-11-02T08:54:49+00:00"><?= get_the_date('F d, Y'); ?>
                                                        </time>
                                                    </li>
                                                    <li class="comments-link"><a href="<?= get_permalink($recentFirst->ID); ?>#comment">
                                                            Leave a Comment
                                                            <span class="screen-reader-text"> on How we make choices</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <?php
                                                $content_arr = get_extended($recentSecond->post_content);
                                                echo apply_filters('the_content', $content_arr['main']);
                                                ?>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                <!--
                <?php
                    $travelNews = get_posts(
                        array(
                            'numberposts'      => 5,
                            "suppress_filters" => false,
                            'category' => 3
                        )
                    );

                    $travelFirst = array_shift($travelNews);
                ?>

                <div id="pg-2-1" class="panel-grid panel-has-style">
                    <div class="panel-row-style panel-row-style-for-2-1">
                        <div id="pgc-2-1-0" class="panel-grid-cell">
                            <div id="panel-2-1-0-1"
                                 class="so-panel widget widget_eds_news_block_extended eds_news_block_extended panel-last-child"
                                 data-index="2"><h3 class="widget-title"><span>Category: Travel</span></h3>
                                <div class="ed_news_news_block_style_2_wrp">
                                    <div class="row">

                                        <div class="ed_grids_style_simply col-md-6">
                                            <div class="gird_list">
                                                <a href="https://athemeart.com/demo/newsbd24/?p=918" rel="bookmark" class="ed_media">
                                                    <span>
                                                        <?= get_the_post_thumbnail( $travelFirst->ID, 'Large' ); ?>
                                                    </span>
                                                </a>
                                                <div class="category__style__1">
                                                    <h5>
                                                        <ul class="post-categories">
                                                            <li>
                                                                <a href="https://athemeart.com/demo/newsbd24/?cat=24" rel="category">Travel</a>
                                                            </li>
                                                        </ul>
                                                    </h5>
                                                </div>
                                                <h4>
                                                    <a href="https://athemeart.com/demo/newsbd24/?p=918">
                                                        <?= $travelFirst->post_title ?>
                                                    </a>
                                                </h4>
                                                <ul class="list-inline ed_meta">
                                                    <li>
                                                        <time class="entry-date published updated"  datetime="2014-10-31T08:50:12+00:00">
                                                            <?= get_the_date('F d, Y'); ?>
                                                        </time>
                                                    </li>
                                                    <li class="comments-link">
                                                        <a href="https://athemeart.com/demo/newsbd24/?p=918#comments">
                                                            Leave a Comment
                                                        </a>
                                                    </li>
                                                </ul>
                                                <?php
                                                    $content_arr = get_extended($travelFirst->post_content);
                                                    echo apply_filters('the_content', $content_arr['main']);
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row ed_grids_style_simply">

                                                <?php foreach($travelNews as $travelKey => $travelValue): ?>
                                                <div class="row gird_list ed_add_border">
                                                    <div class="col-md-4">
                                                        <a href="https://athemeart.com/demo/newsbd24/?p=252" rel="bookmark" class="ed_media remove_after">
                                                            <span class="redu_to_5">
                                                                <?= get_the_post_thumbnail( $travelValue->ID, 'Large' ); ?>
                                                            </span></a></div>
                                                    <div class="col-md-8">
                                                        <h6>
                                                            <a href="https://athemeart.com/demo/newsbd24/?p=252">
                                                                <?= $travelValue->post_title ?>
                                                            </a>
                                                        </h6>
                                                        <ul class="list-inline ed_meta">
                                                            <li>
                                                                <time class="entry-date published updated" datetime="2014-10-31T08:47:00+00:00">
                                                                    <?= get_the_date('F d, Y'); ?>
                                                                </time>
                                                            </li>
                                                            <li><?= get_the_category($travelValue->ID)[0]->name; ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-2-1-1" class="panel-grid-cell">
                            <div id="panel-2-1-1-1" class="so-panel widget widget_media_image panel-last-child"
                                 data-index="4"><h3 class="widget-title"><span>Advertisement</span></h3><img width="300"
                                                                                                             height="250"
                                                                                                             src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2017/08/newspaper-rec300-300x250.jpg"
                                                                                                             class="image wp-image-1051  attachment-medium size-medium"
                                                                                                             alt=""
                                                                                                             style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="pg-2-3" class="panel-grid panel-has-style">
                    <div class="panel-row-style panel-row-style-for-2-3">
                        <div id="pgc-2-3-0" class="panel-grid-cell">
                            <div id="panel-2-3-0-0"
                                 class="so-panel widget widget_eds_news_block_extended eds_news_block_extended panel-first-child panel-last-child"
                                 data-index="7"><h3 class="widget-title"><span>popular this month</span></h3>
                                <div class="ed_news_news_block_style_6_wrp">
                                    <div class="row">
                                        <div class="ed_grids_style_fly col-md-12 margin_bottom_20">
                                            <div class="gird_list">
                                                <ul class="post-categories">
                                                    <li>
                                                        <a href="https://athemeart.com/demo/newsbd24/?cat=70" rel="category">Fashion</a></li>
                                                </ul>
                                                <a href="https://athemeart.com/demo/newsbd24/?p=256" rel="bookmark"
                                                   class="ed_media"><span><img
                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/glasses-289093_1280-1-1024x683.jpg"
                                                                alt="Glasses fashion trends"></span></a>
                                                <div class="ed_caption"><h4><a
                                                                href="https://athemeart.com/demo/newsbd24/?p=256">Glasses
                                                            fashion trends</a></h4>
                                                    <ul class="list-inline ed_meta">
                                                        <li>
                                                            <time class="entry-date published updated"
                                                                  datetime="2014-11-01T06:50:32+00:00">November 1, 2014
                                                            </time>
                                                        </li>
                                                        <li>by <a href="https://athemeart.com/demo/newsbd24/?author=2">Gameleon
                                                                Staff</a></li>
                                                        <li class="comments-link"><a
                                                                    href="https://athemeart.com/demo/newsbd24/?p=256#respond">Leave
                                                                a Comment<span class="screen-reader-text"> on Glasses fashion trends</span></a>
                                                        </li>
                                                    </ul>
                                                    I have traced the Rebel spies to her. Now she is my only link to
                                                    finding their...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ed_grids_style_simply">
                                                <div class="row">
                                                    <div class="col-md-6 gird_list ed_add_border">
                                                        <div class="row">
                                                            <div class="col-md-4"><a
                                                                        href="https://athemeart.com/demo/newsbd24/?p=269"
                                                                        rel="bookmark"
                                                                        class="ed_media remove_after"><span
                                                                            class="redu_to_5"><img
                                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/10/IMG_0507-1300x866-1-150x150.jpg"
                                                                                alt="Old Vintage Railway"></span></a>
                                                            </div>
                                                            <div class="col-md-8"><h6><a
                                                                            href="https://athemeart.com/demo/newsbd24/?p=269">Old
                                                                        Vintage Railway</a></h6>
                                                                <ul class="list-inline ed_meta">
                                                                    <li>
                                                                        <time class="entry-date published updated"
                                                                              datetime="2014-11-01T11:31:12+00:00">
                                                                            November 1, 2014
                                                                        </time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 gird_list ed_add_border">
                                                        <div class="row">
                                                            <div class="col-md-4"><a
                                                                        href="https://athemeart.com/demo/newsbd24/?p=279"
                                                                        rel="bookmark"
                                                                        class="ed_media remove_after"><span
                                                                            class="redu_to_5"><img
                                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/8613970710_29fb7a53f0_k-1-150x150.jpg"
                                                                                alt="Beautiful Carefree Girl"></span></a>
                                                            </div>
                                                            <div class="col-md-8"><h6><a
                                                                            href="https://athemeart.com/demo/newsbd24/?p=279">Beautiful
                                                                        Carefree Girl</a></h6>
                                                                <ul class="list-inline ed_meta">
                                                                    <li>
                                                                        <time class="entry-date published updated"
                                                                              datetime="2014-11-01T06:43:41+00:00">
                                                                            November 1, 2014
                                                                        </time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 gird_list ed_add_border">
                                                        <div class="row">
                                                            <div class="col-md-4"><a
                                                                        href="https://athemeart.com/demo/newsbd24/?p=282"
                                                                        rel="bookmark"
                                                                        class="ed_media remove_after"><span
                                                                            class="redu_to_5"><img
                                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/10/9973787805_fe3d645b6b_h-1-150x150.jpg"
                                                                                alt="The power of makeup"></span></a>
                                                            </div>
                                                            <div class="col-md-8"><h6><a
                                                                            href="https://athemeart.com/demo/newsbd24/?p=282">The
                                                                        power of makeup</a></h6>
                                                                <ul class="list-inline ed_meta">
                                                                    <li>
                                                                        <time class="entry-date published updated"
                                                                              datetime="2014-10-31T18:32:25+00:00">
                                                                            October 31, 2014
                                                                        </time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 gird_list ed_add_border">
                                                        <div class="row">
                                                            <div class="col-md-4"><a
                                                                        href="https://athemeart.com/demo/newsbd24/?p=284"
                                                                        rel="bookmark"
                                                                        class="ed_media remove_after"><span
                                                                            class="redu_to_5"><img
                                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/10/roller-skates-381216_1280aaaaaaaaaa-1-150x150.jpg"
                                                                                alt="Red roller skates"></span></a>
                                                            </div>
                                                            <div class="col-md-8"><h6><a
                                                                            href="https://athemeart.com/demo/newsbd24/?p=284">Red
                                                                        roller skates</a></h6>
                                                                <ul class="list-inline ed_meta">
                                                                    <li>
                                                                        <time class="entry-date published updated"
                                                                              datetime="2014-10-31T11:30:10+00:00">
                                                                            October 31, 2014
                                                                        </time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 gird_list ed_add_border">
                                                        <div class="row">
                                                            <div class="col-md-4"><a
                                                                        href="https://athemeart.com/demo/newsbd24/?p=286"
                                                                        rel="bookmark"
                                                                        class="ed_media remove_after"><span
                                                                            class="redu_to_5"><img
                                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/10/7121808871_a0f251b5be_k-1-150x150.jpg"
                                                                                alt="Girl sitting on the curb"></span></a>
                                                            </div>
                                                            <div class="col-md-8"><h6><a
                                                                            href="https://athemeart.com/demo/newsbd24/?p=286">Girl
                                                                        sitting on the curb</a></h6>
                                                                <ul class="list-inline ed_meta">
                                                                    <li>
                                                                        <time class="entry-date published updated"
                                                                              datetime="2014-11-01T07:24:23+00:00">
                                                                            November 1, 2014
                                                                        </time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-2-3-1" class="panel-grid-cell">
                            <div id="panel-2-3-1-0"
                                 class="so-panel widget widget_eds_news_block_extended eds_news_block_extended panel-first-child panel-last-child"
                                 data-index="8"><h3 class="widget-title"><span>popular this week</span></h3>
                                <div class="ed_news_news_block_style_7_wrp">
                                    <div class="row">
                                        <div class="ed_grids_style_simply col-md-12 margin_bottom_20 ">
                                            <div class="gird_list"><a href="https://athemeart.com/demo/newsbd24/?p=296"
                                                                      rel="bookmark" class="ed_media"><span><img
                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/interior-design-413718_1280-1-1024x682.jpg"
                                                                alt="Modern interior design"></span></a>
                                                <div class="category__style__1">
                                                    <h5>
                                                        <ul class="post-categories">
                                                            <li><a href="https://athemeart.com/demo/newsbd24/?cat=71"
                                                                   rel="category">Lifestyle</a></li>
                                                        </ul>
                                                    </h5>
                                                </div>
                                                <h4><a href="https://athemeart.com/demo/newsbd24/?p=296">Modern interior
                                                        design</a></h4>
                                                <ul class="list-inline ed_meta">
                                                    <li>
                                                        <time class="entry-date published updated"
                                                              datetime="2014-11-01T07:56:25+00:00">November 1, 2014
                                                        </time>
                                                    </li>
                                                    <li>by <a href="https://athemeart.com/demo/newsbd24/?author=2">Gameleon
                                                            Staff</a></li>
                                                    <li class="comments-link"><a
                                                                href="https://athemeart.com/demo/newsbd24/?p=296#respond">Leave
                                                            a Comment<span class="screen-reader-text"> on Modern interior design</span></a>
                                                    </li>
                                                </ul>
                                                I have traced the Rebel spies to her. Now she is my only link to finding
                                                their...
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ed_grids_style_simply">
                                                <div class="row">
                                                    <div class="col-md-6 gird_list ed_add_border">
                                                        <div class="row">
                                                            <div class="col-md-4"><a
                                                                        href="https://athemeart.com/demo/newsbd24/?p=302"
                                                                        rel="bookmark"
                                                                        class="ed_media remove_after"><span
                                                                            class="redu_to_5"><img
                                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/10/IMG_7706-1300x866-1-150x150.jpg"
                                                                                alt="A bowl of fresh strawberries"></span></a>
                                                            </div>
                                                            <div class="col-md-8"><h6><a
                                                                            href="https://athemeart.com/demo/newsbd24/?p=302">A
                                                                        bowl of fresh strawberries</a></h6>
                                                                <ul class="list-inline ed_meta">
                                                                    <li>
                                                                        <time class="entry-date published updated"
                                                                              datetime="2014-11-01T07:52:44+00:00">
                                                                            November 1, 2014
                                                                        </time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 gird_list ed_add_border">
                                                        <div class="row">
                                                            <div class="col-md-4"><a
                                                                        href="https://athemeart.com/demo/newsbd24/?p=293"
                                                                        rel="bookmark"
                                                                        class="ed_media remove_after"><span
                                                                            class="redu_to_5"><img
                                                                                src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/10/HNCK2304-1300x8661-1-150x150.jpg"
                                                                                alt="Woman with red sneakers"></span></a>
                                                            </div>
                                                            <div class="col-md-8"><h6><a
                                                                            href="https://athemeart.com/demo/newsbd24/?p=293">Woman
                                                                        with red sneakers</a></h6>
                                                                <ul class="list-inline ed_meta">
                                                                    <li>
                                                                        <time class="entry-date published updated"
                                                                              datetime="2014-11-01T07:38:04+00:00">
                                                                            November 1, 2014
                                                                        </time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="pg-2-4" class="panel-grid panel-no-style">
                    <div id="pgc-2-4-0" class="panel-grid-cell">
                        <div id="panel-2-4-0-0" class="so-panel widget widget_sow-headline panel-first-child"
                             data-index="9">
                            <div class="so-widget-sow-headline so-widget-sow-headline-default-5b176f9f80e9 so-widget-fittext-wrapper"
                                 data-fit-text-compressor="0">
                                <div class="sow-headline-container ">
                                    <h3 class="sow-headline" style="font-size: 26px;">Features of the Month</h3>
                                    <div class="decoration">
                                        <div class="decoration-inside"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="panel-2-4-0-1"
                             class="so-panel widget widget_eds_news_hero_block_extended eds_news_hero_block_extended panel-last-child"
                             data-index="10">
                            <div class="ed_news_hero_block">
                                <div class="row  ed_grids_style_fly">
                                    <div class="col-md-3">
                                        <div class="col-md-12 col-sm-12 gird_list margin_bottom_10"><a
                                                    href="https://athemeart.com/demo/newsbd24/?p=322" rel="bookmark"
                                                    class="ed_media remove_after"><span><img
                                                            src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/8195086253_3aa7516fa1_k-1.jpg"
                                                            alt="How we make choices"></span></a>
                                            <div class="ed_caption redo-left-right"><span class="single_post_category "> <a
                                                            href="https://athemeart.com/demo/newsbd24/?cat=69">Entertainment</a></span>
                                                <h5><a href="https://athemeart.com/demo/newsbd24/?p=322">How we make
                                                        choices</a></h5></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 gird_list "><a
                                                    href="https://athemeart.com/demo/newsbd24/?p=317" rel="bookmark"
                                                    class="ed_media remove_after"><span><img
                                                            src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/people-2563491_1920.jpg"
                                                            alt="People Woman Girl Clothing Eye"></span></a>
                                            <div class="ed_caption redo-left-right"><span class="single_post_category "> <a
                                                            href="https://athemeart.com/demo/newsbd24/?cat=69">Entertainment</a></span>
                                                <h5><a href="https://athemeart.com/demo/newsbd24/?p=317">People Woman
                                                        Girl Clothing Eye</a></h5></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 gird_list force-pull-5 flex-unordered"><a
                                                href="https://athemeart.com/demo/newsbd24/?p=384" rel="bookmark"
                                                class="ed_media"><span><img
                                                        src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/battle-2246043_1280.jpg"
                                                        alt="Battle Historical Battle War"></span></a>
                                        <div class="ed_caption"><h4><a
                                                        href="https://athemeart.com/demo/newsbd24/?p=384">Battle
                                                    Historical Battle War</a></h4></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-md-12 col-sm-12 gird_list margin_bottom_10"><a
                                                    href="https://athemeart.com/demo/newsbd24/?p=376" rel="bookmark"
                                                    class="ed_media remove_after"><span><img
                                                            src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/food-2695883_1280.jpg"
                                                            alt="Peach Fried Pies Breakfast including coffee and honey"></span></a>
                                            <div class="ed_caption redo-left-right"><span class="single_post_category "> <a
                                                            href="https://athemeart.com/demo/newsbd24/?cat=12">Food</a></span>
                                                <h5><a href="https://athemeart.com/demo/newsbd24/?p=376">Peach Fried
                                                        Pies Breakfast including coffee and honey</a></h5></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 gird_list "><a
                                                    href="https://athemeart.com/demo/newsbd24/?p=369" rel="bookmark"
                                                    class="ed_media remove_after"><span><img
                                                            src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/the-strength-of-the-2667602_1280.jpg"
                                                            alt="Work space creative ! Building Man Pyramid Game"></span></a>
                                            <div class="ed_caption redo-left-right"><span class="single_post_category "> <a
                                                            href="https://athemeart.com/demo/newsbd24/?cat=72">Tech</a></span>
                                                <h5><a href="https://athemeart.com/demo/newsbd24/?p=369">Work space
                                                        creative ! Building Man Pyramid Game</a></h5></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-2-5" class="panel-grid panel-no-style">
                    <div id="pgc-2-5-0" class="panel-grid-cell">
                        <div id="panel-2-5-0-0" class="so-panel widget widget_sow-headline panel-first-child"
                             data-index="11">
                            <div class="so-widget-sow-headline so-widget-sow-headline-default-d234cd996140 so-widget-fittext-wrapper"
                                 data-fit-text-compressor="0">
                                <div class="sow-headline-container ">
                                    <p class="sow-sub-headline">NEWS BD 24 is your news, entertainment, music fashion
                                        website.</p>
                                    <h3 class="sow-headline" style="font-size: 26px;">LATEST ARTICLES</h3>
                                    <div class="decoration">
                                        <div class="decoration-inside"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="panel-2-5-0-1"
                             class="so-panel widget widget_eds_news_grids_extended eds_news_grids_extended"
                             data-index="12">
                            <div class="ed_news_grids_style_1_wrp ed_grids_style_simply">
                                <div class="row">
                                    <div class="gird_list small-blog-box ed_add_border col-md-4 col-sm-6 col-xs-12"><a
                                                href="https://athemeart.com/demo/newsbd24/?p=322" rel="bookmark"
                                                class="ed_media"><span><img
                                                        src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/8195086253_3aa7516fa1_k-1.jpg"
                                                        alt="How we make choices"></span></a>
                                        <div class="category__style__1"><h5><a
                                                        href="https://athemeart.com/demo/newsbd24/?cat=69"
                                                        rel="category">Entertainment</a></h5></div>
                                        <h4><a href="https://athemeart.com/demo/newsbd24/?p=322">How we make choices</a>
                                        </h4>
                                        <ul class="list-inline ed_meta">
                                            <li>
                                                <time class="entry-date published updated"
                                                      datetime="2014-11-02T08:54:49+00:00">November 2, 2014
                                                </time>
                                            </li>
                                            <li>by <a href="https://athemeart.com/demo/newsbd24/?author=2">Gameleon
                                                    Staff</a></li>
                                            <li class="comments-link"><a
                                                        href="https://athemeart.com/demo/newsbd24/?p=322#respond">Leave
                                                    a Comment<span
                                                            class="screen-reader-text"> on How we make choices</span></a>
                                            </li>
                                        </ul>
                                        <p>I have traced the Rebel spies to her. Now she is my only link to finding
                                            their secret base. Hey, Luke! May the Force be with you. The Force is strong
                                            with this one. I have you now. You're all clear, kid. Let's blow this thing
                                            and go home! But with...</p><a
                                                href="https://athemeart.com/demo/newsbd24/?p=322"
                                                class="btn btn-primary">Continue Reading <i
                                                    class="fa fa-fw fa-angle-double-right"></i></a></div>
                                    <div class="gird_list small-blog-box ed_add_border col-md-4 col-sm-6 col-xs-12"><a
                                                href="https://athemeart.com/demo/newsbd24/?p=317" rel="bookmark"
                                                class="ed_media"><span><img
                                                        src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/people-2563491_1920.jpg"
                                                        alt="People Woman Girl Clothing Eye"></span></a>
                                        <div class="category__style__1"><h5><a
                                                        href="https://athemeart.com/demo/newsbd24/?cat=69"
                                                        rel="category">Entertainment</a></h5></div>
                                        <h4><a href="https://athemeart.com/demo/newsbd24/?p=317">People Woman Girl
                                                Clothing Eye</a></h4>
                                        <ul class="list-inline ed_meta">
                                            <li>
                                                <time class="entry-date published" datetime="2014-11-02T08:49:52+00:00">
                                                    November 2, 2014
                                                </time>
                                            </li>
                                            <li>by <a href="https://athemeart.com/demo/newsbd24/?author=2">Gameleon
                                                    Staff</a></li>
                                            <li class="comments-link"><a
                                                        href="https://athemeart.com/demo/newsbd24/?p=317#comments">1
                                                    Comment<span class="screen-reader-text"> on People Woman Girl Clothing Eye</span></a>
                                            </li>
                                        </ul>
                                        <p>I have traced the Rebel spies to her. Now she is my only link to finding
                                            their secret base. Hey, Luke! May the Force be with you. The Force is strong
                                            with this one. I have you now. You're all clear, kid. Let's blow this thing
                                            and go home! But with...</p><a
                                                href="https://athemeart.com/demo/newsbd24/?p=317"
                                                class="btn btn-primary">Continue Reading <i
                                                    class="fa fa-fw fa-angle-double-right"></i></a></div>
                                    <div class="gird_list small-blog-box ed_add_border col-md-4 col-sm-6 col-xs-12"><a
                                                href="https://athemeart.com/demo/newsbd24/?p=384" rel="bookmark"
                                                class="ed_media"><span><img
                                                        src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2014/11/battle-2246043_1280.jpg"
                                                        alt="Battle Historical Battle War"></span></a>
                                        <div class="category__style__1"><h5><a
                                                        href="https://athemeart.com/demo/newsbd24/?cat=69"
                                                        rel="category">Entertainment</a></h5></div>
                                        <h4><a href="https://athemeart.com/demo/newsbd24/?p=384">Battle Historical
                                                Battle War</a></h4>
                                        <ul class="list-inline ed_meta">
                                            <li>
                                                <time class="entry-date published" datetime="2014-11-02T08:44:22+00:00">
                                                    November 2, 2014
                                                </time>
                                            </li>
                                            <li>by <a href="https://athemeart.com/demo/newsbd24/?author=2">Gameleon
                                                    Staff</a></li>
                                            <li class="comments-link"><a
                                                        href="https://athemeart.com/demo/newsbd24/?p=384#respond">Leave
                                                    a Comment<span class="screen-reader-text"> on Battle Historical Battle War</span></a>
                                            </li>
                                        </ul>
                                        <p>I have traced the Rebel spies to her. Now she is my only link to finding
                                            their secret base. Hey, Luke! May the Force be with you. The Force is strong
                                            with this one. I have you now. You're all clear, kid. Let's blow this thing
                                            and go home! But with...</p><a
                                                href="https://athemeart.com/demo/newsbd24/?p=384"
                                                class="btn btn-primary">Continue Reading <i
                                                    class="fa fa-fw fa-angle-double-right"></i></a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div id="panel-2-5-0-2"
                             class="so-panel widget widget_eds_news_grids_extended eds_news_grids_extended panel-last-child"
                             data-index="13">
                            <div class="ed_news_grids_style_3_wrp ed_grids_style_simply">
                                <div class="gird_list small-blog-box ed_add_border row">
                                    <div class="col-md-5"><a href="https://athemeart.com/demo/newsbd24/?p=886"
                                                             rel="bookmark" class="ed_media"><span><img
                                                        src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2016/08/home-1.jpg"
                                                        alt="Woman with daughter and son read fairytale"></span></a>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="category__style__1"><h5><a
                                                        href="https://athemeart.com/demo/newsbd24/?cat=17"
                                                        rel="category">People</a></h5></div>
                                        <h4><a href="https://athemeart.com/demo/newsbd24/?p=886">Woman with daughter and
                                                son read fairytale</a></h4>
                                        <ul class="list-inline ed_meta">
                                            <li>
                                                <time class="entry-date published" datetime="2013-10-19T14:10:55+00:00">
                                                    October 19, 2013
                                                </time>
                                            </li>
                                            <li>by <a href="https://athemeart.com/demo/newsbd24/?author=1">newsbd24</a>
                                            </li>
                                            <li class="comments-link"><a
                                                        href="https://athemeart.com/demo/newsbd24/?p=886#comments">4
                                                    Comments<span class="screen-reader-text"> on Woman with daughter and son read fairytale</span></a>
                                            </li>
                                        </ul>
                                        <p>https://soundcloud.com/aboeldesh/maher-zain-ramadan-arabic
                                            Picture of beautiful woman with daughter and son sitting down on green grass
                                            field and read fairytale, cute female with two little children enjoying book
                                            outdoors, preschool education, happy family.

                                            Mazagran, black saucer ristretto...</p><a
                                                href="https://athemeart.com/demo/newsbd24/?p=886"
                                                class="btn btn-primary">Continue Reading <i
                                                    class="fa fa-fw fa-angle-double-right"></i></a></div>
                                </div>
                                <div class="gird_list small-blog-box ed_add_border row">
                                    <div class="col-md-5"><a href="https://athemeart.com/demo/newsbd24/?p=67"
                                                             rel="bookmark" class="ed_media"><span><img
                                                        src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2013/10/photodune-370601-family-s-1.jpg"
                                                        alt="A young family with son and daughter"></span></a></div>
                                    <div class="col-md-7">
                                        <div class="category__style__1"><h5><a
                                                        href="https://athemeart.com/demo/newsbd24/?cat=17"
                                                        rel="category">People</a></h5></div>
                                        <h4><a href="https://athemeart.com/demo/newsbd24/?p=67">A young family with son
                                                and daughter</a></h4>
                                        <ul class="list-inline ed_meta">
                                            <li>
                                                <time class="entry-date published updated"
                                                      datetime="2013-10-02T18:34:39+00:00">October 2, 2013
                                                </time>
                                            </li>
                                            <li>by <a href="https://athemeart.com/demo/newsbd24/?author=1">newsbd24</a>
                                            </li>
                                            <li class="comments-link"><a
                                                        href="https://athemeart.com/demo/newsbd24/?p=67#respond">Leave a
                                                    Comment<span class="screen-reader-text"> on A young family with son and daughter</span></a>
                                            </li>
                                        </ul>
                                        <p>Portrait of a happy family sitting on sofa with a dog, looking at camera and
                                            smiling. Pommy ipsum ended up brown bread tosser naff they can sod off well
                                            fit sorted it, spam fritters up the duff for sooth blighty fake tan at the
                                            boozer a bit wonky off the hook, ended up brown bread Prince Charles...</p>
                                        <a href="https://athemeart.com/demo/newsbd24/?p=67" class="btn btn-primary">Continue
                                            Reading <i class="fa fa-fw fa-angle-double-right"></i></a></div>
                                </div>
                                <div class="gird_list small-blog-box ed_add_border row">
                                    <div class="col-md-5"><a href="https://athemeart.com/demo/newsbd24/?p=70"
                                                             rel="bookmark" class="ed_media"><span><img
                                                        src="https://athemeart.com/demo/newsbd24/wp-content/uploads/2013/10/photodune-854772-discussing-ideas-s-1.jpg"
                                                        alt="Discussing ideas"></span></a></div>
                                    <div class="col-md-7">
                                        <div class="category__style__1"><h5><a
                                                        href="https://athemeart.com/demo/newsbd24/?cat=17"
                                                        rel="category">People</a></h5></div>
                                        <h4><a href="https://athemeart.com/demo/newsbd24/?p=70">Discussing ideas</a>
                                        </h4>
                                        <ul class="list-inline ed_meta">
                                            <li>
                                                <time class="entry-date published updated"
                                                      datetime="2013-09-27T18:43:20+00:00">September 27, 2013
                                                </time>
                                            </li>
                                            <li>by <a href="https://athemeart.com/demo/newsbd24/?author=1">newsbd24</a>
                                            </li>
                                            <li class="comments-link"><a
                                                        href="https://athemeart.com/demo/newsbd24/?p=70#respond">Leave a
                                                    Comment<span class="screen-reader-text"> on Discussing ideas</span></a>
                                            </li>
                                        </ul>
                                        <p>Portrait of pretty tutor and diligent pupil looking at each other while
                                            discussing book. Damn in the jacksy round our gaff lass squirrel porky-pies
                                            'ar kid Big Ben one off, blummin' slap-head any road, best be off through
                                            the dales make a brew bog roll chin up. 'ar kid spend a penny
                                            tallywhacker...</p><a href="https://athemeart.com/demo/newsbd24/?p=70"
                                                                  class="btn btn-primary">Continue Reading <i
                                                    class="fa fa-fw fa-angle-double-right"></i></a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

        </main>
    </div>
</div>