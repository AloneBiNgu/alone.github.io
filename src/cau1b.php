<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="input">Nhập giá trị n:</label>
        <input type="number" id="n" name="n">
        <button type="submit">Tính số lẻ thứ n</button>
    </form>

    <?php
        $n = $_GET['n'] ?? null;
        if ($n) {
            $res = 2 * $n - 1;
            echo sprintf('Số lẻ thứ %s là %s', $n, $res);
        }
    ?>
</body>
</html>