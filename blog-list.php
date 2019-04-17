<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-color:#333; background-image: url('<?=gila::option('theme.header-image')?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?=gila::config('title')?></h1>
                    <span class="subheading"><?=gila::config('slogan')?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($c->posts as $r) { ?>
            <div class="post-preview">
                <a href="<?=$r['id']?>">
                    <h2 class="post-title"><?=$r['title']?></h2>
                    <h3 class="post-subtitle"><?=nl2br(strip_tags($r['post']))?></h3>
                </a>
                <p class="post-meta">Posted by <a href="#"><?=$r['author']?></a> on September 24, 2014</p>
            </div>
            <hr>
            <?php } ?>
            <?php if(blog::totalpages()>$page) { ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="?page=<?=($page+1)?>"><?=__('Older Posts')?> &rarr;</a>
                </li>
            </ul>
            <?php } ?>
            <?php if($page>1) { ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="?page=<?=($page-1)?>">&larr; <?=__('Newest Posts')?></a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </div>
</div>
