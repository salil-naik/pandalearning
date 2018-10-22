<?php
$connect = mysqli_connect("localhost", "root", "", "websitequiz");

function getPro()
{
  global $connect;

  $get_pro = "select * from steve_jobs order by RAND() LIMIT 0,8";

  $run_pro = mysqli_query($connect, $get_pro);

  while($row_pro = mysqli_fetch_array($run_pro))
  {
    $a = $row_pro['company_name'];
    $b = $row_pro['job'];
    $c = $row_pro['skills'];
    $d = $row_pro['expp'];


    echo"
    <div class='job'>
    <h2>$a</h2>

    <div class='vacancy'>
    $b
    </div>

    <div class='skills'>
    <b>Skills Required</b> : $c
    </div>

    <div class='skills'>
      <b>Minimum Experience Required</b> : $d
    </div>
    </div>

    ";

  }
}

?>
