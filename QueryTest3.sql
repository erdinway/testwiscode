SELECT a.*, b.SubTotal, b.Jumlah
FROM transaksi a, detail_transaksi b
WHERE a.Id = b.IdTransaksi;