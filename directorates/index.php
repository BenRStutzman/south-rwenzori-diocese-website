<!DOCTYPE html>
<html>
<head>
    <?php
        $page_name = "Directorates";
        include "{$_SERVER['DOCUMENT_ROOT']}/shared/_headTags.php";
    ?>
</head>
<body>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/shared/_header.php"; ?>
    <div class="page-heading">
        <h1>Directorates</h1>
    </div>
    <main>
        <section>
            <h2>South Rwenzori Diocese has six directorates:</h2>
            <ul>
                <li><a href="/directorates/education">Education</a></li>
                <li><a href="/directorates/estate">Estate</a></li>
                <li><a href="/directorates/finance">Finance and administration</a></li>
                <li><a href="/directorates/mission">Mission and Evangelism</a></li>
                <li><a href="/directorates/health">Health</a></li>
                <li><a href="/directorates/planning">Planning and Development</a></li>
            </ul>
        </section>
    </main>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/shared/_footer.php"; ?>
</body>
</html>