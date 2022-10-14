<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from radixtouch.in/templates/admin/aegis/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 10:02:45 GMT -->

<!-- Header -->
	<?php $this->load->view('include/header')?>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     <!-- body header -->
     <?php $this->load->view('include/body_header')?>
      <div class="main-sidebar sidebar-style-2">
       <!-- sidebar -->
       <?php $this->load->view('include/sidebar')?>
      </div>
      <!-- Main Content -->
     <?php $this->load->view($page)?>
     <?php $this->load->view('include/body_footer')?>
   <!-- body footer -->
    </div>
  </div>
  <?php $this->load->view('include/footer')?>
  <!-- footer -->
</body>
<!-- Mirrored from radixtouch.in/templates/admin/aegis/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Mar 2020 10:04:21 GMT -->
</html>