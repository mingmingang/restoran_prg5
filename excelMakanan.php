<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Style;

// Membuat spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Menambahkan judul "List Makanan 2024"
$sheet->mergeCells('A1:F2'); // Menggabungkan sel dari A1 sampai F2
$sheet->setCellValue('A1', 'List Makanan 2024'); // Mengisi teks judul
$sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER); // Mengatur teks agar di tengah
$sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16); // Membuat teks menjadi tebal dan lebih besar

// Menambahkan header tabel
$sheet->setCellValue('A4', 'No');
$sheet->setCellValue('B4', 'Nama Makanan');
$sheet->setCellValue('C4', 'Kategori');
$sheet->setCellValue('D4', 'Harga');
$sheet->setCellValue('E4', 'Deskripsi');
$sheet->setCellValue('F4', 'Status');

// Membaca data dari MySQL
include 'koneksi.php';
$makanan = mysqli_query($con, "SELECT * FROM makanan");

$row = 5; // Mulai dari baris 5 setelah header
$no = 1;
$total_harga = 0;

while ($record = mysqli_fetch_array($makanan)) {
    $sheet->setCellValue('A' . $row, $no);
    $sheet->setCellValue('B' . $row, $record['nama_makanan']);
    $sheet->setCellValue('C' . $row, $record['kategori']);
    $sheet->setCellValue('D' . $row, 'Rp ' . number_format($record['harga'], 2, ',', '.')); // Format harga
    $sheet->setCellValue('E' . $row, $record['deskripsi']);
    $sheet->setCellValue('F' . $row, ($record['status'] == 1 ? 'Tersedia' : 'Tidak Tersedia'));
    
    // Menambahkan total harga
    $total_harga += $record['harga'];
    
    $row++;
    $no++;
}

// Menambahkan total di bagian akhir
$sheet->mergeCells('A' . $row . ':C' . $row);
$sheet->setCellValue('A' . $row, 'Total Harga');
$sheet->setCellValue('D' . $row, 'Rp ' . number_format($total_harga, 2, ',', '.')); // Total harga
$sheet->getStyle('A' . $row)->getFont()->setBold(true); // Membuat teks 'Total Harga' menjadi tebal

// Menambahkan border untuk setiap sel dari A4 sampai F(row)
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['argb' => '00000000'],
        ],
    ],
];

// Terapkan border ke seluruh tabel (A4:F(row))
$sheet->getStyle('A4:F' . $row)->applyFromArray($styleArray);

// Terapkan border pada judul (A1:F2)
$sheet->getStyle('A1:F2')->applyFromArray($styleArray);

// Output file Excel
$writer = new Xlsx($spreadsheet);
ob_clean();

$filename = 'List_Makanan_2024.xlsx';
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=\"$filename\"");
$writer->save("php://output");
?>
