<?php
/* Основные настройки */
define("DB_HOST", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "gbook");

//устанавливаем соединение с БД
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
//проверяем нет ли ошибок
if( !$link ){
    echo 'Ошибка: '
        . mysqli_connect_errno()
        . ':'
        . mysqli_connect_error();
} else {
    echo "<p style='color: sienna'>Соединение установлено!</p>";
}

/* Основные настройки */

/* Сохранение записи в БД */
if ($_SERVER['REQUEST_METHOD']=='POST') {
    //Записываем данные из формы в переменные
    $name = trim(strip_tags($_POST['name']));
    $message = trim(strip_tags($_POST['msg']));
//Валидация email
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
        echo "E-mail адрес $email указан верно.\n";
    } else {
        $email = $_POST['email'];
        echo "E-mail адрес $email указан не верно!\n";
    }

  mysqli_query($link, "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$message', '$email')");

}
// получаем данные из бд
$from_bd = mysqli_query($link, "SELECT id, name, email, msg FROM msgs ORDER BY id DESC");

//закрываем соединение с бд
mysqli_close($link);

/* Удаление записи из БД */

/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<div>
    <?php var_dump(mysqli_fetch_array($from_bd))?>
</div>
<?php
/* Вывод записей из БД */

/* Вывод записей из БД */
?>
