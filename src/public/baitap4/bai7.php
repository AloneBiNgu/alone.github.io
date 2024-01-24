<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 7</title>
</head>

<body>
    <form>
        <label for="text">Nhập n:</label>
        <input type="number" name="text" id="text">
        <button type="submit">Nhập</button>
    </form>
    <?php
        function pc_permute($items, $perms = array())
        {
            if (empty($items)) {
                echo join(',', $perms) . "<br />";
            } else {
                for ($i = count($items) - 1; $i >= 0; --$i) {
                    $newitems = $items;
                    $newperms = $perms;
                    list($foo) = array_splice($newitems, $i, 1);
                    array_unshift($newperms, $foo);
                    pc_permute($newitems, $newperms);
                }
            }
        }

        $text = $_GET['text'] ?? null;
        $arr = array();
        if (!$text || $text > 10) return;

        for ($i= 1; $i <= $text ; $i++) { 
            $arr[$i] = $i;
        }

        echo sprintf('Các dãy hoán vị của %s phần tử là:<br>', $text);
        pc_permute($arr);
    ?>
</body>

</html>