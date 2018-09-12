-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2018 pada 16.29
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `histyle`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `idOrder` int(11) NOT NULL,
  `idCustomer` int(11) NOT NULL,
  `tanggal_order` date NOT NULL,
  `idEkspedisi` int(11) NOT NULL,
  `status_order` tinyint(1) NOT NULL,
  `status_bayar` tinyint(1) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `no_resi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `detail` text NOT NULL,
  `idSize` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idProduk`, `nama`, `id_brand`, `idCategory`, `detail`, `idSize`, `price`, `stok`, `gambar`) VALUES
(40, 'A Future Planner', 1, 1, 'Tosca Blue : dobby rayon. \r\nBrown : polycotton. \r\nPlaid Denim : cotton', 1, 765000, 10, 'A Future Planner bgg.jpg'),
(41, 'The Warm Tone', 1, 1, 'Beige : Dobby Polycotton. \r\nCream Pink : Poplin. \r\nBrown : Poplin Cotton', 2, 400000, 8, 'The Warm Tone bg.jpg'),
(42, 'Identifiable Beauty', 1, 1, 'Dusty Peach : Dobby Cotton.\r\nBlack : Dobby Rayon.\r\nTosca Blue : Dobby Cotton.\r\nBlack Flower : Cotton.', 3, 1104000, 9, 'Identifiable Beauty bg.jpg'),
(43, 'Smooth Creamy Cake', 3, 1, 'Bold Mustard : Shirt (Inner)\r\nCream : Cotton (Outer)', 3, 315000, 4, 'Dannis.jpg'),
(44, 'Ibtissam In Blue', 1, 1, 'Hydro Blue : Dobby Polycotton.\r\nMaroon Iron : Dobby Cotton.\r\nAbstract : Satin Cotton.\r\nBrown : Dobby Satin.', 2, 1143000, 6, 'Ibtissam In Blue bg.jpg'),
(45, 'The Art of Luxury', 2, 1, 'Brown : Dobby Polycotton.\r\nAbstract Maroon : Cotton.', 4, 512000, 2, 'The Art of Luxury.jpg'),
(46, 'Blooming Square Matrix', 1, 1, 'Electric : Cotton', 5, 765000, 2, 'Blooming Square Matrix.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `idEkspedisi` (`idEkspedisi`) USING BTREE,
  ADD KEY `idCustomer` (`idCustomer`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `id_brand` (`id_brand`),
  ADD KEY `idCategory` (`idCategory`),
  ADD KEY `idSize` (`idSize`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_customer` FOREIGN KEY (`idCustomer`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_order_eks` FOREIGN KEY (`idEkspedisi`) REFERENCES `ekpedisi` (`idEkspedisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_brand_produk` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_category_produk` FOREIGN KEY (`idCategory`) REFERENCES `category` (`idCategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_size_produk` FOREIGN KEY (`idSize`) REFERENCES `size` (`idSize`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
