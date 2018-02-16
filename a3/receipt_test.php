<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // Create a file assoiative file 

        $filename = "orders.csv";
        $headings = ['Purchase Date', 'Name', 'Address', 'Mobile', 'Email', 'ID', 'Option', 'Quantity', 'Unit Price', 'Subtotal'];
        $records = [['10/2018', 'jack', '39 highview ave', '000', 'abc@abc.com', 'P111', 'takeaway', '10', '14.4', '100'], ['10/2018', 'jack', '39 highview ave', '000', 'abc@abc.com', 'P111', 'takeaway', '10', '14.4', '100'],];
        $fp = fopen($filename, "w");
        flock($fp, LOCK_EX);
        fputcsv($fp, $headings);
        foreach ($records as $record)
            fputcsv($fp, $record);
        flock($fp, LOCK_UN);
        fclose($fp);

    ?>
</body>
</html>