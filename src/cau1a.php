<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="input">Nhập giá trị a:</label>
        <input type="number" id="a" name="a">
        <button type="submit">Tính bình phương</button>
    </form>

    <?php
        $a = $_GET['a'] ?? null;
        if ($a) {
            echo(pow($a, 2));
        }
    ?>
</body>
</html>