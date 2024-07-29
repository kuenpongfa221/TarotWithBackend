CREATE TABLE
    `tarotspa`.`reserves` (
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
        `img` TEXT NOT NULL,
        `title` TEXT NOT NULL,
        `btnText` TEXT NOT NULL,
        `sh` INT (1) UNSIGNED NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO
    `reserves` (`id`, `img`, `title`, `btnText`, `sh`)
VALUES
    (
        NULL,
        'tarotHeroSec.jpg',
        '塔羅，遇見你的內在天賦之旅',
        '立即預約占卜',
        '1'
    )
INSERT INTO
    `reserves` (`id`, `img`, `title`, `btnText`, `sh`)
VALUES
    (NULL, 'tarot-2', '塔羅，遇見更好的自己', '立即預約占卜', '0');