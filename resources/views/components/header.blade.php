<header class="header">
    @include('components.hero')
    <!-- Cinema info -->
    <section class="cinema-info">
        <div class="container cinema-info__inner">

            <div class="cinema-info__logo">
                <img src="/images/logo.svg" alt="Komek">
            </div>

            <div class="cinema-info__location">
                <span class="city">Казахстан</span>
                <span class="street">улица Тестовая 1</span>
            </div>

            <div class="cinema-info__phone">
                <span>+7 (775) 000 00 01</span>
                <span class="cash">Касса</span>
            </div>

            <div class="cinema-info__social">
                <a href="#"><img src="/images/facebook.svg"></a>
                <a href="#"><img src="/images/instagram.svg"></a>
                <a href="#"><img src="/images/youtube.svg"></a>
                <a href="#"><img src="/images/vk.svg"></a>
            </div>

            <button class="ticket-btn">
                Мне пришёл билет
            </button>

        </div>
    </section>

    <!-- Navigation -->
    <nav class="cinema-nav">
        <div class="container cinema-nav__inner">

            <ul class="cinema-nav__menu">
                <li class="active">Афиша</li>
                <li>Сеансы</li>
                <li>Кинотеатр</li>
                <li>Контакты</li>
            </ul>

            <div class="cinema-nav__actions">
                <button class="btn-login">Войти</button>
                <button class="btn-review">Написать отзыв</button>
            </div>

        </div>
    </nav>

</header>
