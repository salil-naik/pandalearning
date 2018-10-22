<!doctype>
<!--?php include("includes/functions.php") ?-->
<html>

  <title>Add Job Advertisements</title>
  <link href="https://letzcode.in/product-css/product.css" type="text/css" rel="stylesheet">
  <style>

  .label{text-align:right;padding-right:20px;}
  form div{margin:20px 0px;}

  </style>

  <body>
    <form action="job_update.php" method="post" enctype="multipart/form-data">

    <div>
      <span class="label width-6">Company Name</span>
      <input type="text" name="company" required>
    </div>

    <div>
      <span class="label width-6">Job Title</span>
      <input type="text" name="job" required>
    </div>

    <div>
      <span class="label width-6">Skills Required</span>
      <input type="text" name="skills" required>
    </div>

    <div>
      <span class="label width-6">Minimum Experience Required</span>
      <input type="text" name="expr" required>
    </div>


    <div>
      <input type="submit" name="insert_post" value="Insert Now">
    </div>

    </form>
  </body>
</html>


<?php
$connect = mysqli_connect("localhost", "root", "", "websitequiz");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

  if(isset($_POST['insert_post']))
  {

    //getting text data from the fields
    $a = $_POST['company'];
    $b = $_POST['job'];
    $c = $_POST['skills'];
    $d = $_POST['expr'];

    $insert_product = "INSERT INTO steve_jobs (company_name, job, skills, expp) VALUES ('$a','$b','$c','$d')";

  /*  if (mysqli_query($connect, $insert_product)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $insert_product . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
*/

   $insert_pro = mysqli_query($connect, $insert_product);

    if($insert_pro)
    {
      echo "<script>alert('Product has been inserted')</script>";
      echo "<script>window.open('job_update.php','_self')</script>";
    }

  }

?>
