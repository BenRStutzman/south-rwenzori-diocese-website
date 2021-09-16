<!-- Assign the $site_name variable before importing this script -->
<title>
    <?php
        $site_name = "South Rwenzori Diocese";
        echo is_null($page_name) ? $site_name : "$site_name - $page_name";
    ?>
</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Glory:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!-- Css -->
<link rel="stylesheet" href="/css/site.css">

<!-- So media queries work on mobile devices --->
<meta name="viewport" content="width=device-width,initial-scale=1">