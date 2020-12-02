<?php
generateCalendar();

function generateCalendar()
{
  $code = $_COOKIE['codeCalendar'];
  $max = 24;
  $json = "";
  $json .= "[{\n";

  for ($i = 1; $i <= $max; $i++) {
    $calContent = preg_replace('/\r|\n/', '<br>', str_replace('"', '\'', file_get_contents('https://sv443.net/jokeapi/v2/joke/Miscellaneous,Dark,Pun,Spooky,Christmas?format=txt'))); //blacklistFlags=nsfw,racist,sexist
    if ($i == $max) {
      $json .= "\"" . $i . "\":\"" . $calContent . "\"";
    } else {
      $json .= "\"" . $i . "\":\"" . $calContent . "\",\n";
    }
    sleep(0.2);
  }
  $json .= "\n}]";
  $jsonFopen = fopen('../calendar/' . $code . '.json', 'w') or die('Can\'t open/make file calendar/' . $code . '.json<br>Please try again, or contact the administrator.');
  fwrite($jsonFopen, $json);

  header('location: ../');
}
