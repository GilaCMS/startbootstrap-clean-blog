<?=view::cssAsync('lib/font-awesome/css/font-awesome.min.css')?>
<style>
.widget-social-icons li{list-style: none;display: inline-block}
</style>

<ul class="widget-social-icons list-inline text-center">
<?php
$social_ = ['facebook','twitter','google','linkedin','pinterest','youtube','instagram','medium','tumblr','github','codepen','twitch','slack','stack-overflow','vk','rss','soundcloud'];

foreach ($social_ as $s) if(isset($widget_data->$s)) if($widget_data->$s!='') {
  echo "<li class=\"social-{$s}\"><a href=\"{$widget_data->$s}\" target=\"_blank\">";
  echo '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>';
  echo "<i class='fa fa-{$s} fa-stack-1x fa-inverse' aria-hidden='true'></i>";
  echo "</span></a></li>";
}

?>
</ul>
