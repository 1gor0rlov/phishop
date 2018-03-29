<?php
/*
 * Template Name: User Credit
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'navs' ); ?>

<div class="buy_credit_wrap z-depth-1 row">
  <div class="col m5 valign-wrapper">
    <div class="credit_info_holder">
      <h5>Credit Amount:</h5>
      <h4> 300 credits</h4>
    </div>
  </div>
  <div class="col m7 valign-wrapper">
    <div class="credit_buy_holder">
      <h6>Here you can buy credits that you can use for buying our courses and kits for trainings: </h6>
      <a class="waves-effect waves-light btn buy_btn">buy credit<i class="ti-credit-card"></i></a>
    </div>
  </div>
</div>
  <div class="credit_table_wrap">
    <h4>Credit history</h4>
    <table class="highlight responsive-table">
      <thead>
        <tr>
            <th>User</th>
            <th>Credit Amount</th>
            <th>Time</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Alvin</td>
          <td>$0.87</td>
          <td></td>
        </tr>
        <tr>
          <td>Alan</td>
          <td>$3.76</td>
          <td></td>
        </tr>
        <tr>
          <td>Jonathan</td>
          <td>$7.00</td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

<?php get_footer(); ?>
