<?php
 use Aura\SqlQuery\QueryFactory;
 use App\QueryBuilder;
 use League\Plates\Engine;

 // $db = new QueryBuilder(); 
 $pdo  = new PDO('mysql:host=localhost;dbname=project3', "root", "root");


$sql = "INSERT INTO `products` (`id`, `name`, `description`, `full_text`, `img`, `user`, `status`, `price`, `category`) 
VALUES (NULL, 'Смартфон SAMSUNG Galaxy A40 64Gb, SM-A405F, черный', 'ОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', 'Основные характеристики\r\nОС Android 9, экран: 5.9\", Super AMOLED, 2340×1080, процессор: Exynos 7904, 1800МГц, 8-ми ядерный, GPS, оперативная память: 4ГБ, встроенная память: 64ГБ\r\n', '../img/SAMSUNG_Galaxy_A40.jpg', NULL, NULL, '12 990 руб', 'sumsung'), 

(NULL, 'Смартфон XIAOMI Redmi Note 9 Pro 6/128Gb, зеленый', 'ОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', 'Основные характеристики\r\nОС Android 10.0, экран: 6.67\", IPS, 2400×1080, процессор: Qualcomm Snapdragon 720G, 2300МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 33ч, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_9.jpg', NULL, NULL, '23 990 руб', 'xiaomi'),

(NULL, 'Смартфон XIAOMI Redmi Note 8 Pro 6/128Gb, синий
', 'ОС Android 9.0, экран: 6.53\", IPS, 2340×1080, процессор: MediaTek Helio G90T, 2000МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 260ч, чехол в комплекте, оперативная память: 6ГБ, встроенная память: 128ГБ', 'Основные характеристики\r\nОС Android 9.0, экран: 6.53\", IPS, 2340×1080, процессор: MediaTek Helio G90T, 2000МГц, 8-ми ядерный, FM-радио, GPS, ГЛОНАСС, время работы в режиме разговора, до: 24ч, в режиме ожидания, до: 260ч, чехол в комплекте, оперативная память: 6ГБ, встроенная память: 128ГБ\r\n', '../img/XIAOMI_8_ Pro _6 128Gb.jpg', NULL, NULL, '19 990 руб', 'xiaomi'),

(NULL, 'Смартфон APPLE iPhone 11 64Gb, MWLT2RU/A, черный', 'ОС iPhone iOS 13, экран: 6.1\", IPS, 1792×828, процессор: Apple A13 Bionic, , GPS, ГЛОНАСС, с защитой от пыли и влаги, встроенная память: 64ГБ', 'Основные характеристики\r\nОС iPhone iOS 13, экран: 6.1\", IPS, 1792×828, процессор: Apple A13 Bionic, , GPS, ГЛОНАСС, с защитой от пыли и влаги, встроенная память: 64ГБ\r\n', '../img/APPLE_iPhone_11.jpg', NULL, NULL, '54 990 руб', 'apple'),

(NULL, 'Смартфон SAMSUNG Galaxy S20 8/128Gb, SM-G980F, голубой', 'ОС Android 10, экран: 6.2\", Dynamic AMOLED, 3200×1440, процессор: Exynos 990, 8-ми ядерный, GPS, ГЛОНАСС, с защитой от пыли и влаги, оперативная память: 8ГБ, встроенная память: 128ГБ\r\n', 'Основные характеристики\r\nОС Android 10, экран: 6.2\", Dynamic AMOLED, 3200×1440, процессор: Exynos 990, , 8-ми ядерный, GPS, ГЛОНАСС, с защитой от пыли и влаги, оперативная память: 8ГБ, встроенная память: 128ГБ\r\n', '../img/Galaxy_S20.jpg', NULL, NULL, '12 990 руб', 'sumsung')";


$stmt = $pdo->prepare($sql);
$stmt->execute();
    

header("Location: /main_admin"); exit;  