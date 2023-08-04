<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Upload File Gambar</title>
</head>

<body>
    <?php
        $sumber = $_FILES['userfile']['tmp_name'];
        $target = $_FILES['userfile']['name'];
        if(move_uploaded_file($sumber, $target))
        {
            echo "File Uploaded Successfully";
            echo "Uploaded File : ";
            echo "<img src='$target' height=500 width=500>";
        }
        else
        echo "Can't Upload Selected File";
?>
</body>

</html>