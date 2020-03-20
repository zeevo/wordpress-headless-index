<?php
	$site_location='#';
	$admin_location='/wp-admin'
?>

<link
  rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous"
/>

<style>
  .box {
    margin-top: 100px;
    text-align: center;
  }
  .card {
    display: inline-block;
  }
</style>

<div class="container box">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Admin</h5>
      <p class="card-text">
        Make new posts, configure site metadata, upload content
      </p>
      <a href="<?php echo $admin_location?>" class="btn btn-primary stretched-link">Proceed to Admin</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Site</h5>
      <p class="card-text">
        View changes, read posts and pages
      </p>
      <a href="<?php echo $site_location?>" class="btn btn-info stretched-link">Go Site</a>
    </div>
  </div>
</div>
