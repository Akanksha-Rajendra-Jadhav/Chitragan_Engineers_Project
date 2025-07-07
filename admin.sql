

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `admin` (
  `admin_id` varchar(455) NOT NULL,
  `email` varchar(455) NOT NULL,
  `password` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
('admin1', 'admin1@gmail.com', 'admin'),
('admin2', 'admin3@gmail.com', 'admin2');
COMMIT;

