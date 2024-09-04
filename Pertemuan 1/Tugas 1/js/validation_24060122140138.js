//  Nama : Adzkiya Qarina Salsabila
//  NIM  : 24060122140138
// 	Lab  : A1

window.onload = function() {
    generateCaptcha();
}

function generateCaptcha() {
    let captcha = '';
    let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    for (let i = 0; i < 5; i++) {
        captcha += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    document.getElementById('captchaCode').value = captcha;
}

function updateSubKategori() {
    const kategori = document.getElementById("kategori").value;
    const subKategori = document.getElementById("subKategori");
    subKategori.innerHTML = "";

    let subOptions = [];
    if (kategori === "Baju") {
        subOptions = ["Baju Pria", "Baju Wanita", "Baju Anak"];
    } else if (kategori === "Elektronik") {
        subOptions = ["Mesin Cuci", "Kulkas", "AC"];
    } else if (kategori === "Alat Tulis") {
        subOptions = ["Kertas", "Map", "Pulpen"];
    }

    subOptions.forEach(function (option) {
        const opt = document.createElement("option");
        opt.value = option;
        opt.innerHTML = option;
        subKategori.appendChild(opt);
    });
}

function validateForm() {
    let namaProduk = document.getElementById("namaProduk").value;
    let deskripsi = document.getElementById("deskripsi").value;
    let kategori = document.getElementById("kategori").value;
    let subKategori = document.getElementById("subKategori").value;
    let hargaSatuan = document.getElementById("hargaSatuan").value;
    let grosirYa = document.getElementById("grosirYa").checked;
    let hargaGrosir = document.getElementById("hargaGrosir").value;
    let jasaKirim = document.querySelectorAll("input[name='jasaKirim']:checked");
    let captchaInput = document.getElementById("captchaInput").value;
    let captchaCode = document.getElementById("captchaCode").value;

    let errorMsg = "";

    // Nama Produk Validation
    if (namaProduk.length < 5 || namaProduk.length > 30) {
        errorMsg += "Nama produk harus diisi dan panjang antara 5-30 karakter.<br>";
    }

    // Deskripsi Validation
    if (deskripsi.length < 5 || deskripsi.length > 100) {
        errorMsg += "Deskripsi harus diisi dan panjang antara 5-100 karakter.<br>";
    }

    // Kategori and Sub Kategori Validation
    if (kategori === "") {
        errorMsg += "Kategori harus dipilih.<br>";
    }
    if (subKategori === "") {
        errorMsg += "Sub Kategori harus dipilih sesuai kategori.<br>";
    }

    // Harga Satuan Validation
    if (isNaN(hargaSatuan) || hargaSatuan === "") {
        errorMsg += "Harga satuan harus berupa nilai numerik.<br>";
    }

    // Grosir Validation
    if (grosirYa && (isNaN(hargaGrosir) || hargaGrosir === "")) {
        errorMsg += "Harga grosir harus diisi jika grosir dipilih 'Ya'.<br>";
    }

    // Jasa Kirim Validation
    if (jasaKirim.length < 3) {
        errorMsg += "Minimal 3 jasa kirim harus dipilih.<br>";
    }

    // Captcha Validation
    if (captchaInput !== captchaCode) {
        errorMsg += "Captcha tidak sesuai.<br>";
    }

    // Show Error Messages
    document.getElementById("errorMsg").innerHTML = errorMsg;

    if (errorMsg) {
        return false;
    }
    return true;
}
