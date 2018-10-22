<?php include('function.php'); ?>
<html>
<head>
  <title>Job Listings</title>
<?php include('nav.html')?>
  <style>
  .job{background-color:#f5f5f5;
  box-shadow:5px 5px 5px 5px #f5f5f5;
  padding:20px;
  margin:30px 0px;
  font-family: 'Roboto', sans-serif;
  border-radius: 15px;}

  h2{color:#48af4b;margin:10px 0px;font-size:35px;font-weight:bold;}
  .vacancy{color:#666;font-size:25px;margin-bottom:3px;}
  .skills{color:#888;margin:10px 0px;}
  </style>
</head>
  <div style="height:300px;background-image:url(images/abtbg.jpg);background-size:cover;line-height:340px;text-align:center;font-size:60px;color:white;font-family: 'Lato', sans-serif;">
  Job Listings
  </div>
<main style="margin:20px 100px;">
<?php getPro(); ?>
</main>

<?php include('footer.html')?>
