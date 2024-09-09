<?php
    // Nama : Adzkiya Qarina Salsabila
    // NIM  : 24060122140138
    
    // NUMERIC ARRAY********************************************
    echo '<br />NUMERIC ARRAY<br />';
    //assignment melalui array identifier
    for ($i=0;$i<10;$i++){
        $diskon[] = $i * 5;
    }

    //assignment menggunakan fungsi array
    // $diskon = array(0,10,20,30,40,50,60,70,80,90);
    
    //cek apakah sebuah variabel bertipe array
    if (is_array($diskon)){
        echo 'Array <br/>';
    } else{
        echo 'Not Array <br/';
    }

    //menampilkan isi array
    $n = sizeof($diskon);
    for($i=0;$i<=($n-1);$i++){
        echo 'Diskon hari ke-'.($i+1).' = '.$diskon[$i].' % <br />';
    }

    // Percobaan 1 ============================================= 
    $disc = array(60,20,50,90,0,70,10,30,80,40);

    // Menampilkan array asli
    echo "Array Asli:<br/>";
    foreach($disc as $key => $value){
        echo "Indeks $key: $value % <br />";
    }

    // TODO urutkan array disc tersebut dengan menggunakan ksort()
    $ksorted_disc = $disc;
    ksort($ksorted_disc);
    echo "<br />Array Setelah ksort():<br/>";
    foreach($ksorted_disc as $key => $value){
        echo "Indeks $key: $value % <br />";
    }
    
    // TODO urutkan array disc tersebut dengan menggunakan asort()
    $asorted_disc = $disc;
    asort($asorted_disc);
    echo "<br />Array Setelah asort():<br/>";
    foreach($asorted_disc as $key => $value){
        echo "Indeks $key: $value % <br />";
    }

    // TODO urutkan array disc tersebut dengan menggunakan sort()
    $sorted_disc = $disc;
    sort($sorted_disc);
    echo "<br />Array Setelah sort():<br/>";
    foreach($sorted_disc as $key => $value){
        echo "Indeks $key: $value % <br />";
    }

    // ASSOSIATIVE ARRAY********************************************
    echo '<br />ASSOSIATIVE ARRAY<br />';
    //assignment menggunakan fungsi array
    $bulan = array('jan' => 'Januari', 
        'feb' => 'Februari',
        'mar' => 'Maret',
        'apr' => 'April',
        'mei' => 'Mei',
        'jun' => 'Juni',
        'jul' => 'Juli',
        'agu' => 'Agustus',
        'sep' => 'Sepetember',
        'okt' => 'Oktober',
        'nov' => 'November',
        'des' => 'Desember');
    foreach($bulan as $kode_bulan => $nama_bulan){
        echo 'Kode bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br />';
    }

   // Percobaan 2 =============================================
    // Menampilkan array asli
    echo "Array Asli:<br/>";
    foreach($bulan as $kode_bulan => $nama_bulan){
        echo 'Kode bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br />';
    }

    // TODO urutkan array bulan tersebut dengan menggunakan ksort()
    $ksorted_bulan = $bulan;
    ksort($ksorted_bulan);
    echo "<br />Array Setelah ksort() (Berdasarkan Kunci):<br/>";
    foreach($ksorted_bulan as $kode_bulan => $nama_bulan){
        echo 'Kode bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br />';
    }

    // TODO urutkan array bulan tersebut dengan menggunakan asort()
    $asorted_bulan = $bulan;
    asort($asorted_bulan);
    echo "<br />Array Setelah asort() (Berdasarkan Nilai, Kunci Dipertahankan):<br/>";
    foreach($asorted_bulan as $kode_bulan => $nama_bulan){
        echo 'Kode bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br />';
    }

    // TODO urutkan array bulan tersebut dengan menggunakan sort()
    $sorted_bulan = $bulan;
    sort($sorted_bulan);
    echo "<br />Array Setelah sort() (Berdasarkan Nilai, Kunci Hilang):<br/>";
    foreach($sorted_bulan as $nama_bulan){
        echo 'Bulan: '.$nama_bulan.'<br />';
    }

?>