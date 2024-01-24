<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>

<body>
    <form>
        <div class="tuso">
            <label for="tuso">Nhập tử số:</label>
            <input type="number" name="tuso" id="tuso">
        </div>

        <div class="mauso">
            <label for="mauso">Nhập mẫu số:</label>
            <input type="number" name="mauso" id="mauso">
        </div>

        <button type="submit">Rút gọn</button>
    </form>

    <?php
        function gcd($a, $b)
        {
            return $b ? gcd($b, $a % $b) : $a;
        }

        $tuso = $_GET['tuso'] ?? null;
        $mauso = $_GET['mauso'] ?? null;

        if (!$tuso || !$mauso) return;
        $tuso1 = $tuso;
        $mauso1 = $mauso;

        $tuso1 /= gcd($tuso, $mauso);
        $mauso1 /= gcd($tuso, $mauso);

        echo sprintf('Phân số rút gọn là %s / %s', $tuso1, $mauso1)
    ?>
</body>

</html>