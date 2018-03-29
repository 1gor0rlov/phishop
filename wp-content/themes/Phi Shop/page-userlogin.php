<?php
/*
 * Template Name: User Login
 */
?>
<?php get_header(); ?>
<div class="">
  <div class="login_wrap">
    <div class="welcome_holder valign-wrapper">
      <div class="welcome_wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        <h3>WELCOME!</h3>
      </div>
    </div>
    <div class="input_wrap">
      <div class="input-field">
        <input id="email" type="email" class="validate">
        <label for="email" class="">Email</label>
      </div>
      <div class="input-field">
        <input id="password" type="password" class="validate">
        <label for="password" class="">Password</label>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
    </div>
  </div>
  <div class="login_picture_wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/img/loginpic.jpg" alt="">
    <div class="overlay">

    </div>
  </div>
</div>
<?php get_footer(); ?>
