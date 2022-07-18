SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Base de datos: `consultorioquintomilenio`

--

-- --------------------------------------------------------

--

-- Estructura de tabla para la tabla `quintomilenio`

--

CREATE TABLE
    `quintomilenio` (
        `id` int(11) NOT NULL,
        `Name_Surnames` varchar(255) NOT NULL,
        `phone_number` varchar(9) NOT NULL,
        `email` varchar(255) NOT NULL,
        `query` text NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--

-- Índices para tablas volcadas

--

--

-- Indices de la tabla `quintomilenio`

--

ALTER TABLE `quintomilenio` ADD PRIMARY KEY (`id`);

--

-- AUTO_INCREMENT de las tablas volcadas

--

--

-- AUTO_INCREMENT de la tabla `quintomilenio`

--

ALTER TABLE
    `quintomilenio` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;