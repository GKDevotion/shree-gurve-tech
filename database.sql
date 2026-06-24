-- Shree Gurve Technology - Database Setup
-- Run this SQL to initialize the database

CREATE DATABASE IF NOT EXISTS `shreegurvetech` 
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `shreegurvetech`;

-- Contact Inquiries Table
CREATE TABLE IF NOT EXISTS `inquiries` (
    `id`          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name`        VARCHAR(100) NOT NULL,
    `email`       VARCHAR(150) NOT NULL,
    `phone`       VARCHAR(20) DEFAULT NULL,
    `service`     VARCHAR(100) DEFAULT NULL,
    `subject`     VARCHAR(200) DEFAULT NULL,
    `message`     TEXT NOT NULL,
    `ip_address`  VARCHAR(45) DEFAULT NULL,
    `user_agent`  VARCHAR(300) DEFAULT NULL,
    `status`      ENUM('new','read','replied','closed') DEFAULT 'new',
    `created_at`  DATETIME DEFAULT CURRENT_TIMESTAMP,
    `updated_at`  DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX `idx_status` (`status`),
    INDEX `idx_created` (`created_at`),
    INDEX `idx_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Rate limiting table (anti-spam)
CREATE TABLE IF NOT EXISTS `rate_limits` (
    `id`         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `ip_address` VARCHAR(45) NOT NULL,
    `action`     VARCHAR(50) NOT NULL,
    `attempts`   TINYINT UNSIGNED DEFAULT 1,
    `window_start` DATETIME DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY `unique_ip_action` (`ip_address`, `action`),
    INDEX `idx_window` (`window_start`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
