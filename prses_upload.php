<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan upload</title>
</head>
<body>
    <h2>Penggunaan upload</h2>
    <?php
    $nama_file=$HTTP_POST_FILES["file1"]["name"];
    $tmp_dir=$HTTP_POST_FILES["file1"]["tmp_name"];
    copy($stm_dir,"<c:/upload_dir/$name_file ");
    echo("Nama file:<b>$nama_file</br>");
    ?>
</body>
</html>