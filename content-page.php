<?php if(have_posts()): while(have_posts()): the_post();?>                                                
    <div class="blog-spot">
        Page content                          
    </div>                  
<?php endwhile; else:?>                
    <h3>Nie ma postow</h3>
<?php endif; ?>