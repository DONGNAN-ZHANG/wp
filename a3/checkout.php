<?php 
    session_start(); 
    include_once('tools.php');
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>"
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Pangolin" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>My Pizza Workshop</title>
</head>

<!-- helper function -->
<?php
    function showError($term) {
        if(isset($_SESSION['validation']['checkout'][$term])) {
            echo '<span style="display: inline; color: red">' . $_SESSION['validation']['checkout'][$term] . '</span>';
        }
    }
?>

<body>
    <!-- Inludes common HTML components, page header and nav-bar -->
    <?php include './components/header.php' ?>
    <?php require './components/nav.php' ?>

    <main>
        <section class="section">
            <div class="container">
                <form action="./validation.php" method="post" class="login-form">
                    <h1>To checkout, enter your details</h1>
                    <label for="name">Name:</label>
                    <?php showError('name'); ?>
                    <input type="text" id="name" name="name" placeholder="Please enter your name..." />
                    <label for="email">Email:</label>
                    <?php showError('email'); ?>
                    <input type="email" id="email" name="email" placeholder="Please enter your email..." />
                    <label for="address">Address:</label>
                    <?php showError('address'); ?>
                    <textarea name="address" rows="4" cols="50"></textarea>
                    <label for="mobile">Mobile Phone:</label>
                    <?php showError('mobile'); ?>
                    <input type="text" id="mobile" name="mobile" placeholder="Please enter your mobile phone number..." />
                    <label for="credit">Credit Card Number:</label>
                    <?php showError('credit'); ?>
                    <input type="text" id="credit" name="credit" placeholder="Please enter your credit number..." />
                    <label for="expire">Credit Card Expire date:</label>
                    <?php showError('expire'); ?>
                    <input type="text" id="expire" name="expire" placeholder="Please enter your credit card expire date like mm/yyyy" />
                    <input type="submit" />
                </form>
            </div>
        </section>
    </main>

    <!-- Page footer -->
    <?php require './components/footer.php' ?>

</body>