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
$sheet->setCellValue('B4', 'Tanggal Transaksi');
$sheet->setCellValue('C4', 'Total Pembelian');
$sheet->setCellValue('D4', 'Detail');

// Membaca data dari MySQL
include 'koneksi.php';
$transactions = mysqli_query($con, "
    SELECT tm.tgl_trs, tm.total_harga, 
           GROUP_CONCAT(m.nama_makanan, ' (', dtm.jumlah, ')' SEPARATOR ', ') AS detail_makanan
    FROM transaksi_makanan tm
    LEFT JOIN detail_transaksi_makanan dtm ON tm.id_trs = dtm.id_trs
    LEFT JOIN makanan m ON dtm.id_makanan = m.id_makanan
    GROUP BY tm.tgl_trs, tm.total_harga
");

$row = 5; 
$no = 1;

while ($record = mysqli_fetch_array($transactions)) {
    $sheet->setCellValue('A' . $row, $no);    
    $sheet->setCellValue('B' . $row, $record['tgl_trs']);
    $sheet->setCellValue('C' . $row, 'Rp ' . number_format($record['total_harga'], 2, ',', '.'));
    $sheet->setCellValue('D' . $row, $record['detail_makanan']); 

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

$filename = 'riwayat_transaksi.xlsx';
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=\"$filename\"");
$writer->save("php://output");
?>
