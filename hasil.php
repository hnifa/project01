<?php
require_once "class.php";

$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$bb = $_POST['bb'];
$tb = $_POST['tb'];
$tgl_periksa = $_POST['tgl_periksa'];
$kode = $_POST['kode'];
$hasilbmi = new bmiPasien($nama, $tmp_lahir, $tgl_lahir, $gender, $email, $bb, $tb, $tgl_periksa, $kode, $ket);
$ket = $hasilbmi->nilai();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
$p1 = ['tgl_periksa'=> '2022-01-10', 'kode'=> 'P001', 'nama'=>'Ahmad', 'gender'=>'L', 'bb'=>'69.8', 'tb'=>169, 'hasilbmi'=>24.7, 'ket'=>'Kelebihan Berat Badan'];
$p2 = ['tgl_periksa'=> '2022-01-10', 'kode'=> 'P002', 'nama'=>'Rina', 'gender'=>'P', 'bb'=>'55.3', 'tb'=>165, 'hasilbmi'=>20.3, 'ket'=>'Normal'];
$p3 = ['tgl_periksa'=> '2022-01-11', 'kode'=> 'P003', 'nama'=>'Lutfi', 'gender'=>'L', 'bb'=>'45.2', 'tb'=>171, 'hasilbmi'=>15.4, 'ket'=>'Kekurangan Berat Badan'];

$ar_pasien = [$p1, $p2, $p3]
?>
<body>
    <div class="container">
        <h3 class="text-center p-2">Hasil BMI</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Tanggal Periksa</td>
                    <td>Kode</td>
                    <td>Nama</td>
                    <td>Gender</td>
                    <td>Berat Badan</td>
                    <td>Tinggi Badan</td>
                    <td>Nilai BMI</td>
                    <td>Status BMI</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($ar_pasien as $ap) {
                    echo '<tr?><td>' .$no. '</td>';
                    echo '<td>' .$ap['tgl_periksa'].'</td>';
                    echo '<td>' .$ap['kode']. '</td>';
                    echo '<td>' .$ap['nama']. '</td>';
                    echo '<td>' .$ap['gender']. '</td>';
                    echo '<td>' .$ap['bb']. '</td>';
                    echo '<td>' .$ap['tb']. '</td>';
                    echo '<td>' .$ap['hasilbmi']. '</td>';
                    echo '<td>' .$ap['ket']. '</td></tr>';
                    $no++;
                }
                ?>
                <tr> 
                    <td><?=$no;?></td>
                    <td><?=$tgl_periksa;?></td>
                    <td><?=$kode;?></td>
                    <td><?=$nama;?></td>
                    <td><?=$gender;?></td>
                    <td><?=$bb;?></td>
                    <td><?=$tb;?></td>
                    <td><?php echo $hasilbmi->nilai();?></td>
                    <td><?php echo $hasilbmi->statusBMI($ket);?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>