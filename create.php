<?php
$servername = "localhost";
$username = "root";
$password ="";
$database = "pesantren";

$connection = new mysqli($servername, $username, $password, $database);

$Nama ="";
$NIS ="";
$JenisKelamin ="";
$Alamat ="";

$errorMessage = "";
$successMessage= "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Nama=$_POST["Nama"];
    $NIS=$_POST["NIS"];
    $JenisKelamin=$_POST["JenisKelamin"];
    $Alamat=$_POST["Alamat"];

    do {
        if ( empty ($Nama) || empty($NIS) || empty($JenisKelamin) || empty($Alamat)){
            $errorMessage = "Tolong Isi seluruh Data";
            break;
        }

        $sql = "INSERT INTO clients (Nama, NIS, JenisKelamin, Alamat)" .
                "VALUES ('$Nama', '$NIS', '$JenisKelamin', '$Alamat')";
        $result = $connection->query($sql);

        if (!$result){
            $errorMessage = "Invalid query" . $connection->error;
            break;
        }

        $Nama ="";
        $NIS ="";
        $JenisKelamin ="";
        $Alamat ="";

        $successMessage = "Santri Berhasil Ditambahkan";

        header("location: /Pesantren/Nama Siswa.php");
        exit;

    } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Santri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class ="container my-5">
        <h2>Santri Baru </h2>
        <?php
        if (!empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button; class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Nama" value="<?php echo $Nama;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">NIS</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="NIS" value="<?php echo $NIS;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="JenisKelamin" value="<?php echo $JenisKelamin;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Alamat" value="<?php echo $Alamat;?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)){
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/Pesantren/Nama Siswa.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>