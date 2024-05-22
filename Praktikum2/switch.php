<?php
$grade = "E";

$predikat;

switch ($grade) {
    case "A";
        $predikat = "sangat baik";
        break;
    case "B";
        $predikat = "baik";
        break;
    case "C";
        $predikat = "lumayan";
        break;
    case "D";
        $predikat = "kurang";
        break;
    case "E";
        $predikat = "astaghfirullah";
        break;
    default:
        $predikat = "Nilai Tidak Ditemukan";
        break;
}

echo "predikat : " . $predikat;
?>
