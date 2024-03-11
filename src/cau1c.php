<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form style="justify-content: baseline;">
        <label for="input">Nhập số tiền vay x (triệu đồng)</label>
        <input type="number" name="x">

        <label for="input">Nhập lãi suất hàng tháng r(%)</label>
        <input type="number" name="r">

        <label for="input">Nhập số tháng trả nợ n (tháng)</label>
        <input type="number" name="n">
        <button type="submit">Tính số tiền phải trả hàng tháng</button>
    </form>

    <?php
        $x = $_GET['x'] ?? null;
        $r = $_GET['r'] ?? null;
        $n = $_GET['n'] ?? null;
        if ($x && $r && $n) {
            $r = $r / 100;

            $monthly_payment = $x * $r / (1 - pow(1 + $r, -$n));
            echo "Số tiền hoàn nợ hàng tháng: " . number_format($monthly_payment, 3) . " triệu đồng";
        }
    ?>
</body>
</html>