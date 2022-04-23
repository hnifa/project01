<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center p-3">Form Data Pasien</h3>
        <form action="hasil.php" method="POST">
            <div class="form-group row">
                <label for="tgl_periksa" class="col-4 col-form-label">Tanggal periksa</label> 
                <div class="col-8">
                <input id="tgl_periksa" name="tgl_periksa" type="date" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tb" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <input id="kode" name="kode" placeholder="Masukkan Kode" type="text" class="form-control" required>
                </div>
            </div>
            <div class=" form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Gender</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input"
                            value="L" >
                        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input"
                            value="P">
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="bb" class="col-4 col-form-label">Berat Badan (kg)</label>
                <div class="col-8">
                    <input id="bb" name="bb" placeholder="Masukkan Berat Badan" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tb" class="col-4 col-form-label">Tinggi Badan (cm)</label>
                <div class="col-8">
                    <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan" type="text" class="form-control" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>