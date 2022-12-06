-- MySQL Script generated by MySQL Workbench
-- 24/11/2022
-- Model: New Model Version: 1.0
-- MySQL Workbench Forward Engineering

-- SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
-- SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Database `CANTIN`
-- -----------------------------------------------------

DROP DATABASE IF EXISTS CANTIN;
CREATE DATABASE CANTIN;
USE CANTIN;


-- -----------------------------------------------------
-- Tables
-- -----------------------------------------------------


-- Table Nguoi dung

DROP TABLE IF EXISTS NGUOI_DUNG;

CREATE TABLE IF NOT EXISTS NGUOI_DUNG 
(
  USERNAME    varchar(20),
  PASSWORD    varchar(60) NOT NULL,
  ROLE        varchar(11) NOT NULL,
  IMAGE       text,
  HOTEN       varchar(30),
  GIOITINH    char(3),
  SDT         varchar(11),
  NGAYSINH    DATE,
  EMAIL       varchar(50),
  primary key (USERNAME)
);


-- Table Don hang

DROP TABLE IF EXISTS DON_HANG;

CREATE TABLE IF NOT EXISTS DON_HANG 
(
  MADON       char(5),
  MANGUOIDUNG    varchar(20),
  THOIGIAN    DATETIME,
  primary key (MADON, MANGUOIDUNG)
);


-- Table Mat hang

DROP TABLE IF EXISTS MAT_HANG;

CREATE TABLE IF NOT EXISTS MAT_HANG
(
  MAHANG   char(5),
  TENHANG  varchar(20),
  IMAGE    text,
  LOAIHANG varchar(10),
  DONGIA   int,
  primary key (MAHANG)
);


-- Table Phieu nhap hang

DROP TABLE IF EXISTS PHIEU_NHAP_HANG;

CREATE TABLE IF NOT EXISTS PHIEU_NHAP_HANG
(
  MAPHIEUNHAP char(5),
  NGAYNHAP    DATE,
  DIACHIKHO   varchar(50),
  primary key (MAPHIEUNHAP)
);


-- Table Chi tiet nhap hang

DROP TABLE IF EXISTS CT_NHAP;

CREATE TABLE IF NOT EXISTS CT_NHAP
(
  MAHANG      char(5),
  MAPHIEUNHAP char(5),
  SOLUONG     int,
  primary key (MAHANG, MAPHIEUNHAP)
);


-- Table Chi tiet don hang

DROP TABLE IF EXISTS CT_DON;

CREATE TABLE IF NOT EXISTS CT_DON
(
  MADON     char(5),
  MAHANG    char(5),
  SOLUONG   int,
  THANHTIEN int,
  primary key (MADON, MAHANG)
);


-- -----------------------------------------------------
-- Foreign Key
-- -----------------------------------------------------

ALTER TABLE DON_HANG
ADD CONSTRAINT FK_DON_HANG__NGUOI_DUNG 
FOREIGN KEY (MANGUOIDUNG) REFERENCES NGUOI_DUNG(USERNAME);

ALTER TABLE CT_DON
ADD CONSTRAINT FK_CT_DON__DON_HANG
FOREIGN KEY (MADON) REFERENCES DON_HANG(MADON);

ALTER TABLE CT_DON
ADD CONSTRAINT FK_CT_DON__MAT_HANG
FOREIGN KEY (MAHANG) REFERENCES MAT_HANG(MAHANG);

ALTER TABLE CT_NHAP
ADD CONSTRAINT FK_CT_NHAP__MAT_HANG
FOREIGN KEY (MAHANG) REFERENCES MAT_HANG(MAHANG);

ALTER TABLE CT_NHAP
ADD CONSTRAINT FK_CT_NHAP__PHIEU_NHAP_HANG
FOREIGN KEY (MAPHIEUNHAP) REFERENCES PHIEU_NHAP_HANG(MAPHIEUNHAP);


-- -----------------------------------------------------
-- Insert Data
-- -----------------------------------------------------
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('20120485', 'abc123456', 'Khách hàng', NULL, 'Lê Văn Hùng', 'Nam', '0123456789', '2002-12-02', '20120485@yahoo.com');
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('20120244', 'abc123456', 'Khách hàng', NULL, 'Hoàng Tuấn Anh', 'Nam', '0123653789', '2002-03-04', '20120244@yahoo.com');
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('20120251', 'abc123456', 'Khách hàng', NULL, 'Trần Đức Anh', 'Nam', '0126456049', '2002-10-09', NULL);
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('20120130', 'abc123456', 'Khách hàng', NULL, 'Đinh Thị Hoàng Linh', 'Nữ', '0126846789', NULL, '20120130@yahoo.com');
-- Giao vien/Nhan vien
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('pldnhat', 'abc123456', 'Khách hàng', NULL, 'Phan Lê Duy Nhật', 'Nam', '0875456789', '1986-07-02', 'pldnhat@yahoo.com');
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('tlskiet', 'abc123456', 'Khách hàng', NULL, 'Trần Lê Sơn Kiệt', 'Nam', NULL, '1990-12-02', 'tlskiet@yahoo.com');
-- Quan ly / thu ngan
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('nttung', 'abc123456', 'Quản lý', NULL, 'Nguyễn Thanh Tùng', 'Nam', '0813456019', '1999-07-02', 'nttung@yahoo.com');
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('tnnam', 'abc123456', 'Quản lý', NULL, 'Trần Nhật Nam', 'Nam', '0813452057', '1998-07-02', 'nttung@yahoo.com');
INSERT INTO `nguoi_dung` (`USERNAME`, `PASSWORD`, `ROLE`, `IMAGE`, `HOTEN`, `GIOITINH`, `SDT`, `NGAYSINH`, `EMAIL`) VALUES ('lmngoc', 'abc123456', 'Thu ngân', NULL, 'Lê Minh Ngọc', 'Nữ', NULL, '2000-10-05', 'lmngoc@yahoo.com');

	
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH001', '../images/svg/menu/food/food01.svg', 'Nui xào bò', 'Đồ ăn', '30000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH002', '../images/svg/menu/food/food02.svg', 'Mỳ Ý', 'Đồ ăn', '30000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH003', '../images/svg/menu/food/food03.svg', 'Bún bò', 'Đồ ăn', '30000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH004', '../images/svg/menu/food/food04.svg', 'Hủ tiếu', 'Đồ ăn', '30000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH005', '../images/svg/menu/food/food05.svg', 'Cơm trưa', 'Đồ ăn', '30000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH006', '../images/svg/menu/food/food06.svg', 'Bánh mì', 'Đồ ăn', '15000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH007', '../images/svg/menu/drink/drink01.svg', 'Trà ô long Tea Plus', 'Thức uống', '10000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH008', '../images/svg/menu/drink/drink02.svg', 'Coca cola', 'Thức uống', '10000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH009', '../images/svg/menu/drink/drink03.svg', 'Trà xanh C2', 'Thức uống', '10000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH010', '../images/svg/menu/drink/drink04.svg', 'Nước suối', 'Thức uống', '5000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH011', '../images/svg/menu/drink/drink05.svg', 'Trà xanh không độ', 'Thức uống', '10000');
INSERT INTO `mat_hang` (`MAHANG`, `IMAGE`, `TENHANG`, `LOAIHANG`, `DONGIA`) VALUES ('MH012', '../images/svg/menu/drink/drink06.svg', 'Sprite', 'Thức uống', '10000');

INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD001', '20120244', '2022-11-01 10:11:10');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD002', '20120485', '2022-11-01 13:12:51');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD003', '20120251', '2022-11-02 12:13:52');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD004', '20120130', '2022-11-03 11:14:53');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD005', '20120244', '2022-11-04 10:15:36');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD006', '20120485', '2022-11-05 09:16:26');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD007', 'pldnhat', '2022-11-06 06:17:40');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD008', '20120130', '2022-11-08 17:18:48');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD009', 'tlskiet', '2022-11-09 15:19:20');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD010', '20120244', '2022-11-10 13:10:24');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD011', '20120251', '2022-11-11 12:11:14');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD012', '20120485', '2022-11-12 08:12:27');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD013', 'pldnhat', '2022-11-13 09:10:40');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD014', '20120244', '2022-11-15 07:04:47');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD015', '20120130', '2022-11-16 13:26:20');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD016', '20120485', '2022-11-17 10:47:30');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD017', '20120244', '2022-11-18 14:37:25');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD018', '20120130', '2022-11-19 16:58:45');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD019', 'pldnhat', '2022-11-20 17:26:47');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD020', '20120244', '2022-11-22 13:47:50');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD021', '20120251', '2022-11-23 10:26:50');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD022', '20120244', '2022-11-24 14:38:50');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD023', '20120485', '2022-11-25 09:26:20');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD024', '20120130', '2022-11-26 07:35:40');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD025', 'pldnhat', '2022-11-27 06:46:50');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD026', '20120130', '2022-11-29 13:16:30');
INSERT INTO `don_hang` (`MADON`, `MANGUOIDUNG`, `THOIGIAN`) VALUES ('MD027', 'tlskiet', '2022-11-30 11:04:50');

INSERT INTO `ct_don` (`MADON`, `MAHANG`, `SOLUONG`, `THANHTIEN`) VALUES ('MD002', 'MH007', '2', '20000');