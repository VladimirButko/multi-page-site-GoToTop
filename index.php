<?php
$title = ' Главная';
include('header.php');
?>
    <div class="slider">
        <div class="slider-box">
            <a href="" class="slider-box-item"></a>
            <a href="" class="slider-box-item normal"></a>
            <a href="" class="slider-box-item normal"></a>
            <a href="" class="slider-box-item normal"></a>
            <a href="" class="slider-box-item"></a> 
        </div>
        <div class="slider-content">
            <h1>ВАШ САЙТ- ГЛАВНЫЙ БИЗНЕС ИНСТРУМЕНТ</h1>
            <p>GO TO TOP - Ваш быстрый старт продаж</p>
            <button class="btn">О нас</button>
        </div>
        <div class="slider-left-arrow">
            <div class="slider-left-arrow-left">
                <div class="slider-left-arrow-left-box"></div>
            </div>
        </div>
        <div class="slider-right-arrow">
            <div class="slider-right-arrow-right">
                <div class="slider-right-arrow-right-box"></div>
            </div>
        </div>
    </div>
    <main>
        <div class="cards wrapper">
            <div class="cards-item">
                <div class="cards-item-pic pic-computer"></div>
                <h3>СОЗДАДИМ ПРОДАЮЩИЙ САЙТ</h3>
                <p>Нету сайта? не беда. Наши специалисты разработают оптимизированный сайт для Вашей компании в минимальные сроки.</p>
            </div>
            <div class="cards-item">
                <div class="cards-item-pic pic-networking2"></div>
                <h3>ВЫБЕРЕМ АУДИТОРИЮ</h3>
                <p>Составим аудиторию Ваших потенциальный клиентов для качественных продаж.</p>
            </div>
            <div class="cards-item">
                <div class="cards-item-pic pic-settings"></div>
                <h3>НАСТРОИМ СТАТИСТИКУ</h3>
                <p>Настроим статистику сайта, будем анализировать действия пользователя и улучшать функционал.</p>
            </div>
            <div class="cards-item">
                <div class="cards-item-pic pic-networking"></div>
                <h3>РАЗОВЬЕМ СОЦ.СЕТИ</h3>
                <p>Для качественных продаж крайне необходимо вести активную деятельность в социальных сетях.
                Наши специалисты комплексно подойдут к вопрошу привлечения клиентов через соц.сети</p>
            </div>
            <div class="cards-item">
                <div class="cards-item-pic pic-laptop"></div>
                <h3>МИНИМИЗИРУЕМ БЮДЖЕТ</h3>
                <p>Главное не тратить деньги в пустую. Мы следим за тем, какая реклама дает максимальный результат
                и стремимся найти самые активные точки продаж для минимизации рекламного бюджета.</p>
            </div>
            <div class="cards-item">
                <div class="cards-item-pic pic-startup"></div>
                <h3>ПРИВЛЕЧЕМ КЛИЕНТОВ</h3>
                <p>Наша цель - максимальное количество клиентов для Ваших продаж.
                Мы работаем по всем направлениям в интернет-маркетинге для того,
                чтобы найти именно Ваших потенциальных клиентов!</p>
            </div>
        </div> 
    </main>
   <section>
        <div class="news">
            <h1 >Хотите зарабатывать в интернете? просто свяжитесь с нами.</h1>
            <button class="news-btn">Связаться</button>
        </div>
        <div class="work wrapper">
            <h1>Последние работы</h1>
            <div class="work-line"></div>
        </div>
        <div class="cards-work wrapper">
                <div class="cards-work-pic pic-site1"></div>
                <div class="cards-work-pic pic-site2"></div>
                <div class="cards-work-pic pic-site3"></div>
        </div>
        <div class="news2">
            <div class="news2-box">
                <h3>456</h3>
                <div class="news2-box-line"></div>
                <p>Счастливых клиентов</p>
            </div> 
            <div class="news2-box">
                <h3>322</h3>
                <div class="news2-box-line"></div>
                <p>Проекта</p>
            </div> 
            <div class="news2-box">
                <h3>290</h3>
                <div class="news2-box-line"></div>
                <p>Сайтов в топ</p>
            </div> 
            <div class="news2-box">
                <h3>132</h3>
                <div class="news2-box-line"></div>
                <p>Сайта разработано</p>
            </div> 
        </div>
        <div class="news3 wrapper">
            <div class="news3-box">
                <h1>Новости</h1>
                <div class="news3-box-line"></div>
            </div>
            <div class="news3-container">
                <div class="news3-container-item">
                    <div class="news3-container-item-pic pic-news1"></div>
                    <div class="news3-container-item-box">
                        <p><span>1 января 2018</span></p>
                        <p>Мы начинаем этот год с наших новых разроботок в области маркетинга. Ждем Вас на наших тренингах и лекциях</p>
                        <a href="news1.php">Подробнее</a>
                    </div>
                </div>
                <div class="news3-container-item">
                    <div class="news3-container-item-pic pic-news2"></div>
                    <div class="news3-container-item-box">
                        <p><span>12 марта 2018</span></p>
                        <p>Мы работаем, вы отдыхаете! Теперь мы предоставляем полный спектр услуг по привлечению клиентов!</p>
                        <a href="news2.php">Подробнее</a>
                    </div>
                </div> 
            </div>
        </div>
        <div class="container">
            <div class="container-box wrapper">
                <h1>Напишите нам</h1>
                <div class="container-box-line"></div>
            </div>
            <form method="POST" action="form.php" class="wrapper">
                <div>
                    <input type="text" name="fio" placeholder="ФИО">
                    <input type="email" name="email" placeholder="Email">
                    <input type="tel" name="phone" placeholder="Телефон">
                    <button type="submit">Отправить вопрос</button>
                </div>
                <div>
                    <textarea name="comment" placeholder="Ваше сообщение"></textarea> 
                </div>
            </form>
        </div>
    </section>
<?php
    include('footer.php');
?>