"use strict";
import modal from "./modules/modal";
import {openModal} from "./modules/modal";
import tabs from "./modules/tabs";
import forms from "./modules/forms";
import slider from './modules/slider';
import cards from './modules/cards';
import timer from './modules/timer';

window.addEventListener('DOMContentLoaded', function(){
    const modalTimerId = setTimeout( () => openModal('.modal', modalTimerId), 3000);

    modal('[data-modal]', '.modal', modalTimerId);
    tabs('.tabheader__item', '.tabcontent', '.tabheader__items', 'tabheader__item_active');
    forms('form', modalTimerId);
    slider({
        sliderMain: '.offer__slider',
        currentCount: '#current',
        nextSlide: '.offer__slider-next',
        slideField: '.offer__slider-inner',
        totalCount: '#total',
        allSlides: '.offer__slide',
        wrapperSlides: '.offer__slider-wrapper',
        prevSlide: '.offer__slider-prev'
    });
    cards();
    timer('.timer', "2021-12-17");
});