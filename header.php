<!DOCTYPE html>
<html lang="<?=gila::config('language')?>">

<head>
    <base href="<?=gila::base_url()?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=gila::config('base')?></title>
    <?php
    view::stylesheet('lib/bootstrap/bootstrap.min.css');
    view::stylesheet('themes/startbootstrap-clean-blog/css/clean-blog.css');
    view::stylesheet('lib/font-awesome/css/font-awesome.min.css');
    view::stylesheet('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    view::stylesheet('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    ?>
    <?php view::links(); ?>
    <style>.site-heading h1,.subheading,.post-heading h1 {text-shadow: 0 1px 6px #333; }</style>
    <?php event::fire('head')?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=""><?=gila::config('title')?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php view::menu('mainmenu','tpl/menu.bootstrap.php'); ?>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>