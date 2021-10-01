CREATE TABLE transaksi (
Id INT(8) AUTO_INCREMENT PRIMARY KEY,
TanggalOrder datetime,
StatusPelunasan VARCHAR(30),
TanggalPembayaran datetime);

INSERT INTO transaksi (TanggalOrder, StatusPelunasan, TanggalPembayaran)
VALUES ('2021-10-1 11:00:00', 'Belum Lunas', '2021-10-5 09:00:00');