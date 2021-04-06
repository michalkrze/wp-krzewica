<div class="col-sm-3 col-sm-offset-1">
    <h2>Sidebar home</h2>
    <div id="sidebar-primary" class="sidebar">
        <?php if(is_active_sidebar( 'primary' )): ?>
        <?php dynamic_sidebar( 'primary' )?>
        <?php else: echo 'Panie tu czegos brakuje'; get_search_form( ); wp_get_archives(  );endif;?>        
    </div>    
</div>