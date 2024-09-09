<?php

    // // MULTIPLE IF ELSE********************************************
    // echo '<br />MULTIPLE IF-ELSE<br />';

    // // Array of different test values
    // $test_values = [86, 68, 59, 30, 11, 0, 110, -98, 'abc'];

    // // Loop through each test value
    // foreach ($test_values as $nilai) {
    //     echo "Testing with nilai: $nilai<br />";

    //     if (is_numeric($nilai)) {  // Checking if the value is numeric
    //         if ($nilai >= 80 && $nilai <= 100){
    //             echo 'Nilai : A <br />';
    //         } elseif ($nilai >= 60 && $nilai < 80){
    //             echo 'Nilai : B <br />';
    //         } elseif ($nilai >= 40 && $nilai < 60){
    //             echo 'Nilai : C <br />';
    //         } elseif ($nilai >= 20 && $nilai < 40){
    //             echo 'Nilai : D <br />';
    //         } elseif ($nilai >= 0 && $nilai < 20){
    //             echo 'Nilai : E <br />';
    //         } else {
    //             echo 'Invalid nilai <br />';
    //         }
    //     } else {
    //         echo 'Nilai is not a number (Invalid) <br />';
    //     }
    //     echo '<br />';
    // }


    // SWITCH********************************************
    echo '<br />SWITCH<br />';

    // Array of different test values
    $test_values = ['A', 'B', 'C', 'D', 'E', 'AB'];

    // Loop through each test value
    foreach ($test_values as $nilai) {
        echo "Testing with nilai: $nilai<br />";
        
        switch ($nilai) {
            case "A":
                echo "Sangat Baik. <br />";
                break;
            case "B":
                echo "Baik. <br />";
                break;
            case "C":
                echo "Cukup. <br />";
                break;
            case "D":
                echo "Kurang. <br />";
                break;
            case "E":
                echo "Tidak Lulus. <br />";
                break;
            default:
                echo "Invalid nilai! <br />";
                break;
        }
        
        echo '<br />';
//  


//     // SWITCH without breaks
//     echo '<br />SWITCH without breaks<br />';

//     // Array of different test values
//     $test_values = ['A', 'B', 'C', 'D', 'E', 'AB'];

//     // Loop through each test value
//     foreach ($test_values as $nilai) {
//         echo "Testing with nilai: $nilai<br />";
        
//         switch ($nilai) {
//             case "A":
//                 echo "Sangat Baik. <br />";
//             case "B":
//                 echo "Baik. <br />";
//             case "C":
//                 echo "Cukup. <br />";
//             case "D":
//                 echo "Kurang. <br />";
//             case "E":
//                 echo "Tidak Lulus. <br />";
//             default:
//                 echo "Invalid nilai! <br />";
//         }
        
//         echo '<br />';
//     }
// 


//     echo '<br />WHILE-LOOP<br />';
//     $harga = 1000;
//     $i = 1;
//     echo '<table border="1">';
//     echo '<tr>
//             <td>No</td>
//             <td>Diskon</td>
//             <td>Harga Setelah Diskon</td>
//         </tr>';
        
//     while ($i <= 10) {
//         echo '<tr>';
//         echo '<td>'.$i.'</td>';
//         $diskon = $i * 0.1;
//         echo '<td>'.($diskon*100).' % </td>';
//         $harga_diskon = $harga - ($harga * $diskon);
//         echo '<td>'.$harga_diskon.'</td>';
//         echo '</tr>';
//         $i++;
//     }
//     echo '</table>';
// 


    // echo '<br />DO-WHILE-LOOP<br />';
    // $harga = 1000;
    // $i = 1;
    // echo '<table border="1">';
    // echo '<tr>
    //         <td>No</td>
    //         <td>Diskon</td>
    //         <td>Harga Setelah Diskon</td>
    //     </tr>';
        
    // do {
    //     echo '<tr>';
    //     echo '<td>'.$i.'</td>';
    //     $diskon = $i * 0.1;
    //     echo '<td>'.($diskon*100).' % </td>';
    //     $harga_diskon = $harga - ($harga * $diskon);
    //     echo '<td>'.$harga_diskon.'</td>';
    //     echo '</tr>';
    //     $i++;
    // } while ($i <= 10);
    // echo '</table>';


// // NUMERIC ARRAY********************************************
//     echo '<br />NUMERIC ARRAY<br />';
//     //assignment melalui array identifier
//     for ($i=0;$i<10;$i++){
//         $diskon[] = $i * 5;
//     }

//     //assignment menggunakan fungsi array
//     // $diskon = array(0,10,20,30,40,50,60,70,80,90);
    
//     //cek apakah sebuah variabel bertipe array
//     if (is_array($diskon)){
//         echo 'Array <br/>';
//     } else{
//         echo 'Not Array <br/';
//     }

//     //menampilkan isi array
//     $n = sizeof($diskon);
//     for($i=0;$i<=($n-1);$i++){
//         echo 'Diskon hari ke-'.($i+1).' = '.$diskon[$i].' % <br />';
//     }

//     // Percobaan 1 ============================================= 
//     $disc = array(60,20,50,90,0,70,10,30,80,40);

//     // Menampilkan array asli
//     echo "Array Asli:<br/>";
//     foreach($disc as $key => $value){
//         echo "Indeks $key: $value % <br />";
//     }

//     // TODO urutkan array disc tersebut dengan menggunakan ksort()
//     $ksorted_disc = $disc;
//     ksort($ksorted_disc);
//     echo "<br />Array Setelah ksort():<br/>";
//     foreach($ksorted_disc as $key => $value){
//         echo "Indeks $key: $value % <br />";
//     }
    
//     // TODO urutkan array disc tersebut dengan menggunakan asort()
//     $asorted_disc = $disc;
//     asort($asorted_disc);
//     echo "<br />Array Setelah asort():<br/>";
//     foreach($asorted_disc as $key => $value){
//         echo "Indeks $key: $value % <br />";
//     }

//     // TODO urutkan array disc tersebut dengan menggunakan sort()
//     $sorted_disc = $disc;
//     sort($sorted_disc);
//     echo "<br />Array Setelah sort():<br/>";
//     foreach($sorted_disc as $key => $value){
//         echo "Indeks $key: $value % <br />";
//     }


    // echo '<br />ASSOSIATIVE ARRAY<br />';

    // // Assignment menggunakan fungsi array
    // $bulan = array(
    //     'jan' => 'Januari', 
    //     'feb' => 'Februari',
    //     'mar' => 'Maret',
    //     'apr' => 'April',
    //     'mei' => 'Mei',
    //     'jun' => 'Juni',
    //     'jul' => 'Juli',
    //     'agu' => 'Agustus',
    //     'sep' => 'September',
    //     'okt' => 'Oktober',
    //     'nov' => 'November',
    //     'des' => 'Desember'
    // );

    // // Percobaan 2 =============================================
    // // Menampilkan array asli
    // echo "Array Asli:<br/>";
    // foreach($bulan as $kode_bulan => $nama_bulan){
    //     echo 'Kode bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br />';
    // }

    // // TODO urutkan array bulan tersebut dengan menggunakan ksort()
    // $ksorted_bulan = $bulan;
    // ksort($ksorted_bulan);
    // echo "<br />Array Setelah ksort() (Berdasarkan Kunci):<br/>";
    // foreach($ksorted_bulan as $kode_bulan => $nama_bulan){
    //     echo 'Kode bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br />';
    // }

    // // TODO urutkan array bulan tersebut dengan menggunakan asort()
    // $asorted_bulan = $bulan;
    // asort($asorted_bulan);
    // echo "<br />Array Setelah asort() (Berdasarkan Nilai, Kunci Dipertahankan):<br/>";
    // foreach($asorted_bulan as $kode_bulan => $nama_bulan){
    //     echo 'Kode bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br />';
    // }

    // // TODO urutkan array bulan tersebut dengan menggunakan sort()
    // $sorted_bulan = $bulan;
    // sort($sorted_bulan);
    // echo "<br />Array Setelah sort() (Berdasarkan Nilai, Kunci Hilang):<br/>";
    // foreach($sorted_bulan as $nama_bulan){
    //     echo 'Bulan: '.$nama_bulan.'<br />';
    // }



    // // Fungsi untuk menghitung rata-rata elemen array
    // function hitung_rata($array) {
    //     $total = array_sum($array);  // Menghitung jumlah total nilai
    //     $jumlah_data = count($array);  // Menghitung jumlah elemen
    //     return $total / $jumlah_data;  // Mengembalikan nilai rata-rata
    // }

    // // Fungsi untuk mencetak data mahasiswa
    // function print_mhs($array_mhs) {
    //     echo '<table border="1">';
    //     echo '<tr>
    //             <th>Nama</th>
    //             <th>Nilai 1</th>
    //             <th>Nilai 2</th>
    //             <th>Nilai 3</th>
    //             <th>Rata2</th>
    //         </tr>';
        
    //     // Looping untuk setiap mahasiswa dalam array
    //     foreach($array_mhs as $nama_mhs => $nilai_mhs) {
    //         // Hitung rata-rata
    //         $rata2 = hitung_rata($nilai_mhs);
            
    //         // Tampilkan data dalam bentuk tabel
    //         echo '<tr>';
    //         echo '<td>'.$nama_mhs.'</td>';
    //         echo '<td>'.$nilai_mhs[0].'</td>';
    //         echo '<td>'.$nilai_mhs[1].'</td>';
    //         echo '<td>'.$nilai_mhs[2].'</td>';
    //         echo '<td>'.$rata2.'</td>';
    //         echo '</tr>';
    //     }
        
    //     echo '</table>';
    // }

    // // Data array mahasiswa
    // $array_mhs = array(
    //     'Abdul' => array(89, 90, 54),
    //     'Budi' => array(98, 65, 74),
    //     'Nina' => array(67, 56, 84)
    // );

    // // Cetak data mahasiswa
    // print_mhs($array_mhs);

?>