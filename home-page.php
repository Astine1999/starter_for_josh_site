<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
         <section class="container-fluid aboutbg text-center">
            <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content--> 
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
            <div class="blocker"></div>
            </div><!-- container-->
        </section>
        <section class="container-fluid articlesbg">
            <div class="container">
                <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
                <div class="row"><!--  a row that gives us access to the BS columns-->
                  <div class="col-md-4 text-center">
                  <img class="img-fluid" src="<?php the_field('articleimage');?>" alt="woman">
                  <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
                  <p class="date" ><?php the_field('articledate'); ?></p>
                  <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
                  <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    <div class="col-md-4 text-center">
                    <img class="img-fluid" src="<?php the_field('articleimage_middle');?>" alt="iron-man">
                  <h4 class="article-title"><?php the_field('articletitle_middle'); ?></h4>
                  <p class="date" ><?php the_field('articledate_middle'); ?></p>
                  <p class="article-p"><?php the_field('articleexcerpt_middle'); ?> </p>
                  <a href="<?php the_field('readmore_middle'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    <div class="col-md-4 text-center">
                    <img class="img-fluid" src="<?php the_field('articleimage_last');?>" alt="tracing">
                  <h4 class="article-title"><?php the_field('articletitle_last'); ?></h4>
                  <p class="date" ><?php the_field('articledate_last'); ?></p>
                  <p class="article-p"><?php the_field('articleexcerpt_last'); ?> </p>
                  <a href="<?php the_field('readmore_last'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    </div><!-- row-->
                </div><!-- container-->
               </section><!-- container-fluid-->
               <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->