-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/09/2025 às 08:46
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_integrador`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_de_peso`
--

CREATE TABLE `cadastro_de_peso` (
  `id` int(11) NOT NULL,
  `peso` decimal(4,2) DEFAULT NULL,
  `tipo_do_material` varchar(255) DEFAULT NULL,
  `id_funcionarios` int(11) DEFAULT NULL,
  `id_material` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_de_peso`
--

INSERT INTO `cadastro_de_peso` (`id`, `peso`, `tipo_do_material`, `id_funcionarios`, `id_material`, `data`) VALUES
(1, 1.00, 'Reciclavel', 4, NULL, '2025-09-21'),
(2, 1.00, 'Não Reciclavel', 5, NULL, '2025-09-20'),
(3, 1.00, 'Reciclavel', 1, NULL, '2025-01-10'),
(4, 1.00, 'Não Reciclavel', 2, NULL, '2025-02-15'),
(5, 1.00, 'Reciclavel', 3, NULL, '2025-03-20'),
(6, 1.00, 'Não Reciclavel', 4, NULL, '2025-04-25'),
(7, 1.00, 'Reciclavel', 5, NULL, '2025-05-30'),
(8, 1.00, 'Não Reciclavel', 6, NULL, '2025-06-04'),
(9, 1.00, 'Reciclavel', 7, NULL, '2025-07-09'),
(10, 1.00, 'Não Reciclavel', 1, NULL, '2025-08-14'),
(11, 1.00, 'Reciclavel', 2, NULL, '2025-09-18'),
(12, 1.00, 'Não Reciclavel', 3, NULL, '2025-10-22'),
(13, 1.00, 'Reciclavel', 4, NULL, '2025-11-27'),
(14, 1.00, 'Não Reciclavel', 5, NULL, '2025-12-02'),
(15, 1.00, 'Reciclavel', 6, NULL, '2025-03-11'),
(16, 1.00, 'Não Reciclavel', 7, NULL, '2025-04-16'),
(17, 1.00, 'Reciclavel', 1, NULL, '2025-05-21'),
(18, 1.00, 'Não Reciclavel', 2, NULL, '2025-06-26'),
(19, 1.00, 'Reciclavel', 3, NULL, '2025-07-31'),
(20, 1.00, 'Não Reciclavel', 4, NULL, '2025-08-05'),
(21, 1.00, 'Reciclavel', 5, NULL, '2025-09-09'),
(22, 1.00, 'Não Reciclavel', 6, NULL, '2025-10-14'),
(23, 1.00, 'Reciclavel', 7, NULL, '2025-11-18'),
(24, 1.00, 'Não Reciclavel', 1, NULL, '2025-12-23'),
(25, 1.00, 'Reciclavel', 2, NULL, '2025-01-15'),
(26, 1.00, 'Não Reciclavel', 3, NULL, '2025-02-20'),
(27, 1.00, 'Reciclavel', 4, NULL, '2025-03-26'),
(28, 1.00, 'Não Reciclavel', 5, NULL, '2025-04-30'),
(29, 1.00, 'Reciclavel', 6, NULL, '2025-05-05'),
(30, 1.00, 'Não Reciclavel', 7, NULL, '2025-06-10'),
(31, 1.00, 'Reciclavel', 1, NULL, '2025-07-15'),
(32, 1.00, 'Não Reciclavel', 2, NULL, '2025-08-20'),
(33, 1.00, 'Reciclavel', 3, NULL, '2025-09-24'),
(34, 1.00, 'Não Reciclavel', 4, NULL, '2025-10-29'),
(35, 1.00, 'Reciclavel', 5, NULL, '2025-11-03'),
(36, 1.00, 'Não Reciclavel', 6, NULL, '2025-12-08'),
(37, 1.00, 'Reciclavel', 7, NULL, '2025-01-13'),
(38, 1.00, 'Não Reciclavel', 1, NULL, '2025-02-17'),
(39, 1.00, 'Reciclavel', 2, NULL, '2025-03-23'),
(40, 1.00, 'Não Reciclavel', 3, NULL, '2025-04-27'),
(41, 1.00, 'Reciclavel', 4, NULL, '2025-05-02'),
(42, 1.00, 'Não Reciclavel', 5, NULL, '2025-06-07'),
(43, 1.00, 'Reciclavel', 6, NULL, '2025-07-12'),
(44, 1.00, 'Não Reciclavel', 7, NULL, '2025-08-17'),
(45, 1.00, 'Reciclavel', 1, NULL, '2025-09-21'),
(46, 1.00, 'Não Reciclavel', 2, NULL, '2025-10-26'),
(47, 1.00, 'Reciclavel', 3, NULL, '2025-11-30'),
(48, 1.00, 'Não Reciclavel', 4, NULL, '2025-12-05'),
(49, 1.00, 'Reciclavel', 5, NULL, '2025-01-09'),
(50, 1.00, 'Não Reciclavel', 6, NULL, '2025-02-14'),
(51, 1.00, 'Reciclavel', 7, NULL, '2025-03-19'),
(52, 1.00, 'Não Reciclavel', 1, NULL, '2025-04-23'),
(53, 1.00, 'Reciclavel', 2, NULL, '2025-05-28'),
(54, 1.00, 'Não Reciclavel', 3, NULL, '2025-06-02'),
(55, 1.00, 'Reciclavel', 4, NULL, '2025-07-07'),
(56, 1.00, 'Não Reciclavel', 5, NULL, '2025-08-12'),
(57, 1.00, 'Reciclavel', 6, NULL, '2025-09-16'),
(58, 1.00, 'Não Reciclavel', 7, NULL, '2025-10-21'),
(59, 1.00, 'Reciclavel', 1, NULL, '2025-11-25'),
(60, 1.00, 'Não Reciclavel', 2, NULL, '2025-12-30'),
(61, 1.00, 'Reciclavel', 3, NULL, '2025-01-04'),
(62, 1.00, 'Não Reciclavel', 4, NULL, '2025-02-08'),
(63, 1.00, 'Reciclavel', 5, NULL, '2025-03-15'),
(64, 1.00, 'Não Reciclavel', 6, NULL, '2025-04-19'),
(65, 1.00, 'Reciclavel', 7, NULL, '2025-05-24'),
(66, 1.00, 'Não Reciclavel', 1, NULL, '2025-06-28'),
(67, 1.00, 'Reciclavel', 2, NULL, '2025-07-03'),
(68, 1.00, 'Não Reciclavel', 3, NULL, '2025-08-08'),
(69, 1.00, 'Reciclavel', 4, NULL, '2025-09-12'),
(70, 1.00, 'Não Reciclavel', 5, NULL, '2025-10-17'),
(71, 1.00, 'Reciclavel', 6, NULL, '2025-11-21'),
(72, 1.00, 'Não Reciclavel', 7, NULL, '2025-12-26'),
(73, 1.00, 'Reciclavel', 1, NULL, '2025-01-30'),
(74, 1.00, 'Não Reciclavel', 2, NULL, '2025-02-04'),
(75, 1.00, 'Reciclavel', 3, NULL, '2025-03-11'),
(76, 1.00, 'Não Reciclavel', 4, NULL, '2025-04-15'),
(77, 1.00, 'Reciclavel', 5, NULL, '2025-05-20'),
(78, 1.00, 'Não Reciclavel', 6, NULL, '2025-06-24'),
(79, 1.00, 'Reciclavel', 7, NULL, '2025-07-29'),
(80, 1.00, 'Não Reciclavel', 1, NULL, '2025-08-02'),
(81, 1.00, 'Reciclavel', 2, NULL, '2025-09-07'),
(82, 1.00, 'Não Reciclavel', 3, NULL, '2025-10-12'),
(83, 1.00, 'Reciclavel', 4, NULL, '2025-11-16'),
(84, 1.00, 'Não Reciclavel', 5, NULL, '2025-12-21'),
(85, 1.00, 'Reciclavel', 6, NULL, '2025-01-25'),
(86, 1.00, 'Não Reciclavel', 7, NULL, '2025-02-28'),
(87, 1.00, 'Reciclavel', 1, NULL, '2025-03-05'),
(88, 1.00, 'Não Reciclavel', 2, NULL, '2025-04-09'),
(89, 1.00, 'Reciclavel', 3, NULL, '2025-05-14'),
(90, 1.00, 'Não Reciclavel', 4, NULL, '2025-06-18'),
(91, 1.00, 'Reciclavel', 5, NULL, '2025-07-23'),
(92, 1.00, 'Não Reciclavel', 6, NULL, '2025-08-27'),
(93, 1.00, 'Reciclavel', 7, NULL, '2025-09-01'),
(94, 1.00, 'Não Reciclavel', 7, NULL, '2025-02-28'),
(95, 1.00, 'Reciclavel', 1, NULL, '2025-03-05'),
(96, 1.00, 'Não Reciclavel', 2, NULL, '2025-04-09'),
(97, 1.00, 'Reciclavel', 3, NULL, '2025-05-14'),
(98, 1.00, 'Não Reciclavel', 4, NULL, '2025-06-18'),
(99, 1.00, 'Reciclavel', 5, NULL, '2025-07-23'),
(100, 1.00, 'Não Reciclavel', 6, NULL, '2025-08-27'),
(101, 0.00, 'Não Reciclável', 3, NULL, '2025-09-17'),
(102, 0.00, 'Reciclável', 5, NULL, '2025-01-09'),
(103, 0.00, 'Reciclável', 3, NULL, '2025-09-01'),
(104, 0.00, 'Reciclável', 4, NULL, '2025-09-01'),
(105, 0.00, 'Reciclável', 4, NULL, '2025-09-01'),
(106, 0.35, 'Reciclável', 4, NULL, '2025-09-01'),
(107, 0.35, 'Reciclável', 4, NULL, '2025-09-01'),
(108, 0.35, 'Reciclável', 4, NULL, '2025-09-01'),
(109, 0.23, 'Reciclável', 2, NULL, '2025-09-02'),
(110, 0.76, 'Não Reciclável', 6, NULL, '2025-09-02'),
(111, 0.25, '1', 3, NULL, '2025-09-02'),
(112, 0.23, '1', 4, NULL, '2025-09-02'),
(113, 0.24, '1', 3, NULL, '2025-09-02'),
(114, 0.23, '1', 2, NULL, '2025-09-02'),
(115, 0.12, NULL, 5, 1, '2025-09-02'),
(116, 0.00, NULL, 6, 2, '2025-09-02'),
(117, 1.00, NULL, 6, 2, '2025-09-02'),
(118, 1.00, NULL, 5, 1, '2025-09-03'),
(119, 0.23, NULL, 6, 2, '2025-09-19'),
(120, 0.05, NULL, 2, 1, '2025-09-03'),
(122, 0.23, NULL, 7, 1, '2025-09-03'),
(123, 1.00, NULL, 6, 2, '2025-09-17'),
(124, 1.00, NULL, 6, 2, '2025-09-03'),
(125, 1.00, NULL, 6, 2, '2025-09-03'),
(126, 1.00, NULL, 2, 2, '2025-09-03'),
(127, 1.00, NULL, 1, 2, '2025-09-03'),
(128, 1.00, NULL, 3, 2, '2025-09-03'),
(129, 0.23, NULL, 5, 2, '2025-09-03'),
(130, 1.00, NULL, 4, 2, '2025-09-03'),
(131, 23.00, NULL, 4, 2, '2025-09-03'),
(132, 45.00, NULL, 4, 1, '2025-09-03'),
(133, 0.24, NULL, 4, 1, '2025-09-03');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_administrador`
--

CREATE TABLE `login_administrador` (
  `id` int(11) NOT NULL,
  `email` varchar(320) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login_administrador`
--

INSERT INTO `login_administrador` (`id`, `email`, `senha`) VALUES
(1, 'brian_opsaulo@gmail.com', 'P981290ois'),
(2, 'brian1@gmail.com', 'Admin!123'),
(3, 'alex2@yahoo.com', 'SecurePass456'),
(4, 'sara3@hotmail.com', 'MyPwd789'),
(5, 'maria4@outlook.com', 'Qwerty#321'),
(6, 'joao5@protonmail.com', 'TopSecret654'),
(7, 'lucas6@gmail.com', 'Zxcv123987'),
(8, 'laura7@yahoo.com', 'Pa$$word234'),
(9, 'ana8@hotmail.com', 'RootAccess852'),
(10, 'pedro9@outlook.com', 'SecurePass963'),
(11, 'carla10@protonmail.com', 'Admin!741'),
(12, 'brian11@gmail.com', 'Qwerty#159'),
(13, 'alex12@yahoo.com', 'MyPwd753'),
(14, 'sara13@hotmail.com', 'TopSecret258'),
(15, 'maria14@outlook.com', 'Zxcv123654'),
(16, 'joao15@protonmail.com', 'SecurePass951'),
(17, 'lucas16@gmail.com', 'Admin!147'),
(18, 'laura17@yahoo.com', 'Pa$$word369'),
(19, 'ana18@hotmail.com', 'RootAccess123'),
(20, 'pedro19@outlook.com', 'MyPwd456'),
(21, 'carla20@protonmail.com', 'Qwerty#789'),
(22, 'brian21@gmail.com', 'SecurePass111'),
(23, 'alex22@yahoo.com', 'Admin!222'),
(24, 'sara23@hotmail.com', 'TopSecret333'),
(25, 'maria24@outlook.com', 'MyPwd444'),
(26, 'joao25@protonmail.com', 'Pa$$word555'),
(27, 'lucas26@gmail.com', 'Zxcv123666'),
(28, 'laura27@yahoo.com', 'RootAccess777'),
(29, 'ana28@hotmail.com', 'SecurePass888'),
(30, 'pedro29@outlook.com', 'Admin!999'),
(31, 'carla30@protonmail.com', 'Qwerty#000'),
(32, 'brian31@gmail.com', 'TopSecret101'),
(33, 'alex32@yahoo.com', 'MyPwd202'),
(34, 'sara33@hotmail.com', 'SecurePass303'),
(35, 'maria34@outlook.com', 'Pa$$word404'),
(36, 'joao35@protonmail.com', 'Admin!505'),
(37, 'lucas36@gmail.com', 'Zxcv123606'),
(38, 'laura37@yahoo.com', 'RootAccess707'),
(39, 'ana38@hotmail.com', 'MyPwd808'),
(40, 'pedro39@outlook.com', 'Qwerty#909'),
(41, 'carla40@protonmail.com', 'SecurePass010'),
(42, 'brian41@gmail.com', 'Admin!121'),
(43, 'alex42@yahoo.com', 'Pa$$word232'),
(44, 'sara43@hotmail.com', 'RootAccess343'),
(45, 'maria44@outlook.com', 'TopSecret454'),
(46, 'joao45@protonmail.com', 'Zxcv123565'),
(47, 'lucas46@gmail.com', 'SecurePass676'),
(48, 'laura47@yahoo.com', 'MyPwd787'),
(49, 'ana48@hotmail.com', 'Admin!898'),
(50, 'pedro49@outlook.com', 'Qwerty#909'),
(51, 'carla50@protonmail.com', 'TopSecret020'),
(52, 'brian51@gmail.com', 'RootAccess131'),
(53, 'alex52@yahoo.com', 'Pa$$word242'),
(54, 'sara53@hotmail.com', 'SecurePass353'),
(55, 'maria54@outlook.com', 'MyPwd464'),
(56, 'joao55@protonmail.com', 'Admin!575'),
(57, 'lucas56@gmail.com', 'Zxcv123686'),
(58, 'laura57@yahoo.com', 'Qwerty#797'),
(59, 'ana58@hotmail.com', 'SecurePass808'),
(60, 'pedro59@outlook.com', 'RootAccess919'),
(61, 'carla60@protonmail.com', 'MyPwd030'),
(62, 'brian61@gmail.com', 'TopSecret141'),
(63, 'alex62@yahoo.com', 'Admin!252'),
(64, 'sara63@hotmail.com', 'SecurePass363'),
(65, 'maria64@outlook.com', 'Pa$$word474'),
(66, 'joao65@protonmail.com', 'MyPwd585'),
(67, 'lucas66@gmail.com', 'RootAccess696'),
(68, 'laura67@yahoo.com', 'Zxcv123707'),
(69, 'ana68@hotmail.com', 'Admin!818'),
(70, 'pedro69@outlook.com', 'SecurePass929'),
(71, 'carla70@protonmail.com', 'TopSecret040'),
(72, 'brian71@gmail.com', 'Pa$$word151'),
(73, 'alex72@yahoo.com', 'RootAccess262'),
(74, 'sara73@hotmail.com', 'MyPwd373'),
(75, 'maria74@outlook.com', 'SecurePass484'),
(76, 'joao75@protonmail.com', 'Admin!595'),
(77, 'lucas76@gmail.com', 'Qwerty#606'),
(78, 'laura77@yahoo.com', 'TopSecret717'),
(79, 'ana78@hotmail.com', 'Pa$$word828'),
(80, 'pedro79@outlook.com', 'Zxcv123939'),
(81, 'carla80@protonmail.com', 'SecurePass050'),
(82, 'brian81@gmail.com', 'Admin!161'),
(83, 'alex82@yahoo.com', 'MyPwd272'),
(84, 'sara83@hotmail.com', 'Pa$$word383'),
(85, 'maria84@outlook.com', 'RootAccess494'),
(86, 'joao85@protonmail.com', 'SecurePass505'),
(87, 'lucas86@gmail.com', 'TopSecret616'),
(88, 'laura87@yahoo.com', 'Admin!727'),
(89, 'ana88@hotmail.com', 'Qwerty#838'),
(90, 'pedro89@outlook.com', 'Zxcv123949'),
(91, 'carla90@protonmail.com', 'SecurePass060'),
(92, 'brian91@gmail.com', 'MyPwd171'),
(93, 'alex92@yahoo.com', 'Admin!282'),
(94, 'sara93@hotmail.com', 'SecurePass393'),
(95, 'maria94@outlook.com', 'RootAccess404'),
(96, 'joao95@protonmail.com', 'Pa$$word515'),
(97, 'lucas96@gmail.com', 'Zxcv123626'),
(98, 'laura97@yahoo.com', 'TopSecret737'),
(99, 'ana98@hotmail.com', 'Qwerty#848'),
(100, 'pedro99@outlook.com', 'SecurePass959'),
(101, 'carla100@protonmail.com', 'Admin!070'),
(102, 'brian101@gmail.com', 'MyPwd181'),
(103, 'alex102@yahoo.com', 'TopSecret292'),
(104, 'sara103@hotmail.com', 'SecurePass303'),
(105, 'maria104@outlook.com', 'RootAccess414'),
(106, 'joao105@protonmail.com', 'Pa$$word525'),
(107, 'lucas106@gmail.com', 'Admin!636'),
(108, 'laura107@yahoo.com', 'Zxcv123747'),
(109, 'ana108@hotmail.com', 'SecurePass858'),
(110, 'pedro109@outlook.com', 'Qwerty#969'),
(111, 'carla110@protonmail.com', 'TopSecret080'),
(112, 'brian111@gmail.com', 'MyPwd191'),
(113, 'alex112@yahoo.com', 'Pa$$word202'),
(114, 'sara113@hotmail.com', 'RootAccess313'),
(115, 'maria114@outlook.com', 'Admin!424'),
(116, 'joao115@protonmail.com', 'SecurePass535'),
(117, 'lucas116@gmail.com', 'TopSecret646'),
(118, 'laura117@yahoo.com', 'Zxcv123757'),
(119, 'ana118@hotmail.com', 'SecurePass868'),
(120, 'pedro119@outlook.com', 'MyPwd979'),
(121, 'carla120@protonmail.com', 'Admin!090'),
(122, 'brian121@gmail.com', 'Qwerty#101'),
(123, 'alex122@yahoo.com', 'Pa$$word212'),
(124, 'sara123@hotmail.com', 'RootAccess323'),
(125, 'maria124@outlook.com', 'SecurePass434'),
(126, 'joao125@protonmail.com', 'TopSecret545'),
(127, 'lucas126@gmail.com', 'Admin!656'),
(128, 'laura127@yahoo.com', 'MyPwd767'),
(129, 'ana128@hotmail.com', 'SecurePass878'),
(130, 'pedro129@outlook.com', 'Zxcv123989'),
(131, 'carla130@protonmail.com', 'RootAccess000'),
(132, 'brian131@gmail.com', 'Pa$$word111'),
(133, 'alex132@yahoo.com', 'TopSecret222'),
(134, 'sara133@hotmail.com', 'SecurePass333'),
(135, 'maria134@outlook.com', 'MyPwd444'),
(136, 'joao135@protonmail.com', 'Admin!555'),
(137, 'lucas136@gmail.com', 'Zxcv123666'),
(138, 'laura137@yahoo.com', 'SecurePass777'),
(139, 'ana138@hotmail.com', 'Pa$$word888'),
(140, 'pedro139@outlook.com', 'RootAccess999'),
(141, 'carla140@protonmail.com', 'MyPwd110'),
(142, 'brian141@gmail.com', 'TopSecret121'),
(143, 'alex142@yahoo.com', 'Admin!232'),
(144, 'sara143@hotmail.com', 'SecurePass343'),
(145, 'maria144@outlook.com', 'Pa$$word454'),
(146, 'joao145@protonmail.com', 'RootAccess565'),
(147, 'lucas146@gmail.com', 'SecurePass676'),
(148, 'laura147@yahoo.com', 'MyPwd787'),
(149, 'ana148@hotmail.com', 'Admin!898'),
(150, 'sara151@hotmail.com', 'MyPwd151'),
(151, 'maria152@outlook.com', 'SecurePass152'),
(152, 'joao153@protonmail.com', 'Admin!153'),
(153, 'lucas154@gmail.com', 'Zxcv123154'),
(154, 'laura155@yahoo.com', 'RootAccess155'),
(155, 'ana156@hotmail.com', 'Pa$$word156'),
(156, 'pedro157@outlook.com', 'TopSecret157'),
(157, 'carla158@protonmail.com', 'Qwerty#158'),
(158, 'brian159@gmail.com', 'MyPwd159'),
(159, 'alex160@yahoo.com', 'SecurePass160'),
(160, 'sara161@hotmail.com', 'Admin!161'),
(161, 'maria162@outlook.com', 'Zxcv123162'),
(162, 'joao163@protonmail.com', 'Pa$$word163'),
(163, 'lucas164@gmail.com', 'RootAccess164'),
(164, 'laura165@yahoo.com', 'SecurePass165'),
(165, 'ana166@hotmail.com', 'TopSecret166'),
(166, 'pedro167@outlook.com', 'MyPwd167'),
(167, 'carla168@protonmail.com', 'Admin!168'),
(168, 'brian169@gmail.com', 'Qwerty#169'),
(169, 'alex170@yahoo.com', 'SecurePass170'),
(170, 'sara171@hotmail.com', 'Pa$$word171'),
(171, 'maria172@outlook.com', 'RootAccess172'),
(172, 'joao173@protonmail.com', 'Admin!173'),
(173, 'lucas174@gmail.com', 'MyPwd174'),
(174, 'laura175@yahoo.com', 'Zxcv123175'),
(175, 'ana176@hotmail.com', 'SecurePass176'),
(176, 'pedro177@outlook.com', 'TopSecret177'),
(177, 'carla178@protonmail.com', 'Pa$$word178'),
(178, 'brian179@gmail.com', 'MyPwd179'),
(179, 'alex180@yahoo.com', 'RootAccess180'),
(180, 'sara181@hotmail.com', 'SecurePass181'),
(181, 'maria182@outlook.com', 'Admin!182'),
(182, 'joao183@protonmail.com', 'Pa$$word183'),
(183, 'lucas184@gmail.com', 'Qwerty#184'),
(184, 'laura185@yahoo.com', 'TopSecret185'),
(185, 'ana186@hotmail.com', 'SecurePass186'),
(186, 'pedro187@outlook.com', 'Admin!187'),
(187, 'carla188@protonmail.com', 'Zxcv123188'),
(188, 'brian189@gmail.com', 'MyPwd189'),
(189, 'alex190@yahoo.com', 'RootAccess190'),
(190, 'sara191@hotmail.com', 'SecurePass191'),
(191, 'maria192@outlook.com', 'Admin!192'),
(192, 'joao193@protonmail.com', 'Pa$$word193'),
(193, 'lucas194@gmail.com', 'TopSecret194'),
(194, 'laura195@yahoo.com', 'Zxcv123195'),
(195, 'ana196@hotmail.com', 'SecurePass196'),
(196, 'pedro197@outlook.com', 'Qwerty#197'),
(197, 'carla198@protonmail.com', 'MyPwd198'),
(198, 'brian199@gmail.com', 'RootAccess199'),
(199, 'alex200@yahoo.com', 'Pa$$word200'),
(200, 'carla150@protonmail.com', 'TopSecret020');

-- --------------------------------------------------------

--
-- Estrutura para tabela `materiais`
--

CREATE TABLE `materiais` (
  `id_material` int(11) NOT NULL,
  `nome_material` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `materiais`
--

INSERT INTO `materiais` (`id_material`, `nome_material`) VALUES
(1, 'Reciclável'),
(2, 'Não Reciclável');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_funcionarios`
--

CREATE TABLE `tb_funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `nome_do_funcionario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_funcionarios`
--

INSERT INTO `tb_funcionarios` (`id_funcionario`, `nome_do_funcionario`) VALUES
(1, 'Claudete Maria Gonsalves'),
(2, 'Janete De Souza Lima'),
(3, 'Janete Maria De Farias Barros Da Silva'),
(4, 'Joao De Carvalho'),
(5, 'Mirian De Souza Dos Santos'),
(6, 'Rosa Maria Moraes'),
(7, 'Larissa Roveran Luz');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_de_peso`
--
ALTER TABLE `cadastro_de_peso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_funcionarios` (`id_funcionarios`),
  ADD KEY `fk_id_material` (`id_material`);

--
-- Índices de tabela `login_administrador`
--
ALTER TABLE `login_administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`id_material`);

--
-- Índices de tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_de_peso`
--
ALTER TABLE `cadastro_de_peso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de tabela `login_administrador`
--
ALTER TABLE `login_administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT de tabela `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cadastro_de_peso`
--
ALTER TABLE `cadastro_de_peso`
  ADD CONSTRAINT `cadastro_de_peso_ibfk_1` FOREIGN KEY (`id_funcionarios`) REFERENCES `tb_funcionarios` (`id_funcionario`),
  ADD CONSTRAINT `fk_id_material` FOREIGN KEY (`id_material`) REFERENCES `materiais` (`id_material`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
