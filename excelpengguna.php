<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
// Membuat spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menambahkan judul "Riwayat Transaksi"
$sheet->mergeCells('A1:D2');
$sheet->setCellValue('A1', 'Riwayat Transaksi');
$sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);

// Menambahkan header tabel
$sheet->setCellValue('A4', 'No');
$sheet->setCellValue('B4', 'Nama Pengguna');
$sheet->setCellValue('C4', 'Username');
$sheet->setCellValue('D4', 'Role');

// Membaca data dari MySQL
include 'koneksi.php';
$user = mysqli_query($con, "SELECT * FROM user");
$row = 5; 
$no = 1;

while ($record = mysqli_fetch_array($user)) {
    $sheet->setCellValue('A' . $row, $no);    
    $sheet->setCellValue('B' . $row, $record['nama_user']);
    $sheet->setCellValue('C' . $row,  $record['username']);
    $sheet->setCellValue('D' . $row, $record['role']); 

    $row++;
    $no++;
}

// Menambahkan border untuk setiap sel dari A4 sampai D(row)
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],
];

// Terapkan border ke seluruh tabel
$sheet->getStyle('A4:D' . ($row - 1))->applyFromArray($styleArray);

// Terapkan border pada judul
$sheet->getStyle('A1:D2')->applyFromArray($styleArray);

// Output file Excel
$writer = new Xlsx($spreadsheet);
ob_clean();

$filename = 'data_pengguna.xlsx';
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=\"$filename\"");
$writer->save("php://output");
?>
