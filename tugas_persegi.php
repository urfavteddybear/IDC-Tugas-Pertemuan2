<?php
// Menghitung luas persegi
$sisi = 5;
$luas = $sisi * $sisi;
echo "Hasil dari luas persegi dengan sisi sama dengan $sisi adalah $luas <br>";

// Membuat function mengitung luas persegi
function rumus_persegi($sisi)
{
    $hasil = $sisi * $sisi;
    return $hasil;
}
$s = 10;
$hasil_penjumlahan = rumus_persegi($s);
echo "Hasil dari luas persegi dengan sisinya adalah $s adalah $hasil_penjumlahan <br>";



// Membuat class 
class Rumus_persegi
{
    function rumus_persegi($sisi)
    {
        $jawaban = $sisi * $sisi;
        return $jawaban;
    }
}

$persegi = new Rumus_persegi;
echo "Hasil dari class diatas adalah ", $persegi->rumus_persegi(7);