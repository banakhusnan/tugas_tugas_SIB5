<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $hobby = $_POST['hobby'];
    $pekerjaan = $_POST['pekerjaan'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container min-vh-100 d-flex flex-column justify-content-center">
        <div class="row mb-3">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <div class="input-group">
                                    <select name="pekerjaan" id="pekerjaan" class="form-select">
                                        <option value="" selected disabled>-- Pilih Pekerjaan --</option>
                                        <option value="pekerjaan1">Pekerjaan 1</option>
                                        <option value="pekerjaan2">Pekerjaan 2</option>
                                        <option value="pekerjaan3">Pekerjaan 3</option>
                                        <option value="pekerjaan4">Pekerjaan 4</option>
                                        <option value="pekerjaan5">Pekerjaan 5</option>
                                        <option value="pekerjaan6">Pekerjaan 6</option>
                                        <option value="pekerjaan7">Pekerjaan 7</option>
                                        <option value="pekerjaan8">Pekerjaan 8</option>
                                        <option value="pekerjaan9">Pekerjaan 9</option>
                                        <option value="pekerjaan10">Pekerjaan 10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="hobby" class="form-label">Hobby</label>
                                <div class="input-group">
                                    <select name="hobby" id="hobby" class="form-select">
                                        <option value="" selected disabled>-- Pilih Hobby --</option>
                                        <option value="pekerjaan1">Hobby 1</option>
                                        <option value="pekerjaan2">Hobby 2</option>
                                        <option value="pekerjaan3">Hobby 3</option>
                                        <option value="pekerjaan4">Hobby 4</option>
                                        <option value="pekerjaan5">Hobby 5</option>
                                        <option value="pekerjaan6">Hobby 6</option>
                                        <option value="pekerjaan7">Hobby 7</option>
                                        <option value="pekerjaan8">Hobby 8</option>
                                        <option value="pekerjaan9">Hobby 9</option>
                                        <option value="pekerjaan10">Hobby 10</option>
                                    </select>
                                </div>
                            </div>

                            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Nama</th>
                                <th>Hobby</th>
                                <th>Pekerjaan</th>
                            </tr>
                            <tr>
                                <td><?= $nama; ?></td>
                                <td><?= $hobby; ?></td>
                                <td><?= $pekerjaan; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>