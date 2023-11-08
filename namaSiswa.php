<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Santri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2> Nama Santri </h2>
        <a class="btn btn-primary addNewButton" href="/Pesantren/create.pjp" role="button">New</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tanggal Diterima</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password ="";
                $database = "pesantren";

                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if (!result){
                    die("Invalid query: " . $connection->error);
                }

                while ($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[NO]</td>
                        <td>$row[Nama]</td>
                        <td>$row[NIS]</td>
                        <td>$row[JenisKelamin]</td>
                        <td>$row[Alamat]</td>
                        <td>$row[created_at]</td>
                    </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
    </div> 
</body>
<script>
    if(sessionStorage.getItem("privilege")==="false"){
        document.querySelector(".addNewButton").style.display = "none";
    }
</script>
</html>