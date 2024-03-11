<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="num">Nhập giá trị n:</label>
        <input type="number" name="number">
        <button type="submit">Tính số lẻ thứ n</button>
    </form>

    <?php
        if (isset($_GET['number']) && $_GET['number'] > 0) {
            $sum = 0;

        for ($i = 1, $count = 0; $count < $_GET['number']; $i += 2, $count++) {
            $sum += $i;
        }
            echo sprintf('Tổng %s số lẻ đầu tiên là %s', $_GET['number'], $sum);
        }
    ?>
</body>
</html>