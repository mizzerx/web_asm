<?php
require_once "connect_db.php";
require_once "restrict.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>Over all</title>
</head>

<body>
  <aside>
    <div id="student">
      <h1 align="center">All Student</h1>
      <table align="center" border="1" style="text-align: center;">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Date of Birth</th>
          <th>Address</th>
          <th>Grade</th>
          <th>Class</th>
        </tr>
        <?php
        $sql1 = "SELECT `student_id`, `student_name`, `student_DoB`, `student_address`, `student_grade`, `class_name` \n"

          . "FROM `student` INNER JOIN `class`\n"

          . "ON `student`.`class_id` = `class`.`class_id`";
        $result1 = $conn->query($sql1);
        while ($row1 = mysqli_fetch_array($result1)) {
          $id = $row1['student_id'];
          $name = $row1['student_name'];
          $DoB = $row1['student_DoB'];
          $address = $row1['student_address'];
          $grade = $row1['student_grade'];
          $class = $row1['class_name'];
        ?>
          <tr>
            <td><?= $id ?></td>
            <td><?= $name ?></td>
            <td><?= $DoB ?></td>
            <td><?= $address ?></td>
            <td><?= $grade ?></td>
            <td><?= $class ?></td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <div id="link" align="center">
      <button id="Add" onclick="window.location.href='/add_student.php'">Go to add page</button>
    </div>
    <div id="link" align="center">
      <button id="Delete" onclick="window.location.href='/delete_student.php'">Go to delete page</button>
    </div>
    <div id="link" align="center">
      <button id="Update" onclick="window.location.href='/update_student.php'">Go to update page</button>
    </div>
  </aside>
</body>

</html>