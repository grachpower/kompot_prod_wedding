<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="init-scale=1, width=device-width">
    <title>Свяжитесь с нами</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="long-page">
        <div class="main-container">
            <header class="header">
                <ul class="menu header__menu">
                    <li class="menu__item">
                        <a href="index.html" class="menu__link header__menu__link">ГЛАВНАЯ</a>
                    </li>
                    <li class="menu__item">
                        <a href="aboutus.html" class="menu__link header__menu__link">О НАС</a>
                    </li>
                    <li class="menu__item">
                        <a href="services.html" class="menu__link header__menu__link">УСЛУГИ</a>
                    </li>
                    <li class="menu__item">
                        <a href="portfolio.html" class="menu__link header__menu__link">ПОРТФОЛИО</a>
                    </li>
                    <li class="menu__item">
                        <a href="contacts.php" class="menu__link header__menu__link">КОНТАКТЫ</a>
                    </li>
                </ul>
            </header>
            <form class="request" action="contacts.php" method="post">
                <h2 class="title title_medium contacts__title">
                Заявка
              </h2>
                <div class="separator"></div>
                    Привет! Меня зовут <input class="form__text__input" type="text" name="name" placeholder="Екатерина" required>,
                    я пишу Вам, потому что планирую организовать <input class="form__text__input" type="text" name="event" placeholder="свадьбу" required>.
                    Меня заинтересовали ваши проекты, особенно <input class="form__text__input" type="text" name="interesting">.
                    Я узнал о вас, благодаря <input class="form__text__input" type="text" name="informfrom">. Свяжитесь со мной, пожалуйста,
                    по номеру <input class="form__text__input" type="tel" name="phone" placeholder="+7(012)345-67-89" required>,
                    или напишите мне на почтовый ящик <input class="form__text__input" type="email" name="mail" placeholder="kompot.wedding@ya.ru" required>.
                    Жду с нетерпением!
                <div class="form__controls">
                    <button class="request__button" type="submit" name="submit">Отправить заявку</button>
                </div>
            </form>
            <div class="rhombus__wrapper">
                <div class="rhombus"></div>
            </div>
            <div class="contacts">
                <h2 class="title title_medium contacts__title">
                Контактные данные
              </h2>
                <div class="separator"></div>
                <p>
                    <span class="label">Телефон</span>
                    <a href="tel:+79379147193">+7(937)-914-71-93</a>
                </p>
                <p>
                    <span class="label">e-mail</span>
                    <a href="mailto:kompot.prod@ya.ru?subject=Хочу лучшую свадьбу">kompot.wedding@ya.ru</a>
                </p>
            </div>
            <div class="rhombus__wrapper">
                <div class="rhombus"></div>
            </div>
        </div>
        <div class="address">
          <h2 class="title title_medium contacts__title">
            Мы на карте
          </h2>
          <div class="separator"></div>
          <div class="map" id="map"></div>
          <div class="address__about">
            <p>Мастерская уникальных свадеб «KOMПOT Wedding»</p>
            <p>Ул. Московская 29, ТОЦ Гермес, 6 этаж, офис 604</p>
          </div>
        </div>
        <div class="rhombus__wrapper">
            <div class="rhombus"></div>
        </div>
        <div class="footer-wrapper">
            <footer class="footer">
                <div class="footer__container">
                    <div class="socials">
                        <a href="https://vk.com/kompot.wedding" class="socials__link">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100011265253659&ref=ts&fref=ts" class="socials__link">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://vimeo.com/user29405083/videos" class="socials__link">
                            <i class="fa fa-vimeo" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UC4rDwLSp3msPxoX_8obNMyQ" class="socials__link">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/kompot.wedding/" class="socials__link">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="socials__link">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="footer__content clearfix">
                        <div class="about footer__column">
                            <p>
                                <span class="label">Мастерская уникальных свадеб</span> «КОМПОТ Wedding»
                            </p>
                        </div>
                        <div class="footer__contacts footer__column">
                            <p>
                                <span class="label">Телефон</span>
                                <a href="tel:+79379147193">+7(937)-914-71-93</a>
                            </p>
                            <p>
                                <span class="label">e-mail</span>
                                <a href="mailto:kompot.wedding@ya.ru?subject=Хочу лучшую свадьбу">kompot.wedding@ya.ru</a>
                            </p>
                        </div>
                        <div class="development footer__column">
                            <span>Разработано @КОМПОТProd</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGgacdV9Ci4zWuOWd_33isS0F6uY8cuO8&callback=initMap"></script>
</body>
</html>


<?php
if (isset($_POST['submit'])) {
    // echo "form submit";
    /* Осуществляем проверку вводимых данных и их защиту от враждебных
    скриптов */
    $name = htmlspecialchars($_POST["name"]);
    $event = htmlspecialchars($_POST["event"]);
    $interesting = htmlspecialchars($_POST["interesting"]);
    $informfrom = htmlspecialchars($_POST["informfrom"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $mail = htmlspecialchars($_POST["mail"]);
    /* Устанавливаем e-mail адресата */
    $myemail = "kompot.wedding@ya.ru";
    /* Проверяем заполнены ли обязательные поля ввода, используя check_input
    функцию */
    // $your_name = check_input($_POST["your_name"], "Введите ваше имя!");
    // $tema = check_input($_POST["tema"], "Укажите тему сообщения!");
    // $email = check_input($_POST["email"], "Введите ваш e-mail!");
    // $message = check_input($_POST["message"], "Вы забыли написать сообщение!");
    /* Проверяем правильно ли записан e-mail */
    // if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $mail))
    // {
    // show_error("<br /> Е-mail адрес не существует");
    // }
    /* Создаем новую переменную, присвоив ей значение */
    $message_to_myemail = "Привет! Меня зовут $name, я пишу вам, потому что планирую организовать $event. Меня заинтересовали ваши проекты особенно $interesting
    . Я узнал о вас, благодаря $informfrom. Свяжитесь со мной, пожалуйста,
    по номеру $phone, или напишите мне на почтовый ящик $mail. Жду с нетерпением!";
    /* Отправляем сообщение, используя mail() функцию */
    // $from  = "From: $name <$mail> \r\n Reply-To: $mail";
    mail($myemail, "Заявка", $message_to_myemail, "From: a74026@lovesosna.mcdir.ru");
}
?>
