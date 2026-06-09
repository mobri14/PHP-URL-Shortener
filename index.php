```<?php

$links = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $url = trim($_POST["url"]);

    $code = substr(
        md5(uniqid()),
        0,
        6
    );

    $links[$code] = $url;

    echo "<h3>Short Code:</h3>";
    echo "<b>$code</b>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
</head>
<body>

<h2>PHP URL Shortener</h2>

<form method="POST">

    <input
        type="url"
        name="url"
        placeholder="Enter URL"
        required
    >

    <button type="submit">
        Shorten
    </button>

</form>```

</body>
</html>
