Bagian 1: Pemrograman di Sisi Klien
1.1 Sajikan halaman untuk menampilkan data penjualan gadget dengan fungsi CRUD. Tambahkan formulir input yang mencakup kolom (nama, jenis kendaraan, cc, warna, tanggal produksi) dan gunakan tag `table` untuk menampilkan data dari server.

1.2 Implementasikan beberapa event untuk menangani interaksi pada halaman web, terutama pada elemen input.

Bagian 2: Pemrograman di Sisi Server
2.1 Gunakan script PHP untuk mengelola data dari formulir yang ada pada file create, edit, dan delete, dengan memanfaatkan variabel `$_POST` dan `$_GET`.

2.2 Bangun objek PHP berbasis OOP, yakni `Connection` dan `Form`, yang memiliki metode tertentu. Terapkan objek tersebut dalam skenario koneksi ke database dan operasi CRUD.

Bagian 3: Manajemen Database
3.1 Buatlah tabel pada database MySQL mengikuti panduan berikut:

```sql
CREATE TABLE kendaraan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    jenis_kendaraan VARCHAR(50),
    cc INT,
    warna VARCHAR(30),
    tanggal_produksi DATE
);

INSERT INTO kendaraan (name, jenis_kendaraan, cc, warna, tanggal_produksi) VALUES
    ('Mobil A', 'mobil', 1500, 'Merah', '2022-01-10'),
    ('Motor X', 'motor', 125, 'Biru', '2021-05-20'),
    ('Truk B', 'truk', 5000, 'Hijau', '2020-11-15'),
    ('Truk C', 'truk', 2000, 'Hitam', '2022-03-05'),
    ('Motor Y', 'motor', 600, 'Putih', '2023-02-18'),
    ('Mobil C', 'mobil', 1200, 'Abu-abu', '2022-07-25'),
    ('Motor Z', 'mobil', 100, 'Coklat', '2020-12-03'),
    ('Truk D', 'truk', 6000, 'Silver', '2021-09-12'),
    ('Mobil D', 'mobil', 1800, 'Orange', '2023-01-28');
```

3.2 Konfigurasikan koneksi ke database MySQL dalam file config.

3.3 Manipulasi data pada tabel database menggunakan query SQL dalam operasi CRUD, seperti penambahan, pengambilan, atau pembaruan data.

Bagian 4: Manajemen State
4.1 Buat skrip PHP yang menggunakan session untuk menyimpan state pengguna.

4.2 Terapkan pengelolaan state menggunakan cookie dan browser storage pada sisi klien dengan JavaScript, dengan skrip yang berjalan di halaman index.

Bagian Bonus: Hosting Aplikasi Web
- Langkah-langkah hosting aplikasi web:
  - Daftarkan akun.
  - Pilih layanan hosting sesuai dengan kebutuhan aplikasi.
  - Buat database
  - Atur cpanel

- Pemilihan penyedia hosting web (contoh: 000webhost) dan alasan:

  - Aspek Biaya: Hosting gratis di 000webhost cocok untuk anggaran terbatas karena tanpa biaya bulanan atau tahunan.
  - Uji Coba atau Proyek Kecil: Cocok untuk proyek kecil atau pengujian aplikasi karena menyediakan lingkungan pengembangan yang memadai.
  - Kecepatan Implementasi: Proses pendaftaran dan implementasi cepat, memungkinkan pengguna segera meng-host situs web.
  - Kemudahan Penggunaan: Dilengkapi dengan panel kontrol sederhana, cocok untuk pemula dalam manajemen server.

- Langkah-langkah keamanan aplikasi web:

  - Aktifkan SSL/TLS untuk pengiriman data yang aman.

- Konfigurasi server:

  - Siapkan server database MySQL.
  - Atur runtime environment seperti XAMPP dengan versi yang sesuai.