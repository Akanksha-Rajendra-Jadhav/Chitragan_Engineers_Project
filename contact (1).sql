

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `contact` (
  `Name` char(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(455) NOT NULL,
  `Nature_of_Enquiry` varchar(455) NOT NULL,
  `message` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

