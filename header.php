<!DOCTYPE html>
<html lang="<?=Gila::config('language')?>">

<head>
    <?php
    View::stylesheet('lib/bootstrap/bootstrap.min.css');
    View::stylesheet('themes/startbootstrap-clean-blog/css/clean-blog.css');
    View::stylesheet('lib/font-awesome/css/font-awesome.min.css');
    View::stylesheet('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    View::stylesheet('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    ?>
    <?php View::head(false); ?>
    <style>.site-heading h1,.subheading,.post-heading h1 {text-shadow: 0 1px 6px #333; }</style>
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
                <a class="navbar-brand" href=""><?=Gila::config('title')?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php View::menu('mainmenu','tpl/menu.bootstrap.php'); ?>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
