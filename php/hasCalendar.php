<?php
function hasCalendar()
{
  if (isset($_COOKIE['codeCalendar'])) {
    displayCalendar($_COOKIE['codeCalendar']);
  } else {
    echo '
    <form action="./php/findCalendar.php" method="POST" autocomplete="off">
      <label for="codeCalendar">If you don\'t already have a code, please input a positive number of your choice.</label>
      <input type="text" name="codeCalendar" id="codeCalendar" placeholder="Input Code Here" required="true" autofocus="true" pattern="[0-9]{1,100}">
      <input type="submit" value="Get Calendar">
    </form>
    ';
  }
}
