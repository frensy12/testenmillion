<?php
if(isset($_GET['query'])) {
    $query = urlencode($_GET['query']);
    $url = "https://www.google.com/search?q={$query}";

    // Use cURL to fetch the Google search results
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    echo $output;
} else {
    echo "Invalid request";
}
?>
