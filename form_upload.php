<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload File Gambar</title>
</head>

<body>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
        File Name : <input type="file" name="userfile" id="">
        <input type="submit" value="Upload Now">
    </form>
</body>

</html>