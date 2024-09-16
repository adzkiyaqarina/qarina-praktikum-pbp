<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Mahasiswa 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    //validasi nama: tidak boleh kosong, hanya dapat berisi huruf dan spasi
    $nama = test_input($_POST['nama']);
    if (empty($nama)){
        $error_nama = "Nama harus diisi";
    }elseif (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
        $error_nama = "Nama hanya dapat berisi huruf dan spasi";
    }
    //validasi email: tidak boleh kosong, format harus benar
    $email = test_input($_POST['email']);
    if ($email == '') {
        $error_email = "Email harus diisi";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_email = "Format email tidak benar";
    }
    //validasi alamat: tidak boleh kosong
    $alamat = test_input($_POST['alamat']);
    if ($alamat == '') {
        $error_alamat = "Alamat harus diisi";
    }
    //validasi jenis kelamin: tidak boleh kosong
    if ($jenis_kelamin == '') {
        $error_jenis_kelamin = "Jenis kelamin harus diisi";
    }
    //validasi kota: tidak boleh kosong
    $kota = $_POST['kota'];
    if ($kota == '' || $kota == 'kota') {
        $error_kota = "Kota harus diisi";
    }
    //validasi minat: tidak boleh kosong
    $minat = $_POST['minat'];
    if (empty($minat)) {
        $error_minat = "Peminatan harus dipilih";
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
    <div class="bg-secondary rounded-top p-2 text-white text-center">Form Mahasiswa</div>
    <form action="" method="POST" class="">
        <div class = "form-group m-2">
        <label for="nama">Nama:</label><br />
            <input type="text" class="form-control" id="nama" name="nama" maxlength="50">
            <div class="error text-danger"><?php if(isset($error_nama)) echo $error_nama;?></div>
        </div>
        <div class="form-group m-2">
            <label for="email" class="label">Email:</label><br />
            <input type="email" class="form-control" id="email" name="email">
            <div class="error text-danger"><?php if(isset($error_email)) echo $error_email;?></div>
        </div>
        <div class="form-group m-2">
            <label for="alamat" class="label">Alamat:</label><br />
            <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"></textarea>
            <div class="error text-danger"><?php if(isset($error_alamat)) echo $error_alamat;?></div>
        </div>
        <div class="form-group m-2">
            <label class="label" for="kota">Kota/Kabupaten:</label><br />
            <select name="kota" id="kota" class="form-control">
                <option value="-" selected disable>-- Pilih Kota Kabupaten --</option>
                <option value="Semarang">Semarang</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Bandung">Bandung</option>
                <option value="Surabaya">Surabaya</option>
            </select>
            <div class="error text-danger"><?php if(isset($error_kota)) echo $error_kota;?></div>
        </div>
        <label class="check m-2">Jenis kelamin:</label><br />
        <div class="form-check m-2">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="jenis_kelamin" value="pria">
                Pria
            </label>
        </div>
        <div class="form-check m-2">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="jenis_kelamin" value="wanita">
                Wanita
            </label>
        </div>
        <div class="error text-danger"><?php if(isset($error_jenis_kelamin)) echo $error_jenis_kelamin;?></div>
        <br>
        <label class="check m-2">Peminatan:</label><br />
        <div class="form-check m-2">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="minat[]" value="coding">Coding
            </label>
        </div>
        <div class="form-check m-2">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="minat[]" value="ux_design">UX Design
            </label>
        </div>
        <div class="form-check m-2">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="minat[]" value="data_science">Data Science
            </label>
        </div>
        <div class="error text-danger"><?php if(isset($error_minat)) echo $error_minat;?></div>
        <br>
        <!-- submit, reset dan button -->
         <div class="m-2 text-center">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </form> 
    </div> 
</body>
</html>