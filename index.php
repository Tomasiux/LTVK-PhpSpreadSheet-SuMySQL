<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpSpreadsheetLTVK</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid d-flex justify-content-center">
      <a class="navbar-brand" href="#">IMPORT | EXPORT</a>
    </div>
  </nav>
</div><br>

<div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

                <?php
                if(isset($_SESSION['message']))
                {
                    echo "<h4>".$_SESSION['message']."</h4>";
                    unset($_SESSION['message']);
                }
                ?>
                <div class="card">
                    <div class="card-header text-center">
                        <h4> Import File </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data" class="d-grid gap-2 col-6 mx-auto">
                            <input type="file" name="import_file" class="form-control" />
                            <button type="submit" name="save_excel_data" class="btn btn-secondary mt-3">Import <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4 >Export File</h4>
                    </div>
                    <div class="card-body">
                    <p class="d-grid gap-2 col-6 mx-auto">Choose type </p>
                        <form action="code.php" method="POST" class="d-grid gap-2 col-6 mx-auto">
                           <select name="export_file_type" class="form-control">
                               <option value="xlsx">XLSX</option>
                               <option value="xls">XLS</option>
                               <option value="csv">CSV</option>
                           </select>                
                            <button type="submit" name="export_excel_btn" class="btn btn-outline-success mt-3 ">Export <i class="fa fa-download" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>