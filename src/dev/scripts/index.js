import Header from './modules/header';
import Splide from './library/splide.min';
import ViewMore from './modules/viewMore';
import TabPanel from './modules/tabPanel';

// ヘッダー
(()=>{
    const root = document.querySelector('.js-header');

    if (!root) {
        return;
    }

    const instance = new Header(root);
    instance.init();
})();

// トップMVのカルーセル
(() => {
    const rootClass = '.js-mvCarousel';
    const root = document.querySelector(rootClass);

    if (!root) {
        return;
    }
    
    const option = {
        arrows: false,
        type  : 'fade',
        pagination: true,
        speed: 5000,
        rewind: true,
        autoplay: true,
        interval: 5000,
        classes: {
            page      : 'splide__pagination__page mv__paginationItem',
        },
    }

    const instance = new Splide(rootClass, option);

    instance.mount();
})();

// メニューのカルーセル
(() => {
    const rootClass = '.js-menuCarousel';
    const root = document.querySelector(rootClass);

    if (!root) {
        return;
    }
    
    const option = {
        destroy: true,

        breakpoints: {
            768: {
                destroy: false,
                type   : 'loop',
                arrows: true,
                speed: 1000,
                rewind: true,
                pagination: false,
                arrowPath: 'M60,3131.033a1,1,0,0,1-.707-.293l-20-20a1,1,0,0,1,0-1.414l20-20a1,1,0,0,1,1.414,1.414l-19.293,19.293,19.293,19.293a1,1,0,0,1-.707,1.707Z" transform="translate(61 3131.033) rotate(180)" fill="#fff"',

                classes: {
                    arrows: 'splide__arrows un-course__arrows',
                    arrow : 'splide__arrow un-course__arrow',
                    prev  : 'splide__arrow--prev un-course__prev',
                    next  : 'splide__arrow--next un-course__next',
                },
            },
        },
    }

    const instance = new Splide(rootClass, option);

    instance.mount();
})();

(()=>{
    const root = document.querySelectorAll('.js-viewMore');

    root.forEach((item) => {
        if (!item) {
            return;
        }

        const instance = new ViewMore(item);
        instance.init();
    });
})();

(()=>{
    const root = document.querySelector('.js-tabPanel');

    if (!root) {
        return;
    }

    const instance = new TabPanel(root);
    instance.init();
})();
