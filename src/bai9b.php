<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="num">Nhập giá trị a:</label>
        <input type="number" name="number">
        <button type="submit">Tính</button>
    </form>

    <?php
        if (isset($_GET['number'])) {
            echo sprintf('Giá trị tuyệt đối của %s là: %s', $_GET['number'], abs($_GET['number']));
        }
    ?>
</body>
</html>