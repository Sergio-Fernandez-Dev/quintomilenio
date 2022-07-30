CREATE DATABASE IF NOT EXISTS `consultorioquintomilenio`;
USE `consultorioquintomilenio`;

CREATE TABLE `quintomilenio` (
        `id` int(11) NOT NULL,
        `name` varchar(40) NOT NULL,
        `phone` varchar(20) NOT NULL,
        `email` varchar(40) NOT NULL,
        `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
        `user_query` text NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

ALTER TABLE `quintomilenio` ADD PRIMARY KEY (`id`);
ALTER TABLE `quintomilenio` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
