<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'store-results');

if(!$con){
    die("Could not connect to db" .mysqli_connect_error());
}else{
    // echo "Connected to db successfully";
}

$name = $_POST['name'];
$sem = $_POST['semester'];
$sub1 = $_POST['subject1'];
$sub2 = $_POST['subject2'];
$sub3 = $_POST['subject3'];
$sub4 = $_POST['subject4'];
$sub5 = $_POST['subject5'];
$sub6 = $_POST['subject6'];
$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5 + $sub6;
$perc = (($total / 600) * 100);
$percentage = number_format($perc);

$sql = "insert into marks (name, semester, subject1, subject2, subject3, subject4, subject5, subject6, total, percentage) values('$name', '$sem', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6', '$total', '$percentage')";

if($con->query($sql) == true) {
    // echo "Successfully inserted";
}else{
    echo "Error: $sql <br> $con->error";
}

$con->close();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print The Results</title>
    <link rel="stylesheet" href="marks.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="print-the-marks">
      <h2>Print The Results</h2>
      <h3>
        Name:
        <?php echo "$name" ?>
      </h3>
      <div class="table-data">
        <table class="styled-table">
          <thead>
            <tr>
              <th>Semester</th>
              <th>Subject 1</th>
              <th>Subject 2</th>
              <th>Subject 3</th>
              <th>Subject 4</th>
              <th>Subject 5</th>
              <th>Subject 6</th>
              <th>Total Marks</th>
              <th>Percentage</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo "$sem" ?></td>
              <td><?php echo "$sub1" ?></td>
              <td><?php echo "$sub2" ?></td>
              <td><?php echo "$sub3" ?></td>
              <td><?php echo "$sub4" ?></td>
              <td><?php echo "$sub5" ?></td>
              <td><?php echo "$sub6" ?></td>
              <td><?php echo "$total" ?></td>
              <td><?php echo "$percentage" ?> %</td>
            </tr>
          </tbody>
        </table>
      </div>

      <button onclick="window.print()">Print</button>
    </div>
  </body>
</html>
