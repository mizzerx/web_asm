<?php
require_once "../connect_db.php";
$id = $_POST['id'];
if (isset($_POST['update'])) {
  $name = $_POST['new_name'];
  $dob = $_POST['new_dob'];
  $address = $_POST['new_address'];
  $grade = $_POST['new_grade'];
  $class = $_POST['new_class'];

  $sql_s = "SELECT * FROM `student` WHERE `student_id` = $id";
  $data = $conn->query($sql_s);
  $r = mysqli_fetch_array($data);

  if ($name == '') $name = $r['student_name'];
  if ($dob == '') $dob = $r['student_DoB'];
  if ($address == '') $address = $r['student_address'];
  if ($grade < 0) $grade == 0;

  $sql = "UPDATE `student` SET `student_name`= $name,`student_DoB`= $dob,`student_address`= $address,`student_grade`= $grade,`class_id`= $class WHERE `student_id` = $id";
  $result = $conn->query($sql);
  if ($result) { ?>
    <script>
      alert("Update success");
      window.location.href = "../update_student.php";
    </script>
  <?php } else { ?>
    <script>
      alert("Something wrong. Please try again");
      window.location.href = "../update_student.php";
    </script>
  <?php } ?>
<?php } ?>