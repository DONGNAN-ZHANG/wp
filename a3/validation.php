<?php 
    session_start(); 
    include_once('tools.php');
?>

<?php
    function preShow($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    }
?>

<body>
    

    <?php
        if (isset($_POST['name']) and isset($_POST['address']) and isset($_POST['mobile']) and isset($_POST['credit']) and isset($_POST['expire'])) {
            preShow($_POST);
            preShow($_SESSION);

            // Test name
            $namePattern = "/[a-z\ \'\,\.\-]+/ig";
            if (!preg_match($namePattern, $_POST['name'])) {
                $_SESSION['validation']['checkout']['name'] = 'Invalid name';
                header("Location: checkout.php");
            } else {
                $_SESSION['user']['name'] = $_POST['name'];
                unset($_SESSION['validation']['checkout']['name']);
            }

            // Test address
            $addressPattern = "/[a-z0-9\ \'\,\.\-\/]+/img";
            if (!preg_match($addressPattern, $_POST['address'])) {
                $_SESSION['validation']['checkout']['address'] = 'Invalid address';
                header("Location: checkout.php");
            } else {    
                $_SESSION['user']['address'] = $_POST['address'];
                unset($_SESSION['validation']['checkout']['address']);
            }

            // Test mobile
            $phonePattern = "/^\+614|(04)|04][0-9]{8}/g";
            if (!preg_match($addressPattern, $_POST['mobile'])) {
                $_SESSION['validation']['checkout']['mobile'] = 'Invalid mobile';
                header("Location: checkout.php");
            } else {
                $_SESSION['user']['mobile'] = $_POST['mobile'];
                unset($_SESSION['validation']['checkout']['mobile']);
            }

            // Test credit card
            $creditPattern = "/[0-9 ]{12, 19}/g";
            if (!preg_match($addressPattern, $_POST['credit']) || count($_POST['credit']) > 19) {
                $_SESSION['validation']['checkout']['credit'] = 'Invalid credit';
                header("Location: checkout.php");
            } else {
                $_SESSION['user']['credit'] = $_POST['credit'];
                unset($_SESSION['validation']['checkout']['credit']);
            }

            // Test credit card expire

            // All passed
            unset($_SESSION['validation']['checkout']);
            header("Location: receipt.php");
        } else {
            $_SESSION['validation']['checkout'] = 'Field Missing';
            header("Location: checkout.php");
        }
    ?>
</body>
</html>