<?php get_header(); ?>

<header class="main-header">
  <h5><?php wp_title( $sep='' ); ?></h5>
</header>

<main class="page-book-classes">

  <div class="row">

    <div class="col-xs-12 col-sm-6">

      <!-- @component book-card -->
      <section class="book-card">      
        <h2 class="card-title">Flying trapeze</h2>
        <div class="card-overlay">
          <div class="card-overlay-text"><a href="#">Book now</a></div>
        </div>
      </section>

    </div>

    <div class="col-xs-12 col-sm-6">

      <!-- @component book-card -->
      <section class="book-card">      
        <h2 class="card-title">Open Gym & Others</h2>
        <div class="card-overlay">
          <div class="card-overlay-text"><a href="#">Book now</a></div>
        </div>
      </section>
      
    </div>

  </div>

</main>

</div><!-- end container -->

</div><!-- end container-fluid -->

<?php get_footer(); ?>