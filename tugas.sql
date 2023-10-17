---- No 1 ----
CREATE VIEW pesanan_pelanggan_kartu
AS SELECT pesanan.id, pesanan.tanggal, pesanan. total, pelanggan.kode, pelanggan.nama, 
kartu.nama as nama_kartu, kartu.diskon
FROM pesanan INNER JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id
INNER JOIN kartu ON pelanggan.kartu_id = kartu.id;

SELECT * FROM pesanan_pelanggan_kartu;

---- No 2 -----
CREATE VIEW pembelian_produk_vendor
AS SELECT pembelian.id, pembelian.tanggal,pembelian.nomor, produk.nama, vendor.nama as nama_vendor, vendor.nama as nama_kontak, vendor.kontak
FROM pembelian JOIN produk ON pembelian.produk_id = produk.id JOIN vendor ON pembelian.vendor_id = vendor.id;

SELECT * FROM pembelian_produk_vendor;

---- No 3 -----
CREATE VIEW pesanan_pelanggan_produk_jenisproduk_pesananitems
AS SELECT pesanan.id, pesanan.tanggal,pesanan.total,
pelanggan.nama as nama_pelanggan,
produk.kode, produk.nama as nama_produk,
jenis_produk.nama as jenis_produk,
pesanan_items.qty, pesanan_items.harga as harga_jual 
FROM pesanan
JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id
JOIN pesanan_items ON pesanan_items.pesanan_id = pesanan.id
JOIN produk ON pesanan_items.produk_id = produk.id
JOIN jenis_produk ON produk.jenis_produk_id = jenis_produk.id;

SELECT * FROM pesanan_pelanggan_produk_jenisproduk_pesananitems;


---- Soal 5.2 ----
-- Mulai transaksi
START TRANSACTION;

-- Insert data produk sebanyak 3 record
INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id) VALUES
  ('MM01', 'Meja Makan', 500000, 750000, 20, 5, 2),
  ('M007', 'Monitor LG', 2000000, 3000000, 15, 4, 6),
  ('SK03', 'Samyang Keju', 15000, 20000, 25, 6, 3);

-- Update data stok salah satu produk
UPDATE produk SET stok = stok - 5 WHERE id = 7;

-- Buat savepoint
SAVEPOINT delete_pembayaran;

-- Hapus salah satu data pembayaran
DELETE FROM pembayaran WHERE id = 123;

-- Kembali ke savepoint
ROLLBACK TO delete_pembayaran;

-- Update data iuran salah satu kartu
UPDATE kartu SET iuran = 49500 WHERE id = 3;

-- Akhiri transaksi dengan commit
COMMIT;
