<?php
$callback = "jQuery3510" .
    rand(100000000, 999999999) .
    rand(100000000, 999999999) .
    "_" .
    round(microtime(true) * 1000);

$url = "https://example.com/test?callback=" . $callback;
?>
<!DOCTYPE html>
<html>
<body>

<h3>Callback:</h3>
<pre><?php echo $callback; ?></pre>

<h3>Full URL:</h3>
<pre><?php echo $url; ?></pre>

</body>
</html>
