<?php
require_once "../connect_db.php";
$id = $_POST['id'];
if (isset($_POST['Del'])) {
  if ($id == 0) { ?>
    <script>
      alert("Cannot delete this student");
      window.location.href = "../delete_student.php";
    </script>
    <?php } else {
    $sql = "DELETE FROM `student` WHERE `student_id` = $id";
    $result = $conn->query($sql);
    if ($result) { ?>
      <script>
        alert("Delete success");
        window.location.href = "../delete_student.php";
      </script>
    <?php } else { ?>
      <script>
        alert("Something wrong. Please try again");
        window.location.href = "../delete_student.php";
      </script>
    <?php } ?>
  <?php } ?>
<?php } ?>