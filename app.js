document.addEventListener('DOMContentLoaded', function() {
    let searchBtn = document.querySelector('#search');
    let searchForm = document.querySelector('.head .search-bar');
    let menu = document.querySelector('.head .nav-bar');
    let barsBtn = document.querySelector('#bars');

    searchBtn.addEventListener('click', () => {
        toggleActive(searchForm);
        hideElement(menu);
    });

    barsBtn.addEventListener('click', () => {
        toggleActive(menu);
        hideElement(searchForm);
    });

    function toggleActive(element) {
        element.classList.toggle('active');
    }

    function hideElement(element) {
        element.classList.remove('active');
    }
});
