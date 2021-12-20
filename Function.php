<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link id="theme-link" rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript">
        function setDynCSS(url) {
            if (!arguments.length) {
                url = (url = document.cookie.match(/\btheme-link=([^;]*)/)) && url[1];
                if (!url) url = 'style/style1.css';
            }
            else {
                var d = new Date();
                d.setFullYear(d.getFullYear() + 1);
                document.cookie = ['theme-link=', url, ';expires=', d.toGMTString(), ';path=/;'].join('');
            }
            document.getElementById('theme-link').href = url;
        }
    </script>
    <title>Алексей Паршин</title>
</head>
<body>
<?php
echo "<ul>\n";
echo "        <li><a class=\"lif\" href=\"Index.php\">Главная</a></li>\n";
echo "    <li><a class=\"lif\" href=\"#\">Домашка</a>\n";
echo "        <ul>\n";
echo "            <li><a class=\"lif\" href=\"DZ1.php\">Git merge conflict</a></li>\n";
echo "            <li><a class=\"lif\" href=\"table.php\">Таблица Менделеева</a></li>\n";
echo "            <li><a class=\"lif\" href=\"#\">DZ 26.11.21</a></li>\n";
echo "        </ul>\n";
echo "    </li>\n";
echo "    <li><a class=\"lif\" href=\"#\">Характеристика курса</a></li>\n";
echo "    <li><a class=\"lif\" href=\"#\">Контакты</a></li>\n";
echo "    <li><img class='icon' style=\"cursor: pointer; border-radius: 10px; width=\"50\" height=\"50\"\" src=\"img/img2/sons.png\" onclick=\"setDynCSS('style/style.css')\"></a></li>\n";
echo "    <li><img class='icon' style=\"cursor:pointer; border-radius: 10px; width=\"50\" height=\"50\"\" src=\"img/nightmodeoff.png\" onclick=\"setDynCSS('style/style1.css')\"></a></li>\n";
echo "</ul>\n";
echo "<h1>Решение задач:</h1>\n";
?>
<div class="txt">
    <h2>Создать массив размера n, заполненный случайными числами. Вывести каждый элемент массива с новой строки. Все четные элементы массива необходимо вывести жирным шрифтом.
    </h2>
    <?php
    $n = mt_rand(2,10);
    $array1 = [];
    for ($i = 0; $i < $n; $i++) {
        $array1[] = mt_rand(0, 44);
        if (($i+1) % 2 == 0) {
            echo "<br>", "<strong>$array1[$i]</strong>";
        } else echo "<br>", $array1[$i];
    }
    ?>
</div>
<div class="txt">
    <h2>Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.
    </h2>
    <?php
    $array2 = [['England', 'Albania', 'Greece', 'Georgia'],
        ['Armenia', 'Thailand', 'Algeria', 'Brazil', 'Ecuador'],
        ['Australia', 'Pakistan', 'Azerbaijan', 'Russia']];
    for ($i = 0; $i < count($array2); $i++) {
        for ($j = 0; $j < count($array2); $j++) {
            if (mb_stripos($array2[$i][$j], 'A') === 0) {
                echo $array2[$i][$j] ."<br>";
            }
        }
    }
    ?>
</div>
<div class="txt">
    <h2>Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.
    </h2>
    <?php
    $x = mt_rand(2,5);
    $y = mt_rand(2,8);
    $counterRow = 0;
    $counterCol = 0;
    $array3 = [];
    for ($i = 0; $i < $x; $i++) {
        for($j = 0; $j < $y; $j++){
            $array3[$i][$j] = mt_rand(0, 44);
            $counterCol = $j+1;
        }
        $counterRow = $i+1;
    }
    echo "Общее колличество элементов в массиве: ".$counterRow * $counterCol;
    echo "<br>Колличество элементов в массиве: $counterRow";
    echo "<br>Колличество элементов в подмассиве: $counterCol";
    echo "<pre>";
    echo var_dump($array3);
    echo "</pre>";
    ?>
</div>
</body>
</html>
