<?php
$title = ' Контакты';
include('header.php');
?>
<div class="contact">
    <div class="contact-text">
        <h1>GO TO TOP</h1>
        <p>GO TO TOP - Ваш быстрый старт продаж</p>
        <h1>-контакты-</h1>
    </div>
</div>
<main>
    <div class="servicess">
        <div class="servicess-contact wrapper">
            <div class="servicess-contact-box">
                <h1>О компании</h1>
                <div class="servicess-contact-box-line"></div>
            </div>
            <div class="servicess-contact-content">
                <p>Стимулирование и увеличение продаж – именно такую конечную цель мы ставим себе при разработке стратегии продвижения сайтов в поисковых системах.</p>
                <p>В рамках этого подхода мы решаем следующие задачи:</p> 
                <p><span>подбор качественных ключевых запросов;<br>
                    увеличение видимости сайта в поисковых системах;<br>
                    продвижение сайта в ТОП-10 по стратегически важным ключевым запросам;<br>
                    увеличение естественного целевого трафика из поисковых систем;<br>
                    увеличение конверсии на посадочных страницах.</span>
                </p>  
                <p>Основным в разработке стратегии продвижения является создание индивидуального решения, максимально соответствующего технологическим возможностям и внешним факторам вашего сайта.</p>  
                <p>В управлении проектами мы придерживаемся строгого планирования и контроля задач. Технология работы по каждому проекту доступна клиентам в нашей информационной системе.</p>
                <p>Мы считаем, что добиться успеха можно только при условии полного понимания всех ключевых элементов проекта. Поэтому мы всегда на связи со своими клиентами, регулярные встречи и конструктивные диалоги – приоритетный элемент нашего сотрудничества.</p>
                <p>Стратегия, основанная на взаимовыгодном партнерстве, очень важна для нас. Прозрачность финансовых расчетов и их простота создает доверительные и долгосрочные отношения.</p>
                <p>Мы не работаем со сложными системами оплаты с обеспечительными платежами, предоплатой и последующими перерасчетами. Все расчеты производятся в конце месяца по факту выполненных работ и на основании фактически достигнутых показателей.</p>
            </div>
        </div>  
    </div>
</main>
<section>
    <div class="blog wrapper">
        <div class="blog-box">
            <h1>Свяжитесь с нами</h1>
            <div class="blog-box-line"></div>
            <div class="blog-box-content">
                <div class="blog-box-content-elena">
                    <div class="blog-box-content-elena-pic"></div>
                    <div class="blog-box-content-elena-text">
                        <h2>Елена Белкина</h2>
                        <h4>директор</h4>
                        <p>по вопросам корпоротивных экскурсий:</p>
                        <span>belkina@gototop.ru</span>
                    </div>
                </div>
                <div class="blog-box-content-alex">
                    <div class="blog-box-content-alex-pic"></div>
                    <div class="blog-box-content-alex-text">
                        <h2>Александр Рыбаков</h2>
                        <h4>директор отдела продаж</h4>
                        <p>по всем вопросам пишитe</p>
                        <span>rogozin@gototop.ru</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="fun">
    <div class="fun-fucts wrapper">
        <div class="fun-fucts-box">
            <article class="fun-fucts-item placeholder">
                <img src="icon/placeholder.png" alt="">
                <div class="fun-fucts-item-text">
                    <p>Москва,<br>Большая Спасская 12</p>
                </div>
            </article>
            <article class="fun-fucts-item telephone">
                <img src="icon/telephone.png" alt="">
                <div class="fun-fucts-item-text">
                    <p>Телефон:<br>8 (495) 626-46-00</p>
                </div>
            </article>
            <article class="fun-fucts-item mail">
                <img src="icon/mail.png" alt="">
                <div class="fun-fucts-item-text">
                    <p>E-mail:<br>info@gototop.ru</p>
                </div>
            </article>
        </div>
        <div class="fun-fucts-form">
            <h3>Напишите нам</h3>
            <form method="POST" action="form.php">
                <input type="text" name="fio" placeholder="ФИО">
                <input type="email" name="email" placeholder="E-mail">
                <textarea name="comment" placeholder="Ваше сообщение"></textarea>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
</div>
<div class="map-box">
    <div class="map-content-box"></div>
    <div class="map">
        <iframe src="https://yandex.ru/map-widget/v1/-/CCcgB2Yg" width="100%" height="620" frameborder="0" allowfullscreen="true"></iframe>
    </div>
</div>
<?php
include('footer.php');
?>