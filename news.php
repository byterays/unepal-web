<?php
const ROOT_PATH = __DIR__;
require_once "config/theme.php";
require_once "app/loader.php";
?>

<?php ob_start(); ?>

<section>
    <div class="gap2 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3 d-none d-lg-block">
                            <aside class="sidebar static left ">
                                <?php
                                //left sidebar widgets
                                $left_sidebar_widgets = [
                                    "profile-1", "latest-news-1",
                                    "ad-block-1", "who-is-following-1",
                                    "ad-block-1"
                                ];

                                foreach ($left_sidebar_widgets as $widget) {
                                    include $config["theme"]["path"] . "/widgets/{$widget}.php";
                                    //$widgetloader->RenderWidget($widget,["title"=>"Widget Title"], true );
                                }

                                ?>
                            </aside>
                        </div><!-- sidebar -->

                        <div class="col-lg-6">

                            <?php
                            //page widgets
                            $main_widgets = [
                                "create-news", "stories"
                            ];

                            foreach ($main_widgets as $widget) {
                                include $config["theme"]["path"] . "/widgets/{$widget}.php";
                                //$widgetloader->RenderWidget($widget,["title"=>"Widget Title"] );
                            }

                            ?>

                            <div class="central-meta postbox d-none">
                                <ul class="nav nav-tabs trend">
                                    <li class="nav-item"><a class="" href="#hot" data-toggle="tab">Feeds</a> </li>
                                    <li class="nav-item"><a class="" href="#hot" data-toggle="tab">Marketplace</a> </li>
                                    <li class="nav-item"><a class="" href="#hot" data-toggle="tab">My Groups</a> </li>
                                    <li class="nav-item"><a class="" href="#hot" data-toggle="tab">My Profile</a> </li>
                                </ul>
                            </div>

                            <div class="loadMore">
                                <?php include $config["theme"]["path"] . "/widgets/latest-posts-list.php"; ?>
                            </div>

                        </div><!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static right">
                                <?php
                                //right sidebar widgets
                                $right_sidebar_widgets = [
                                    "trending-posts-1", "ad-block-1",
                                    "groups-block",
                                    "upcoming-events-1", "friends-list",
                                    "banner-1", "create-page-block-1",

                                    "quick-links"

                                ];

                                foreach ($right_sidebar_widgets as $widget) {
                                    include $config["theme"]["path"] . "/widgets/{$widget}.php";
                                }
                                ?>

                            </aside>
                        </div><!-- sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $contents = ob_get_clean(); ?>

<?php include $config["theme"]["path"] . "/layout.php"; ?>