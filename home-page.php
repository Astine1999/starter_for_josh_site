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
                <h3 class="text-center">LATEST ARTICLES</h3>
                <div class="row"><!--  a row that gives us access to the BS columns-->
                  <div class="col-md-4 text-center">
                      <img class="img-fluid" alt=“portait” src="http://206.189.45.97/~mesh22/sub1/wp-content/themes/starter_for_josh_site/images/image2.jpg">
                        <h4 class="article-title">A PORTRAIT</h4>
                        <p class="date" >12 December 2020</p>
                        <p class="article-p"> STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                        </p>
                        <p class="readmore">CONTINUE READING</p>
                    </div>
                    <div class="col-md-4 text-center">
                      <img class="img-fluid" alt=“portait” src="http://206.189.45.97/~mesh22/sub1/wp-content/themes/starter_for_josh_site/images/image3.jpg">
                        <h4 class="article-title">A PORTRAIT</h4>
                        <p class="date" >12 December 2020</p>
                        <p class="article-p"> STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                        </p>
                        <p class="readmore">CONTINUE READING</p>
                    </div>
                    <div class="col-md-4 text-center">
                      <img class="img-fluid" alt=“portait” src="http://206.189.45.97/~mesh22/sub1/wp-content/themes/starter_for_josh_site/images/image4.jpg">
                        <h4 class="article-title">A PORTRAIT</h4>
                        <p class="date" >12 December 2020</p>
                        <p class="article-p"> STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
                        </p>
                        <p class="readmore">CONTINUE READING</p>
                    </div>
                    </div><!-- row-->
                </div><!-- container-->
               </section><!-- container-fluid-->
               <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->