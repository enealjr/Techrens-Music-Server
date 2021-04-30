<?php
$output = shell_exec('ffmpeg -i bensound-ukulele.mp3 2>&1');
echo "<pre>$output</pre>";

$var_str = var_export($output, true);
file_put_contents('file.txt', $var_str);
?>
