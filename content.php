<?php
    
    $actual_category = get_the_category();
    $sorted = 'DESC';

    if(is_home()):
        $actual_category[0] -> name = null;            
    endif;
    
    if ((isset($_GET['sort']))):            
        if($_GET['sort'] == 'down'):
            $sorted = 'ASC';
        endif;
    endif;    

    $args = array(
        'order'   => $sorted,
        'category_name' => $actual_category[0] -> name
    );     
       
    $query = new WP_Query($args);    

    if($query ->have_posts()): while( $query ->have_posts() ): $query ->the_post();?>
                                                
    <div class="blog-spot__blog-spot blog-spot">
        <h2><?php the_title()?></h2>
        <?php the_excerpt()?>
        <?php the_category()?>
        <?php the_time('Y.m.d - H:i:s')?>
                           
    </div>

<?php endwhile; else:?>                
    <h3>Nie ma postow</h3>
<?php endif; ?>