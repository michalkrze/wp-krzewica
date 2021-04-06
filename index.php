<?php get_header()?>

<div class="row">
    <div class="col-sm-8 blog-main">
        <?php get_template_part('content')?>
    </div>
    <?php 
    if(is_home()):
        get_sidebar('home');
    else:
        get_sidebar();
    endif;
    ?>    
</div>

<?php get_footer()?>
 
