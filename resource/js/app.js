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

function initHeader(){
    console.log('initHeader()');
    
    const header = document.getElementById('main-header');

    if (!header) return; 

    const nav = header.querySelector('.no-header__nav'); 

    if(!nav) return; 

    const tl = gsap.timeline({paused: true});

    tl.to(header, {
        height: () => {
            return nav.offsetHeight + 'px'
        },
        ease: 'power3.inOut'
    });

    const onEnter = () => {
        header.setAttribute('aria-expanded', true);
        tl.play();
    } 
    
    const onLeave = () => {
        header.removeAttribute('aria-expanded');
        tl.reverse(); 
    }

    nav.addEventListener('mouseenter', onEnter);
    header.addEventListener('mouseleave', onLeave);

    window.addEventListener('resize', (e) => {
        if (window.innerWidth <= 1024) {
            header.removeAttribute('style'); 
            header.removeAttribute('aria-expanded');
        }
    });

    const drawer = document.getElementById('main-drawer');
    if(!drawer) return; 

    const drawerOpenBtn = header.querySelector('.no-header__toggle')
    const drawerCloseBtn = drawer.querySelector('.no-drawer__toggle');


    const drawerTl = gsap.timeline({paused: true}); 
    drawerTl.to(drawer, {
        x: '0%',
        opacity: 1,
        ease:'power3.inOut'
    })

    const onOpen = () => {
        document.body.classList.add('--hidden');
        drawerTl.play();
    }
    
    const onClose = () => {
        document.body.classList.remove('--hidden');
        drawerTl.reverse();
    }

    drawerOpenBtn.addEventListener('click', onOpen); 
    drawerCloseBtn.addEventListener('click', onClose); 
}

function initFloatMenu(){
    const container = document.querySelector('.no-floating-container');
    const menu      = document.querySelector('.no-floating-menu');
    if (!container || !menu) return;

    const PIN_OFFSET = 100;

    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.create({
        trigger: container,
        start: `top+=${PIN_OFFSET} top`,
        // 컨테이너 끝날 때까지 고정
        end: 'bottom bottom',
        pin: menu,
        pinSpacing: false,        // ✅ 여백 생성 방지
        anticipatePin: 1,         // 고정 시 살짝 앞당겨 레이아웃 튐 방지
        invalidateOnRefresh: true // 리사이즈/이미지 로드 시 재계산
    });

    // 이미지 늦게 로드될 때 높이 변경 반영
    window.addEventListener('load', () => ScrollTrigger.refresh());
}

function app(){
    console.log('app()');
    
    document.addEventListener('DOMContentLoaded', () => {
        initMainHero();
        initMainPofol(); 
        initMainResource();
        initSubNav(); 
        initHeader(); 
        initFloatMenu();
    });
}
app();