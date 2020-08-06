<?php
require_once "../connect_db.php";
if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $dob = $_POST['DoB'];
  $address = $_POST['address'];
  $grade = $_POST['grade'];
  $class = $_POST['class'];
  $sql = "INSERT INTO `student`(`student_name`, `student_DoB`, `student_address`, `student_grade`, `class_id`) VALUES ('$name','$dob','$address','$grade','$class')";
  $result = $conn->query($sql);
  if ($result) { ?>
    <script>
      alert("Added a product");
      window.location.href = "../add_student.php";
    </script>
  <?php } else { ?>
    <script>
      alert("Somrthing wrong. Please try again");
      window.location.href = "../add_student.php";
    </script>
  <?php } ?>
<?php } ?>