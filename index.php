<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="main">
    <div class="swiper__section js-mainSwiper">
        <div class="button-prev">
            <svg class="icon icon-slider-arrow-left ">
                <use xlink:href="#icon-slider-arrow-left"></use>
            </svg>
        </div>
        <div class="button-next">
            <svg class="icon icon-slider-arrow-right ">
                <use xlink:href="#icon-slider-arrow-right"></use>
            </svg>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="main-slide">
                        <div style="background-image: url('image/slide_1.jpg')" class="main-slide__back"></div>
                        <div class="main-slide__info">

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="main-slide">
                        <div style="background-image: url('image/slide_2.jpg')" class="main-slide__back"></div>
                        <div class="main-slide__info">
                            <div class="main-slide__head">
                                <div class="main-slide__title">Факторинг</div>
                                <div class="main-slide__subtitle">для поставщиков METRO</div>
                            </div>
                            <div class="main-slide__subhead">
                                <div class="main-slide__num">12,5
                                    <sub>%</sub>
                                </div>
                                <div class="main-slide__subhead-label">Экспресс-решение за 24 часа</div>
                            </div>
                            <div class="main-slide__date">Ставка действует до 31 декабря 2017</div>
                            <div class="main-slide__button">
                                <button class="button green md">Узнать больше</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="main-slide">
                        <div style="background-image: url('image/slide_3.jpg')" class="main-slide__back"></div>
                        <div class="main-slide__info visible-xs">
                            <div class="main-slide__head">
                                <div class="main-slide__subtitle">+185% за год прирост бизнеса</div>
                            </div>
                            <div class="main-slide__button">
                                <button class="button green md">Узнать больше</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="advantage__section">
        <div class="advantage__grid">
            <div class="advantage__col">
                <a href="<?= Url::to(['site/company'])?>" class="advantage__item">
                    <div class="advantage__icon">
                        <img src="image/company-pic.svg" width="86" height="83">
                    </div>
                    <div class="advantage__title">О компании</div>
                    <div class="advantage__text">Член ассоциации АФК</div>
                    <div class="advantage__arrow">
                        <svg class="icon icon-arrow-right ">
                            <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="advantage__col">
                <a href="#" class="advantage__item">
                    <div class="advantage__icon">
                        <img src="image/benefits-pic.svg" width="80" height="80">
                    </div>
                    <div class="advantage__title">Наши преимущества</div>
                    <div class="advantage__text">Комплексное управление дебиторской
                        <br>задолженностью</div>
                    <div class="advantage__arrow">
                        <svg class="icon icon-arrow-right ">
                            <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="advantage__col">
                <a href="#" class="advantage__item">
                    <div class="advantage__icon">
                        <img src="image/press-center-pic.svg" width="67" height="85">
                    </div>
                    <div class="advantage__title">Пресс-центр</div>
                    <div class="advantage__text">Актуальные статьи и пресс-релизы</div>
                    <div class="advantage__arrow">
                        <svg class="icon icon-arrow-right ">
                            <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="service__section">
        <div class="section__head">
            <div class="medium__title">Мы предлагаем</div>
        </div>
        <div class="tile-link__grid">
            <div class="tile-link__col">
                <a href="<?= Url::to(['site/funding'])?>" style="background-image: url('image/tile_link_back.jpg')" class="tile-link__elem">
                    <div class="tile-link__title"> Получить финансирование
                        <svg class="icon icon-arrow-right ">
                            <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="tile-link__col">
                <a href="<?= Url::to(['site/delay'])?>" style="background-image: url('image/tile_link_back2.jpg')" class="tile-link__elem">
                    <div class="tile-link__title"> Увеличить отсрочку платежа
                        <svg class="icon icon-arrow-right ">
                            <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="tile-link__col">
                <a href="<?= Url::to(['site/sell'])?>" style="background-image: url('image/tile_link_back3.jpg')" class="tile-link__elem">
                    <div class="tile-link__title"> Продать дебиторскую задолженность
                        <svg class="icon icon-arrow-right ">
                            <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="section__button">
            <button data-modal-link="#modalRequest" class="button green button--icon js-modalLink">Оформить заявку на факторинг
                <svg class="icon icon-button-icon ">
                    <use xlink:href="#icon-button-icon"></use>
                </svg>
            </button>
        </div>
    </div>
</div>