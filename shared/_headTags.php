<!-- Assign the $site_name variable before importing this script -->
<title>
    <?php
        $site_name = "South Rwenzori Diocese";
        echo is_null($page_name) ? $site_name : "$site_name - $page_name";
    ?>
</title>

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;700&display=swap" rel="stylesheet">

<!-- css -->
<link rel="stylesheet" href="/css/site.css">

<!-- so media queries work on mobile devices --->
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/icons//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/icons//favicon-16x16.png">
<link rel="manifest" href="/images/icons//site.webmanifest">