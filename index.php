<?php // этот php-код компилирует less/style.less в css/style.css	
require "./assets/less/lessc.inc.php";
function autoCompileLess($inputFile, $outputFile)
{
    // load the cache
    $cacheFile = $inputFile . ".cache";
    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }
    $less = new lessc;
    $newCache = $less->cachedCompile($cache);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}
autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <ul>
                    <li><a href="#">Головна</a></li>
                    <li><a href="#sec2">Переваги</a></li>
                    <li><a href="#sec3">Послуги</a></li>
                    <li><a href="#sec4">Формати</a></li>
                    <li><a href="#sec5">Роботи</a></li>
                    <li><a href="#sec6">Контакти</a></li>
                </ul>
            </div>
        </div>
        <div class="header-wrapper">
            <header>
                <div class="container">
                    <div class="block">
                        <a class="logo" href="">
                            <img src="./assets/img/logo.svg" alt="">
                        </a>
                        <nav>
                            <ul>
                                <li><a href="#">Головна</a></li>
                                <li><a href="#sec2">Переваги</a></li>
                                <li><a href="#sec3">Послуги</a></li>
                                <li><a href="#sec4">Формати</a></li>
                                <li><a href="#sec5">Роботи</a></li>
                                <li><a href="#sec6">Контакти</a></li>
                            </ul>
                        </nav>
                        <div class="phone">
                            <a href="#">+38(093)-848-44-74</a>
                        </div>
                        <div class="menu">
                            <!-- Кнопка Мобильного Меню -->
                            <button id="burger-menu">
                                <div class="box box_item1"></div>
                                <div class="box box_item2"></div>
                                <div class="box box_item3"></div>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <section class="sec1">
                <div class="container" data-aos="fade-up">
                    <div class="texts-wrap">
                        <div class="title">
                            <h1>Виїзний банкет
                                <span>з доставкою на будь-яке свято</span>
                            </h1>
                        </div>
                        <div class="descr">
                            <span>Смачно, швидко та красиво.</span>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Отримати меню під ваше свято</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="sec2" id="sec2">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Чим ми відрізняємося:</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec2-photo1.jpg" alt=""></div>
                        <div class="descr">
                            <span>Тільки свіжі продукти</span>
                            <p>Готуємо не раніше ніж за 24 години</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec2-photo2.jpg" alt=""></div>
                        <div class="descr">
                            <span>Оригінальне меню під малий бюджет</span>
                            <p>Не просто «сирок та ковбаска»</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec2-photo3.jpg" alt=""></div>
                        <div class="descr">
                            <span>Ніколи не запізнюємося</span>
                            <p>Завжди в курсі ситуації на дорогах</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec2-photo4.jpg" alt=""></div>
                        <div class="descr">
                            <span>Вибір із 600 варіантів страв</span>
                            <p>у тому числі і здорове харчування</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec2-photo5.jpg" alt=""></div>
                        <div class="descr">
                            <span>Попередня дегустація з доставкою</span>
                            <p>Після погодження меню – привозимо спробувати</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec2-photo6.jpg" alt=""></div>
                        <div class="descr">
                            <span>35 варіантів сервірування</span>
                            <p>Під будь-який формат заходу</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec3" id="sec3">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Наші послуги</h2>
                    <p>Ми пропонуємо зручні формати виїзного кейтерингу</p>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec3-photo1.jpg" alt=""></div>
                        <div class="descr">
                            <span>Корпоративне свято</span>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec3-photo2.jpg" alt=""></div>
                        <div class="descr">
                            <span>На свіжому повітрі</span>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo"><img src="./assets/img/sec3-photo3.jpg" alt=""></div>
                        <div class="descr">
                            <span>Весілля та Дні народження</span>
                            <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Замовити</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4" id="sec4">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Варіанти сервірування</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <span>Тільки доставка</span>
                        <ul>
                            <li>Узгодження меню</li>
                            <li>Дегустація</li>
                            <li>Доставка у ланчбоксах</li>
                            <li>Надання преміального крафту посуду</li>
                        </ul>
                        <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Дізнатись вартість</a>
                    </div>
                    <div class="item">
                        <span>Доставка з сервіруванням</span>
                        <ul>
                            <li>Узгодження меню</li>
                            <li>Дегустація</li>
                            <li>Вибір сервірування фуршетної зони</li>
                            <li>Доставка страв</li>
                            <li>Оформлення фуршетної зони</li>
                            <li>Упаковка та вивіз текстилю та посуду</li>
                        </ul>
                        <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Дізнатись вартість</a>
                    </div>
                    <div class="item">
                        <span>"Під ключ"</span>
                        <ul>
                            <li>Узгодження меню</li>
                            <li>Дегустація</li>
                            <li>Вибір стилю оформлення фуршетної зони</li>
                            <li>Вибір варіанта сервірування</li>
                            <li>Вибір офіціантів та узгодження уніформи</li>
                            <li>Доставка страв</li>
                            <li>Оформлення фуршетної зони</li>
                            <li>Сервірування</li>
                            <li>Подача страв та напоїв</li>
                            <li>Заміна посуду та приладів</li>
                            <li>Упаковка та вивіз текстилю та посуду</li>
                            <li>Прибирання після заходу</li>
                        </ul>
                        <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">Дізнатись вартість</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec5" id="sec5">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Наші роботи</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <img src="./assets/img/pictures/1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/5.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/6.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/7.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/8.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/9.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/10.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/11.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/12.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/13.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/14.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/15.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/16.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/17.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="./assets/img/pictures/18.jpg" alt="">
                    </div>
                </div>
                <div class="footer" id="sec6">
                    <div class="logo">
                        <img src="./assets/img/logo.svg" alt="">
                    </div>
                    <a href="#">Політика конфіденційності</a>
                    <div class="txt">
                        <p>Кейтерингова компанія "Dishes"</p>
                        <p>ТОВ "Dishes"</p>
                        <p>Всі права захищені.</p>
                        <p>© 2023 <a href="mailto:dishes0803@gmail.com">dishes0803@gmail.com</a> <a href="tel:+380938484474">+380938484474</a></p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
        </footer>
    </div>

    <?php require "modal.php" ?>
    <?php require "footer.php" ?>