
<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?=View::getWidgetArea('foot',false)?>
                <p class="copyright text-muted"><?=Gila::option('theme.footer-text','Copyright &copy; Your Website 2020');?></p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<?=View::script('lib/jquery/jquery-3.3.1.min.js')?>
<!-- Bootstrap Core JavaScript -->
<?=View::script('lib/bootstrap/bootstrap.min.js')?>
<!-- Theme JavaScript -->
<?=View::script('themes/startbootstrap-clean-blog/js/clean-blog.js')?>

</body>

</html>
