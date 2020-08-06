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
  <title>Add Student</title>
</head>

<body>
  <aside>
    <div id="student">
      <h1 align="center">Add Student</h1>
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
        <tr>
          <form action="/acction/add_student.php" method="POST" enctype="multipart/form-data">
            <td></td>
            <td><input type="text" name="name" required placeholder="Student name"></td>
            <td><input type="text" name="DoB" required placeholder="Date of Birth"></td>
            <td><input type="text" name="address" required placeholder="Address"></td>
            <td><input type="number" name="grade" required placeholder="Grade"></td>
            <td>
              <select name="class">
                <?php
                $sql = "SELECT * FROM `class`";
                $result = $conn->query($sql);
                while ($row = mysqli_fetch_array($result)) {
                  $class_id = $row['class_id'];
                  $class_name = $row['class_name']; ?>
                  <option value="<?= $class_id ?>"><?= $class_name ?></option>
                <?php } ?>
              </select>
            </td>
            <td><input type="submit" value="Add" name="add"></td>
          </form>
        </tr>
      </table>
    </div>
    <div align="center" id="link">
      <a href="/index_student.php">Click here to go back....</a>
    </div>
  </aside>
</body>

</html>