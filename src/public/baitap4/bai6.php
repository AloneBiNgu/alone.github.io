<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>

<body>
    <form>
        <div class="h">
            <label for="h">Nhập h:</label>
            <input type="number" name="h" id="h">
        </div>
        <div class="m"><label for="m">Nhập m:</label>
            <input type="number" name="m" id="m">
        </div>
        <div class="k"><label for="k">Nhập k:</label>
            <input type="number" name="k" id="k">
        </div>
        <div class="va"><label for="va">Nhập va:</label>
            <input type="number" name="va" id="va">
        </div>
        <div class="vb"><label for="vb">Nhập vb:</label>
            <input type="number" name="vb" id="vb">
        </div>

        <button type="submit">Tính</button>
    </form>


    <?php
        $h = $_GET['h'] ?? null;
        $m = $_GET['m'] ?? null;
        $k = $_GET['k'] ?? null;
        $va = $_GET['va'] ?? null;
        $vb = $_GET['vb'] ?? null;

        if ($h  < 0 || $m  < 0 || $k  < 0 || $va  < 0 || $vb < 0 ) return;

        $min = $k / 60;
        $startTime = $va * $min;
        $diff = $vb - $va;
        $res = $startTime / $diff * 60;
        $newMin = $m + $k + $res;

        if ($newMin >= 60) {
            $h += ($newMin - ($newMin % 60)) / 60;
            $newMin -= ($newMin - ($newMin % 60)) / 60 * 60;
        }

        echo sprintf('Thời gian đuổi kịp là %s giờ %s phút', $h, $newMin);
    ?>
</body>

</html>