TYPE=VIEW
query=select `a`.`id_anggota` AS `id_anggota`,`a`.`nama` AS `nama`,`b`.`kd_transaksi` AS `kd_transaksi`,`b`.`tanggal_pinjam` AS `tanggal_pinjam`,`b`.`tanggal_kembali` AS `tanggal_kembali`,`c`.`kd_buku` AS `kd_buku`,`c`.`judul` AS `judul` from ((`latihan_ci`.`anggota` `a` join `latihan_ci`.`pinjam` `b` on((`a`.`id_anggota` = `b`.`id_anggota`))) join `latihan_ci`.`buku` `c` on((`b`.`kd_buku` = `c`.`kd_buku`)))
md5=916cecc2974b214ab2ba26a518668c74
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2018-11-27 11:23:28
create-version=2
source=SELECT a.id_anggota,a.nama,b.kd_transaksi,b.tanggal_pinjam,b.tanggal_kembali,c.kd_buku,c.judul FROM anggota a JOIN pinjam b ON a.id_anggota=b.id_anggota JOIN buku c ON b.kd_buku=c.kd_buku
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `a`.`id_anggota` AS `id_anggota`,`a`.`nama` AS `nama`,`b`.`kd_transaksi` AS `kd_transaksi`,`b`.`tanggal_pinjam` AS `tanggal_pinjam`,`b`.`tanggal_kembali` AS `tanggal_kembali`,`c`.`kd_buku` AS `kd_buku`,`c`.`judul` AS `judul` from ((`latihan_ci`.`anggota` `a` join `latihan_ci`.`pinjam` `b` on((`a`.`id_anggota` = `b`.`id_anggota`))) join `latihan_ci`.`buku` `c` on((`b`.`kd_buku` = `c`.`kd_buku`)))
mariadb-version=100135
