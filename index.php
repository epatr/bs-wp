<?php get_header(); ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
              get_template_part( 'content', get_post_format() );
            endwhile; 
          ?>

          <nav>
            <ul class="pager">
              <li><?php next_posts_link( 'Older' ); ?></li>
              <li><?php previous_posts_link( 'Newer' ); ?></li>
            </ul>
          </nav>
            
            
          <?php
            endif;
          ?>

        </div><!-- /.blog-main -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->

<?php get_footer(); ?>