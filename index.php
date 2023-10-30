<?php
    if (isset($_FILES['file'])) {
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';

        $file_name = $_FILES['file']["name"];
        $file_size = $_FILES['file']["full_path"];
        $file_tmp = $_FILES['file']["tmp_name"];
        $file_type = $_FILES['file']["size"];

        if (move_uploaded_file($file_tmp, "./uploaded/".$file_name)) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>SuccessFully !!!</strong> File uploaded successfull.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }else{
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR!!!</strong> NETWORK ERROR !!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="m-2">File Upload</h1>
    <div class="container my-5">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="file" class="form-label"></label>
                <input class="form-control" type="file" name="file" id="file">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>