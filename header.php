<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo get_bloginfo( 'name' )?></title>
     <!-- Bootstrap CSS -->

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="<?php echo get_bloginfo( 'template_directory' ) ?>/style2.css" rel="stylesheet"/>
     <?php wp_head(  ) ?>
 </head>
 <body>    
    <div class="container">
        <div class="header">
            <h1 class="blog_title">
                <a href="<?php echo get_bloginfo('wpurl')?>"><?php echo get_bloginfo( 'name' )?></a>                
            </h1>            
        </div>
        <div class="category">
            <?php 
            $categories = get_categories();
            foreach($categories as $category) {
            echo '<a href="' 
                . get_category_link($category->term_id) 
                . '">' . $category->name 
                . '</a>';}                
            ?>
            <a class="nav__traignle-up" href="?sort=up">Najnowsze</a>
            <a class="nav__traignle-down" href="?sort=down">Najstarsze</a>
        </div>       
        