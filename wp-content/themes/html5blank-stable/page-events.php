<?php get_header(); ?>
  
<header class="main-header">
  <h5><?php wp_title( $sep = '' ); ?></h5>
</header>
  
<main class="page-events">
  
  <div class="row">
    
  <?php
    $args = array(
        'category_name' => 'events'
    );
  
    $post_query = new WP_Query($args);
    
    if($post_query->have_posts() ) {
      while($post_query->have_posts() ) {
        $post_query->the_post(); ?>
        
    <div class="col-xs-12 col-sm-6 col-md-3">
      
      <!-- @component card-event -->
      <section class="card-event">
        <?php 
            if ( has_post_thumbnail() ) { 
              the_post_thumbnail( array('class' => 'card-thumbnail') ); }; ?>
        <div class="card-title">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="card-overlay">
          <div class="card-overlay-text"><a href="<?php the_permalink(); ?>">See more</a></div>
        </div>
      </section>
      
      
    </div><!-- end col -->
    
      <?php
    } //end while
  } // end if ?>
  </div><!-- end row -->
  
</main>
  
</div><!-- end container -->
  
</div><!-- end container fluid -->

<?php get_footer(); ?>