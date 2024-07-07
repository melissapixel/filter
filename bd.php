<?php
    $sql = "CREATE TABLE IF NOT EXISTS `filter` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `age` VARCHAR(255) NOT NULL,
        `fname` VARCHAR(255) NOT NULL,
        `lname` VARCHAR(255) NOT NULL
        )";
    $conn->query($sql);

    function isDataExists($conn) {
        $checkSql = "SELECT 1 FROM `filter` LIMIT 1";
        $result = $conn->query($checkSql);
        return $result->num_rows > 0;
    }
    
    // Если данных нет, вставляем:
    if (!isDataExists($conn)) {
        $insertSql = "INSERT INTO `filter` (`age`, `fname`, `lname`) VALUES
                      ('25', 'John', 'Doe'),
                      ('30', 'Jane', 'Doe'),
                      ('45', 'Alice', 'Johnson')";
        $conn->query($insertSql);
    }
?>