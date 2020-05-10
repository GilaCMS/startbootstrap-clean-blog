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

