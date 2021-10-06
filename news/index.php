<!DOCTYPE html>
<html>
<head>
    <?php
        $page_name = "News";
        include "{$_SERVER['DOCUMENT_ROOT']}/shared/_headTags.php";
    ?>
</head>
<body>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/shared/_header.php"; ?>
    <div class="page-heading">
        <h1>News</h1>
    </div>
    <main>
        <section>
          <h2>Recent Articles:</h2>
          <ul>
            <li><a href="/news/test-article">Test Article</a></li>
          </ul>
        </section>
        <section>
          <h2>Prayer Points:</h2>
          <ul>
            <li>Pray point 1</li>
          </ul>
        </section>
    </main>
    <?php include "{$_SERVER['DOCUMENT_ROOT']}/shared/_footer.php"; ?>
</body>
</html>