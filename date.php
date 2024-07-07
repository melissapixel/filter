<?php
    session_start();
?>
<?php
    require 'conn.php';
?>
<?php
    if($_POST){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];

        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['age'] = $_POST['age'];

        $stmt = $conn->prepare("INSERT INTO `filter` (`age`, `fname`, `lname`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $age, $fname, $lname);

        // Выполнение подготовленного выражения
        $stmt->execute();
        header('Location: visial.php');
    }
?>