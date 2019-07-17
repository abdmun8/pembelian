-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2019 pada 18.02
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembelian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama_akun` varchar(45) NOT NULL,
  `jenis_akun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_akun`, `jenis_akun`) VALUES
(3, 'asfdsfds', 'gdhghj'),
(4, 'Anda', 'sksksksk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_sales`
--

CREATE TABLE `barang_sales` (
  `id_barang` int(11) NOT NULL,
  `kd_barang` varchar(11) NOT NULL,
  `nm_brg` varchar(30) NOT NULL,
  `jns_brg` varchar(30) NOT NULL,
  `unit_barang` varchar(20) NOT NULL,
  `jml_brg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_sales`
--

INSERT INTO `barang_sales` (`id_barang`, `kd_barang`, `nm_brg`, `jns_brg`, `unit_barang`, `jml_brg`) VALUES
(5, 'BR002', 'Kulkas', 'Kl002', '34', 900),
(6, 'BR003', 'Plastik', 'Kl03', '90', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suplier`
--

CREATE TABLE `data_suplier` (
  `id` int(11) NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(50) NOT NULL,
  `alamat` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `tanggal_jurnal` date NOT NULL,
  `no_beli` int(11) NOT NULL,
  `no_akun` int(11) NOT NULL,
  `debet` int(20) NOT NULL,
  `kredit` int(20) NOT NULL,
  `referensi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `tanggal_jurnal`, `no_beli`, `no_akun`, `debet`, `kredit`, `referensi`) VALUES
(1, '2019-06-03', 991, 881, 100000, 50000, 'ssadsd'),
(2, '2019-06-04', 992, 882, 100000, 300000, 'dssdsdf'),
(4, '0000-00-00', 454, 343, 55000, 666000, 'werwre'),
(5, '2019-07-04', 55, 444, 5000000, 7000000, 'rtku'),
(6, '2019-07-02', 55, 66, 660000, 77000, 'tu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `kota_id` int(10) NOT NULL,
  `kota` varchar(150) NOT NULL,
  `tarif` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`kota_id`, `kota`, `tarif`, `status`) VALUES
(1, 'Jakarta', 6000, 'on'),
(2, 'Bandung', 8000, 'on'),
(3, 'Surabaya', 11000, 'on'),
(4, 'Semarang', 9000, 'on'),
(5, '', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(11) NOT NULL,
  `no_penba` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `no_penba`, `tanggal`, `jumlah`) VALUES
(1, 'PB001', '2019-06-05', 5000000),
(2, 'PB002', '2019-06-05', 200000),
(3, 'PB002', '0000-00-00', 250000),
(4, 'PB004', '2019-07-03', 900000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penba`
--

CREATE TABLE `penba` (
  `id_penba` int(11) NOT NULL,
  `no_penba` varchar(11) NOT NULL,
  `tgl_penba` date NOT NULL,
  `jml_penba` int(20) NOT NULL,
  `no_po` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penba`
--

INSERT INTO `penba` (`id_penba`, `no_penba`, `tgl_penba`, `jml_penba`, `no_po`) VALUES
(1, 'Pn002', '2019-06-10', 0, 2147483647),
(5, '55', '2019-06-30', 0, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peng_kas`
--

CREATE TABLE `peng_kas` (
  `id_pengkas` int(11) NOT NULL,
  `tgl_pengkas` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `jml_pengkas` int(30) NOT NULL,
  `no_pembelian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peng_kas`
--

INSERT INTO `peng_kas` (`id_pengkas`, `tgl_pengkas`, `keterangan`, `jml_pengkas`, `no_pembelian`) VALUES
(2, '2019-06-16', 'JJJ', 540000, 'pl077654'),
(3, '2019-06-18', 'KKK', 660000, '55621323'),
(4, '2019-07-01', 'fgfg', 544000, 'ty8899'),
(5, '2019-07-04', 'Lalalal', 20000000, 'Pk003'),
(6, '2019-07-03', 'PPP', 9000000, '90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(10) NOT NULL,
  `kota_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`pesanan_id`, `kota_id`, `user_id`, `nama_penerima`, `nomor_telepon`, `alamat`, `tanggal_pemesanan`, `status`) VALUES
(2, 2, 2, 'Jeong', '00000', 'Jl. XXXXX', '2016-10-08 06:11:24', 1),
(3, 3, 6, 'Lee', '0000', 'Jl. aaaa', '2016-10-08 10:48:45', 2),
(4, 1, 6, 'Lee', '0000', 'Jl. AAA', '2016-10-08 12:01:55', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pnerima_barang`
--

CREATE TABLE `pnerima_barang` (
  `id_pnerima_brg` int(11) NOT NULL,
  `no_po` int(11) NOT NULL,
  `tgl_pnerima` date NOT NULL,
  `jml_barang` int(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_po` int(11) NOT NULL,
  `no_po` varchar(22) NOT NULL,
  `tgl_po` date NOT NULL,
  `no_pr` varchar(20) NOT NULL,
  `id_suplier` varchar(20) NOT NULL,
  `expecting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `purchase_order`
--

INSERT INTO `purchase_order` (`id_po`, `no_po`, `tgl_po`, `no_pr`, `id_suplier`, `expecting_date`) VALUES
(1, 'PO001', '2019-07-01', 'PR001', 'Su001', '2019-07-09'),
(3, 'PO006', '2019-07-09', 'PR006', 'SU006', '2019-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `alamat`) VALUES
(1, 'PT. Maju bareng', 'Jl. Kampung maju tapi nggak mundur'),
(2, 'Pt. Selarangan Indonesia', 'Jl. Kenangan selama itu'),
(4, 'PT. Kenangan Pahit', 'Jl. Ngopi dulu lahh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(160) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `level`, `nama`, `email`, `phone`, `password`, `status`) VALUES
(2, 'warehouse', 'warehouse', 'warehouse', '08889999', '372d30dd2849813ef674855253900679', 'on'),
(6, 'purchase', 'purchase', 'purchase', '088888', '85dbdb21fe502c4d7a1e81bca0aa396d', 'on'),
(8, 'finance', 'Acc Finance', 'finance', '0821888888', '57336afd1f4b40dfd9f5731e35302fe5', 'on'),
(9, 'direktur', 'direktur', 'direktur', '35457890087', '4fbfd324f5ffcdff5dbf6f019b02eca8', 'on');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `barang_sales`
--
ALTER TABLE `barang_sales`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `data_suplier`
--
ALTER TABLE `data_suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indeks untuk tabel `penba`
--
ALTER TABLE `penba`
  ADD PRIMARY KEY (`id_penba`);

--
-- Indeks untuk tabel `peng_kas`
--
ALTER TABLE `peng_kas`
  ADD PRIMARY KEY (`id_pengkas`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `kota_id` (`kota_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pnerima_barang`
--
ALTER TABLE `pnerima_barang`
  ADD PRIMARY KEY (`id_pnerima_brg`);

--
-- Indeks untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_po`);

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `barang_sales`
--
ALTER TABLE `barang_sales`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_suplier`
--
ALTER TABLE `data_suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penba`
--
ALTER TABLE `penba`
  MODIFY `id_penba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `peng_kas`
--
ALTER TABLE `peng_kas`
  MODIFY `id_pengkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `pesanan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pnerima_barang`
--
ALTER TABLE `pnerima_barang`
  MODIFY `id_pnerima_brg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id_po` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
