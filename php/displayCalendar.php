<?php
function displayCalendar($code)
{

  $date = date('d');
  $contentJSON = file_get_contents('calendar/' . $code . '.json');
  $content = json_decode($contentJSON, true);

  echo '<div class="cal" id="calendar">';

  for ($i = 1; $i <= 24; $i++) {
    if ($i < 10) {
      $iFormatted = '0' . $i;
    } else {
      $iFormatted = $i;
    }
    if ($i <= $date && date('m') == 12) {
      if ($i == $date) {
        $isToday = 'today';
      } else {
        $isToday = '';
      }
      echo '
      <div class="cal-wrapper cal-openable '.$isToday.'" id="' . $i . '" onmouseenter="openCalendar('.$i.')">
        <div class="cal-container">
          <div class="cal-unopened">
            <p>' . $i . '</p>
          </div>
          <div class="cal-opened">
            <div>
              <span>Today\'s joke:</span>
              <span>' . $iFormatted . '/' . date('m') . '/' . date('Y') . '</span>
            </div>
            <p class="cal-content">' . $content[0][$i] . '</p>';
    } else {

      $lockedContent = str_rot13($content[0][$i]);
      echo '
      <div class="cal-wrapper cal-unopenable">
        <div class="cal-container">
          <div class="cal-unopened">
            <p>' . $i . '</p>
          </div>
          <div class="cal-opened">
            <div>
              <span>Locked joke:</span>
              <span>' . $iFormatted . '/' . date('m') . '/' . date('Y') . '</span>
            </div>
            <p class="cal-content">' . $lockedContent . '</p>';;
    }
    echo '
          </div>
        </div>
      </div>';
  }
  echo '</div>';
}
