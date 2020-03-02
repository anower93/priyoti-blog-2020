<?php get_header(); ?>
<div class="posts">
    <?php while(have_posts()) : 
        the_post();
        ?>
        <div class="post" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h2 class="post-title text-center">
                       <?php the_title(); ?>
                    </h2>
                    <p class="text-center">
                        <strong><?php the_author(); ?></strong><br/>
                        <?php echo get_the_date("jS F, Y"); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                   <p>
                       <?php if(has_post_thumbnail() ){
                           the_post_thumbnail("large", "class='img-fluid'" );
                       } ?>
                   </p>
                       <?php the_content(); ?>

                </div>
            </div>

        </div>


        <?php
       endwhile;
        
        ?>
    
    
    </div>
</div>
       <?php if(comments_open()) : ?>
       <div class="col-md-10 offset-md-1">
            <?php comments_template(); ?>

       </div>
       <?php endif; ?>
<?php get_footer(); ?>