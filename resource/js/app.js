function initMainHero(){
    console.log('initMainHero()');
    const SELECTOR = '#main-hero-swiper';

    const el = document.querySelector(SELECTOR);
    if (!el) return; 
    
    const swiper = new Swiper(el, {
        loop: true, 
        autoplay: {
            delay: 2000,
            disableOnInteraction: true 
        },
        pagination: {
            type: "bullets",
            el: ".no-main-hero__pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".no-main-hero__button--next",
            prevEl: ".no-main-hero__button--prev",
        },
    });
    
}

function initMainPofol(){
    console.log('initMainPofol()');
    const SELECTOR = '#main-pofol-swiper';

    const el = document.querySelector(SELECTOR);
    if (!el) return; 

    const swiper = new Swiper(el, {
        slidesPerView: 4,
        spaceBetween: 24,
        navigation: {
            nextEl: ".no-main-pofol__button--next",
            prevEl: ".no-main-pofol__button--prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1.5
            },
            544: {
                slidesPerView: 2.5
            },
            768: {
                slidesPerView: 3.5
            },
            1024: {
                slidesPerView: 4
            },
        }
    });

}



function initMainResource(){
    console.log('initMainResource()');
    const SELECTOR = '#main-resource-swiper';

    const el = document.querySelector(SELECTOR);
    if (!el) return; 

    const swiper = new Swiper(el, {
        slidesPerView: 4,
        spaceBetween: 24,
        breakpoints: {
            320: {
                slidesPerView: 1.5
            },
            544: {
                slidesPerView: 2.5
            },
            768: {
                slidesPerView: 1.5
            },
            1024: {
                slidesPerView: 2.5
            },
        }
    });

}


function initSubNav(){
    console.log('initSubNav()');
    const SELECTOR = '#sub-nav-swiper';

    const el = document.querySelector(SELECTOR);
    if (!el) return; 

    const swiper = new Swiper(el, {
        slidesPerView: 'auto',
        navigation: {
            nextEl: ".no-sub-nav__button--next",
            prevEl: ".no-sub-nav__button--prev",
        },
        on: {
            init(){
                const activeIndex = this.slides.findIndex(slide => slide.classList.contains('--active')); 
                
                if (activeIndex === -1) return; 

                this.slideTo(activeIndex);
                
            }
        }
    });

}

function app(){
    console.log('app()');
    
    document.addEventListener('DOMContentLoaded', () => {
        initMainHero();
        initMainPofol(); 
        initMainResource();
        initSubNav(); 
    });
}
app();