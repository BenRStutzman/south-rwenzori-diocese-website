<!DOCTYPE html>
<html>
<head>
    <?php
        $page_name = "404 Error";
        include "{$_SERVER['DOCUMENT_ROOT']}/shared/_headTags.php";
    ?>
</head>
<body>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/shared/_header.php"; ?>
    <div class="page-heading">
        <h1>Oops!</h1>
    </div>
    <main>
        <section>
            <h2>The page you're looking for doesn't exist!</h2>
            <p>You can return to our <a href="/">home page</a>, or use the navigation bar above to go somewhere else.</p>
        </section>
    </main>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/shared/_footer.php"; ?>
</body>
</html>