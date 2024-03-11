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
        if (isset($_GET['number']) && $_GET['number'] >= 0) {
            echo sprintf('Số lẻ thứ %s là %s', $_GET['number'], 2 * $_GET['number'] - 1);
        }
    ?>
</body>
</html>