<?php
/*
 * Template Name: User Dashboard
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'navs' ); ?>
    <div class="table wrap">
      <h4>Purchase history</h4>
      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>User</th>
              <th>Item Name</th>
              <th>Price</th>
              <th>Time</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
            <td></td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td></td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

<?php get_footer(); ?>
