<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>index</title>
    <script type="text/javascript" src='jquery.min.js'></script>
</head>
<body>
    <h1>
        <?php
            echo "Current Time:".time();
        ?>
    </h1>

    <form action="upload.php" target="mywin" method="post" enctype="multipart/form-data">
        <h3>Upload files:</h3>
        <p>
            <input type="file" name="img">
        </p>
    </form>

    <div>
        <img src="" id="imgid">
    </div>

    <iframe name="mywin" frameborder="1" src="" style="display:none"></iframe>
</body>
<script>

$(':file').change(function() {
    $('form').submit();
});
</script>
</html>