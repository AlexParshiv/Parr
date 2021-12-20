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
echo "            <li><a class=\"lif\" href=\"Function.php\">DZ 26.11.21</a></li>\n";
echo "        </ul>\n";
echo "    </li>\n";
echo "    <li><a class=\"lif\" href=\"#\">Характеристика курса</a></li>\n";
echo "    <li><a class=\"lif\" href=\"#\">Контакты</a></li>\n";
echo "    <li><img class='icon' style=\"cursor: pointer; border-radius: 10px; width=\"50\" height=\"50\"\" src=\"img/img2/sons.png\" onclick=\"setDynCSS('style/style.css')\"></a></li>\n";
echo "    <li><img class='icon' style=\"cursor:pointer; border-radius: 10px; width=\"50\" height=\"50\"\" src=\"img/nightmodeoff.png\" onclick=\"setDynCSS('style/style1.css')\"></a></li>\n";
echo "</ul>\n";
?>
<h1 class="no">Паршин Алексей Александрович</h1>
<section class="anketa">
    <?php
    echo "<div class=one><img src=\"img/HFzGGwCaHX4.jpg\" width=\"400\" height=\"640\" alt=\"Parshin\"></div>\n";
    echo "<div class=\"two\">\n";
    echo "<div style='color: cornsilk'> Привет. Немного расскажу о себе.</div>";
    echo "<p><br>Год работал в компании \"Бизнес прост\" супервайзером отдела продаж.<br> Потом в связи с тем, что бизнес всётаки оказался не прост, мы закрылись.Ушёл на работу по спокойнее на завод, где застрял на полтора года. Есть хобби, веб дизайн и стендап выступления.<br> Очень хочу обучиться исскуству програмирования, потому-что это перспективно.</p>\n";
    echo "</div>\n";
    ?>
    <div class="tree">
    <?php
    $feedbackString = '<p>О курсе: Мне туго даётся обучение чему-то новому, но буду стараться научиться.</p>';
    $feedbackArray =explode(' ', $feedbackString);
    foreach ($feedbackArray as $item => $element) {
        ($item % 2 === 0) ? $feedbackArray[$item] = "<span style= 'color: orangered'>$element</span>" : $feedbackArray[$item] = "<span style= 'color: gold'>$element</span>";
    }
    $fredback = implode(' ', $feedbackArray);
    echo $fredback;
    ?>
    </div>
</section>
<?php
echo "<h2>ФИЛЬМЫ И СЕРИАЛЫ:</h2>\n";
echo "<section class=\"films\">\n";
echo "<div class=\"grid1\"><a class=\"une\" href=\"http://au.tabfil.me/415-poymay-menya-esli-smozhesh-2002-smotret.html\">\n";
echo "    <div class=\"une\"><img src=\"img/img2/1920x.jpg\" width=\"200\" height=\"340\" alt=\"Parshin\"></div>\n";
echo "    <div class=\"txt\">Поймай меня если сможешь.</div></a>\n";
echo "</div>\n";
echo "<div class=\"grid1\"><a class=\"une\" href=\"http://skam.online/la-casa-de-papel/\">\n";
echo "    <div class=\"une\"><img src=\"img/img2/home.jpg\" width=\"200\" height=\"340\" alt=\"Parshin\"></div>\n";
echo "    <div class=\"txt\"><br>Бумажный Дом</div></a>\n";
echo "</div>\n";
echo "<div class=\"grid1\"><a class=\"une\" href=\"http://breaking-bad-online.ru/\">\n";
echo "    <div class=\"une\"><img src=\"img/img2/p185846_b_v8_ad.jpg\" width=\"200\" height=\"340\" alt=\"Parshin\"></div>\n";
echo "    <div class=\"txt\"><br>Во все тяжкие.</div></a>\n";
echo "</div>\n";
echo "<div class=\"grid1\"><a class=\"une\" href=\"http://au.tabfil.me/218-socialnaya-set-2010-smotret.html\">\n";
echo "    <div class=\"une\"><img src=\"img/img2/220x330.jpg\" width=\"200\" height=\"340\" alt=\"Parshin\"></div>\n";
echo "    <div class=\"txt\"><br>Социальная сеть</div></a>\n";
echo "</div>\n";
echo "<div class=\"grid1\"><a class=\"une\" href=\"http://au.tabfil.me/222-volk-s-uoll-strit-2013-smotret.html\">\n";
echo "    <div class=\"une\"><img src=\"img/img2/p9991602_p_v13_ah.jpg\" width=\"200\" height=\"340\" alt=\"Parshin\"></div>\n";
echo "    <div class=\"txt\"><br>Волк с Уолл-стрит</div></a>\n";
echo "</div>\n";
echo "<div class=\"grid1\"><a class=\"une\" href=\"http://timehd.org/news/pobeg_1_5_sezon/2019-01-06-2166\">\n";
echo "    <div class=\"une\"><img src=\"img/img2/600x900.jpg\" width=\"200\" height=\"340\" alt=\"Parshin\"></div>\n";
echo "    <div class=\"txt\"><br>Побег из тюрьмы.</div></a>\n";
echo "</div>\n";
echo "</section>\n";
echo "<h2 style=\"text-align:center;\">Присоединяйтесь:</h2>\n";
echo "<section class=\"net\">\n";
echo "    <div class=\"jcon\"><a class=\"icon\" href=\"https://twitter.com/\"><img class=\"jcon\" src=\"img/img2/124021.png\" width=\"50\" height=\"50\" alt=\"Parshin\"></a></div>\n";
echo "    <div class=\"jcon\"><a class=\"icon\" href=\"https://ru-ru.facebook.com/\"><img class=\"jcon\" src=\"img/img2/fb_icon_325x325.png\" width=\"50\" height=\"50\" alt=\"Parshin\"></a></div>\n";
echo "    <div class=\"jcon\"><a class=\"icon\" href=\"https://t.me/Alexei184/\"><img class=\"jcon\" src=\"img/img2/99aa13899adee5ed366acbc1781773b1.jpg\" width=\"50\" height=\"50\" alt=\"Parshin\"></a></div>\n";
echo "    <div class=\"jcon\"><a class=\"icon\" href=\"https://vk.com/alexius18/\"><img class=\"jcon\" src=\"img/img2/VKK%208.png\" width=\"50\" height=\"50\" alt=\"Parshin\"></a></div>\n";
echo "    <div class=\"jcon\"><a class=\"icon\" href=\"https://www.instagram.com/mr.alexsius/\"><img class=\"jcon\" src=\"img/img2/q6j6RlhrYS7BqqAW.png\" width=\"50\" height=\"50\" alt=\"Parshin\"></a></div>\n";
echo "</section>\n";
?>
<div style="text-align:center">

</body>
</html>
