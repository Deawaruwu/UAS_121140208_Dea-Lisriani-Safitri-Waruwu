

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
