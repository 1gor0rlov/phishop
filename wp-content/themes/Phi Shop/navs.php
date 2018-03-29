<nav class="side">
  <div class="logo_holder valign-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
  </div>
  <ul>
    <li class="sidenav_item"><a href="#"><h6><i class="dashboard_icon ti-user"></i>User</h6></a></li>
    <li class="sidenav_item"><a href="#"><h6><i class="dashboard_icon ti-money"></i>Credit</h6></a></li>
    <li class="sidenav_item"><a href="#"><h6><i class="dashboard_icon ti-book"></i>History</h6></a></li>
    <li class="sidenav_item"><a href="#"><h6><i class="dashboard_icon ti-mobile"></i>Contact</h6></a></li>
    <li class="sidenav_item"><a href="#"><h6><i class="dashboard_icon ti-settings"></i>Settings</h6></a></li>
  </ul>
</nav>
<div class="content_side">
  <div class="user_nav z-depth-1">
    <h6>Credit amount: 300 credits</h6>
    <a class='dropdown-trigger btn user_log' href='#' data-target='dropdown1'>User Name</a>
    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content user_log_dropdown'>
      <li><a href="#!">Log Out</a></li>
    </ul>
  </div>
