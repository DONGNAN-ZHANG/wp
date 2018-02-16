<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Pangolin" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/invoice.css">
    <title>My Pizza Workshop</title>

</head>

<body>
    <!-- Inludes common HTML components, page header and nav-bar -->
    <?php include './components/header.php' ?>
    <?php require './components/nav.php' ?>

    <main>
        <section class="container">
            <div class="invoice-box">
                <table cellpadding="0" cellspacing="0">
                    <tr class="top">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td>
                                        Invoice #: 001
                                        <br> Created: <?php echo date('j') . ' ' . date('M') . ' ' . date('Y'); ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="information">
                        <td colspan="2">
                            <table>
                                <tr>
                                    <td>
                                        pizza workshop, 
                                        <br> 12345 Sunny Road
                                        <br> Sydney, NSW, 2000
                                    </td>

                                    <td>
                                        Acme Corp.
                                        <br> Dongnan Zhang
                                        <br> test@example.com
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="heading">
                        <td>
                            Payment Method
                        </td>

                        <td>
                            Credit Card #
                        </td>
                    </tr>

                    <tr class="details">
                        <td>
                            Credit Card
                        </td>

                        <td>
                            1000
                        </td>
                    </tr>

                    <tr class="heading">
                        <td>
                            Item
                        </td>

                        <td>
                            Price
                        </td>
                    </tr>

                    <tr class="item">
                        <td>
                            pizza 1
                        </td>

                        <td>
                            $300.00
                        </td>
                    </tr>

                    <tr class="item">
                        <td>
                            pizza 2
                        </td>

                        <td>
                            $75.00
                        </td>
                    </tr>

                    <tr class="item last">
                        <td>
                            pizza 3
                        </td>

                        <td>
                            $10.00
                        </td>
                    </tr>

                    <tr class="total">
                        <td></td>

                        <td>
                            Total: $385.00
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    </main>

    <!-- Page footer -->
    <?php require './components/footer.php' ?>
</body>