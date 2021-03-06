<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="build/css/style.min.css">
    <meta name="description" content="ПОДБЕРЕМ ДЛЯ ВАС АВТОМОБИЛЬ. Найдем, проверим и поможем купить.">
    <meta name="keywords" content="most, wanted, 174, автомобиль, найти, подобрать, купить, Магнитогорск"> 
    <title>MOST WANTED</title>
  </head>
  <body>
    <header id="header-major">
      
      <div class="header-major__wrapper-logo">
        <img src="build/img/header-image-logo.png" alt="logo">
      </div>

      <div class="header-major__burger"><span class="header-major__burger__span"></span></div>
      

      <nav class="header-major__menu__nav">
        <ul class="header-major__menu__nav__list">
          <a href="#"  class="header-major__menu__nav__list__link"><li class="header-major__menu__nav__list__link__item  active-page">главная</li></a>
          <a href="advantage.html"  class="header-major__menu__nav__list__link"><li class="header-major__menu__nav__list__link__item">Преимущества</li></a>
          <a href="services.html"  class="header-major__menu__nav__list__link"><li class="header-major__menu__nav__list__link__item">Услуги</li></a>
          <a href="cooperation.html"  class="header-major__menu__nav__list__link"><li class="header-major__menu__nav__list__link__item">Сотрудничество</li></a>
          <a href="about-us.html"  class="header-major__menu__nav__list__link"><li class="header-major__menu__nav__list__link__item">О нас</li></a>
          <a href="contacts.html"  class="header-major__menu__nav__list__link"><li class="header-major__menu__nav__list__link__item">Контакты</li></a>
        </ul>
      </nav>

      <div class="header-major__contacts">
        <ul class="header-major__contacts__list">
          <a class="header-major__contacts__list__link" href="tel:+7(906)898-49-60"><li class="header-major__contacts__list__link__item">+7(906)898-49-60</li></a>
          <a class="header-major__contacts__list__link" href="tel:+7(922)706-87-47"><li class="header-major__contacts__list__link__item">+7(922)706-87-47</li></a>
        </ul>
      </div>

    </header>
     
    <main id="main-major">
      <div class="container">
        <section class="main-major__content">
          <div class="main-major__content__slogan">
            <h1>подберем для вас Автомобиль</h1>
            <p>Найдем, проверим и поможем купить.</p>
          </div>
          <button id="request" class="main-major__content__button">Оставить заявку</button>
        </section>
      </div>

      <section class="main-major__form">
        <button id="close" class="main-major__form__button-close">Закрыть</button>


        <?php
          //проверяем, существуют ли переменные в массиве POST
          if(!isset($_POST['phone']) and !isset($_POST['name'])){
        ?>
        <form action="index.php" method="post">
          <input type="tel" name="phone" placeholder="Введите свой номер телефона*" required>
          <input type="text" name="name" placeholder="Введите свое имя*" required>
          <textarea name="message"   rows="10" placeholder="Можете кратко описать автомобиль который вы ищете"></textarea>
          <input type="submit" id="send" name="submit" value="Отправить">
        </form> <?php
            } else {
            //показываем форму
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $message = $_POST['message'];
            $phone = htmlspecialchars($phone);
            $name = htmlspecialchars($name);
            $message = htmlspecialchars($message);
            $phone = urldecode($phone);
            $name = urldecode($name);
            $message = urldecode($message);
            $phone = trim($phone);
            $name = trim($name);
            $message = trim($message);
            if (mail("most_wanted174@mail.ru", "Заявка с сайта", "Тел:".$phone.". Имя: ".$name.". Сообщение: ".$message , "From: info@mostwanted174.ru \r\n")){
            echo "Сообщение успешно отправлено";
            } else {
            echo "При отправке сообщения возникли ошибки";
            }
            }
          ?>
      </section>
    </main>

    <script src="src/jquery-3.4.1.min.js"></script>
    <script src="build/js/script.min.js"></script>
  </body>
</html>
