<?php
    $site_name = "South Rwenzori Diocese";
    $title = is_null($page_name) ? $site_name : "$site_name - $page_name";
    echo "<title>$title</title>";
?>