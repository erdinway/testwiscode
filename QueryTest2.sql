CREATE TABLE detail_transaksi (
Id INT(8) AUTO_INCREMENT PRIMARY KEY,
IdTransaksi INT(8),
Harga BIGINT,
Jumlah INT(8),
SubTotal BIGINT);

INSERT INTO detail_transaksi (IdTransaksi, Harga, Jumlah, SubTotal)
VALUES ('1', 20000000, 10, 200000000);