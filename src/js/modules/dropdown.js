export const dropdown = () => {
    document.body.addEventListener('click', (e) => {
        if(e.target.closest('.js-dropdown')) {
            e.target.classList.toggle('active');
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

