<?php
    session_start();
?>
<?php
    require 'conn.php';
?>
<h3>Want to see the data you entered?</h3>
<form action="" method="POST">
        <button type="submit" name="button_age" value="Age">Age</button>

        <button type="submit" name="button_lname" value="Last Name">Last Name</button>

        <button type="submit" name="button_fname" value="first Name">First Name</button>

        <button type="submit" name="button_alldata" value="all data">All data</button>
</form>
<?php
    if(isset($_POST['button_age'])){
        echo 'Your ' . $_SESSION['age'] . ' age.';
    }

    if(isset($_POST['button_lname'])){
        echo 'Your last name is '. $_SESSION['lname'] . '.';
    }

    if(isset($_POST['button_fname'])){
        echo 'Your first name is '. $_SESSION['fname'] . '.';
    }

    if(isset($_POST['button_alldata'])){
        echo 'Your ' . $_SESSION['age'] . ' age.';

        echo 'Your first name is '. $_SESSION['fname'] . '.';

        echo 'Your last name is '. $_SESSION['lname'] . '.';
    }
?>