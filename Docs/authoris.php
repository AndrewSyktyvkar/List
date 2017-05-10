<?php
session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>Авторизация на сайте</title>
</head>
<body>
<div align="center"><h2>Авторизация на сайте:</h2>
<form action="authoris.php" method="post">
Логин: <input type="text" name="login"><br>
Пароль: <input type="password" name="password"><br>
<input type="submit" name="submit">
</form></div>
</body>
</html>

<?php $connection = mysqli_connect('localhost', 'root', '', 'my-site') or die(mysqli_error()); ?>

<?php if (isset($_POST['submit'])) // Отлавливаем нажатие кнопки "Отправить"
{
if (empty($_POST['login'])) // Если поле логин пустое
{
echo '<script>alert("Поле логин не заполненно");</script>'; // То выводим сообщение об ошибке
}
elseif (empty($_POST['password'])) // Если поле пароль пустое
{
echo '<script>alert("Поле пароль не заполненно");</script>'; // То выводим сообщение об ошибке
}
else  // Иначе если все поля заполненны
{    
$login = $_POST['login']; // Записываем логин в переменную
$password = $_POST['password']; // Записываем пароль в переменную          
$query = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `login` = '$login' AND `password` = '$password'"); // Формируем переменную с запросом к базе данных с проверкой пользователя
$result = mysqli_fetch_array($query); // Формируем переменную с исполнением запроса к БД
if (empty($result['id'])) // Если запрос к бд не возвразяет id пользователя
{
echo '<script>alert("Неверные Логин или Пароль");</script>'; // Значит такой пользователь не существует или не верен пароль
}
else // Если возвращяем id пользователя, выполняем вход под ним
{
$_SESSION['password'] = $password; // Заносим в сессию  пароль
$_SESSION['login'] = $login; // Заносим в сессию  логин
$_SESSION['id'] = $result['id']; // Заносим в сессию  id
echo '<div align="center">Вы успешно вощли в систему: '.$_SESSION['login'].'</div>'; // Выводим сообщение что пользователь авторизирован        
}    
}	
} ?>

<?php if (isset($_GET['exit'])) { // если вызвали переменную "exit"
unset($_SESSION['password']); // Чистим сессию пароля
unset($_SESSION['login']); // Чистим сессию логина
unset($_SESSION['id']); // Чистим сессию id
} ?>

<?php if (isset($_SESSION['login']) && isset($_SESSION['id'])) // если в сессии загружены логин и id
{
echo '<div align="center"><a href="authoris.php?exit">Выход</a></div>'; // Выводим нашу ссылку выхода
} ?>