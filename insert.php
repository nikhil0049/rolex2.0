<?php
if (isset($_POST['insert_data'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fav";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Define items
    $items = [
        1 => ['name' => 'Oyster Perpetual 41', 'price' => '9519000'],
        2 => ['name' => 'Explore 36', 'price' => '115000'],
        3 => ['name' => 'Submariner Date', 'price' => '850000'],
        4 => ['name' => 'Day-Date', 'price' => '9279100'],
        5 => ['name' => 'Submariner', 'price' => '4279100'],
        6 => ['name' => 'GMT-Master II', 'price' => '9284000'],
        7 => ['name' => 'Day-Date 40', 'price' => '5052820'],
        8 => ['name' => 'Cosmograph Daytona', 'price' => '5610765'],
        9 => ['name' => 'Oyster Prepetual 41', 'price' => '1080000'],
        10 => ['name' => 'Yatch-Master 42', 'price' => '2894000'],
        11 => ['name' => 'Sea-Dweller', 'price' => '1240500'],
        12 => ['name' => 'Rolex Deepsea', 'price' => '3327664'],
        13 => ['name' => 'Air-King', 'price' => '647500'],
        14 => ['name' => 'Explore 36', 'price' => '9279400'],
        15 => ['name' => 'Lady-Datejust', 'price' => '1591000'],
        16 => ['name' => 'Sky-Dweller', 'price' => '1384500'],
        17 => ['name' => '1908', 'price' => '2004500'],
        18 => ['name' => 'Day-Date 40 Diamond', 'price' => '1759000'],
        19 => ['name' => 'Day-Date 40 Platinum', 'price' => '2648700'],
        20 => ['name' => 'Day-Date 36', 'price' => '9765400'],
        21 => ['name' => 'Day-Date 40 Everose', 'price' => '1357500'],
        22 => ['name' => 'Day-Date 36 platinum', 'price' => '9201000'],
        23 => ['name' => 'Day-Date 40 Gold', 'price' => '3729000'],
        24 => ['name' => 'Day-Date 40 Oyster', 'price' => '7319000'],
        25 => ['name' => 'Day-Date 36 White', 'price' => '8295000'],
        26 => ['name' => 'Day-Date 36 Oyster', 'price' => '1859600'],
        27 => ['name' => 'Day-Date 40 Oyster', 'price' => '3949000']
    ];

    $insert_data = (int)$_POST['insert_data'];
    
    if (isset($items[$insert_data])) {
        $item = $items[$insert_data];
        $sql = "INSERT INTO `getinsert`(`id`, `name`, `price`) VALUES (NULL, '" . $item['name'] . "', '" . $item['price'] . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New Watch Added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid request";
    }

    $conn->close();
}
?>
