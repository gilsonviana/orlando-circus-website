<?php get_header(); ?>

<header class="main-header">
  <h5><?php wp_title( $sep="" ); ?></h5>
</header>

<main class="page-contact">
  
  <div class="row">
    
    <div class="col-xs-12 offset-sm-2 col-sm-8 offset-md-3 col-md-6">
      
      <!-- @component contact-form -->
      <section class="contact-form">
        <h2>We'd like to hear from you</h2>
        <div id="form-success-alert" class="alert alert-success hide-alert" role="alert">
          <h4 class="alert-heading">Well done!</h4>
          <p>We will be in touch.</p>
        </div>
        <form id="form">
          <div class="form-group">
            <label for="formInputName">Name</label>
            <input id="formInputName" class="form-control" type="text" name="contact.name" aria-describedby="nameHelp" placeholder="ex. John Doe" />
            <small id="nameHelp" class="form-text text-muted">Insert your name</small>
          </div>
          <div class="form-group">
            <label for="formInputPhone">Phone number</label>
            <input id="formInputPhone" class="form-control" type="tel" name="contact.phone" aria-describedby="phoneHelp" placeholder="(xxx) xxx - xxxx" />
            <small id="phoneHelp" class="form-text text-muted">Insert your phone number</small>
          </div>
          <div class="form-group">
            <label for="formInputEmail">Email (optional)</label>
            <input type="email" class="form-control" id="formInputEmail" name="contact.email" aria-describedby="emailHelp" placeholder="ex. john@doe.com">
            <small id="emailHelp" class="form-text text-muted">Insert your email</small>
          </div>
          <div class="form-group">
            <label for="formTextarea">Message</label>
            <textarea class="form-control" id="formTextarea" rows="3" name="contact.message" placeholder="Leave us a message"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" />
        </form>
      </section>
      <?php wp_mail( 'vianawebdev@gmail.com', 'The subject', 'The message' ); ?>

      
    </div><!-- end col -->
    
  </div><!-- end row -->
  
</main>

</div><!-- end container -->

</div><!-- end container-fluid -->

<?php get_footer(); ?>