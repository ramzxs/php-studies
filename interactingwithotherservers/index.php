<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interacting with other Servers - Using CURL</title>
</head>
<body>
    <h1>Interacting with other Servers - Using CURL</h1>

    <?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://en.wikipedia.org/wiki/PHP");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch); ?>

    <code style="border: 5px solid green; padding: 25px">
        <?php echo $response;
        // PageRank Algo
        // Get all links from this page
        // Follow those links
        // Compute for stat
        
        ?>
    </code>
</body>
</html>