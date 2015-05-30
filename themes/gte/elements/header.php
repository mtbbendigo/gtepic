<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php Loader::element('header_required'); ?>
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/stylesheets/app.css" />
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/stylesheets/sticky_footer.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Enriqueta' rel='stylesheet' type='text/css'>

    <script src="<?php echo $this->getThemePath() ?>/bower_components/foundation/js/vendor/modernizr.js"></script>

    <style type="text/css">
        #page-background{
            min-height: 100%;
            min-width: 100%;
            background-size: cover;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            position: relative;
            overflow-x: hidden;
        <?php
            /*@var Page $page */
            $page = Page::getCurrentPage();
            $img = $page->getCollectionAttributeValue('page_background_img');
            if(!empty($img))
            {
                echo 'background:url(' . $this->getThemePath() . '/images/page_bg/' . $img . ') no-repeat fixed center #646464;';
                //Gareths phpstorm tool tip Select entire line...Tools live template....etc
                //look up live templates and examples
            }
            else
            {
                echo 'background:url('.$this->getThemePath().'/images/page_bg/spark.jpg) no-repeat fixed center #646464;';
            }
        ?>
        }

    </style>
</head>

<body>

    <!-- Off Canvas Menu -->
    <?php
        $nav = BlockType::getByHandle('autonav');
        $nav->controller->orderBy = 'display_asc';
        $nav->controller->displayPages = 'top';
        //$nav->controller->displaySubPages = 'none';
        $nav->controller->displaySubPages = 'all';
        $nav->controller->displaySubPageLevels = 'custom';
        $nav->controller->displaySubPageLevelsNum = 1;
        $nav->render('templates/off-canvas-nav');
    ?>

    <input type="checkbox" id="nav-trigger" class="nav-trigger" />
    <label for="nav-trigger"></label>

    <?php
        $uinfo = new User();
        if($uinfo->IsLoggedIn())
        {
            echo('<div style="margin-top: -50px"></div>');
        }
    ?>
<!-- Create a page Attribute in Admin and set it. getAttribute('body') -->

<div id="page-background">
    <div id="wrap">
        <div id="main">
            <div class="content">
                <header>
                    <div class="banner-container">
                        <div class="row">
                            <div class="medium-12 columns">
                                <div class="banner-content-container">
                                    <div class="row">
                                        <div class="medium-4 large-5 columns">
                                            <div class="banner-image">
                                                <a href="<?php echo View::url('/'); ?>"><img src="<?php echo $this->getThemePath()?>/images/banner/logo-transparent.png" /></a>
                                            </div>
                                        </div>
                                        <div class="medium-8 large-7 columns">
                                            <div class="visible-for-medium-up">
                                                <div class="menu-container">
                                                    <?php
                                                    $nav = BlockType::getByHandle('autonav');
                                                    $nav->controller->orderBy = 'display_asc';
                                                    $nav->controller->displayPages = 'top';
                                                    //$nav->controller->displaySubPages = 'none';
                                                    $nav->controller->displaySubPages = 'all';
                                                    $nav->controller->displaySubPageLevels = 'custom';
                                                    $nav->controller->displaySubPageLevelsNum = 1;
                                                    $nav->render('templates/default-nav');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <div class="header-spacer">&nbsp;</div>
            <!--[if lt IE 9]>
            <h3 style="color: #FFA500;">Internet Explorer 8 or less is not supported. Update your browser, or download <a href="https://www.google.com/intl/en-AU/chrome/browser/">Google Chrome</a></h3>
            <![endif]-->