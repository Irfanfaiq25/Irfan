# Laporan Kuis CI4 Bug Fix v3

## Nama: Muhammad Irfan Faiq

## NIM: 231080200053

## Kelas: B1 Informatika

## Bug yang Diperbaiki

1. Routes.php
   Parameter pertama match('get', ...) salah. Method match() menerima array dari metode HTTP, bukan string tunggal.

Perbaikan:
Ubah 'get' menjadi array ['get']:

2. home.php
   $model->getall();:

Fungsi getall() tidak ada di dalam model Usermodel yang Anda buat sebelumnya. Di CodeIgniter 4, metode yang digunakan untuk mengambil semua data dari tabel findAll(), bukan getall(). Anda perlu mengganti getall() dengan findAll().

Tidak ada tanda titik koma (;) setelah return view('user', $data):

Setelah return view('user', $data), tanda titik koma (;) hilang. Ini menyebabkan sintak PHP yang salah.

Penulisan kelas model:

new usermodel;, yang seharusnya mengikuti konvensi penulisan new Usermodel; (huruf pertama dari nama kelas harus kapital). Meskipun PHP tidak sepenuhnya sensitif terhadap huruf besar/kecil dalam deklarasi objek, ini lebih baik mengikuti konvensi penulisan yang benar, yaitu Usermodel dengan huruf kapital pada U.

Penggunaan $this->request->getVar('email');:

Anda menggunakan getVar('email'), tetapi seharusnya menggunakan getPost('email') form buat menggunakan metode POST untuk mengirim data. Fungsi getVar() lebih umum digunakan jika ingin mendapatkan data dari berbagai metode (GET, POST, dll.), sementara getPost() lebih tepat untuk mengambil data POST.

3. usermodel.php
   Codeigniter\Model, tetapi penulisan yang benar adalah CodeIgniter\Model dengan huruf I besar.

tabel userss, mungkin salah ketik. Biasanya tabel pengguna bernama users, bukan userss.
