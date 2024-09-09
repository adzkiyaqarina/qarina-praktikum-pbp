<?php
    // Nama : Adzkiya Qarina Salsabila
    // NIM  : 24060122140138

    // Fungsi untuk menghitung rata-rata elemen array
    function hitung_rata($array) {
        $total = array_sum($array);  // Menghitung jumlah total nilai
        $jumlah_data = count($array);  // Menghitung jumlah elemen
        return $total / $jumlah_data;  // Mengembalikan nilai rata-rata
    }

    // Fungsi untuk mencetak data mahasiswa
    function print_mhs($array_mhs) {
        echo '<table border="1">';
        echo '<tr>
                <th>Nama</th>
                <th>Nilai 1</th>
                <th>Nilai 2</th>
                <th>Nilai 3</th>
                <th>Rata2</th>
            </tr>';
        
        // Looping untuk setiap mahasiswa dalam array
        foreach($array_mhs as $nama_mhs => $nilai_mhs) {
            // Hitung rata-rata
            $rata2 = hitung_rata($nilai_mhs);
            
            // Tampilkan data dalam bentuk tabel
            echo '<tr>';
            echo '<td>'.$nama_mhs.'</td>';
            echo '<td>'.$nilai_mhs[0].'</td>';
            echo '<td>'.$nilai_mhs[1].'</td>';
            echo '<td>'.$nilai_mhs[2].'</td>';
            echo '<td>'.$rata2.'</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    }

    // Data array mahasiswa
    $array_mhs = array(
        'Abdul' => array(89, 90, 54),
        'Budi' => array(98, 65, 74),
        'Nina' => array(67, 56, 84)
    );

    // Cetak data mahasiswa
    print_mhs($array_mhs);
?>

