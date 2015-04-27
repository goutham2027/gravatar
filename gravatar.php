<?php

function gravatar($email, $size=48) {
  $digest = md5($email);
  $url = "http://gravatar.com/avatar/{$digest}?s={$size}";
  return $url;
}

echo gravatar('goutham2027@gmail.com');
echo "\n";

?>
