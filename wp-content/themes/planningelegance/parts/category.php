<section id="primary" class="content-area hide">
  <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>

    <header class="archive-header">
      <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

      <?php
        $term_description = term_description();
        if ( ! empty( $term_description ) ) :
          printf( '<div class="taxonomy-description">%s</div>', $term_description );
        endif;
      ?>
    </header>

    <?php
        while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

        endwhile;
        twentyfourteen_paging_nav();

      else :
        get_template_part( 'content', 'none' );

      endif;
    ?>
  </div>
</section>
<center class="hide">
  <span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'planningelegance' ) . '</span> %title' ); ?></span>
  <span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'planningelegance' ) . '</span>' ); ?></span>
</center>
<?php
//get_sidebar( 'content' );
//get_sidebar();