# SIPEDULI - Sistem Informasi Pepedan untuk Usulan dan Lokasi Inisiatif

**SIPEDULI** adalah sistem informasi berbasis web yang dirancang untuk membantu pemerintah desa dalam mengelola, mengevaluasi, dan memprioritaskan usulan program kerja masyarakat berdasarkan kriteria tertentu. Sistem ini dibangun menggunakan framework **CodeIgniter 3** dan terintegrasi dengan metode **SAW (Simple Additive Weighting)** serta pendekatan **Rule-Based System** untuk pengambilan keputusan.

## Fitur Utama

- **Dashboard Admin & User**  
  Menampilkan ringkasan data usulan, status program kerja, dan informasi penting lainnya.

- **Manajemen Kriteria & Subkriteria**  
  Admin dapat mengelola kriteria penilaian seperti biaya, manfaat, dan dukungan masyarakat.

- **Input & Penilaian Alternatif**  
  Menambahkan alternatif program kerja desa dan melakukan penilaian berbasis kriteria.

- **Perhitungan SAW & Klasifikasi Program**  
  Menentukan prioritas program ke dalam kategori:  
  - Jangka Pendek  
  - Jangka Menengah  
  - Jangka Panjang

- **Export Laporan ke PDF**  
  Cetak laporan hasil perhitungan dan klasifikasi dengan format resmi.

- **Autentikasi Multi-User**  
  Mendukung login admin dan user desa dengan pembatasan akses.

## Teknologi yang Digunakan

- PHP (CodeIgniter 3)
- MySQL/MariaDB
- HTML, CSS (SB Admin Template)
- JavaScript, jQuery
- DOMPDF untuk export PDF

## Cara Instalasi

1. Clone repositori ini ke folder XAMPP:
   ```bash
   git clone https://github.com/USERNAME/tugas_faqih.git /Applications/XAMPP/htdocs/mawardi/tugas_faqih
