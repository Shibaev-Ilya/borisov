<?
// Читаем содержимое директории в массив
$dir_content = scandir("inc");

// Читаем определённое содержимое директории в массив
$dir_txt_content = glob("*.php");

if (is_file(PATH_LOG)) {

    $arr_log = file(PATH_LOG);

    foreach ($arr_log as $path) {
        list($tm, $visited_page, $from,) = explode("|", $path);
        $date = date("D, d M Y H:i:s", $tm);
        echo "<p>$date <span style='color: sienna;'>from</span> $from <span style='color: sienna;'>to</span> $visited_page</p>";
    }
} else {
    echo "file does't exist";
}
