/*
SQLyog Ultimate v9.02 
MySQL - 5.5.5-10.1.26-MariaDB : Database - ultradb
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ultradb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ultradb`;


DELIMITER $$
--
-- Procedures
--
CREATE PROCEDURE `SP_numbering` (IN `kode_cabang` VARCHAR(25), `kode_cob` VARCHAR(25), `tahun_priod` INT)  BEGIN
  DECLARE cek, last_num INT;
  SET cek = (SELECT COUNT(running_number) FROM numbering WHERE tahun = tahun_priod);
  SET last_num = (SELECT MAX(running_number) FROM numbering WHERE tahun= tahun_priod)+1;
  IF (cek > 0) THEN
    UPDATE numbering SET running_number = last_num WHERE tahun = tahun_priod;
  ELSE
    INSERT INTO numbering (tahun,running_number) VALUES (tahun_priod,'1');
  END IF; 
  
  
  SELECT CONCAT(kode_cabang, "-", kode_cob, LPAD(MAX(running_number),7,'0'),"/",tahun,"/0/0") AS number FROM numbering WHERE tahun= tahun_priod;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `m_peserta`
--

CREATE TABLE `m_peserta` (
  `id_peserta` int(11) NOT NULL,
  `noref` varchar(100) DEFAULT NULL,
  `custname` varchar(100) DEFAULT NULL,
  `adrs` varchar(100) DEFAULT NULL,
  `jobtitle` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `premi` varchar(100) DEFAULT NULL,
  `tsi` varchar(100) DEFAULT NULL,
  `transdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `priod` int(3) DEFAULT NULL,
  `type` char(2) DEFAULT NULL,
  `policyinsuranceno` varchar(255) DEFAULT NULL,
  `policyurl` varchar(255) DEFAULT NULL,
  `statuspolicy` varchar(255) DEFAULT NULL,
  `nobatch` int(2) DEFAULT NULL,
  `id_status_transaksi` int(3) DEFAULT '1',
  `created_by` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_peserta`
--

INSERT INTO `m_peserta` (`id_peserta`, `noref`, `custname`, `adrs`, `jobtitle`, `dob`, `ktp`, `premi`, `tsi`, `transdate`, `enddate`, `priod`, `type`, `policyinsuranceno`, `policyurl`, `statuspolicy`, `nobatch`, `id_status_transaksi`, `created_by`, `created_date`) VALUES
(10, '19644870-0', 'ANNISA NANDA FITRIA', 'JL. ABC ', 'Pegawai Swasta', '1996-11-22', '3672016211960003', '92580', '3086000', '2018-06-16', '2019-06-16', 365, 'A', NULL, 'http://localhost:8080/rndservices/dokumen/certificate/19644870-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:56'),
(11, '19644929-0', 'SELAMET BEJO', 'JL. DEF', 'Pegawai Swasta', '1991-06-15', '3172021506910007', '35775', '1431000', '2018-06-16', '2018-12-13', 180, 'A', NULL, NULL, NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:57'),
(12, '19644947-0', 'WAHYUDIN', 'JL. GHI', 'Pegawai Swasta', '1991-09-11', '3217121109910001', '84700', '3388000', '2018-06-16', '2018-12-13', 180, 'A', NULL, NULL, NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:57'),
(13, '19645003-0', 'FIRMANSYAH', 'JL. JKL', 'Pegawai Swasta', '1990-09-19', '3217121109910002', '63675', '2547000', '2018-06-16', '2018-12-13', 180, 'A', NULL, NULL, NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:57'),
(14, '19645011-0', 'KURNIAWAN', 'JL.MNO', 'Pegawai Swasta', '1994-02-23', '3217121109910003', '50350', '2014000', '2018-06-16', '2018-12-13', 180, 'A', NULL, NULL, NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:57'),
(15, '19645332-0', 'HELMY ANDIRA', 'JL. PQR', 'Pegawai Swasta', '1984-06-22', '3217121109910004', '32475', '1299000', '2018-06-16', '2018-12-13', 180, 'A', NULL, NULL, NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:57'),
(16, '19645448-0', 'MAYA', 'JL. STU', 'Pegawai Swasta', '1988-02-21', '3217121109910005', '18625', '745000', '2018-06-16', '2018-12-13', 180, 'A', NULL, NULL, NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:57'),
(17, '19645740-0', 'AHMAD ISNEDI', 'JL. VWX', 'Pegawai Swasta', '1984-08-13', '3217121109910006', '32475', '1299000', '2018-06-16', '2018-12-13', 180, 'A', NULL, NULL, NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:57'),
(18, '19645749-0', 'MUHAMMAD ALWAN AFIF', 'JL. YZ0', 'Pegawai Swasta', '1997-03-27', '3217121109910007', '32475', '1299000', '2018-06-16', '2018-12-13', 180, 'A', NULL, NULL, NULL, 1, 1, 'Administrator Administrator', '2019-01-27 05:13:58'),
(19, '19644870-0', 'ANNISA NANDA FITRIA', 'JL. ABC ', 'Pegawai Swasta', '1996-11-22', '3672016211960003', '92580', '3086000', '2018-06-16', '2019-06-16', 365, 'A', '00-K0000001/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19644870-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:36'),
(20, '19644929-0', 'SELAMET BEJO', 'JL. DEF', 'Pegawai Swasta', '1991-06-15', '3172021506910007', '35775', '1431000', '2018-06-16', '2018-12-13', 180, 'A', '00-K0000002/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19644929-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:39'),
(21, '19644947-0', 'WAHYUDIN', 'JL. GHI', 'Pegawai Swasta', '1991-09-11', '3217121109910001', '84700', '3388000', '2018-06-16', '2018-12-13', 180, 'A', '00-K0000003/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19644947-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:42'),
(22, '19645003-0', 'FIRMANSYAH', 'JL. JKL', 'Pegawai Swasta', '1990-09-19', '3217121109910002', '63675', '2547000', '2018-06-16', '2018-12-13', 180, 'A', '00-K0000004/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19645003-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:45'),
(23, '19645011-0', 'KURNIAWAN', 'JL.MNO', 'Pegawai Swasta', '1994-02-23', '3217121109910003', '50350', '2014000', '2018-06-16', '2018-12-13', 180, 'A', '00-K0000005/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19645011-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:48'),
(24, '19645332-0', 'HELMY ANDIRA', 'JL. PQR', 'Pegawai Swasta', '1984-06-22', '3217121109910004', '32475', '1299000', '2018-06-16', '2018-12-13', 180, 'A', '00-K0000006/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19645332-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:51'),
(25, '19645448-0', 'MAYA', 'JL. STU', 'Pegawai Swasta', '1988-02-21', '3217121109910005', '18625', '745000', '2018-06-16', '2018-12-13', 180, 'A', '00-K0000007/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19645448-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:54'),
(26, '19645740-0', 'AHMAD ISNEDI', 'JL. VWX', 'Pegawai Swasta', '1984-08-13', '3217121109910006', '32475', '1299000', '2018-06-16', '2018-12-13', 180, 'A', '00-K0000008/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19645740-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:57'),
(27, '19645749-0', 'MUHAMMAD ALWAN AFIF', 'JL. YZ0', 'Pegawai Swasta', '1997-03-27', '3217121109910007', '32475', '1299000', '2018-06-16', '2018-12-13', 180, 'A', '00-K0000009/2018/0/0', 'http://localhost:8080/rndservices/dokumen/certificate/19645749-0.pdf', NULL, 1, 1, 'Administrator Administrator', '2019-02-04 03:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `numbering`
--

CREATE TABLE `numbering` (
  `id_numbering` int(5) NOT NULL,
  `tahun` char(4) DEFAULT NULL,
  `running_number` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numbering`
--

INSERT INTO `numbering` (`id_numbering`, `tahun`, `running_number`) VALUES
(1, '2018', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `id_cabang` int(5) DEFAULT NULL,
  `kc_kcp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `id_cabang`, `kc_kcp`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$gcQ3OU5mRUEVpvTUSVg9o.YjfG4FeOSxssJzEet16mkZ.678hlbjy', '', 'yflash747@gmail.com', '', 'lFbJNLFuhO7DAWUXI.XYYefb29f2e992b57e17f7', 1548604736, 'PUmyfeE3.DGGgi9mjaTSke', 1268889823, 1549247534, 1, 'Administrator', 'Administrator', 'Administrator', '082114962243', 68, '013');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_peserta`
--
ALTER TABLE `m_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `numbering`
--
ALTER TABLE `numbering`
  ADD PRIMARY KEY (`id_numbering`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_peserta`
--
ALTER TABLE `m_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `numbering`
--
ALTER TABLE `numbering`
  MODIFY `id_numbering` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;
