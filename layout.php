<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Любой</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;600&family=Roboto:wght@400;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.galereya.css">
    <!--

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    -->
    <script src="https://use.fontawesome.com/4b2b3c4e4b.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>
<header class="header">
    <div class="header__content flex wrap">
        <div class="header__logo ">
            <div class="logo__content big_text stile_Garamond-bolt"> Tolmebel.ru <br>
                <div class="little-text">Интернет-магазин мебели в <br> Тольятти от Татьяны Ананченко</div>
            </div>
        </div>
        <div class="header__infoBut">
            <div class="header__phone big_text flex_center stile_Garamond-bolt">
                <a href="tel:+79053068788"><i class="fa fa-phone phone-yellow" aria-hidden="true"></i>
                +7-905-306-87-88
                </a>
            </div>
            <div class="header__button-make-order flex_center">
                <div class="button js-button-campaign flex_center button_yellow">Сделать заказ</div>
            </div>
        </div>
    </div>
    <div id="menu">
        <ul id="Menu">
            <!--             все меню -->
            <li class="point"><a href="#" class="menu__text_style">Мягкая <span class="white-space">мебель <i
                                class="fa fa-angle-double-down" aria-hidden="true"></i></span></a>
                <!--                 drop menu - start -->
                <!--                     выпыдыющее меню -->
                <ul class="drop">

                        <li><a href="#" class="drop__a">Диваны</a></li>


                        <li><a href="#" class="drop__a">Кресла</a></li>

                    <!--                         пункт выпадающего меню -->

                        <li><a href="#" class="drop__a">Кровати</a></li>


                        <li><a href="#" class="drop__a">Матрасы</a></li>


                        <li><a href="#" class="drop__a">Двух-ярусные кровати</a></li>

                </ul>
                <!--                 drop menu - end -->
            </li>
            <li class="point"><a href="#" class="menu__text_style">Корпусная <span class="white-space">мебель <i
                                class="fa fa-angle-double-down" aria-hidden="true"></i></span></a>
                <!--                     выпыдыющее меню -->
                <ul class="drop">

                        <li><a href="#" class="drop__a">Кухни</a></li>

                        <li><a href="#" class="drop__a">Спальни</a></li>

                    <!--                         пункт выпадающего меню -->

                        <li><a href="#" class="drop__a">Шкафы-Купе</a></li>


                        <li><a href="#" class="drop__a">Стенки</a></li>


                        <li><a href="#" class="drop__a">Стенки-горки</a></li>


                        <li><a href="#" class="drop__a">Прихожие</a></li>


                        <li><a href="#" class="drop__a">Обеденные зоны</a></li>


                        <li><a href="#" class="drop__a">Столы</a></li>


                        <li><a href="#" class="drop__a">Комоды</a></li>

                </ul>
            </li>
            <li class="point"><a href="#" class="menu__text_style">Мебель под заказ</a></li>
            <li class="point point__margin-right"><a href="#" class="point_right">Контакты</a></li>
        </ul>
    </div>
    <div class="mobile-navigaror">
        <div class="menu-burger__header">
            <span></span>
        </div>
        <nav class="header__nav">
            <ul class="menu header__menu">
                <li>
                    <div class="header__ikon_top header__menu__ikon ">
                        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
                    </div>
                    <div class="header__menu__item">
                        Мягкая мебель <span class="header__menu__ikon"><i class="fa fa-angle-double-down"
                                                                          aria-hidden="true"></i></span>
                        <ul class="drop">

                                <li><a href="#" class="drop__a">Диваны  </a></li>


                                <li><a href="#" class="drop__a">Кресла  </a></li>

                            <!--                         пункт выпадающего меню -->

                                <li><a href="#" class="drop__a">Кровати  </a></li>


                                <li><a href="#" class="drop__a">Матрасы  </a></li>


                                <li><a href="#" class="drop__a">Двух-ярусные кровати  </a></li>

                        </ul>
                    </div>
                </li>
                <li>
                    <div class="header__ikon_top header__menu__ikon header__menu__ikon_position2">
                        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
                    </div>
                    <div class="header__menu__item">
                        Корпусная мебель<span class="header__menu__ikon"><i class="fa fa-angle-double-down"
                                                                            aria-hidden="true"></i></span>
                        <ul class="drop">

                                <li> <a href="#" class="drop__a">Кухни  </a></li>

                                <li> <a href="#" class="drop__a">Спальни  </a></li>

                            <!--                         пункт выпадающего меню -->

                                <li> <a href="#" class="drop__a">Шкафы-Купе  </a></li>

                                <li><a href="#" class="drop__a">Стенки</a></li>

                                <li> <a href="#" class="drop__a">Стенки-горки  </a></li>

                                <li> <a href="#" class="drop__a">Прихожие  </a></li>

                                <li> <a href="#" class="drop__a">Обеденные зоны </a></li>

                                <li> <a href="#" class="drop__a">Столы  </a></li>

                                <li> <a href="#" class="drop__a">Комоды  </a></li>

                        </ul>
                    </div>
                </li>

                    <li> <a href="" class="menu__item">Мебель под заказ </a></li>


                    <li> <a href="" class="menu__item">Контакты </a></li>

            </ul>
        </nav>
    </div>
    <hr class="header__hr">
</header>
<div class="main-content">
    <main class="content"><?php
        include 'components/sand-img.php';
        ?></main>
</div>

<footer class="footer">
    <div class="footer__container flex wrap">
        <div class="footer__contacts"><i class="fa fa-phone phone-blue" aria-hidden="true"></i>+7-905-306-87-88 <br>youmail@mail.ru
        </div>
        <div class="footer__logo big_text footer__big-text_adaptive">Tolmebel.ru <br>
            <div class="little-text footer__lit-text_adaptive">Интернет-магазин мебели в <br> Тольятти от Татьяны
                Ананченко
            </div>
        </div>
        <div class="footer__place little-text little-text footer__lit-text_adaptive">Россия,<br>
            Самарская Область, г. Тольятти, <br>
            Центральный Район
        </div>
    </div>
</footer>
<div class="overlay js-overlay-campaign">
    <div class="header__popup js-popup-campaign">
        <div class="popup__title">Сделать заказ</div>
        <hr class="popup__hr">
        <form class="popup__form">
            <textarea placeholder="Содержание заказа" name="description" class="popup__input_widht popup__input_height-messege"></textarea>
            <input placeholder="Имя" id="name" type="text" name="name" value="" required="required" class="popup__input_widht popup__input_height"/>
            <input placeholder="Телефон" id="phone" type="tel" name="phone" value="" required="required" class="popup__input_widht popup__input_height"/>
            <input placeholder="Email" type="email" name="email" value="" class="popup__input_widht popup__input_height"/>
            <input type="submit" name="call" value="Отправить заказ" class="popup__input_button"/>
        </form>
        <div class="popup__text">Мы обязательно с Вами свяжемся!</div>
        <div class="close-popup js-close-campaign"></div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.pageScript.js"></script>
</body>
</html>