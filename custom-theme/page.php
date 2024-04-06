<?php
 get_header();
 the_post();
 ?>
 <main>
            <section class="hero">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                            <h1><?php the_title() ?></h1>
                 
                        <?php the_post_thumbnail('medium') ?>
                        
                        <?php $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'medium'); ?>
                        <img src="<?php echo $imagepath[0] ?>"> 

                       <p> <?php echo get_the_content ?> </p>
                     </div>
              
            </section>

 <?php
 get_footer();
 ?>