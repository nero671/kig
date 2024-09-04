/**
 * !(i)
 * Код попадает в итоговый файл, только когда вызвана функция, например FLSFunctions.spollers();
 * Или когда импортирован весь файл, например import "files/script.js";
 * Неиспользуемый (не вызванный) код в итоговый файл не попадает.

 * Если мы хотим добавить модуль следует его раскомментировать
 */
import {
    isWebp,
    headerFixed,
    togglePopupWindows,
    addTouchClass,
    addLoadedClass,
    Tabs,
    submitForm
} from './modules';

import {accordion, mobileAccordion} from "./helpers/elementsNodeList.js";

import BurgerMenu from './modules/BurgerMenu';
import { dropdown } from './modules/dropdown';
import formValidation from './modules/validationForm';
import setMaskForPhone from "./modules/setMaskForPhone";
import {useAccordion} from "./modules/accordion.js";

import Swiper, {Autoplay, Navigation, Pagination} from 'swiper';
import {countNumAnim} from "./modules/countNumbAnim.js";
Swiper.use([Navigation]);
Swiper.use([Pagination]);
Swiper.use([Autoplay]);


var mainSwiper = new Swiper('.slider-block__slider', {
    slidesPerView: 1,
    speed: 600,
    loop: true,
    spaceBetween: 10,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: '.arrow-right',
        prevEl: '.arrow-left'
    },
});

/* Проверка поддержки webp, добавление класса webp или no-webp для HTML
 ! (i) необходимо для корректного отображения webp из css
 */
isWebp();

/* Добавление класса touch для HTML если браузер мобильный */
// addTouchClass();

/* Добавление loaded для HTML после полной загрузки страницы */
// addLoadedClass();

/* Модуль для работы с меню (Бургер) */
new BurgerMenu().init();

/**
 *  Библиотека для анимаций
 *  документация: https://michalsnik.github.io/aos
 */
// AOS.init();

/** Параллакс мышей */
// const mousePrlx = new MousePRLX({});

/** Фиксированный header */
// headerFixed();

/**
 *  Открытие/закрытие модальных окон
 * Чтобы модальное окно открывалось и закрывалось
 * На окно повешай атрибут data-popup="<название окна>"
 * И на кнопку, которая вызывает окно так же повешай атрибут data-type="<название окна>"

 * На обертку(враппер) окна добавь класс _overlay-bg
 * На кнопку для закрытия окна добавь класс button-close
 */
togglePopupWindows();

// const tabs = new Tabs('default-tabs', {});

dropdown();
formValidation();
setMaskForPhone();
useAccordion(mobileAccordion);
useAccordion(accordion);
countNumAnim();

document.querySelectorAll('.js-dropdown').forEach((dropdown, index) => {
    // Уникальный ключ для каждого dropdown
    const storageKey = `selectedOption_${index}`;
    const catalogMenu = document.querySelector('.catalog-menu');

    // Функция для сохранения текста выбранной опции в localStorage
    function saveOptionToLocalStorage(optionText) {
        localStorage.setItem(storageKey, optionText);
    }

    // Функция для обновления текста в <span>
    function updateOptionText(optionText) {
        dropdown.querySelector('span').textContent = optionText;
    }

    // Функция для загрузки текста из localStorage и вставки его в <span> при инициализации
    function loadOptionFromLocalStorage() {
        const selectedOption = localStorage.getItem(storageKey);
        if (selectedOption) {
            updateOptionText(selectedOption);
        }
    }

    // Функция для очистки текста в <span> и localStorage
    function clearOption() {
        localStorage.removeItem(storageKey); // Удаляем значение из localStorage
        updateOptionText(''); // Очищаем текст в <span>
    }

    // Обработчик клика для каждого элемента js-option
    dropdown.querySelectorAll('.js-option a').forEach(option => {
        option.addEventListener('click', function() {
            const optionText = this.textContent.trim();
            saveOptionToLocalStorage(optionText); // Сохраняем текст в localStorage
        });
    });

    // Загрузка текста при инициализации
    loadOptionFromLocalStorage();

    // Обработчик клика для ссылок внутри catalogMenu
    catalogMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function() {
            // При клике очищаем данные в localStorage и поля <span>
            clearOption();
        });
    });
});


