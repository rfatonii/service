/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : servicereport

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 15/09/2021 14:03:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_hak_akses
-- ----------------------------
DROP TABLE IF EXISTS `tbl_hak_akses`;
CREATE TABLE `tbl_hak_akses`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 85 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_hak_akses
-- ----------------------------
INSERT INTO `tbl_hak_akses` VALUES (1, 1, 1);
INSERT INTO `tbl_hak_akses` VALUES (2, 1, 2);
INSERT INTO `tbl_hak_akses` VALUES (3, 1, 3);
INSERT INTO `tbl_hak_akses` VALUES (5, 1, 10);
INSERT INTO `tbl_hak_akses` VALUES (6, 1, 11);
INSERT INTO `tbl_hak_akses` VALUES (7, 1, 12);
INSERT INTO `tbl_hak_akses` VALUES (9, 1, 14);
INSERT INTO `tbl_hak_akses` VALUES (10, 1, 15);
INSERT INTO `tbl_hak_akses` VALUES (11, 1, 16);
INSERT INTO `tbl_hak_akses` VALUES (12, 1, 17);
INSERT INTO `tbl_hak_akses` VALUES (13, 1, 18);
INSERT INTO `tbl_hak_akses` VALUES (14, 1, 19);
INSERT INTO `tbl_hak_akses` VALUES (15, 1, 20);
INSERT INTO `tbl_hak_akses` VALUES (16, 1, 21);
INSERT INTO `tbl_hak_akses` VALUES (17, 1, 22);
INSERT INTO `tbl_hak_akses` VALUES (18, 1, 23);
INSERT INTO `tbl_hak_akses` VALUES (19, 1, 25);
INSERT INTO `tbl_hak_akses` VALUES (20, 1, 24);
INSERT INTO `tbl_hak_akses` VALUES (21, 1, 27);
INSERT INTO `tbl_hak_akses` VALUES (22, 1, 28);
INSERT INTO `tbl_hak_akses` VALUES (56, 3, 10);
INSERT INTO `tbl_hak_akses` VALUES (57, 3, 30);
INSERT INTO `tbl_hak_akses` VALUES (58, 3, 31);
INSERT INTO `tbl_hak_akses` VALUES (59, 3, 37);
INSERT INTO `tbl_hak_akses` VALUES (60, 3, 34);
INSERT INTO `tbl_hak_akses` VALUES (61, 3, 35);
INSERT INTO `tbl_hak_akses` VALUES (62, 3, 36);
INSERT INTO `tbl_hak_akses` VALUES (66, 1, 38);
INSERT INTO `tbl_hak_akses` VALUES (67, 1, 43);
INSERT INTO `tbl_hak_akses` VALUES (68, 1, 41);
INSERT INTO `tbl_hak_akses` VALUES (70, 1, 42);
INSERT INTO `tbl_hak_akses` VALUES (71, 1, 44);
INSERT INTO `tbl_hak_akses` VALUES (72, 1, 45);
INSERT INTO `tbl_hak_akses` VALUES (74, 1, 35);
INSERT INTO `tbl_hak_akses` VALUES (75, 1, 36);
INSERT INTO `tbl_hak_akses` VALUES (77, 1, 9);
INSERT INTO `tbl_hak_akses` VALUES (79, 1, 478);
INSERT INTO `tbl_hak_akses` VALUES (81, 1, 47);

-- ----------------------------
-- Table structure for tbl_hasilpengecekan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_hasilpengecekan`;
CREATE TABLE `tbl_hasilpengecekan`  (
  `kode_hasilpengecekan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hasilpengecekan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_hasilpengecekan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_hasilpengecekan
-- ----------------------------
INSERT INTO `tbl_hasilpengecekan` VALUES (1, '--Pilih--');
INSERT INTO `tbl_hasilpengecekan` VALUES (2, 'Pekerjaan dapat dilakukan oleh IT');
INSERT INTO `tbl_hasilpengecekan` VALUES (3, 'Pekerjaan dilakukan oleh Vendor');

-- ----------------------------
-- Table structure for tbl_hp
-- ----------------------------
DROP TABLE IF EXISTS `tbl_hp`;
CREATE TABLE `tbl_hp`  (
  `kode_hp` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_hp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_hp
-- ----------------------------
INSERT INTO `tbl_hp` VALUES (2, 'xiaomi');
INSERT INTO `tbl_hp` VALUES (3, 'new');
INSERT INTO `tbl_hp` VALUES (4, 'samsung');

-- ----------------------------
-- Table structure for tbl_jenisinventaris
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jenisinventaris`;
CREATE TABLE `tbl_jenisinventaris`  (
  `kode_jenisinventaris` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenisinventaris` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_jenisinventaris`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_jenisinventaris
-- ----------------------------
INSERT INTO `tbl_jenisinventaris` VALUES (1, '--Pilih Inventaris--');
INSERT INTO `tbl_jenisinventaris` VALUES (2, 'Hardware - Notebook');
INSERT INTO `tbl_jenisinventaris` VALUES (3, 'Hardware - Laptop');
INSERT INTO `tbl_jenisinventaris` VALUES (4, 'Hardware - CPU');
INSERT INTO `tbl_jenisinventaris` VALUES (5, 'Hardware - Monitor');
INSERT INTO `tbl_jenisinventaris` VALUES (6, 'Hardware - Printer');
INSERT INTO `tbl_jenisinventaris` VALUES (7, 'Hardware - Komputer');
INSERT INTO `tbl_jenisinventaris` VALUES (8, 'Jaringan/Network');
INSERT INTO `tbl_jenisinventaris` VALUES (9, 'Software');

-- ----------------------------
-- Table structure for tbl_jenispekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jenispekerjaan`;
CREATE TABLE `tbl_jenispekerjaan`  (
  `kode_jenispekerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenispekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_jenispekerjaan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_jenispekerjaan
-- ----------------------------
INSERT INTO `tbl_jenispekerjaan` VALUES (1, '--Pilih--');
INSERT INTO `tbl_jenispekerjaan` VALUES (2, 'Pemeliharaan');
INSERT INTO `tbl_jenispekerjaan` VALUES (3, 'Perbaikan');
INSERT INTO `tbl_jenispekerjaan` VALUES (4, 'Pengecekan');
INSERT INTO `tbl_jenispekerjaan` VALUES (5, 'Instalasi');

-- ----------------------------
-- Table structure for tbl_jenispekerjaan_simrs
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jenispekerjaan_simrs`;
CREATE TABLE `tbl_jenispekerjaan_simrs`  (
  `kode_jp_simrs` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jp_simrs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_jp_simrs`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_jenispekerjaan_simrs
-- ----------------------------
INSERT INTO `tbl_jenispekerjaan_simrs` VALUES (1, '--Pilih--');
INSERT INTO `tbl_jenispekerjaan_simrs` VALUES (2, 'Instalasi Aplikasi');
INSERT INTO `tbl_jenispekerjaan_simrs` VALUES (3, 'Perbaikan Aplikasi');
INSERT INTO `tbl_jenispekerjaan_simrs` VALUES (4, 'Pengecekan Aplikasi');
INSERT INTO `tbl_jenispekerjaan_simrs` VALUES (5, 'Pembuatan / Custom Aplikasi');

-- ----------------------------
-- Table structure for tbl_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kategori`;
CREATE TABLE `tbl_kategori`  (
  `kode_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kategori
-- ----------------------------
INSERT INTO `tbl_kategori` VALUES (1, '--Pilih--');
INSERT INTO `tbl_kategori` VALUES (2, 'Ringan');
INSERT INTO `tbl_kategori` VALUES (3, 'Sedang');
INSERT INTO `tbl_kategori` VALUES (4, 'Berat');

-- ----------------------------
-- Table structure for tbl_keluhan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_keluhan`;
CREATE TABLE `tbl_keluhan`  (
  `kode_keluhan` int(20) NOT NULL AUTO_INCREMENT,
  `id_keluhan` int(20) NOT NULL,
  `tanggal_keluhan` datetime(0) NULL DEFAULT NULL,
  `kode_pelapor` int(20) NULL DEFAULT NULL,
  `kode_status` int(20) NULL DEFAULT NULL,
  `kode_operator` int(20) NULL DEFAULT NULL,
  `tanggal_selesai` datetime(0) NULL DEFAULT NULL,
  `nama_ruangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_jenisinventaris` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lokasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `unit_kerja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `merk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_jenispekerjaan` int(20) NULL DEFAULT NULL,
  `uraian` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `kode_kategori` int(20) NULL DEFAULT NULL,
  `kode_penyebabmasalah` int(20) NULL DEFAULT NULL,
  `kode_hasilpengecekan` int(20) NULL DEFAULT NULL,
  `kebutuhan_material` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tindaklanjut` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hasil_kesimpulan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_tingkatperbaikan` int(20) NULL DEFAULT NULL,
  `tanggal_respon` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`kode_keluhan`, `id_keluhan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 69 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_keluhan
-- ----------------------------
INSERT INTO `tbl_keluhan` VALUES (51, 1667896609, '2021-07-22 13:35:00', 68, 2, 4, NULL, 'Keuangan', '6', 'Lantai 5', 'Akutansi', 'Canon G4010', 3, 'Catridge dan bantalan printernya rusak/penuh', 4, 8, 3, NULL, NULL, NULL, 3, '2021-08-24 10:29:59');
INSERT INTO `tbl_keluhan` VALUES (52, 1667897054, '2021-07-22 15:43:00', 68, 2, 4, NULL, 'Keuangan', '6', 'Lantai 5', 'Akutansi', 'Epson L3110', 3, 'Head/Cartidge Rusak', 4, 2, 3, NULL, NULL, NULL, 3, '2021-08-24 10:29:20');
INSERT INTO `tbl_keluhan` VALUES (53, 1667897174, '2021-08-12 10:00:00', 42, 3, 4, '2021-08-24 10:36:54', 'R. Marketing', '4', 'Lantai 5', 'Marketing', 'Power Logic Modena X2200', 3, 'Komputer mati tiba-tiba lebih dari 3x dan saat ini tidak bisa difungsikan', 3, 8, 2, '-', 'Membersihkan CPU, membersihkan processor, memberikan pendinginan/pasta di processor. Maintenance Komputer : Defrag dan Cleaning data', 'Komputer perlu adanya maintenance / perbaikan', 3, '2021-08-24 10:36:54');
INSERT INTO `tbl_keluhan` VALUES (61, 1686188535, '2021-08-28 08:41:21', 60, 3, 3, '2021-08-30 12:30:55', 'Kuangan', '8', 'Lantai 5', 'Akutansi', '-', 4, 'Jaringan UIN Off, Permintaan ganti jaringan RS', 2, 9, 2, 'Kabel LAN RJ45', 'Pergantian kabel jaringan LAN', 'Jaringan Internet UIN Offline diubah ke Jaringan local RS', 2, '2021-08-30 10:05:37');
INSERT INTO `tbl_keluhan` VALUES (62, 1686188674, '2021-08-30 08:43:41', 1, 3, 4, '2021-08-30 15:48:51', 'Duty', '7', 'Lantai 2', 'Duty', '-', 5, 'Permintaan Komputer untuk Duty', 3, 9, 2, 'CPU, Monitor, Keyboard, Mouse', 'Menyediakan kebutuhan komputer, dan melakukan instalasi komputer mengunakan windows 7', 'Belum adanya komputer untuk duty, it menyiapkan komputer dan melakukan instalasi komputer', 3, '2021-08-30 10:44:37');
INSERT INTO `tbl_keluhan` VALUES (63, 1686189263, '2021-08-27 08:10:39', 1, 3, 3, '2021-08-28 10:15:20', 'Poli Anak', '7', 'Lantai 3', 'Poli', '-', 5, 'Permintaan komputer baru untuk dokter menjalankan fitur Telemedicine', 3, 9, 2, 'CPU, Monitor, Keyboard, Mouse', 'Menyediakan kebutuhan komputer, dan melakukan instalasi komputer mengunakan windows 7', 'Belum adanya komputer untuk Poli Anak, IT menyiapkan komputer dan melakukan instalasi komputer', 3, '2021-08-27 10:54:35');
INSERT INTO `tbl_keluhan` VALUES (64, 1615251116, '2021-08-28 07:50:45', 1, 3, 3, '2021-09-28 12:54:22', 'Poli Anak 2', '7', 'Lantai 3', 'Poli', '-', 5, 'Permintaan komputer baru untuk dokter menjalankan fitur Telemedicine di Poli Anak', 3, 9, 2, 'CPU, Monitor, Keyboard, Mouse', 'Menyediakan kebutuhan komputer, dan melakukan instalasi komputer mengunakan windows 7', 'Belum adanya komputer untuk Poli Anak 2, IT menyiapkan komputer dan melakukan instalasi komputer', 3, '2021-08-28 10:15:18');
INSERT INTO `tbl_keluhan` VALUES (65, 1615251683, '2021-08-30 07:57:54', 1, 3, 4, '2021-09-02 08:07:41', 'Poli Paru', '7', 'Lantai 2', 'Poli', '-', 5, 'Permintaan komputer baru untuk dokter menjalankan fitur Telemedicine Poli Paru', 3, 9, 2, 'CPU, Monitor, Keyboard, Mouse', 'Menyediakan kebutuhan komputer, dan melakukan instalasi komputer mengunakan windows 7', 'Belum adanya komputer untuk Poli Paru, IT menyiapkan komputer dan melakukan instalasi komputer', 3, '2021-08-30 08:07:14');
INSERT INTO `tbl_keluhan` VALUES (66, 1615251763, '2021-09-01 08:01:55', 1, 3, 4, '2021-09-01 15:04:47', 'Poli Jantung', '7', 'Lantai 2', 'Poli', '-', 5, 'Permintaan komputer baru untuk dokter menjalankan fitur Telemedicine Poli Jantung', 3, 9, 2, 'CPU, Monitor, Keyboard, Mouse', 'Menyediakan kebutuhan komputer, dan melakukan instalasi komputer mengunakan windows 7', 'Belum adanya komputer untuk Poli Jantung, IT menyiapkan komputer dan melakukan instalasi komputer', 3, '2021-09-01 10:03:53');
INSERT INTO `tbl_keluhan` VALUES (67, 1625794835, '2021-09-03 08:39:37', 1, 3, 3, '2021-09-04 15:30:00', 'Poli Umum', '7', 'Lantai 2', 'Poli', '-', 5, 'Permintaan komputer baru untuk dokter menjalankan fitur Telemedicine Poli Umum', 3, 9, 2, 'CPU, Monitor, Keyboard, Mouse', 'Menyediakan kebutuhan komputer, dan melakukan instalasi komputer mengunakan windows 7', 'Belum adanya komputer untuk Poli Umum, IT menyiapkan komputer dan melakukan instalasi komputer', 3, '2021-09-04 08:44:11');
INSERT INTO `tbl_keluhan` VALUES (68, 1625794874, '2021-09-02 08:40:40', 1, 3, 3, '2021-09-03 14:43:17', 'Poli Syaraf', '7', 'Lantai 2', 'Poli', '-', 5, 'Permintaan komputer baru untuk dokter menjalankan fitur Telemedicine Poli Syaraf', 3, 9, 2, 'CPU, Monitor, Keyboard, Mouse', 'Menyediakan kebutuhan komputer, dan melakukan instalasi komputer mengunakan windows 7', 'Belum adanya komputer untuk Poli Syaraf, IT menyiapkan komputer dan melakukan instalasi komputer', 3, '2021-09-02 12:42:58');

-- ----------------------------
-- Table structure for tbl_keluhansimrs
-- ----------------------------
DROP TABLE IF EXISTS `tbl_keluhansimrs`;
CREATE TABLE `tbl_keluhansimrs`  (
  `kode_keluhansimrs` int(11) NOT NULL AUTO_INCREMENT,
  `id_keluhansimrs` int(25) NULL DEFAULT NULL,
  `tanggal_keluhansimrs` datetime(0) NULL DEFAULT NULL,
  `kode_pelapor` int(20) NULL DEFAULT NULL,
  `unit_kerja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kode_tingkatperbaikan` int(20) NULL DEFAULT NULL,
  `kode_kategori` int(20) NULL DEFAULT NULL,
  `kode_jp_simrs` int(20) NULL DEFAULT NULL,
  `kode_hasilpengecekan` int(20) NULL DEFAULT NULL,
  `kode_operator` int(20) NULL DEFAULT NULL,
  `kode_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `solusi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_selesai` datetime(0) NULL DEFAULT NULL,
  `tanggal_respon` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`kode_keluhansimrs`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_keluhansimrs
-- ----------------------------
INSERT INTO `tbl_keluhansimrs` VALUES (37, 1680927165, '2021-08-28 11:11:12', 68, 'Akuntansi', 'untuk penarikan data rincian piutang pasien tindakan masih gabung dengan konsul mohon bisa di pisahkan untuk keperluan penagihan, dan belum ada poli asal, mohon di tampilkan', 3, NULL, 5, NULL, NULL, '4', NULL, NULL, NULL);
INSERT INTO `tbl_keluhansimrs` VALUES (38, 1628472325, '2021-09-06 08:24:11', 1, 'Apotek', 'Permintaan penambahan JAM saat print di Report Lembar Pemberian Obat', 3, 3, 5, 2, 3, '3', 'Sudah dilakukan perbaikan Report, untuk penambahan jam pada saat di cetak Lembar Pemberian Obat', '2021-09-07 15:26:46', '2021-09-07 10:26:24');
INSERT INTO `tbl_keluhansimrs` VALUES (39, 1633743139, '2021-09-09 08:27:56', 1, 'Laboratorium', 'Permintaan perbaikan data ubah nilai hasil LAB agar bisa sesuai group atau urutan pada awal inputan di Data pemeriksaan laboratorium pk', 3, 3, 5, 2, 4, '3', 'Sudah dilakukan perbaikan source code data ubah nilai hasil pemeriksaan laboratorium pk, data sudah sesuai group atau urutan.', '2021-09-10 08:34:12', '2021-09-09 10:32:23');
INSERT INTO `tbl_keluhansimrs` VALUES (40, 1641695856, '2021-09-13 09:36:43', 307, 'akuntansi', 'Untuk narik kolom j (akuntansi) untuk narik rincian piutang, detail tindakan,pembayaram ralan dan ranap', 3, 3, 2, 2, 3, '3', 'Sudah dilakukan penginstalan belsoft java dan instal Aplikasi SIMRS Khanza', '2021-09-13 16:45:13', '2021-09-13 10:55:38');
INSERT INTO `tbl_keluhansimrs` VALUES (41, 1641722894, '2021-09-13 17:05:27', 68, 'Akuntansi', 'Untuk penarikan  report pembayaran Ralan dan pembayaran Ranap mohon di tambahkan kolom user kasir, jam transaksi, jenis bayar (cash , debit mandiri atau BNI) dan cara bayar (Asuransi, Karyawan, UIN, dll)', 3, NULL, 3, NULL, NULL, '4', NULL, NULL, NULL);
INSERT INTO `tbl_keluhansimrs` VALUES (42, 1641722990, '2021-09-13 17:08:25', 68, 'Akuntansi', 'Untuk report JM Dokter tindakan USG tidak masuk kedalam JM Dokter tetapi sudah dicek terbadpat transaksi USG di pelayanan, mohon info nya masuk manakah USG tersebut DI JM dokter', 3, NULL, 3, NULL, NULL, '4', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tbl_menu
-- ----------------------------
DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE `tbl_menu`  (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `icon` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `is_aktif` enum('y','n') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'y=yes,n=no',
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 483 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_menu
-- ----------------------------
INSERT INTO `tbl_menu` VALUES (1, 'KELOLA MENU', 'kelolamenu', 'fa fa-server', 47, 'y');
INSERT INTO `tbl_menu` VALUES (2, 'DATA USER', 'user', 'fa fa-user-o', 47, 'y');
INSERT INTO `tbl_menu` VALUES (3, 'HAK AKSES', 'userlevel', 'fa fa-unlock', 47, 'y');
INSERT INTO `tbl_menu` VALUES (9, 'Contoh Form', 'welcome/form', 'fa fa-id-card', 0, 'y');
INSERT INTO `tbl_menu` VALUES (10, 'BERANDA', 'welcome', 'fa fa-dashboard', 0, 'y');
INSERT INTO `tbl_menu` VALUES (11, 'MASTER DATA', '#', 'fa fa-database', 0, 'y');
INSERT INTO `tbl_menu` VALUES (12, 'KELOLA KELUHAN SERVICE', '#', 'fa fa-database', 0, 'y');
INSERT INTO `tbl_menu` VALUES (14, 'TAMBAH DATA KELUHAN', 'keluhan/create', 'fa fa-plus', 12, 'y');
INSERT INTO `tbl_menu` VALUES (15, 'DATA KELUHAN (DIAJUKAN)', 'keluhan', 'fa fa-file-text-o', 12, 'y');
INSERT INTO `tbl_menu` VALUES (16, 'DATA KELUHAN (PROSES)', 'keluhan/proses', 'fa fa-retweet', 12, 'y');
INSERT INTO `tbl_menu` VALUES (17, 'DATA KELUHAN (SELESAI)', 'keluhan/selesai', 'fa fa-check-square-o', 12, 'y');
INSERT INTO `tbl_menu` VALUES (19, 'HASIL PENGECEKAN', 'hasilpengecekan', 'fa fa-plus', 11, 'y');
INSERT INTO `tbl_menu` VALUES (20, 'JENIS INVENTARIS', 'jenisinventaris', 'fa fa-plus', 11, 'y');
INSERT INTO `tbl_menu` VALUES (21, 'JENIS PEKERJAAN', 'jenispekerjaan', 'fa fa-plus', 11, 'y');
INSERT INTO `tbl_menu` VALUES (22, 'KATEGORI', 'kategori', 'fa fa-plus', 11, 'y');
INSERT INTO `tbl_menu` VALUES (23, 'OPERATOR', 'operator', 'fa fa-user-o', 11, 'y');
INSERT INTO `tbl_menu` VALUES (24, 'PENYEBAB PERMASALAHAN', 'penyebabmasalah', 'fa fa-plus', 11, 'y');
INSERT INTO `tbl_menu` VALUES (25, 'TINGKAT PERBAIKAN', 'tingkatperbaikan', 'fa fa-plus', 11, 'y');
INSERT INTO `tbl_menu` VALUES (27, 'DATA HP', 'hp', 'fa fa-plus', 0, 'n');
INSERT INTO `tbl_menu` VALUES (28, 'STATUS', 'status', 'fa fa-plus', 11, 'y');
INSERT INTO `tbl_menu` VALUES (30, 'SERVICE REPORT', '#', 'fa fa-database', 0, 'y');
INSERT INTO `tbl_menu` VALUES (31, 'TAMBAH SERVICE REPORT', 'keluhanuser/create', 'fa fa-plus', 30, 'y');
INSERT INTO `tbl_menu` VALUES (34, 'SIMRS KHANZA (USER)', '#', 'fa fa-database', 0, 'y');
INSERT INTO `tbl_menu` VALUES (35, 'TAMBAH KELUHAN SIM RS', 'keluhansimrs/create', 'fa fa-plus', 34, 'y');
INSERT INTO `tbl_menu` VALUES (36, 'DATA KELUHAN SIM RS', 'keluhansimrs', 'fa fa-file-text-o', 34, 'y');
INSERT INTO `tbl_menu` VALUES (37, 'DATA SERVICE REPORT', 'keluhanuser', 'fa fa-file-text-o', 30, 'y');
INSERT INTO `tbl_menu` VALUES (38, 'JENIS PEKERJAAN SIM RS', 'jenispekerjaan_simrs', 'fa fa-plus', 11, 'y');
INSERT INTO `tbl_menu` VALUES (41, 'KELOLA KELUHAN SIMRS', '#', 'fa fa-database', 0, 'y');
INSERT INTO `tbl_menu` VALUES (42, 'TAMBAH DATA KELUHAN', 'keluhansimrs/create', 'fa fa-plus', 41, 'y');
INSERT INTO `tbl_menu` VALUES (43, 'KELUHAN SIMRS (DIAJUKAN)', 'keluhansimrs', 'fa fa-file-text-o', 41, 'y');
INSERT INTO `tbl_menu` VALUES (44, 'KELUHAN SIMRS (PROSES)', 'keluhansimrs/proses', 'fa fa-retweet', 41, 'y');
INSERT INTO `tbl_menu` VALUES (45, 'KELUHAN SIM RS (SELESAI)', 'keluhansimrs/selesai', 'fa fa-check-square-o', 41, 'y');
INSERT INTO `tbl_menu` VALUES (46, 'TINDAK LANJUT', '#', 'fa fa-database', 0, 'y');
INSERT INTO `tbl_menu` VALUES (47, 'PRIVILAGE', '#', 'fa fa-lock', 0, 'y');
INSERT INTO `tbl_menu` VALUES (478, 'TINDAKAN SERVICE REPORT', 'keluhan/tindakankeluhan', 'fa fa-file-text-o', 46, 'y');
INSERT INTO `tbl_menu` VALUES (479, 'TINDAKAN SIMRS', '#', 'fa fa-file-text-o', 46, 'y');
INSERT INTO `tbl_menu` VALUES (480, 'LAPORAN', '#', 'fa fa-database', 0, 'y');
INSERT INTO `tbl_menu` VALUES (481, 'LAPORAN SERVICE REPORT', 'laporan/sr', 'fa fa-plus', 480, 'y');
INSERT INTO `tbl_menu` VALUES (482, 'LAPORAN PERBAIKAN SIMRS', 'laporan/keluhansimrs', 'fa fa-plus', 480, 'y');

-- ----------------------------
-- Table structure for tbl_operator
-- ----------------------------
DROP TABLE IF EXISTS `tbl_operator`;
CREATE TABLE `tbl_operator`  (
  `kode_operator` int(11) NOT NULL AUTO_INCREMENT,
  `nama_operator` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_operator`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_operator
-- ----------------------------
INSERT INTO `tbl_operator` VALUES (1, '--Pilih Staf--');
INSERT INTO `tbl_operator` VALUES (2, 'A. Aviv Hanafiah');
INSERT INTO `tbl_operator` VALUES (3, 'Amelia Yahya');
INSERT INTO `tbl_operator` VALUES (4, 'Ari Purnomo');

-- ----------------------------
-- Table structure for tbl_penyebabmasalah
-- ----------------------------
DROP TABLE IF EXISTS `tbl_penyebabmasalah`;
CREATE TABLE `tbl_penyebabmasalah`  (
  `kode_penyebabmasalah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penyebabmasalah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_penyebabmasalah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_penyebabmasalah
-- ----------------------------
INSERT INTO `tbl_penyebabmasalah` VALUES (1, '--Pilih Penyebab--');
INSERT INTO `tbl_penyebabmasalah` VALUES (2, 'Perbaikan sebelumnya yang tidak sempurna');
INSERT INTO `tbl_penyebabmasalah` VALUES (3, 'Kesalahan pengoperasian');
INSERT INTO `tbl_penyebabmasalah` VALUES (4, 'Gangguan listrik');
INSERT INTO `tbl_penyebabmasalah` VALUES (5, 'Ganguan petir');
INSERT INTO `tbl_penyebabmasalah` VALUES (6, 'Gangguan hama (binatang pengerat)');
INSERT INTO `tbl_penyebabmasalah` VALUES (7, 'Lingkungan yang lembab/panas/kotor');
INSERT INTO `tbl_penyebabmasalah` VALUES (8, 'Umur pemakaian');
INSERT INTO `tbl_penyebabmasalah` VALUES (9, 'Lainnya');

-- ----------------------------
-- Table structure for tbl_ruangan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_ruangan`;
CREATE TABLE `tbl_ruangan`  (
  `kode_ruangan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_ruangan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_ruangan
-- ----------------------------
INSERT INTO `tbl_ruangan` VALUES (1, 'Ruang IT');
INSERT INTO `tbl_ruangan` VALUES (2, 'Ruang Keuangan');
INSERT INTO `tbl_ruangan` VALUES (3, 'Ruang SDM');
INSERT INTO `tbl_ruangan` VALUES (4, 'Ruang Direktur');

-- ----------------------------
-- Table structure for tbl_setting
-- ----------------------------
DROP TABLE IF EXISTS `tbl_setting`;
CREATE TABLE `tbl_setting`  (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `nama_setting` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `value` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_setting`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_setting
-- ----------------------------
INSERT INTO `tbl_setting` VALUES (1, 'Tampil Menu', 'ya');

-- ----------------------------
-- Table structure for tbl_status
-- ----------------------------
DROP TABLE IF EXISTS `tbl_status`;
CREATE TABLE `tbl_status`  (
  `kode_status` int(11) NOT NULL AUTO_INCREMENT,
  `nama_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_status
-- ----------------------------
INSERT INTO `tbl_status` VALUES (1, '--Pilih Status--');
INSERT INTO `tbl_status` VALUES (2, 'Diproses');
INSERT INTO `tbl_status` VALUES (3, 'Selesai');
INSERT INTO `tbl_status` VALUES (4, 'Diajukan');

-- ----------------------------
-- Table structure for tbl_tingkatperbaikan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tingkatperbaikan`;
CREATE TABLE `tbl_tingkatperbaikan`  (
  `kode_tingkatperbaikan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tingkatperbaikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_tingkatperbaikan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_tingkatperbaikan
-- ----------------------------
INSERT INTO `tbl_tingkatperbaikan` VALUES (1, '--Pilih--');
INSERT INTO `tbl_tingkatperbaikan` VALUES (2, 'Prioritas Tinggi');
INSERT INTO `tbl_tingkatperbaikan` VALUES (3, 'Prioritas Sedang');
INSERT INTO `tbl_tingkatperbaikan` VALUES (4, 'Prioritas Rendah');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jeniskelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `images` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `is_aktif` enum('y','n') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_users`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 309 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'IT Syarif Hidayatullah', NULL, 'it', NULL, '$2y$04$DXAi86.16S7dQ/f6MJ3CBO3sIPdpaKJThQA/DxIMaNmoYb4Y8BUx.', 'LOGO_RS1.png', 1, 'y');
INSERT INTO `tbl_user` VALUES (2, 'Amelia Yahya', NULL, 'ameliarssh', NULL, '$2y$04$7ystKGF6GTvKgE9cAilgVuTTY.uRUJLxE9A85B8ZjaYRiv6dHIIvW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (3, 'Ari', NULL, 'ari', NULL, '$2y$04$TFg7iwU2ylGPq6xiNv6h8OLJwzZp2OuVGgHJzIH5HUe.JGanMKZAS', 'LOGO_RS1.png', 2, 'y');
INSERT INTO `tbl_user` VALUES (4, 'dr. Amir Fauzi, MARS', 'Pria', 'rs0001', 'Direktur', '$2y$04$iMdUCzO6umidMxOG4aMHq.WHET5Y4YLEttTx1Gn/F1xeQyY1X59W.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (5, 'Titi Mulyani S.Si.Apt, MARS', 'Wanita', 'rs0002', 'Direktur Bidang Adminitra', '$2y$04$eqCy.kWU2X0/C/bviVtz8.0oKhOgt7vVUa/HS8dLqhz/zz1gZcEBO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (6, 'dr. Heppy Christina', 'Wanita', 'rs0003', 'Direktur Bidang Medis dan', '$2y$04$.Awul47fBNhAOnVqvA9oBeFY6YauV1SOXlvEOkfjrTrzLLEqoL1hi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (7, 'Yunita Andalia, S.Sos, M.KM', 'Wanita', 'rs0004', 'Manajer Administrasi', '$2y$04$.ObNF5vC1sRE79IrXf/ItODJwru5VWs.ClqtYurFqYdxtfa.p948i', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (8, 'Hendra Komara', 'Pria', 'rs0005', 'Duty Supervisor ', '$2y$04$QCBzcSGkm/jkdHmO1FZGeOWHiCAQ.LrYV.GsZScqRPhI4H6pso1CS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (9, 'Candra Irawan', 'Pria', 'rs0006', 'Duty Supervisor ', '$2y$04$Mz5m.nybKq1ELXyMrXi0d.Cy48OkFU7FtUX3ouLJ2Lod6s/jpCnoe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (10, 'Endah Sundari', 'Wanita', 'rs0007', 'Kasubbag SDM dan Diklat', '$2y$04$afv0BwT48SC3gPQdXyM7B.vau3lY3wXyOgxTBOXnXYDgpEhG6AzFm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (11, 'Muhammad Zamroni', 'Pria', 'rs0008', 'Staf SDM dan Diklat', '$2y$04$NIys8mVKYUYakYFjGg4rIuPFbo.H9kRjNMvXAj4n1rh3vOWadzi3K', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (12, 'Cucum Sumiati', 'Wanita', 'rs0009', 'Staf SDM dan Diklat', '$2y$04$V9qUeyyJwSWMHsb77GHPS.NV8fdqAf5Ng/62zeGFiq9d8onkM1ctu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (13, 'Dini Anggraini', 'Wanita', 'rs0010', 'Kasubbag TU & Perizinan', '$2y$04$g7MglNuRLe2wn2lcws5JC.9CItTz0nj6f/J.P74JYSpXJleBRSMmG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (14, 'Ratna Aprisia Putri', 'Wanita', 'rs0011', 'Staf TU dan Perizinan', '$2y$04$zQTjDtBCJ5Qcya9KEkPaBObPulIDczuNUmys2WTaUSD2P3G.OnGpK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (15, 'Aida Nur Aisyah', 'Wanita', 'rs0012', 'Staf TU dan Perizinan', '$2y$04$UeQH//ifb14cRF8tNHdmA.FG4w/20HpqHTwPhhgbEgjBcelVI9s6a', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (16, 'Asryana', 'Wanita', 'rs0013', 'Kasubbag Logistik Umum RT', '$2y$04$2lk8JrwyITvZYHNQt0i6u.YBAVSsbh/HLRCVoZg8BaT8waHKoTrRu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (17, 'Nun Khadijah', 'Wanita', 'rs0014', 'Staf Logistik Non Medis', '$2y$04$oIaDVwpze0ZAM5axq0K.KevIK4qNZcKZzUPswA0VTLgOrzGSvKM3S', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (18, 'Deri Darmawan', 'Pria', 'rs0015', 'Staf Logistik Non Medis', '$2y$04$O7vuW1cjd35aKTXoi8GHbemuqhGle/wVTr83xYxF/ng/U4bc7Hgre', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (19, 'Ika Endah Rosianty', 'Wanita', 'rs0016', 'Ahli Gizi', '$2y$04$TPEI6a/jyiBPHt0qErBHtOzxrIIM9/5iC.c9SWH4rtChhQub8GZ8y', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (20, 'Supriyati', 'Wanita', 'rs0017', 'Juru Masak', '$2y$04$a4gAwo9djAKoGuTJl9F68uzg7bNypiap3L2gvd8jGvznNVXsFD1qq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (21, 'Sutini', 'Wanita', 'rs0018', 'Juru Masak', '$2y$04$z0ao6L4mTuLLPjYMXdDadOGP57HpdCZopHIfyyiakTiRmwinfivfu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (22, 'Yuli Narulita', 'Wanita', 'rs0019', 'Juru Masak', '$2y$04$9897embBiIKkI3/jEehfJu2L7f7QWAKWwXGMyaUacCyjnm7rSUkli', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (23, 'Deni Apriyanto', 'Pria', 'rs0020', 'Staf Tata Boga', '$2y$04$p91.2ThnkAgJ336CBphc/.0daZ.czOppRBvfE79gPNE.5akRpzzX.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (24, 'Milawati', 'Wanita', 'rs0021', 'Staf Tata Boga', '$2y$04$H3vm/Xhc9dic.QhqiA7rQuck6nSvncFkyppZU4rKwSrmjeofinZN6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (25, 'Aprilia Putri Pertiwi', 'Wanita', 'rs0022', 'Staf Tata Boga', '$2y$04$QzQMOCBIRhMCGKwaTr3OJu5hI/atxb44y4pDMZbGh03YM/5YlXpNq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (26, 'Endang Setiawan', 'Pria', 'rs0023', 'Pengemudi  Ambulan', '$2y$04$hXj1NFk8pSIDsZPFsBPmGeXEg1hA9WRG5yCcsMOyfZiZXDrv/m6Zy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (27, 'Yayan', 'Pria', 'rs0024', 'Pengemudi  Ambulan', '$2y$04$bPgtrCuRcCcN9IIFE7.tPOM80BEJaJGrHi2NLZW8eXzabtGXw1JYK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (28, 'Syarifuddin Jaya', 'Pria', 'rs0025', 'Pengemudi  Ambulan', '$2y$04$aC06pYI81U5dX6IsxbgG1OifEaGWqtklaST4uhO.nl0GRBH8J5hYe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (29, 'Tarmizih', 'Pria', 'rs0026', 'Pengemudi  Ambulan', '$2y$04$pWUUkbmE6/EZT7Z/OOtn8ulKOHLl9jvNUYMJbNnHjxXtcEg2SzwmC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (30, 'Teguh Santoso', 'Pria', 'rs0027', 'Kurir', '$2y$04$sLxr.VzyDGnlSPA0U/Wy1ul36t9Xq4tGTyOGoHJnqRvTJ0MWHVm32', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (31, 'Suparno A', 'Pria', 'rs0028', 'Kurir', '$2y$04$9AFCc4w14LJ8bNyFMiKKk.TmW5pJQT60bidlvX7vnVZHDu/tSbQ9u', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (32, 'Abdul Koeri', 'Pria', 'rs0029', 'Staf Kesehatan Lingkungan', '$2y$04$efkpJfrRiUwqB5GdtM/5uexA3YmEoPt3jcGqUC4XlUBU4kORrm1uW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (33, 'Rahmindy Dyar Augustin', 'Wanita', 'rs0030', 'Staf Kesehatan Lingkungan', '$2y$04$toDGhQ.YBmJXUw3C1mvm5.5U8g24pRsFIi96Tvon5NLQELc5Bs6XK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (34, 'Agus Wijaya', 'Pria', 'rs0031', 'Pelaksana Kebersihan', '$2y$04$FiNK240I8eXFCDly3ntJVeDCYCJCK1Scx9f4ArOr6wZ/8guUJENtS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (35, 'Sahlan', 'Pria', 'rs0032', 'Pelaksana Kebersihan', '$2y$04$mj3Na/W3Vvn9aFhS3h.cyeVuniE3qs0g7WkhzG1bLiiqnAv3OYTx6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (36, 'Ali Rohman', 'Pria', 'rs0033', 'Pelaksana Kebersihan', '$2y$04$GXfsnMrSaiiAI3YDKgThvuod2JdeyBe8IVQMeud24yaP7vP.HuZu.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (37, 'Maman Nurjaman', 'Pria', 'rs0034', 'Pelaksana Kebersihan', '$2y$04$1LH5qVxOnV8Rk7QnwKaiWeCoGu50c7saotczgL7aMNchLD7WVOhiS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (38, 'Sri Anggraini', 'Wanita', 'rs0035', 'Kasubbag Humas dan Pemasa', '$2y$04$z2Lemt/LjBd.rg9NpBvb2uIkeyzpWDWXXveZk1CtGoMaL06eRku4e', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (39, 'Yeni Arfiyani', 'Wanita', 'rs0036', 'Staf Humas dan Pemasaran', '$2y$04$bnO7wgE4WHLnzoyzUQdYROGmB1aVdxhEWl5.Xyu3/20ViF4DqniEa', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (40, 'Wahid Rillo Pambudhi', 'Pria', 'rs0037', 'Staf Humas dan Pemasaran', '$2y$04$jlgAHvxZhV.zLqgdTjCeP.mo2jba.XWAZXKqkOS9oj17cykLQb6zC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (41, 'Muhammad Ridwan Hidayatullah', 'Pria', 'rs0038', 'Staf Humas dan Pemasaran', '$2y$04$3DkqwHEOw49vbr0/CkRziOROKriO3RadhT4YZKiJFXsqPPWRPMLP6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (42, 'Naura Shafarina Nasution', 'Wanita', 'rs0039', 'Staf Humas dan Pemasaran', '$2y$04$DSM4oNinYuRzoAA6ERAwAuXUwRzy61jfL8GMi/26IxUH0PQuDZcDm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (43, 'Shodikan', 'Pria', 'rs0040', 'Customer Service', '$2y$04$pv3MEuGSeihlo7I3ibbfOupGuCrHN2w4HMUCMFGQsszBHvAbX6kki', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (44, 'Andina Irawati', 'Wanita', 'rs0041', 'Customer Service', '$2y$04$H60HxTGCMPoQLapBqBJmruq69G8tC3D3H/AJAh6SzRdN9zaHa6rhG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (45, 'Riska Maulidya', 'Wanita', 'rs0042', 'Customer Service', '$2y$04$2rwjAtp1V/GMlwKliKdSLuAZQaqMfrf40jHqkeXEh136Suf4I48xO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (46, 'Suparlan Tri Sasongko', 'Pria', 'rs0043', 'Customer Service', '$2y$04$9BLTaBSwMS3xyT80dWgt4edcA6tCfoidMD37xuQerh0czTG5.5AKa', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (47, 'Sri Wahyuni', 'Wanita', 'rs0044', 'Customer Service', '$2y$04$lH5SGxjYFcZUMOQH8GupFedHgkyj31AESiql//qXayu4OROHe6nOO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (48, 'Abdullah Aviv Hanafiah', 'Pria', 'rs0045', 'Kasubbag Sistem Informasi', '$2y$04$ECLnECHwbaa0wLjM6Pi5vepCpHA7mx4dvv3jlr4wA0nN9S5IaheUq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (49, 'Ari Purnomo', 'Pria', 'rs0046', 'Staf IT', '$2y$04$PMBhFzlU2ZPvzBbSC/rd4.wCd5jMskg4wy.TtmAQ3GfWx3sjWS6bK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (50, 'Andy Bahrin', 'Pria', 'rs0047', 'Kasubbag PSP', '$2y$04$ghhO4Y9EC0I9JE/8dd017eYFhFrvK3k/Ad7NmI6JZ2fjg0z4rJ.KK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (51, 'Hadi Riandoko', 'Pria', 'rs0048', 'Teknisi', '$2y$04$lt1vSccBlACNen8gOgmxAOFB6YNT0gsCeJGJpAWIByxUKB6GW6hV2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (52, 'Paino Sejati', 'Pria', 'rs0049', 'Teknisi', '$2y$04$8H9UuBxv.2nWZGzedL.X1O7jrwxHLyUhmjJJfEyYcWPrgjnTPyciG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (53, 'Irhandi', 'Pria', 'rs0050', 'Teknisi', '$2y$04$G0QTaxVmUJMiXyyUtabStu3XilwsWOBKjrPQryEWeHZNcpZWUl7GK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (54, 'Budiyanto', 'Pria', 'rs0051', 'Teknisi', '$2y$04$qxvGH3xsIYf.VwVcO.we/.uiYHYrFL9IphD3m2GJ/4Qd77qwWZ/7a', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (55, 'Diyanawati, SE. MM.', 'Wanita', 'rs0052', 'Manajer Keuangan', '$2y$04$AMckzJWpUONO3SAwyRD.tuXwxaDWR9z6U15KcSGroWuZorBkMtiqy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (56, 'Sri Astuti', 'Wanita', 'rs0053', 'Kasubbag Perbendaharaan', '$2y$04$v5fq8AzamoLSfJx1/m1PcOTEPqXhZ39SGtmNZMvxMXBFj8xA.tkh6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (57, 'Melli Kaswati', 'Wanita', 'rs0054', 'Staf Keuangan', '$2y$04$g6fng6nixUZAgVUgN1GdAOHgRuyHt1n/oGStLcUuhufsjvSzoCezO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (58, 'Eni Pratiwi', 'Wanita', 'rs0055', 'Staf Keuangan', '$2y$04$Uo/a7Pm8zV5TVnmj0XjQo.IT4xxKZo03VRMf8auKcbr/hfWs2Du0a', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (59, 'Paisal Amin', 'Pria', 'rs0056', 'Staf Keuangan', '$2y$04$c/dbfqzt46sJRPQYCLmBVOcQofgYpRKfZ6JKy3dxzGnO86VjSmnea', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (60, 'Azmi', 'Pria', 'rs0057', 'Bendahara Pengeluaran Pem', '$2y$04$t6sA5SqC4e7p4XT/G1jJauZUlAcnDP.LJKNkGgoXzB0c6kIBc4U9m', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (61, 'Jameroh Elsinta', 'Wanita', 'rs0058', 'Kasir', '$2y$04$3KxNbqqhiN.g5CGnpmCj.e4oe06d6hQIik12d29mXtsybyIkGwhqi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (62, 'Ida Fujia Lestari', 'Wanita', 'rs0059', 'Kasir', '$2y$04$kh5nsbsWGjVnrW09161tdutk4/0i0X0vN8s.eWFlZixO3HDQgYtbW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (63, 'Ade Dian Lutfiah', 'Wanita', 'rs0060', 'Kasir', '$2y$04$PLDPDh68MF5/HADV4kIUqOFEl3zdCRgeF4xnSnxOX2ek19Adk1Tfq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (64, 'Febiana Syahfitri', 'Wanita', 'rs0061', ' Kasir', '$2y$04$fJ1p47mP0yImEhYLWmSHgOUwA5aWcJoagGFLrBVkJeLTfWr1TAtYe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (65, 'Nadiyah Nabilah Rusydah', 'Wanita', 'rs0062', ' Kasir', '$2y$04$QrGtMAGf2N5hWplY65DRmu9K7MbgYZFfmmnt8M.qGufy.XxXelvs6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (66, 'Desi Hartati', 'Wanita', 'rs0063', ' Kasir', '$2y$04$J.4i7Iuvv4lbCt5T1LdYT.MfaLgIM6Dgvb9SgItz8vBEsPXeK9VhO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (67, 'Rizki Nursamsi', 'Pria', 'rs0064', ' Kasir', '$2y$04$e.Tptp9QRwtM2EEIIjefJea97b.5e8x6KEytGDURyJG3muunWMSJe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (68, 'Agus Setiawan', 'Pria', 'rs0065', 'Kasubbag Akuntansi', '$2y$04$aNnHMx4jpHJ1MJoan0hLD.FkrueBB5qbazKjsu0/cHw7W8sXK64fi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (69, 'Sri Rustiany', 'Wanita', 'rs0066', 'Staf Akuntansi', '$2y$04$rJgAjRFuSwLhhP63iD0.BOMFEL7uBpzzytjqNGOP5ClDC2mRaB8wm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (70, 'Setyawati', 'Wanita', 'rs0067', 'Staf Akuntansi', '$2y$04$J3TVBtjiYocsOKtSetqxru3E4CnZigjgGYwqlJNrz5/a2AnMws6Hm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (71, 'Raviq Havizianzah', 'Pria', 'rs0068', 'Staf Akuntansi', '$2y$04$ByP14BcFhlEsFVZpGO8a9.hU972sIIItvLcYSpW0gk4K8LXPKtO9C', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (72, 'Viani Putri', 'Wanita', 'rs0069', 'Staf Akuntansi', '$2y$04$9O1v4Gp9cbETJnHTxVKTH.MZ79x9ThBvASubNAonlCvoPTfbAgsIC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (73, 'Acep Rohman', 'Pria', 'rs0070', 'Staf Akuntansi', '$2y$04$WCrfWBupgUyrRj7Oud/QruX9dS3qLTpC2h7hxmJPIcr5htUpjYLMe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (74, 'Eva Fitria', 'Wanita', 'rs0071', 'Kasubag.Perencana Anggara', '$2y$04$UbZSBPgLcR5ZW69nQUnFqua537pGQtTghEqAJv5CFZmV3g5HA94T2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (75, 'Nanang Septiawan', 'Pria', 'rs0072', 'Staf Perencanaan Anggaran', '$2y$04$fRFofCOp9BTDhtV5rl/iC.tCuflAOZPRaW/A6gA65nl4.ETDtxnpi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (76, 'Deasy Merida Kusumaningsih', 'Wanita', 'rs0073', 'Ka.Unit Pengadaan', '$2y$04$Vx1P8UjWoLlCJY6RmD1P9.GgVP93owfLWylsxMDRrPPFpuXefPHei', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (77, 'Siti Fatimah', 'Wanita', 'rs0074', 'Staf Pengadaan', '$2y$04$ABnOGiiydbrCcVwWYr7bY.x3Y.s7lkZk6Z.WCD9MAkjvQeyRYuBkK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (78, 'Akbarudin', 'Pria', 'rs0075', 'Staf Pengadaan', '$2y$04$NRkukhj0cQ9yNolwHnZTp.NOPpE9atTLqv8GSd3Lxgo9PoxjVdTTC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (79, 'dr. Andina Prabandari', 'Wanita', 'rs0076', 'Manajer Medis', '$2y$04$Y5H5u6w5nDwCsNwJPUsiY.GlwDvO9n0SqeO6FSxnJuF5Opki1N74K', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (80, 'Siti Hamidah Nurhasanah, SKM. MKM.', 'Wanita', 'rs0077', 'Ka. Instalasi Penunjang M', '$2y$04$8gGdEE/oWUVfR8DO7Pnd/.dRH7Gn1c2BxQx2GXg.evho402IRajFy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (81, 'Sinthia Eksanti', 'Wanita', 'rs0078', 'Staf Medis dan Keperawata', '$2y$04$j/kNyQjrjQ9gKJ6bAFti/eR6nE.q.XK92n6PIG3TQ3yvHIbicdV2m', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (82, 'Yayuk Dwi Novianti', 'Wanita', 'rs0079', 'Analis', '$2y$04$Kvk6GBunQ10OKtLHxWGLD.Exg18SxZSc/nQNF5o/fzN69.CMXqQei', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (83, 'Sri Suwarni', 'Wanita', 'rs0080', 'Analis', '$2y$04$M4riGodSRq17Fl0vCW4C0OGVLDD36wq8zew/PUBOSPYluAEVXzADq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (84, 'Erry Desi Bimastuti', 'Wanita', 'rs0081', 'Analis', '$2y$04$cD7nX.Dt317KLZ.ZiHe.ZeNewOPk3OS.6Goi2Gb78PB9ric8gXUvS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (85, 'Liana Fitriyani', 'Wanita', 'rs0082', 'Analis', '$2y$04$xidjyMlRu4dpIUvvqfBkUeXZJSVhCKaEnJs1R7cT59OzLE8G5Wl1.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (86, 'Ati Nurli Nurhayati', 'Wanita', 'rs0083', 'Analis', '$2y$04$KP9rnbnn1ex/iUmt574uGOQV1HPpQSosIrfZqm/uEipAqFcxyukfC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (87, 'Ari Handaya', 'Pria', 'rs0084', 'Analis', '$2y$04$8sWXG1AGLWo14wsUlpXIUeRwXI5/eb.5R2VRQKyL9Bm4Uj2gA/Iti', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (88, 'Siti Atikah', 'Wanita', 'rs0085', 'Analis', '$2y$04$y6F/./RZEtRV3TY3tIwpD.iUpRrcLMQwJRQzhMFxnB0fDrGwtfSh6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (89, 'Ariana Rinaldi', 'Wanita', 'rs0086', 'Analis', '$2y$04$8WHJOOb/z9vGuxDWrIpnV.t/btw9gHyqSL6zhLdQ26sFDZZ/a/dWO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (90, 'Alfian Ismadianto', 'Pria', 'rs0087', 'Analis', '$2y$04$XYV6rx70lgM8KM/xT16iZe2nZ6lVFxWHlMjCTpdMT4Ho2kMiwZoDW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (91, 'Alvih Tri Anggari', 'Wanita', 'rs0088', 'Petugas Pendaftaran (Lab)', '$2y$04$vOYqEvWKu91dJYMTl1vVfebPl17VD3nyDSRXL.jJ9WlQOtU1UJMvS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (92, 'Siti Yuniarti', 'Wanita', 'rs0089', 'Petugas Pendaftaran (Lab)', '$2y$04$GIBwXPIyvUGp41jbPDJLMOg1hrzUX5p6Ki69edkdkT9iRTeeWrXvq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (93, 'Sulastri', 'Wanita', 'rs0090', 'Staf Logistik Medis', '$2y$04$8aAyBYwP5Eq2W6RIPBuwTeIt8VGT.2bwHwr2V2QMfIIZO5FSnIuYu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (94, 'Saepul Milah', 'Pria', 'rs0091', 'Staf Logistik Medis', '$2y$04$ktOOUNnN/WyfAfmmAHg8Pun.vUyf/jeDGc9lZ2tNdfcjbUvTg.SWO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (95, 'Eni Kusrini', 'Pria', 'rs0092', 'Staf Logistik Medis', '$2y$04$3FzE17IngUu1jQYWRj6WXuovuneNkAJzutOKrYzL09FhRpME.bFI.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (96, 'Fadhilatul Naimah', 'Wanita', 'rs0093', 'Apoteker', '$2y$04$p.gGPKX6MBlyOoKG0U5Sa.0BzEZxz9UvPaTmmN3QQtjulpbd8Gudy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (97, 'Kokom Nurul Qomariyah', 'Wanita', 'rs0094', 'Apoteker', '$2y$04$ejmD8KxqTPRhgoFCIIVZ4.N/1nsIiVhhE/zJs0L23VNcnpTunAcbS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (98, 'Divya Anjani', 'Wanita', 'rs0095', 'Apoteker', '$2y$04$9Yd8Q7NHA5ve3UAe68YvZOi4DXTju0JpqBU/x/56c5dy6GFgpVFii', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (99, 'Sri Edy Budiati Mariani', 'Wanita', 'rs0096', 'Staf Administrasi Pelapor', '$2y$04$ByPTumOayYec4q4b..EFKOJR4tpm17ZG.3WLYuSoj.yjLtgJKE5MO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (100, 'Paridah', 'Wanita', 'rs0097', 'Asisten Apoteker', '$2y$04$VnLNA2qc20/dI9K3o6gi1.zKLVHMJweKUcrtcgeVr0P4Dq4nxC.kW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (101, 'Oni Susilowatie', 'Wanita', 'rs0098', 'Asisten Apoteker', '$2y$04$IgBC1hk1L9reab02Rrn9JOlNfHstw6.Em6GgPZaIB7sHKHUB6NWnm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (102, 'Yovi Ade Anita', 'Wanita', 'rs0099', 'Asisten Apoteker', '$2y$04$tMxxh7raTrAX1CvRgGpb9u6yZB9NTQjLQHVSvl2C2vbZcypzU0pO.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (103, 'Aika Prastia', 'Wanita', 'rs0100', 'Asisten Apoteker', '$2y$04$j.keBwuC4wBVZ2PLKVT3FOIy3R4qP5OdiK2KkMLHcKCa6eOMfzEoO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (104, 'Rizky Rahmatul Laili', 'Wanita', 'rs0101', 'Asisten Apoteker', '$2y$04$tCq20WJsZLcxOjkK5mRFSuVw57qn1xfQZ6uBnuBLAnDU8q4k/k0wO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (105, 'Ida Nurlaela', 'Wanita', 'rs0102', 'Asisten Apoteker', '$2y$04$65qHG/HXTZUAVDfx4zDN/./zad6hqRcXfWpxmNyE6HliVpuQ8bvaC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (106, 'Aprianto Pangestu Putra', 'Pria', 'rs0103', 'Asisten Apoteker', '$2y$04$nWnSo//kSs8MPKPWorRjheuOq3BFe/.QJd./4DyysGIaZpl1n5NAK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (107, 'Dennis Syahputra', 'Pria', 'rs0104', 'Fisioterapis', '$2y$04$vs9NxD07Tz9BTinJ06eAzeNn45MDtXTlU8hv1JDCk0gLGh0JBa8s6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (108, 'Zulkarnain', 'Pria', 'rs0105', 'Fisioterapis', '$2y$04$DL5.aSfQJMxTYauNoJYF6eoIcdgqBDlcGRctd3AnzMOYpScm9i15K', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (109, 'Ika Armadila. A.Md.', 'Wanita', 'rs0106', 'Ka. Unit Rekam Medis', '$2y$04$HliRo5BkUp8qXFwMSbLvPO.b.wmx038.cJpl4haPz1eJZsST.ZzxO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (110, 'Ruryanti Wardaningrum.', 'Wanita', 'rs0107', 'Staf Rekam Medis', '$2y$04$QqDrL5wKZu5x9ALcx1SvX./CVFSnK1df1.CcN6NcVuU79sFNxz7s.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (111, 'Dede Muniroh', 'Wanita', 'rs0108', 'Staf Rekam Medis', '$2y$04$oSR5i4FpAYR2f91EV4xM8uLKoNJcSbu9jZOa9PGh.jWh6k.b6scHq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (112, 'Ratnasari Setyowati', 'Wanita', 'rs0109', 'Staf Rekam Medis', '$2y$04$jxy/hjCIfmnLJBF8BiKq3OyCo9oiKLWFSK99Y4Qveq4AdHXN3mKfu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (113, 'Tya Novika', 'Wanita', 'rs0110', 'Staf Rekam Medis', '$2y$04$APFgyE.7UZCAjRaEqIn0XeniS2HNohvlPMdzOkuZwSPL2Ix3UgBT.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (114, 'Rima Nurwasilah', 'Wanita', 'rs0111', 'Staf Rekam Medis', '$2y$04$1ceGgSD/LhgEMx8kJx7xLOa4YHOZkwcolk1Z3n3cgT3UNWcWTt1T6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (115, 'Syahrul Sohbrina', 'Pria', 'rs0112', 'Staf Pendaftaran', '$2y$04$aEsl.VwV.85WWfA8y6fdduijcl.2xiJBcDZsVdyIkBli3/9X3YG8W', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (116, 'Retno Nur Fauziah', 'Wanita', 'rs0113', 'Staf Pendaftaran', '$2y$04$YrP7KeN32HiZy2BLXMeAmOVdnUpDlPecN9YJPo7WdHTfBV1oz7AL6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (117, 'Nia Kurniati', 'Wanita', 'rs0114', 'Staf Pendaftaran', '$2y$04$vuYsk3fbWTV909gzHJiK4.TbS1QTpDMal51dnemrHusTa3/xhUwC2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (118, 'Faris Pratama Hermawan', 'Pria', 'rs0115', 'Staf Pendaftaran', '$2y$04$A9OlMKu5I4QCddDSxx4BAuEtOUnPBdsUTx4orJoscj2qgCdJXOzqS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (119, 'Dian Permana Putra', 'Pria', 'rs0116', 'Staf Pendaftaran', '$2y$04$8uG5LLdW8kqjZRdYNHtJ3OqRk6GWS04ssgTDuX8dKpP4QfnsPzAuW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (120, 'Anik Ira Niarawati', 'Wanita', 'rs0117', 'Staf Pendaftaran', '$2y$04$lPFoTcuiGkG.Rbr6Lq5WHusfXDcUs.JZMX7n/AGxRrRTLtAraiEGu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (121, 'Yani Nur\'aini', 'Wanita', 'rs0118', 'Staf Filling', '$2y$04$pmqBsd0Mv1QGClhW7zYq..ILW635QcfLlqt9pmIYl3V5/o6pv2j/W', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (122, 'Gin-Gin', 'Pria', 'rs0119', 'Staf Filling', '$2y$04$t3ZmNNVpzST7ITVXRKinK.fuJKwnXX7nErP3Uynjfc1obkG3KeoV2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (123, 'Deny', 'Pria', 'rs0120', 'Radiografer', '$2y$04$PIPiy.BtcnPoC8/doj5T6eGuScPXfAIZrSvkeyfl/dAP0lfp7afbe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (124, 'Ahmad Zikri', 'Pria', 'rs0121', 'Radiografer', '$2y$04$/iDXBu4edCsnP8C0ZSupr.S.O9yzRnHwVdr.lhRMMslL5aRhvbv/e', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (125, 'Beti Laili Kuryani', 'Wanita', 'rs0122', 'Radiografer', '$2y$04$ZtO4COJUSclI1Nv/D7usFuGtDr25wWP/CMQeRh3LrACOOTmc5o3Oe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (126, 'Fawwaz Mahdy Mubarak', 'Pria', 'rs0123', 'Radiografer', '$2y$04$9tathryenhKzfCwIbDc7putw396HTI1/iH9uXuRhKCSw2hzUBxm2K', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (127, 'Rizky Bella Novica', 'Wanita', 'rs0124', 'Radiografer', '$2y$04$u9h0byvbXYMNWx.EZ9E8AOqe0yiX1ZoUxOyHNd5BisGU9D4qUWNBu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (128, 'Holid Mawardi', 'Pria', 'rs0125', 'Radiografer', '$2y$04$D5XtXcNDQuja75Q7TKllq.dojYhuohjDYRFKw3wwT3mf7h0Vec1/K', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (129, 'Dwy Hervin', 'Pria', 'rs0126', 'Fisikawan Medis', '$2y$04$IBEllDxZjKE3XF0d.JT2kOVLNqAH692BJLZEwtUf.3LnbZnypEue2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (130, 'Eni Efanti, S.Kp..', 'Wanita', 'rs00127', 'Manajer Keperawatan', '$2y$04$tYYCWBHVre5nbMEqfnhkC.2ZKg4D7FBAYAYy6SHFcNMmifDcEIzD6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (131, 'Siti Rohmah Subekti', 'Wanita', 'rs0128', 'Ka. Instalasi Rawat Jalan', '$2y$04$8Iijcs3sb6.BzMFl3cQNn.haxDYRacAFlWKOX6SUWo549pVXbT6Ue', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (132, 'Nurmah', 'Wanita', 'rs0129', 'Petugas Administrasi Kepe', '$2y$04$Nt3gvxZ800zmtsAAr2RANuv.rSII9JU0xkKC8XuBJWUnyceQP2UkO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (133, 'Al Hikmah', 'Wanita', 'rs0130', 'Petugas Administrasi Kepe', '$2y$04$mAsuAN1z8lrTkpGxJpvmYeNtkUk1zCy2WR4ovrkvsNmjEFxdlp3JG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (134, 'Mujiati', 'Wanita', 'rs0131', 'Bidan BKIA', '$2y$04$qx3SZMO9qTF4xlw7WRHv9OE8KUqleChR0H1RTspa73f1TKa.z9ZJ2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (135, 'Yus Arinawati', 'Wanita', 'rs0132', 'Bidan BKIA', '$2y$04$Bq1nH0XsZVg73OrTccp2cuog.MhQOyOlAqSINQfJMC9kt/Ac889Ii', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (136, 'Zaharawati', 'Wanita', 'rs0133', 'Perawat Poliklinik', '$2y$04$YLdxyyvg1YJoXwi7cVm8uehrhCdYj3TyYnzaGKVf/NC86MAWK1ROS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (137, 'Nomih', 'Wanita', 'rs0134', 'Perawat Poliklinik', '$2y$04$sFOo27ZNBU55BHOaPTa68Oa1EIxVOLF11Cq8/87qdBtlseNChxb8y', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (138, 'Rachmi Qomariyah Noor', 'Wanita', 'rs0135', 'Perawat Poliklinik', '$2y$04$fq0171OtyuPNNMl.WreARODjcRTVOj.faMRwAWPVY38dQbZP4O6L6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (139, 'Rumiyati', 'Wanita', 'rs0136', 'Perawat Poliklinik', '$2y$04$Sa29jaxQk3HJxqzxM/APguukw8fiW4Xng7LJoo.CCT6/OJNYAkqPa', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (140, 'Eva Fauziah', 'Wanita', 'rs0137', 'Perawat Poliklinik', '$2y$04$Appx0yrt3RAvqLlwUjrmJ.wchkG2SrDLnl13pkcBghGmgKE75r/AO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (141, 'Juliana Nurul Aini', 'Wanita', 'rs0138', 'Perawat Poliklinik', '$2y$04$pKuMAFL5pTMsyZJQ/n5jwepo3y9tI6sfg.7btrkLT7B5Sx2fsYgfO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (142, 'Sri Haryati', 'Wanita', 'rs0139', 'Perawat Poliklinik', '$2y$04$lH6i4EoQUYviRxqtQZekbOBQOzPaI4hZqZv2rgj8kG32ggyaUq4aC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (143, 'Wulan Asminingrum', 'Wanita', 'rs0140', 'Perawat Poliklinik', '$2y$04$qNEdCWFCbQ/V7h6yAtVomeXPm.0YBo5IeT2g8jHkt8ymU3TJZlt4S', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (144, 'Annisa Sri Rahayu', 'Wanita', 'rs0141', 'Perawat Poliklinik', '$2y$04$SYfu4frPYBEb2q.zJoDLue0QdCGGoQsvXrqmmMo2/CwRcRpkliPu.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (145, 'Teti Setiawati', 'Wanita', 'rs0142', 'Perawat gigi', '$2y$04$C/H9xMRCF5JDdFhdV3AnOOZ01ysFqrTWqhUhuXs4HyupoTVVyDzd.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (146, 'Khudrah', 'Wanita', 'rs0143', 'Perawat gigi', '$2y$04$03UeupG7Uks7.mjtBssKi.eGItTYgroKxh2CL0pWjo.jeqGUCCPqG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (147, 'Sutiyah', 'Wanita', 'rs0144', 'Perawat gigi', '$2y$04$KKIIgHHCHqZ1tkLZPnEOo.eO.woeo6eZJ9eEC5nBdO4Es0FKFd36i', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (148, 'Yatmi Fujiati', 'Wanita', 'rs0145', 'Perawat gigi', '$2y$04$y6vWveUagRhjd8QYS17E1O8y71hO6vnxXtTjk4ft4hyXNYMNc37uy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (149, 'Umi Azizah', 'Wanita', 'rs0146', 'Perawat Gigi', '$2y$04$s5GyxKEqvZq/gOzFJlvTt.HmoCX7jLkQeLk8VbgJa0SBasT36cjx2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (150, 'Agus Saepuloh', 'Pria', 'rs0147', 'Perawat gigi', '$2y$04$1tKnpH6wbNiuZuZoefq2E.phz1L/gMJ9Cpx0b/Weim.Fl9HuhX4WC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (151, 'Eva Septiana', 'Wanita', 'rs0148', 'Ka.Unit Rawat Inap', '$2y$04$pwbuh2wFZFCr5Anixn1jo.MvkCWyTR/4zOzfo0Y7eDWSh57pzbKC2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (152, 'Agustina Merdekawati', 'Wanita', 'rs0149', ' Perawat Pengendali Infek', '$2y$04$nd7hQJUawwHSLy6S78iO1uaVSBSFxn0e5QIbA59P/7fg6ASqSxOQG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (153, 'Sugi Astuti', 'Wanita', 'rs0150', 'Perawat Rawat Inap', '$2y$04$8I6Fvb4Yf1F30R6ruW6j4eS6YisspK6RnZoHvB0oqQPVeyZss9tem', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (154, 'Ikah Atikah Sariningsih', 'Wanita', 'rs0151', 'Perawat Rawat Inap', '$2y$04$lqEAMsPIgteTolg/OCa5WOFhud.SFZ411U7IRSuMUv3rY7mlId9gu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (155, 'Ani Rojanti', 'Wanita', 'rs0152', 'Perawat Rawat Inap', '$2y$04$mwIr3QUv6BpoH3e92T4nX.q0C7HYAREablFTQzMydJIZrMsGsAaYy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (156, 'Indah Lestari', 'Wanita', 'rs0153', 'Perawat Rawat Inap', '$2y$04$ciT1ANthHnhoLMUnA.Qu5OmqNAhVmTxwic0jtVdpuDwMDzSaAMIkm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (157, 'Citra Februati Pratama', 'Wanita', 'rs0154', 'Perawat Rawat Inap', '$2y$04$nQsa.fSFFI7qrWCCmFk8h.9RcQbq3YNZTEFt4OTdt5GwWnMUjOd0u', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (158, 'Nita Helita', 'Wanita', 'rs0155', 'Perawat Rawat Inap', '$2y$04$tZrWquYHqX0g.pf9EMMfT.nS/RQutma1vH1bFGHejHs.V00Jevtxi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (159, 'Laily Rahmah', 'Wanita', 'rs0156', 'Perawat Rawat Inap', '$2y$04$lVOWgts/kFLm9GUQWXRoQOqrriguP67LP6mbnzFhmdvXPYDnY.u3C', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (160, 'Dewi Irsyanti', 'Wanita', 'rs0157', 'Perawat Rawat Inap', '$2y$04$342AHksuhVb/I9NiZ3J.G.DdgwmRZVNdvFpQVFgM15l8gAezFkbRm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (161, 'Triana', 'Wanita', 'rs0158', 'Perawat Rawat Inap', '$2y$04$bQWTjS0bAFcHxzI0O/urg.dPadE.Pw9Hka4JXjk90i9dWSRq9K.7i', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (162, 'Chairunisa', 'Wanita', 'rs0159', 'Perawat Rawat Inap', '$2y$04$tOLDfAP27fqmTovf/aJ5se/4nVKLMwFYsfD7VFhe.Ts8LKuy4CTV6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (163, 'Sustianingsih', 'Wanita', 'rs0160', 'Perawat Rawat Inap', '$2y$04$dPkhrCHT3nWbf1zY80ba9OgQfGXdqNzR2Elb6d86T8F5tx0fJL8qa', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (164, 'Khiftiah Trirusni', 'Wanita', 'rs0161', 'Perawat Rawat Inap', '$2y$04$tSR6QdcCZke717jOn/rRfeHq6yE4OzgtkNBe072I8jStViCAr6clC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (165, 'Meri Handayani', 'Wanita', 'rs0162', 'Perawat Rawat Inap', '$2y$04$hN7.PjvG1EUAkGaP0Ni8IusKxHh3Izuc8ZLVp3gQXkJqJEHimz9sC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (166, 'Adi Purwanto', 'Pria', 'rs0163', 'Perawat Rawat Inap', '$2y$04$.cqkGHciF6EV4DjoOy76FOrh0AbAjCsbjjA5WNU8I8IXigJEcdFV.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (167, 'Darmiyati', 'Wanita', 'rs0164', 'Perawat Rawat Inap', '$2y$04$eXDRZYgFfGRSYD.ZvN9bm.Os2.Thu7cnvZNItNIVV0UfUAflCedVW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (168, 'Widyorani', 'Wanita', 'rs0165', 'Perawat Rawat Inap', '$2y$04$tw7VYdAonUEd5MZjcRgtQeO00Hc0Q.6Ht9kIkadjl36LIMgGjA9oO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (169, 'Dewi Susanti', 'Wanita', 'rs0166', 'Perawat Rawat Inap', '$2y$04$3UcpzEcEd0yD5YCTTb4VzOqiXOldfwd15lV6I0EMwZ3XkG.fxNp.C', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (170, 'Heni Mulyanti', 'Wanita', 'rs0167', 'Ka. Unit OK dan ICU', '$2y$04$FyHalc1lES1cyCntnL0oiOOveC8e7CgG9WDCNiJqNp35FuCAMYq1i', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (171, 'Laila Hanum', 'Wanita', 'rs0168', 'Perawat ICU', '$2y$04$v.fizH87ges5pbTZ4PFNhuF6xK.BST50r1zYQbgYvOjNsj8doQ8IW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (172, 'Mulyana', 'Wanita', 'rs0169', 'Perawat ICU', '$2y$04$9u.IQq.xD6H72oRbdv2SmuUEa0.b10ZKZlRGkbAt./RMc2OPYymd2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (173, 'Ana Fitriani', 'Wanita', 'rs0170', 'Perawat ICU', '$2y$04$EGGZw84sT/50uuDj/i91A.tfBQvq4Zd3cMhgzcTdiuAWNG2A0wC.u', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (174, 'Sugeng Riadi', 'Pria', 'rs0171', 'Perawat OK', '$2y$04$jThqgUTLtK9YjYI9R30gWuVavco8pI/03S0NwwPc9IiBdbbvoqxz.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (175, 'Syaifudin', 'Pria', 'rs0172', 'Perawat OK', '$2y$04$TCdE4AKOamiBO9tJX6IXweCTmDMCUGLzcIiA5AGyn1Ey1K/SHYCmK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (176, 'Yun Pranita Sari', 'Wanita', 'rs0173', 'Perawat OK', '$2y$04$5zGMNnO13Prb/9dbhsNws.stO8pZwly42AcXqAshfmnIlH9tUjafC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (177, 'Peki Irawan', 'Pria', 'rs0174', 'Perawat OK', '$2y$04$RiRDJOSs4XGJasjXaffXQeB4hm3lYDrl2YftT5sXhrcbx45OiAJ5e', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (178, 'Imam Muslih', 'Pria', 'rs0175', 'Perawat OK', '$2y$04$Zl27LuE4CTEY9VPUWLl/XeVezhyQGeFyA8zsRAz4uiX9eIqy4qnRW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (179, 'Mira Nurmala', 'Wanita', 'rs0176', 'Pengadministrasi Linen', '$2y$04$4yPjmKG3S5k.kwOegZ1q5eqERGDcQYsaST1K.8AJb5W/u1X5i7naq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (180, 'Adi Prasetyo', 'Pria', 'rs0177', 'Ka.Unit UGD', '$2y$04$zTILkI2KXJROLqmphBt.uuMa5hEAey93MKJaueWeWCL8iYf8.Zwqe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (181, 'Sri Dewi Komalasari', 'Wanita', 'rs0178', 'Perawat UGD', '$2y$04$xhQTqp3EsayF54EHKjBAS.dflvWM6iGrOPgdvCuvwDbxmJJ5ercMK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (182, 'Susilo', 'Pria', 'rs0179', 'Perawat UGD', '$2y$04$zJ1tOmPv4IoaebxUCLY9be78In4UPy.1eoqMg/q3EQTxrm.Ishi4a', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (183, 'Surindro Widyo Utomo', 'Pria', 'rs0180', 'Perawat UGD', '$2y$04$XAEk7Pgh2wZUZO2G2ZzGaOhUDbKHTdI6lsWiHjaq4puK2QGvNb0Q.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (184, 'Rizki Novayanti', 'Wanita', 'rs0181', 'Perawat UGD', '$2y$04$.63Wbq5ExlTTjGdYLTzOZ.pmrhoC6QHsW2rRTPKG/8TfkC8XPajHS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (185, 'Gigih Andriyono', 'Pria', 'rs0182', 'Perawat UGD', '$2y$04$.AE/An92OtvVdCOqZQmvWO9CiKYVMLDHJldupRiLOSr8TbuJ4mdby', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (186, 'Ayi Basuki', 'Pria', 'rs0183', 'Perawat UGD', '$2y$04$8AVlAgb/upiDZHIusS0d8OFqatQUH08fbohSmobSRmG7M.gCrb5rO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (187, 'Nino Nugroho', 'Pria', 'rs0184', 'Perawat UGD', '$2y$04$p.UuThPQ/jq5BaIxFEPD9Oh/C2dDQDizSO0x7bbLb6eDdDk/AcSYa', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (188, 'Alpi Zikri', 'Pria', 'rs0185', 'Perawat UGD', '$2y$04$rIpD9VZazsAkZcV9kjTx5e.WCi7sfPaJqZ4Krboogz0LHmINpnZKi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (189, 'Monica Riawiyah', 'Wanita', 'rs0186', 'Perawat UGD', '$2y$04$gCaJXk6BRQXSEXZqn2VuYu4WdIwr6W0RV/JOjppnUnIAprN5ogV7K', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (190, 'Esti Patwani', 'Wanita', 'rs0187', 'Perawat UGD', '$2y$04$PXuLzBeNdIj0NCB76o5Jm./MMXw28eqWNXbJ6aCChfNqBNEA2q7ry', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (191, 'Ulifatul Khoiriah', 'Wanita', 'rs0188', 'Bidan VK', '$2y$04$STLr3SPv.62O.htwijexzes7NHt3mJbqaisihoeC3OhzXNVBLCiJa', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (192, 'Rina', 'Wanita', 'rs0189', 'Bidan VK', '$2y$04$L8VqFZ3.uH4M/.rLfWbCGewvJauH3k2KVMoc.Yxv5Lu4BXg//uWi2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (193, 'Rien Wahyuni', 'Wanita', 'rs0190', 'Bidan VK', '$2y$04$8TM95FQmTrY4FfwyHdhqXuAw4ZXylbKJNj2G.sopbMdmaKZRCe4Qm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (194, 'Anggita Puri Sinansari', 'Wanita', 'rs0191', 'Bidan VK', '$2y$04$JBP.h2UgPBIWznKJ4ArGIuOjPU4cCdzCl71MknT3jrTNBXcZj1Ori', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (195, 'Wulan Riskyanti', 'Wanita', 'rs0192', 'Bidan VK', '$2y$04$FqMdw.wqEIKHyY7b9cIZt.eZ5fsg/eVSBkenN4kw.kg3ZJEo/1hny', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (196, 'Sri Rahayu', 'Wanita', 'rs0193', 'Bidan VK', '$2y$04$Ne.RB6RbHUYeKxAmkzwSeevqtNOK5LAd.sS3xpaFi9G.gZVz7e0Xi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (197, 'Melly Kuntarti', 'Wanita', 'rs0194', 'Bidan VK', '$2y$04$7kJFGgAKxkp8wDw2uCB/ze3zaPhACrDo7Ndqi3M6lHmeaVg0XOYBu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (198, 'dr. Erwin Hermawan, MARS', 'Pria', 'rs0195', 'Ka.Instalasi Klinik Prata', '$2y$04$43AqCkknGupo1IbGvFnc1.MiipzWlJOb8AK4yfNgwxLzWdopySUiC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (199, 'Ahmad Yani', 'Pria', 'rs0196', 'Staf Administrasi Klinik ', '$2y$04$r1dC1zWLonzZb4rleszadeq.titU5tnVQzKV7VO8CUvy3fy49DTTG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (200, 'Siti Aisah. A', 'Wanita', 'rs0197', 'Perawat Klinik Pratama', '$2y$04$2b7wdyEeWpbPVfq7bG/fNOyRhdC5kKRNlN9GJ2.cw357DZDb7uLFe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (201, 'Nurmawanah', 'Wanita', 'rs0198', 'Staf Apotek Klinik Pratam', '$2y$04$HMudD.u6dt07UkVu33ztS.f.GPGei2G3WtD.AshTInXXeY4zSweWq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (202, 'H.MS.WIBISONO, dr, MARS', 'Pria', 'dr0001', '-', '$2y$04$aY/vVESJ/f/e2iXKDfEjN.A6GUf7G90yYnGkMTZK3tJlYPuT692Ti', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (203, 'Halym Imam Saputra, dr', 'Pria', 'dr0002', '-', '$2y$04$7AXK3HzC2jric9TXQ7g57eYIkrFW.FBnz4Yd2k2FFZmxrgQ4l7842', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (204, 'Mariany Melati,dr', 'Wanita', 'dr0003', '-', '$2y$04$aiYQrTwNvvRjs/IFfLLKxuvWScUBDgdelGuzDcHRqzpNeaL6Yowau', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (205, 'Erwin Hermawan, dr,MARS', 'Pria', 'dr0004', '-', '$2y$04$eiIyLw9WOGLDHXK1CZen5u7byBokFn2yqppSh16Pikl1/j4VR6z9m', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (206, 'Heppy Christina, dr', 'Wanita', 'dr0005', '-', '$2y$04$LjdGKDZWIVsICB5QSxGzoe0ebRYOdH4oH2XsQ0Soblaq8q4sB56kO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (207, 'Sri Harti Sumarno, dr', 'Wanita', 'dr0006', '-', '$2y$04$AW63iTu3oZzrQPXPZ3JHWumcfrctllSk4FryOC/hO2j/Qd.Zrujii', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (208, 'Duhita Hajuningtyas, dr', 'Pria', 'dr0007', '-', '$2y$04$rhL4b8ljbDlg5acvYvnR2OY6onYuysC1DubYSPa/6fs.TZLt0HvZi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (209, 'Pipit Rahayu, dr', 'Wanita', 'dr0008', '-', '$2y$04$FZ2X7CcDfTqmuUfkDaK6K.X578bxSHo.PQjoV/JTjqESFbQh.PTse', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (210, 'Sri Wahyuni, dr', 'Wanita', 'dr0009', '-', '$2y$04$p5g8gWqXvfN8CTnS7ZPzOux72bbx1MoBSB58vuZdweyK9jsywJ8Ee', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (211, 'Vivi Vernanda, dr', 'Wanita', 'dr0010', '-', '$2y$04$5CVANdGPxTEKmZnm68OtF.9DhaD0UmNoXs3JlkiXcX7QZJVU0pfUu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (212, 'Yunita Ratnasari, dr', 'Wanita', 'dr0011', '-', '$2y$04$26bNjeugYg6KxlrTw5XMIuAISrI9eiSkp7HKQfILk88PERCMcrT0e', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (213, 'Muhammad Ario Bagus Baskoro, dr', 'Pria', 'dr0012', '-', '$2y$04$JeUK8DhA0jEx51PRrx5v5OqRPePCFSdZSlVvooDYavJy7sKVmND8a', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (214, 'Meita Hairunnisa, dr', 'Wanita', 'dr0013', '-', '$2y$04$6l4/2fvAOIwBmt5U50gAQuk0ANTqrwwnx/SlyD630k/cK2GW7vIgO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (215, 'Rizal Alimin, dr', 'Pria', 'dr0014', '-', '$2y$04$wtLpfVPT5/DKdjb/vD.ajuGZPkLT/rxvbC.KVkXmtzqmhALU/.i9S', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (216, 'Sylviana Andinisari, dr', 'Wanita', 'dr0015', '-', '$2y$04$/k8lnHjF5SMw4AO3ijYXEOOqDHB2vSqx2yX6OWQ3hiIne1OnHz1Iu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (217, 'Mala Hayati, dr', 'Wanita', 'dr0016', '-', '$2y$04$e8CLloutpe7kBnzpQmZVDeXBf9FOZnpBbUGk1F8seIg.RrZTL93OW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (218, 'Sri Wahyuningtyas, dr', 'Pria', 'dr0017', '-', '$2y$04$YJLNEW9aZHk5n6BK0xB5DumD7jOKZmEvQsLsFC/cTTuXJZptIQZBK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (219, 'Laeli Puspitasari, dr', 'Wanita', 'dr0018', '-', '$2y$04$yMplAC2gBs3DQdrBgMorUuJLog.SoJhNueiA.NzRMRG0ABVgXcEZm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (220, 'Alaa Ulil Haqiyah, dr', 'Wanita', 'dr0019', '-', '$2y$04$pzARqtySF1T.swWDQ8FTgOpL6XnwOrmlIgjtxtfeUMQfpOTRhZoFu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (221, 'Buyung Berli, dr', 'Pria', 'dr0020', '-', '$2y$04$TiEP5z0JiDslQk/81cbniO2VDSRQ/N3BnDBh96n.GiTJipZkDfjhC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (222, 'Riantana, drg', 'Wanita', 'dr0021', '-', '$2y$04$0v2F5ROdiK9I7eFsiL2mxe2ji3rvvjG9mfCbYp1fChrk4rj4fbjfe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (223, 'Julia Noor Soraya, drg', 'Wanita', 'dr0022', '-', '$2y$04$M35AjqsFEblONmGin4uCy.bDhyQoVckQREihtbLxcIsP1pYqcSr9u', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (224, 'Yeni Dhiana, drg', 'Wanita', 'dr0023', '-', '$2y$04$OAriv0dH3O1Vxo0s.h20TOfDVQyXxU9EizJLAY3Jr.t5sSVaL1AxW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (225, 'Taty Suprapti Fatimah, drg', 'Wanita', 'dr0024', '-', '$2y$04$pAssuxKbSh8WwqlunGzp/edmxhobZvQLqPm.w3t/nz4uWwdwAX9Ya', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (226, 'drg. Liza Mayarina Tumenggung, drg', 'Wanita', 'dr0025', '-', '$2y$04$kFunjlPZpMdarYh1a1UTKe7bXB4uw2oTcO0ExHBf92I/ZDxbrKGYW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (227, 'Weni Madyawati, drg', 'Wanita', 'dr0026', '-', '$2y$04$HMYUHtWkxU8EZXTcyC0BdeDdA88oTRjZpFwFHHmaKaNxr8UiVtBwG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (228, 'Chyntia Rachmawati, drg', 'Wanita', 'dr0027', '-', '$2y$04$YxV4Pw8nTd7DVgjpedKbmOJoj/XtrjzYVZTlIiYyFun2d7ZR1UaCK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (229, 'Annisa Rizki Amalia, drg, Sp.KGA', 'Wanita', 'dr0028', '-', '$2y$04$g9NW/Rk41PtAToUxFK9U8O/SkYHOCQXIMPecVxIW1IjFhT3zTjwbW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (230, 'Ayu Sukma, drg, Sp.Ort', 'Wanita', 'dr0029', '-', '$2y$04$fs32h6Je/NxfXemuTGa/F.WNCsD4iUtdfkv/DALJfQyhEIJJAAGie', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (231, 'H.Eddy Aulia Fatah, drg', 'Pria', 'dr0030', '-', '$2y$04$suunhcdBYsvWA3XMSJOC2.5WVgSVUanjlD8kN4XZhhAZEDqeZt79O', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (232, 'Ferra Sofiana Primasanti, drg Sp.KG', 'Wanita', 'dr0031', '-', '$2y$04$LAV7//bhQFjSntY7QVDiduvCA69O4ZHgcAsK7iVUp1iHSs7MzWMYO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (233, 'Marisa Julinda, drg Sp.Pros', 'Wanita', 'dr0032', '-', '$2y$04$UvlGQ/6V9DEj6X.nYtib9etPNXfqlaggoVlFMaN7/uhBPGfHJXCcy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (234, 'Putri Anugrah Rizki, dr. Sp.THT-KL', 'Wanita', 'dr0033', '-', '$2y$04$AGo.mkTI2ZKI5ep8uz7sEuwfmrOL5AbJtNU6YOCoYk2P4P8B2WGLK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (235, 'Muhammad Firman Sidik,dr, Sp.THT-KL', 'Wanita', 'dr0034', '-', '$2y$04$JV901IZ6x5cRO07JH6.k7eV4AH6hrW6lqWr1TYfN2R68.VgfvD5Nq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (236, 'Yuniarti, Sp.S, dr', 'Wanita', 'dr0035', '-', '$2y$04$6JyARJZW/Twt3DvZ1NEQ/.hp47Uirw2QnrmOcxxztHcYAGBLI5GQ.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (237, 'Budiningtyas, dr, Sp.OG', 'Wanita', 'dr0036', '-', '$2y$04$ykcVo13Puw8z/XMabXtj.umNZnuHGavZHAFKNYZ1cUgF5FY9iZPQa', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (238, 'Erwandi Oktavian,dr , Sp.OG', 'Pria', 'dr0037', '-', '$2y$04$Hr1XN.p0zlmrBIfWmzWj0uaSz/8toXuaB.xLnkGk5vOsNx4ipD9E2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (239, 'Teti Ernawati, dr, Sp.OG', 'Wanita', 'dr0038', '-', '$2y$04$.mnMH70DzNvdfl.yTZgV9uILDyHOpftngh/zsXeLl8hLP5QR5LL36', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (240, 'Diatrie Anindyajathi, dr, M.Sc, Sp.A', 'Wanita', 'dr0039', '-', '$2y$04$ZeDB0Q//g99YOuiyJ9tdiOxfd7ppNzqll.1mCOBz9Ga6S9xqdy5QC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (241, 'Djundu\'ah, dr, Sp.A', 'Wanita', 'dr0040', '-', '$2y$04$d2en97zcWnKccNQ/H8PKdevbTp.daiBBB.24otnV8tgiuwLpnnDbe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (242, 'Anjar Setiani,dr, Sp. A', 'Wanita', 'dr0041', '-', '$2y$04$DfJteRgNmsAJNPU5vp..2esR3FbXY5JH8Z/ZkkqQzd9nvS1YOHEj.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (243, 'Hani Purnamasari, dr, Msi. Med, Sp. A.', 'Wanita', 'dr0042', '-', '$2y$04$iWF3w4AvKWbVra9E3ZOzsuYpm4t7JnLdiEnuW7A80h/x1idM..yuG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (244, 'Tri Faranita, M.Ked (Ped), dr,  SpA', 'Wanita', 'dr0043', '-', '$2y$04$V25KPO.7tkj9iXsxFatV4OA5U.nroPw1HjPMjgBpUkwhEYbbZm3kK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (245, 'Vanda Elfira, dr, SpA', 'Wanita', 'dr0044', '-', '$2y$04$.S/vaWMG60kIMyfuB/GUFOqyzKIReaUo/UrRZJlUjmMOlZIYEi3cy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (246, 'Sjarif Darmawan, dr,  Sp.B', 'Pria', 'dr0045', '-', '$2y$04$AA8vawEZE3D0FY/x1dHOeuV/70ya812KEctfZo6qWbbvvT3JkD8A.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (247, 'Syahfreadi, dr,Sp.B-KBD', 'Pria', 'dr0046', '-', '$2y$04$bEiE/TGYGNkvOeyulTA9z.GAS1O2ytVHFs.QW0bglx3D/oxIiUcfu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (248, 'Aminah Noor, dr,Sp.JP', 'Wanita', 'dr0047', '-', '$2y$04$DupXqt2pyIp864UloZV77u6ibvSUdfe4RcVesjH9G59LLB/monwfC', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (249, 'Luluk Dwi Yuni, dr,Sp.JP, FIHA', 'Wanita', 'dr0048', '-', '$2y$04$5J9Xza5Qo1wehMPFxnoR3OQTy5OBP9OFr4GalughE3HUj8GGqzXvq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (250, 'Syahril Moechtar, dr,Sp.PD', 'Pria', 'dr0049', '-', '$2y$04$WqglrvQFpAsO6yUBXbka9OPZCnq3MXQwBEN.mXuUPEhfyD3F.ptFq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (251, 'Andrina Sophia, dr,Sp.PD', 'Wanita', 'dr0050', '-', '$2y$04$GqaVD7BjC8CjQY9Xrp/x9eDBG.aq55F1uJnjKkZdFvwyRsuE88fEO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (252, 'Deni Kriscahoyo, dr Sp.PD, FINASIM', 'Pria', 'dr0051', '-', '$2y$04$kUUieXMdQym6CS3tduhtlOvleQ09H0mIfLWTbhgb6xw89Rej2fPJS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (253, 'Budi Yuwono, dr, SpPD', 'Pria', 'dr0052', '-', '$2y$04$7kUnqXaMsF.xB/hLH7hKV.ZBm.LEfHAj.iku7dT/Y/lfyFNXb3u6u', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (254, 'Dedi Nofizar, dr,Sp.P', 'Pria', 'dr0053', '-', '$2y$04$s7iFLS0HMqloPTpPF5VnluqzWDGaWzc85r/lJXQbHHJ/fFclHbezi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (255, 'Roosdahlia, dr,Sp.KFR', 'Wanita', 'dr0054', '-', '$2y$04$wEMdaAihoaZAmBFNpARExutXrUqLlmSTE5ffXNLdXEYYoQFuEuOx.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (256, 'Moerdjadjati Angka W, dr,Sp.KFR', 'Wanita', 'dr0055', '-', '$2y$04$lZUT3cvMzzMfcB8eWnZVEuwtoyAQhqWRTs1Fo7KZXdyLa3icU4mgW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (257, 'Halida Meiza, dr,Sp.KK', 'Wanita', 'dr0056', '-', '$2y$04$uuKgklLhLnRYiOhFVWYdje0LGZBzipXmj4rsjvmwOfCX9/MDvWha6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (258, 'Nuraeni Erni Akbar, dr,Sp.KK', 'Wanita', 'dr0057', '-', '$2y$04$AHZJ7/pJ2MYtkLa8hlkolOoL8mrzUBn3qjQtBML.PzKonc4t5.lni', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (259, 'Rahmatina, dr,Sp.KK', 'Wanita', 'dr0058', '-', '$2y$04$zdZN9wqS2X7Y0zpBUf8i3eGRtjIcDihcyjrVjf5SeNFT5AUoyfLu2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (260, 'Umar Mardianto, dr,Sp.M', 'Pria', 'dr0059', '-', '$2y$04$Abo1jqzWj/rsYHvkNBOMDe6kOEMBHn7R7EW9gpz6Xn2dlvugWm94a', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (261, 'Erfira, dr,Sp.M', 'Wanita', 'dr0060', '-', '$2y$04$Isam0CixSdVutg/64o8Yb.okjKbjhnBddzYQNvGG3ivC1MBIQOwZu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (262, 'Pandu Anugrawan, dr,Sp.OT', 'Pria', 'dr0061', '-', '$2y$04$hkZ6Mg4TCCOq10MezsuKKOIbOkcakHtqbyZn/ViW7B66BPbLvHvFO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (263, 'Muhammad Nagieb, dr,Sp.OT', 'Pria', 'dr0062', '-', '$2y$04$WGed3pz4S9xe58epVN9zveIHuzmla8zuQ3SyVlAn.W/hqkDxIuGE6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (264, 'Mery Nitalia, dr,Sp.PK', 'Wanita', 'dr0063', '-', '$2y$04$6ywQCghpahC1OdD/gtkruOMQWBWucyT0F5YTwESflE31OTpx54ema', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (265, 'Dewi Jantika, dr,Sp.PA', 'Wanita', 'dr0064', '-', '$2y$04$axqWs71owpWP41IaxvO5ruXS6IPJ828e0mKi6oJKUGSIGbVmC/WyO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (266, 'Andi Taqwa, dr,Sp.An', 'Pria', 'dr0065', '-', '$2y$04$/fzER2LLpZVSye8PMWJhzeZQMRd4nomyUdeRLM8oatdhfX3ef3Ipq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (267, 'Ahsan Hatman, dr,Sp.An', 'Pria', 'dr0066', '-', '$2y$04$6fRpshQzSwF1ZhFhGhm0ZedfN3DMrmhFD3nON8nYPltSTD/tw1Qjy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (268, 'R.Bambang Heriyanto, dr,Sp.An', 'Pria', 'dr0067', '-', '$2y$04$P.9mQjQU1Ebs0GpesHCNmOmqv5YoO5UkQkDLPIV5olDKu7HQh70sW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (269, 'Chandra Tirta Setiawan Achmad, dr,Sp.An', 'Pria', 'dr0068', '-', '$2y$04$wJxgl5YndCYJgnN6Kz1/KOcSzn5DR77ajInZo5VSxRAieMX7g4us.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (270, 'Lestari Wartiningsih Soewarto, dr,Sp.Rad', 'Wanita', 'dr0069', '-', '$2y$04$KfIB..az825vQvInsIFwYe1djzD9L8skWVRyHnVymSeTho8oTxKXO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (271, 'Ayat Rahayu, dr,Sp.Rad', 'Pria', 'dr0070', '-', '$2y$04$2RBYabv.svdJmbFk1dGqDOQcKEL8AyqXhZC0OqzeWcxI7A0QhRbvW', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (272, 'Ary Widia Atmoko, dr,Sp. Rad', 'Pria', 'dr0071', '-', '$2y$04$K8xoPbXwdqNb/JEewAqpfeFGkKmnj3rL/LSsFlqoES6W6cvrvak7O', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (273, 'Ahmad Asroruddin, dr,Sp.U', 'Pria', 'dr0072', '-', '$2y$04$LdqNbh8aE5VQYgls.tTS3Ohd6M344l0REdZFNp.wsM4ZFundad4ZG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (274, 'Gina Swastika, dr,IBCLC, CIMI', 'Wanita', 'dr0073', '-', '$2y$04$2lrjVrL2cgRlTTh.D2eJCO1mlrZ8SwVtoows6i5aCmCRe0O0FMWZS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (275, 'Annisa Putri, dr', 'Wanita', 'dr0074', '-', '$2y$04$KILVxKqzuezHS/KFJj0hHulC1N.XUIxVPaNQ4uv04FvqJsFfG0X2C', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (276, 'Mirna Ariyanti, dr', 'Wanita', 'dr0075', '-', '$2y$04$UAAZMGlErL53SCH67JV8ye6Ykgfdx4wwVnj6N9.ytPQ5voPdrgNge', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (277, 'Tanty Riyanti, dr', 'Wanita', 'dr0076', '-', '$2y$04$nRWV.HoDTYH.H.J6Z6badeNU4ljkhB9w1RqCwj1/hp4AwR0z2FpRi', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (278, 'Sarah Kamilah, dr', 'Wanita', 'dr0077', '-', '$2y$04$NP2vFIsZ4GeqHk3LhipWmurGH0syRdttvDxFcIWIhzq2t5A2tOC9e', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (279, 'Lusia Arniviolita, dr', 'Wanita', 'dr0078', '-', '$2y$04$irHYrjHnVzQeYDMTezXcg.von8LszH5zoDBTSRIkvGfjmXCptCyOK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (280, 'Ratri Saumi, dr,Sp.GK', 'Wanita', 'dr0079', '-', '$2y$04$yM7tUgojU4GtNa/pkN2ZD.p9Zxaco.wx6WrOdkAGHae4VcoeiIUam', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (281, 'Annie Lutfia, dr', 'Wanita', 'dr0080', '-', '$2y$04$zrt3HnwFGsRPYdqnCYJh6uWqhtcUWPURwgSsSlTuV2xZQppK3z0U.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (282, 'Mohamad Yanuar Fajar, dr, Sp.P, FISR, FAPSR, MARS', 'Pria', 'dr0081', '-', '$2y$04$kKrSr7ftQsGwXiXG2Ua6leYJ//52b7tU0/XrWFRZNSIAwbZaTxFou', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (283, 'Annisya Muharty, drg, Sp.BM', 'Wanita', 'dr0082', '-', '$2y$04$WH5.DKSz/ajJ2TTej9EeduLVv58Ns0fN/7RczE4a0CPdL2U7MT2qG', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (284, 'Savaatun', 'Wanita', 'rs0203', 'Kasir', '$2y$04$hdolezR47V9U18.pu4WAKewiKM2wkpvzXqefr8dIn0BzAIGae1pka', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (285, 'Seprializa, dr. Sp.OG', 'Wanita', 'dr0083', 'Sp Kandungan', '$2y$04$ooFix0qkDUl5TgTIBhe5RulYVySnveTYg3Nm.Zql.Fzd47YuH.4qS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (286, 'Gita Ruryatesa, dr. Sp.OG', 'Wanita', 'dr0084', 'Sp Kandungan', '$2y$04$PAWASave6z5SQLqfte5kB.tFS.vnceBDY0IcgG5sYuBe/paFvtwUa', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (287, 'Subhan', 'Pria', 'rs0199', 'Kasir', '$2y$04$cEkgIkOPHMw91lzFR2wNlOB80pn2ry1SgWWxWhPZYR7QSRacGuUIu', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (288, 'Abdul Kodir', 'Pria', 'pr0001', '-', '$2y$04$B6l5a.rDGtDlKpm0gfB4Ee7xMgGfqP4y2eWokmhkZIGmd3lMxY7di', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (289, 'M Alwan Wijaya', 'Pria', 'pr0002', '-', '$2y$04$jbwxIBOr1TktopUpuQPDMOnSlH75QIPKWtZYqJwo2WCnNa2jnjJu6', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (290, 'Retna Susiana', 'Wanita', 'rs0200', 'Bidan BKIA', '$2y$04$gxds.zvi0aA49n0eSK0.Se8hVzd7pIDsHhFNROiOf/2.vY3gjbfQy', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (291, 'Yulisa Fareni', 'Wanita', 'rs0201', 'Bidan BKIA', '$2y$04$sBwsYdmGjaFBaWVMBmXW6eXtM49kkHJFCb3IPGCLY4NKgOtm0Sw82', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (292, 'Febry Wahyuningtyas', 'Wanita', 'rs0207', 'Bidan BKIA', '$2y$04$/KGI.lCM8Kn75P9Q8bYwZekXiX/lO9d5cYxtQqMC2cEDrA4BQmgJm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (293, 'Nova Anggraini', 'Wanita', 'rs0208', '-', '$2y$04$HatVC2KOi8hnyLAvtbB16.QGwWzKxISDnpaHKbfb4AGauATnyddSm', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (294, 'Holid Mawardi', 'Pria', 'rs0209', '-', '$2y$04$VIXpgTHv1Hn2fqihkn/eTO9NEx/2ogcRbCLnr9hbr7NaEaumTvJLe', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (295, 'Siti Atikah', 'Wanita', 'rs0210', '-', '$2y$04$dm.1gaZpSa/Hyv9aYPP92O7QoPh5QeqMGnez4SRJ1un5AYmAT17MO', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (296, 'Hana Rinaldi', 'Wanita', 'rs0211', '-', '$2y$04$ASmAHNAdhgg8JFtRJ3xXN.dCMjFSuPM68h6OE1gVzjTrH0rtP0nQq', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (297, 'Erwandi', 'Pria', 'rs0212', '-', '$2y$04$6fIazGTIiI5kNBrR26ChneQMXkzuqAp5TYKlVBGCoPn7zI7vhDS7u', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (298, 'Abdul Rohman', 'Pria', 'rs0213', '-', '$2y$04$dqQTday3jwFBJ3IiKbmB5.qpMuLrbHpN8mNWXGiQTqhH8KMOe7ESK', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (299, 'Adhy Kurniawan, dr. Sp.JP', 'Pria', 'dr0087', 'Sp Jantung', '$2y$04$HF6Db1bhoETB5IFK1M6JDuxW0QXiu7IpySUM9bcQVUiUe.It1eD8O', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (300, 'Yayat', 'Pria', 'rs0214', 'Perawat Luar', '$2y$04$8z1XSNrGnWEUO.eq/CtkJO44RkxA/eamixwCDaj89kSEdU18AbRIS', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (301, 'Joko', 'Pria', 'rs0215', 'Perawat Luar', '$2y$04$hPt3PwS7Wjifpjp2Cq2wx.zf6aGzOYcXfbwtM.DDWbJPP0Vmk8pby', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (302, 'Badi', 'Pria', 'rs0216', 'Perawat Luar', '$2y$04$Z309FFIIEu2DdiYcVKbXxOSlc3Ut4VT40Y4gm2ESXyKr6sJqFoV7.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (303, 'Yuni Elia', 'Wanita', 'rs0217', 'Kasir', '$2y$04$6QbXKe41mYTLnSdHUvk4y.G8Gap8oZPfPeOYXN38v.lxKNSYxTJ22', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (304, 'Ahmad Ichsan, dr. Sp. Saraf', 'Pria', 'dr0088', 'Sp Saraf', '$2y$04$SXuRSOPYxKu5dt6J9RV1aOpmSveL4coRl08r9yIpxlkOIcDq4md7.', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (305, 'Salma Abdul Wadud Kasyful Anwar, dr.', 'Wanita', 'dr0089', 'dr Umum', '$2y$04$5t9LIh/AG4QMOesaTsvn.u2R2iXE03q8G0Sbszwu8cccofegIQK52', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (306, 'Eni Efanti', 'Wanita', 'rs0218', 'Manager', '$2y$04$uafeSuqXExKe9jJJUaOj1u3kn8QFKi7WUDQ9tPLI3OfEvpMOZfUd2', 'LOGO_RS1.png', 3, 'y');
INSERT INTO `tbl_user` VALUES (307, 'Nurfajri', 'Pria', 'ajirssh', 'Keuangan', '$2y$04$KdSQ7TYZsAhfaZWtQ/n3K.QsuRUhCxaQ0JbWd.lz9aeem1tl0t8AK', 'LOGO_RS1.png', 3, 'y');

-- ----------------------------
-- Table structure for tbl_user_level
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user_level`;
CREATE TABLE `tbl_user_level`  (
  `id_user_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_user_level`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user_level
-- ----------------------------
INSERT INTO `tbl_user_level` VALUES (1, 'Super Administrator');
INSERT INTO `tbl_user_level` VALUES (3, 'User/Karyawan');

SET FOREIGN_KEY_CHECKS = 1;
