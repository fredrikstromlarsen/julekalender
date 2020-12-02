<?php
if (isset($_POST['codeCalendar'])) {

  $code = $_POST['codeCalendar'];
  setcookie("codeCalendar", $code, time() + (86400 * 31), '/');

  if (file_exists('../calendar/' . $code . '.json')) {
    header('location: ../');
  } else {
    header('location: generateCalendar.php');
  }
} else {
  header('location: ../');
}
