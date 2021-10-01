<!DOCTYPE html>
<html>
<head>
    <?php
        $page_name = "About";
        include "{$_SERVER['DOCUMENT_ROOT']}/shared/_headTags.php";
    ?>
</head>
<body>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/shared/_header.php"; ?>
    <div class="page-heading">
        <h1>About</h1>
    </div>
    <main>
        <section>
            <h2>Welcome to South Rwenzori Diocese!</h2>
            <p>We're glad you're here. South Rwenzori Diocese represents the Anglican Church of Uganda in Kasese District. Visit one of the links below to learn more about:</p>
            <ul>
                <li>Our <a href="/about/bishop">Bishop</a>, Nason Baluku</li>
                <li>Our central church, <a href="/about/st-pauls-cathedral">St. Paul's Cathedral</a></li>
                <li>The <a href="/about/bishops-office">Bishop's Office</a></li>
                <li>Our <a href="/about/diocesan-secretary">Diocesan Secretary</a>, Nason Mugisa</li>
                <li>The <a href="/about/history">history</a> of the diocese</li>
            </ul>
        </section>
    </main>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/shared/_footer.php"; ?>
</body>
</html>