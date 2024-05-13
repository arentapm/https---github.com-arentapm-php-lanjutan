<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array to JSON by Arenta</title>
</head>
<body>
    <h2>Data Array to JSON</h2>

    <?php
$data = array(
    array("nama" => "Erlina", "umur" => 25),
    array("nama" => "Naila", "umur" => 30),
    array("nama" => "Nancy", "umur" => 35),
    array("nama" => "Elda", "umur" => 20),
    array("nama" => "Arin", "umur" => 40),
    array("nama" => "Tasya", "umur" => 45),
    array("nama" => "Ilham", "umur" => 22),
    array("nama" => "Anggi", "umur" => 28),
    array("nama" => "Erisa", "umur" => 32),
    array("nama" => "Yorina", "umur" => 38),
    array("nama" => "Wisnot", "umur" => 26),
    array("nama" => "Arda", "umur" => 33),
    array("nama" => "Ringga", "umur" => 29),
    array("nama" => "Bagas", "umur" => 36),
    array("nama" => "Nia", "umur" => 31)
);

$json_data = json_encode($data, JSON_PRETTY_PRINT);

echo "<pre>$json_data</pre>";
?>
</body>
</html>
