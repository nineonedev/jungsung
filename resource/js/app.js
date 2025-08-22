function initMainHero(){
    console.log('initMainHero()');
    const SELECTOR = '#main-hero-swiper';

    const el = document.querySelector(SELECTOR);
    if (!el) return; 
    
    const swiper = new Swiper(el, {
        loop: true, 
        // effect: 'fade',
        // fadeEffect: { crossFade: true },
        speed: 1200, // 부드러운 전환 속도
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

    const PIN_OFFSET = 100;            // 고정 시작 보정 (헤더 높이 등)
    const SCROLL_OFFSET = PIN_OFFSET;  // 섹션 이동 시 상단 여백(고정헤더 고려)

    gsap.registerPlugin(ScrollTrigger);

    // 메뉴 고정
    ScrollTrigger.create({
        trigger: container,
        start: `top+=${PIN_OFFSET} top`,
        end: 'bottom bottom',
        pin: menu,
        pinSpacing: false,
        anticipatePin: 1,
        invalidateOnRefresh: true
    });

    // ============ Active 처리 ============

    const links = Array.from(menu.querySelectorAll('.no-floating-menu__link'));

    // href에서 해시만 뽑아 섹션 매핑
    const items = links
        .map(link => {
        try {
            const url = new URL(link.href, location.origin);
            const hash = url.hash?.replace('#','') || '';
            if (!hash) return null;
            const section = document.getElementById(hash);
            if (!section) return null;
            return { link, section, hash };
        } catch(e){
            return null;
        }
        })
        .filter(Boolean);

    const clearActive = () => {
        links.forEach(a => a.classList.remove('--active'));
    };
    const setActive = (link) => {
        if (!link) return;
        clearActive();
        link.classList.add('--active');
    };

    // 섹션별 트리거 생성 (섹션이 뷰포트 중앙에 가까울 때 활성화)
    items.forEach(({ link, section }) => {
        ScrollTrigger.create({
        trigger: section,
        start: `top+=${SCROLL_OFFSET} center`,
        end: `bottom center`,
        onEnter: () => setActive(link),
        onEnterBack: () => setActive(link),
        // 섹션 높이 변화 대응
        invalidateOnRefresh: true
        });
    });

    // 초기 로드 시 현재 위치 기준으로 활성화 보정
    requestAnimationFrame(() => ScrollTrigger.refresh());
    // ============ 클릭 시 스무스 스크롤 ============

    const scrollToSection = (el) => {
        const top = el.getBoundingClientRect().top + window.pageYOffset - SCROLL_OFFSET;
        window.scrollTo({ top, behavior: 'smooth' });
    };

    links.forEach(a => {
        a.addEventListener('click', (e) => {
        const hash = (new URL(a.href, location.origin)).hash.replace('#','');
        const target = document.getElementById(hash);
        if (target) {
            e.preventDefault();
            scrollToSection(target);
            // 즉시 시각 피드백
            setActive(a);
            history.replaceState(null, '', `#${hash}`);
        }
        });
    });


    // 이미지/폰트 등 지연 로드로 레이아웃 변할 때 재계산
    window.addEventListener('load', () => ScrollTrigger.refresh());

    
    setTimeout(() => {
       const currentHash = location.hash?.replace('#','');
        
        if (currentHash) {
            const target = document.getElementById(currentHash);
            
            if (target) {
                scrollToSection(target);
                const found = items.find(i => i.hash === currentHash);
                if (found) setActive(found.link);
            }
        } 
    }, 300);

}

async function initCaptcha() {
  console.log('initCaptcha()');

  const img     = document.getElementById('captcha-img');
  const refresh = document.getElementById('captcha-refresh');
  const listen  = document.getElementById('captcha-listen');
  const audioEl = document.getElementById('captcha-audio');

  if (!img || !refresh || !listen || !audioEl) return;

  const listenIcon = listen.querySelector('i');
  let isPlaying = false;

  function resetAudio() {
    try { audioEl.pause(); } catch(e) {}
    audioEl.removeAttribute('src');
    audioEl.load();
    isPlaying = false;
    if (listenIcon) {
      listenIcon.classList.remove('fa-volume-slash');
      listenIcon.classList.add('fa-volume');
    }
  }

  function refreshCaptcha() {
    // 오디오 재생 중이면 초기화
    resetAudio();
    // 캐시 무력화
    img.src = '/inc/lib/captcha.image.php?_=' + Date.now();
  }

  async function toggleAudio() {
    if (isPlaying) {
      // 현재 재생 중 → 멈춤
      resetAudio();
      return;
    }

    try {
      listen.disabled = true;
      const url = '/inc/lib/captcha.audio.php?_=' + Date.now();

      resetAudio(); // 혹시 모를 잔여 상태 초기화
      audioEl.src = url;

      await audioEl.play();
      isPlaying = true;

      if (listenIcon) {
        listenIcon.classList.remove('fa-volume');
        listenIcon.classList.add('fa-volume-slash');
      }

      // 재생이 끝나면 상태 원복
      audioEl.onended = () => {
        resetAudio();
      };

    } catch (err) {
      console.error(err);
      alert('오디오를 재생할 수 없습니다.');
      resetAudio();
    } finally {
      listen.disabled = false;
    }
  }

  // 초기 표시
//   refreshCaptcha();

  // 이벤트 바인딩
  refresh.addEventListener('click', refreshCaptcha);
  listen.addEventListener('click', toggleAudio);

  // 새로고침 버튼 키보드 접근성
  refresh.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      refreshCaptcha();
    }
  });
}

function initgoToTop(){
    const root   = document.getElementById('gototop');               // .no-gototop 래퍼
    const button = root?.querySelector('.no-gototop__btn');
    if (!root || !button) return;

    // 접근성 속성
    button.setAttribute('aria-label', '맨 위로 이동');
    root.setAttribute('aria-hidden', 'true');

    const THRESHOLD = 200;     // 몇 px 내렸을 때 보일지
    let ticking = false;

    function toggle() {
        const shouldShow = window.scrollY > THRESHOLD;
        if (shouldShow) {
        root.classList.add('is-visible');
        root.setAttribute('aria-hidden', 'false');
        } else {
        root.classList.remove('is-visible');
        root.setAttribute('aria-hidden', 'true');
        }
    }

    function onScroll() {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(() => {
        toggle();
        ticking = false;
        });
    }

    // 클릭 시 스크롤 맨 위
    function scrollTopSmooth() {
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        window.scrollTo({
        top: 0,
        behavior: prefersReduced ? 'auto' : 'smooth'
        });
    }

    // 키보드 접근성 (Enter/Space)
    function onKey(e) {
        if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        scrollTopSmooth();
        }
    }

    // 초기 상태 & 이벤트
    toggle();
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    button.addEventListener('click', scrollTopSmooth);
    button.addEventListener('keydown', onKey);
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
        initCaptcha();
        initgoToTop();
        
        AOS.init();
    });
}
app();