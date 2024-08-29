export const dropdown = () => {
    const catalogFilter = document.querySelector('.catalog-filter');
    const filterDropdown = catalogFilter?.querySelectorAll('.filter-dropdown');

    // document.body.addEventListener('click', (e) => {
    //     if(e.target.closest('.js-dropdown') && !e.target.matches('.filter-dropdown')) {
    //         e.target.classList.toggle('active');
    //     } else
    //         if (e.target.closest('.filter-dropdown')) {
    //
    //     }
    // });

    document.querySelectorAll('.filter-dropdown').forEach((dropdown) => {
        dropdown.addEventListener('click', function(event) {
            // Если кликнули на уже активный элемент, удаляем класс 'active'
            if (this.classList.contains('active')) {
                this.classList.remove('active');
            } else {
                // Убираем класс 'active' у всех элементов
                document.querySelectorAll('.filter-dropdown').forEach((item) => {
                    item.classList.remove('active');
                });
                // Добавляем класс 'active' к текущему элементу
                this.classList.add('active');
            }
            // Предотвращаем всплытие события, чтобы клик вне элементов сработал корректно
            event.stopPropagation();
        });
    });

    // Клик вне элементов - удаление класса 'active' у всех элементов
    document.addEventListener('click', function(e) {
        console.log(e.target)
        if (!e.target.matches('.filter-dropdown')) {
            document.querySelectorAll('.filter-dropdown').forEach((item) => {
                item.classList.remove('active');
            });
        }

    });





    // document.body.addEventListener('click', (e) => {
    //     if(e.target.closest('.filter-dropdown')) {
    //         const target = e.target;
    //
    //
    //         if (e.target.closest('.js-options')) {
    //             target.textContent = e.target;
    //         }
    //     }
    // });
}

