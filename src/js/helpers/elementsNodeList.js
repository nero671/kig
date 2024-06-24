const html = document.documentElement;
const body = document.body;
const pageWrapper = document.querySelector('.page');
const header = document.querySelector('.header');
const firstScreen = document.querySelector('[data-observ]');
const burgerButton = document.querySelector('.icon-menu');
const menu = document.querySelector('.menu');
const lockPaddingElements = document.querySelectorAll('[data-lp]');
const headerSearch = document.querySelector('.header-search');
const mobileAccordion = document.querySelector('.burger-menu__accordion');
const accordion = document.querySelector('.accordion-wrapper');

export {
  html,
  body,
  pageWrapper,
  header,
  firstScreen,
  burgerButton,
  menu,
  lockPaddingElements,
  headerSearch,
  mobileAccordion,
  accordion
};
