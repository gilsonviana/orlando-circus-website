<?php get_header(); ?>
  
<header class="main-header">
  <h5><?php wp_title( $sep = '' ); ?></h5>
</header>

<main class="page-classes">

  <div class="row">
        
  <!-- LOOP THROUGH ALL POST WITH CLASSES CATEGORY -->
  <?php
  $args = array(
      'category_name' => 'classes'
  );

  $post_query = new WP_Query($args);

  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post(); ?>
      
    <div class="col-xs-12 col-sm-6 col-md-3">
      
      <!-- @component class-modality -->
      <a href="<?php the_permalink();  ?>" class="class-modality">
        <h2 class="class-title"><?php the_title(); ?></h2>
        <div class="class-details">
          <?php the_content(); ?>
        </div>
      </a>
      
    </div><!-- end col -->
    
  <?php
    } //end while
  } // end if ?>
  <!-- END LOOP -->
        
  </div><!-- end row -->
    
</main>
    
</div><!-- end container -->
  
</div><!-- end container fluid -->

<?php get_footer(); ?>