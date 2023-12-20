<html>
<body>

<center>
    <h1>Form</h1>
    <form method="post" action="#">
        Name: <input type="text" name="name"><br><br>
        Consumer Number: <input type="text" name="cnum"><br><br>
        Units Consumed: <input type="number" name="units"><br><br>
        <input type="submit">
    </form>
</center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extracting variables without using extract($_POST)
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $cnum = isset($_POST['cnum']) ? $_POST['cnum'] : "";
    $units = isset($_POST['units']) ? $_POST['units'] : "";

    function calculate_bill($units, $name, $cnum)
    {
        $unit_first = 4;
        $unit_sec = 5;
        $unit_third = 6;
        $bill = 0; // Initialize $bill here

        if ($units <= 100) {
            $bill = $units * $unit_first;
        } else if ($units > 100 && $units <= 200) {
            $temp = 100 * $unit_first;
            $rem_unit = $units - 100;
            $bill = $temp + ($rem_unit * $unit_sec);
        } else {
            $temp = (100 * 4) + (100 * $unit_sec) + (100 * $unit_third);
            $rem_unit = $units - 200;
            $bill = $temp + ($rem_unit * $unit_third);
        }

        echo "-------------------------------";
        echo "<h3>Kerala State Electricity Board(KSEB)</h3>";
        echo "<br>";
        echo "Consumer name:" . $name . "<br>";
        echo "Consumer Number:" . $cnum . "<br>";
        echo "Units Consumed:" . $units . "<br>";
        $result = number_format((float)$bill, 2, '.', ''); 
        echo "<h4>Total: rs" . $result . "</h4><br>";
        echo "-----------------------------------";
    }

    calculate_bill($units, $name, $cnum);
}
?>
</body>
</html>
