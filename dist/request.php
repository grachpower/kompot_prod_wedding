<?php
/* Осуществляем проверку вводимых данных и их защиту от враждебных
скриптов */
$your_name = htmlspecialchars($_POST["name"]);
$company = htmlspecialchars($_POST["company"]);
$event = htmlspecialchars($_POST["event"]);
$interesting = htmlspecialchars($_POST["interesting"]);
$informfrom = htmlspecialchars($_POST["informfrom"]);
$phone = htmlspecialchars($_POST["phone"]);
$mail = htmlspecialchars($_POST["mail"]);
/* Устанавливаем e-mail адресата */
$myemail = "amiscary@gmail.com";
/* Проверяем заполнены ли обязательные поля ввода, используя check_input
функцию */
// $your_name = check_input($_POST["your_name"], "Введите ваше имя!");
// $tema = check_input($_POST["tema"], "Укажите тему сообщения!");
// $email = check_input($_POST["email"], "Введите ваш e-mail!");
// $message = check_input($_POST["message"], "Вы забыли написать сообщение!");
/* Проверяем правильно ли записан e-mail */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $mail))
{
show_error("<br /> Е-mail адрес не существует");
}
/* Создаем новую переменную, присвоив ей значение */
$message_to_myemail = "Привет! Меня зовут $name, я представляю компанию $company, или пишу вам лично от себя, потому что планирую организовать $event. Меня заинтересовали ваши проекты особенно $name. Я узнал о вас, благодаря $informfrom. Свяжитесь со мной, пожалуйста,
по номеру $phone, или напишите мне на почтовый ящик $mail. Жду с нетерпением!";
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$mail> \r\n Reply-To: $mail \r\n";
mail($myemail, "Заявка", $message_to_myemail, $from);
?>
