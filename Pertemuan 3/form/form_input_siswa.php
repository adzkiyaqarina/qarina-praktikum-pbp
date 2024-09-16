<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<?php
$nis = $nama = $kelas = $jenis_kelamin = "";
$error_nis = $error_nama = $error_kelas = $error_ekstrakurikuler = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi NIS
    $nis = test_input($nis);
    if (empty($_POST["nis"])) {
        $error_nis = "NIS harus diisi";
    } elseif (!preg_match("/^[0-9]{10}$/", $_POST["nis"])) {
        $error_nis = "NIS harus 10 karakter angka";
    }
    // Validasi Nama
    $nama = test_input($nama);
    if (empty($_POST["nama"])) {
        $error_nama = "Nama harus diisi";
    } elseif (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
        $error_nama = "Nama hanya dapat berisi huruf dan spasi";
    }
    //validasi jenis kelamin: tidak boleh kosong
    if ($jenis_kelamin == '') {
        $error_jenis_kelamin = "Jenis kelamin harus diisi";
    }
    // Validasi Kelas
    if (empty($kelas)) {
        $error_kelas = "Kelas harus dipilih";
    } else {
        $kelas = $_POST["kelas"];
    }
    // Validasi Ekstrakurikuler hanya untuk kelas X dan XI
    if ($kelas == "X" || $kelas == "XI") {
        if (empty($_POST["ekstrakurikuler"])) {
            $error_ekstrakurikuler = "Pilih minimal 1 ekstrakurikuler";
        } elseif (count($_POST["ekstrakurikuler"]) > 3) {
            $error_ekstrakurikuler = "Pilih maksimal 3 ekstrakurikuler";
        } else {
            $ekstrakurikuler = $_POST["ekstrakurikuler"];
        }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

    <div class="container mt-5 border rounded p-0">
    <div class="bg-secondary rounded-top p-2 text-white text-center">Form Input Siswa</div>
    <form action="" method="POST" class="">
        <!-- Input NIS -->
        <div class = "form-group m-2">
        <label for="nis">NIS:</label><br />
            <input type="text" class="form-control" id="nis" name="nis" value="<?php if(isset($nis)) echo $nis;?>">
            <div class="error text-danger"><?php if(isset($error_nis)) echo $error_nis;?></div>
        </div>
        <!-- Input Nama -->
         <div class="form-group m-2">
        <label for="nama">Nama:</label><br />
            <input type="text" class="form-control" id="nama" name="nama" maxlength="50" value="<?php if(isset($nama)) echo $nama;?>">
            <div class="error text-danger"><?php if(isset($error_nama)) echo $error_nama;?></div>
        </div>
        <!-- Jenis Kelamin -->
        <label>Jenis Kelamin:</label><br />
        <div class="form-check m-2">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="pria" name="jenis_kelamin" value="Pria" <?php if(isset($jenis_kelamin) && $jenis_kelamin == "Pria") echo "checked"; ?>> Pria
            </label>
        </div>
        <div class="form-check m-2">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="wanita" name="jenis_kelamin" value="Wanita" <?php if(isset($jenis_kelamin) && $jenis_kelamin == "Wanita") echo "checked"; ?>> Wanita
            </label>
        </div>
        <div class="error text-danger"><?php if(isset($error_jenis_kelamin)) echo $error_jenis_kelamin;?></div>
        <!-- Kelas -->
        <div class="form-group m-2">
            <label class="label" for="kelas">Kelas:</label><br />
            <select class="form-control" id="kelas" name="kelas" onchange="toggleEkstrakurikuler()">
                <option value="">Pilih Kelas</option>
                <option value="X" <?php if ($kelas == "X") echo "selected"; ?>>X</option>
                <option value="XI" <?php if ($kelas == "XI") echo "selected"; ?>>XI</option>
                <option value="XII" <?php if ($kelas == "XII") echo "selected"; ?>>XII</option>
            </select>
            <div class="error text-danger"><?php if(isset($error_kelas)) echo $error_kelas;?></div>
        </div>
        <!-- Ekstrakurikuler (Tampil jika kelas X atau XI) -->
        <div id="ekstrakurikulerDiv" class="form-group" style="display:none;">
        <label>Ekstrakurikuler:</label><br />
            <input type="checkbox" name="ekstrakurikuler[]" value="Pramuka"> Pramuka<br>
            <input type="checkbox" name="ekstrakurikuler[]" value="Seni Tari"> Seni Tari<br>
            <input type="checkbox" name="ekstrakurikuler[]" value="Sinematografi"> Sinematografi<br>
            <input type="checkbox" name="ekstrakurikuler[]" value="Basket"> Basket<br>
            <div class="error text-danger"><?php if(isset($error_ekstrakurikuler)) echo $error_ekstrakurikuler;?></div>
        </div>
        <!-- Tombol Submit dan Reset -->
        <div class="m-2 text center">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form>
</div>

<script>
    function toggleEkstrakurikuler() {
        var kelas = document.getElementById("kelas").value;
        var ekstrakurikulerDiv = document.getElementById("ekstrakurikulerDiv");
        if (kelas == "X" || kelas == "XI") {
            ekstrakurikulerDiv.style.display = "block";
        } else {
            ekstrakurikulerDiv.style.display = "none";
        }
    }
    toggleEkstrakurikuler(); // berjalan ketika load page
</script>
</body>
</html>