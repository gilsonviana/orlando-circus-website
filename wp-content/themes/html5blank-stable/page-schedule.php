<?php get_header(); ?>

    <header class="main-header">
      <h5><?php wp_title( $sep = '' ); ?></h5>
    </header>

    <main class="page-schedule">

      <div class="row">

        <div class="col-xs-12">

          <!-- @component schedule-board -->
          <section class="schedule-board">

            <div class="day-week">
              <span class="day-name">Monday</span>
              <ul class="day-schedule">
                <!-- LOOP -->
                <?php
                $args = array(
                    'category_name' => 'Monday'
                );
              
                $post_query = new WP_Query($args);
                
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>
                
                <li class="schedule-item">
                  <?php the_content(); ?>
                </li>
                
                <?php
                  } //end while
                } // end if ?>
                <!-- END LOOP -->
              </ul>
            </div><!-- end day-week -->
            
            <div class="day-week">
              <span class="day-name">Tuesday</span>
              <ul class="day-schedule">
                <!-- LOOP -->
                <?php
                $args = array(
                    'category_name' => 'Tuesday'
                );
              
                $post_query = new WP_Query($args);
                
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>
                
                <li class="schedule-item">
                  <?php the_content(); ?>
                </li>
                
                <?php
                  } //end while
                } // end if ?>
                <!-- END LOOP -->
              </ul>
            </div><!-- end day-week -->
            
            <div class="day-week">
              <span class="day-name">Wednesday</span>
              <ul class="day-schedule">
                <!-- LOOP -->
                <?php
                $args = array(
                    'category_name' => 'Wednesday'
                );
              
                $post_query = new WP_Query($args);
                
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>
                
                <li class="schedule-item">
                  <?php the_content(); ?>
                </li>
                
                <?php
                  } //end while
                } // end if ?>
                <!-- END LOOP -->
              </ul>
            </div><!-- end day-week -->
            
            <div class="day-week">
              <span class="day-name">Thursday</span>
              <ul class="day-schedule">
                 <!-- LOOP -->
                <?php
                $args = array(
                    'category_name' => 'Thursday'
                );
              
                $post_query = new WP_Query($args);
                
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>
                
                <li class="schedule-item">
                  <?php the_content(); ?>
                </li>
                
                <?php
                  } //end while
                } // end if ?>
                <!-- END LOOP -->
              </ul>
            </div><!-- end day-week -->
            
            <div class="day-week">
              <span class="day-name">Friday</span>
              <ul class="day-schedule">
                 <!-- LOOP -->
                <?php
                $args = array(
                    'category_name' => 'Friday'
                );
              
                $post_query = new WP_Query($args);
                
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>
                
                <li class="schedule-item">
                  <?php the_content(); ?>
                </li>
                
                <?php
                  } //end while
                } // end if ?>
                <!-- END LOOP -->
              </ul>
            </div><!-- end day-week -->
            
            <div class="day-week">
              <span class="day-name">Saturday</span>
              <ul class="day-schedule">
                 <!-- LOOP -->
                <?php
                $args = array(
                    'category_name' => 'Saturday'
                );
              
                $post_query = new WP_Query($args);
                
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>
                
                <li class="schedule-item">
                  <?php the_content(); ?>
                </li>
                
                <?php
                  } //end while
                } // end if ?>
                <!-- END LOOP -->
              </ul>
            </div><!-- end day-week -->
            
            <div class="day-week">
              <span class="day-name">Sunday</span>
              <ul class="day-schedule">
                 <!-- LOOP -->
                <?php
                $args = array(
                    'category_name' => 'Sunday'
                );
              
                $post_query = new WP_Query($args);
                
                if($post_query->have_posts() ) {
                  while($post_query->have_posts() ) {
                    $post_query->the_post(); ?>
                
                <li class="schedule-item">
                  <?php the_content(); ?>
                </li>
                
                <?php
                  } //end while
                } // end if ?>
                <!-- END LOOP -->
              </ul>
            </div><!-- end day-week -->

          </section>

        </div><!-- end col -->

      </div>
      <!-- end row -->

    </main>

  </div><!-- end container -->

</div><!-- end container-fluid -->
<?php get_footer(); ?>