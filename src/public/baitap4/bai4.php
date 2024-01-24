<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>
    <form>
        <label for="text">Nhập n:</label>
        <input type="number" name="text" id="text">
        <button type="submit">Tính</button>
    </form>

    <?php
        $number = $_GET['text'] ?? null;
        if ($number) {
            $res = 0;
            for ($i=1; $i <= $number; $i++) { 
                $res += pow($i, 2);
            }

            echo sprintf('Tổng bình phương từ 1 đến %s là %s', $number, $res);
        }
    ?>
</body>
</html>