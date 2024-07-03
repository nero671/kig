import Popup from './Popup.js';

class BurgerMenu extends Popup {
  constructor() {
    super();

    this.burgerButton = document.querySelector('.icon-menu');
  }

  /**
   * Initialize the menu functionality.
   */
  init() {
    if (this.burgerButton) {
      document.addEventListener('click', ({ target }) => {
        const menuWrapper = document.querySelector('.burger-menu');
        const mobileMenuBtn = document.querySelector('.mobile-menu__btn');
        const header = document.querySelector('.header');

        if (target.closest('.icon-menu')) {
          this.html.classList.toggle('menu-open');

          !header.classList.contains('active') ? header.classList.toggle('active') : '';

          menuWrapper.classList.toggle('_is-open');
          this.toggleBodyLock(this.html.classList.contains('menu-open'));
        }

        mobileMenuBtn.addEventListener('click', () => {
          !header.classList.contains('active') ? header.classList.remove('active') : '';
          this.html.classList.remove('menu-open');
        })
      });
    }
  }

  /**
   * Open the menu.
   */
  menuOpen() {
    this.toggleBodyLock(true);
    this.html.classList.add('menu-open');
  }

  /**
   * Close the menu.
   */
  menuClose() {
    this.toggleBodyLock(false);
    this.html.classList.remove('menu-open');
  }
}

export default BurgerMenu;
