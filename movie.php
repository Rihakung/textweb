<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $jsonfile_get_contents("movies.json")
    ?>
    <select id="year_movie"></select>

    <script>
        var str ="";
        var jsonEx = <?php echo$jsonfile?>
    </script>
    <div id = "output"></div>
</body>
</html>