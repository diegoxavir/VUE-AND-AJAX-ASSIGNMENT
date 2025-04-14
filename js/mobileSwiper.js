let glideInstance = null;

function initSlider() {
  const slides = document.querySelectorAll('.glide__slide');
  if (window.innerWidth >= 712 || slides.length === 0) return;

  glideInstance = new Glide('.glide', {
    type: 'carousel',
    perTouch: 1,
    peek: 0,
  });

  glideInstance.mount();

  glideInstance.on("run.before", () => {
    const allSlides = gsap.utils.toArray(".glide__slide");
    gsap.to(allSlides, { opacity: 0, ease: "none" });
  });

  glideInstance.on("move.after", () => {
    const activeSlide = document.querySelector(".glide__slide--active");
    if (activeSlide) {
      gsap.fromTo(
        activeSlide,
        { opacity: 0, y: "100%" },
        { opacity: 1, y: "0", delay: 0.2 }
      );
    }
  });
}

function destroySlider() {
  if (glideInstance) {
    glideInstance.destroy();
    glideInstance = null;
  }
}

function watchWindowResize() {
  let wasMobile = window.innerWidth < 712;

  window.addEventListener('resize', () => {
    const isMobile = window.innerWidth < 712;

    if (isMobile && !wasMobile) {
      initSlider();
    } else if (!isMobile && wasMobile) {
      destroySlider();
    }

    wasMobile = isMobile;
  });
}

function initializeIfMobileAndReady() {
  const glideExists = document.querySelector('.glide__slide');
  if (window.innerWidth < 712 && glideExists) {
    initSlider();
  }
  watchWindowResize();
}

document.addEventListener('DOMContentLoaded', () => {
  // Delay slightly to wait for Vue content
  setTimeout(initializeIfMobileAndReady, 500);
});


window.addEventListener('vue-ready', initializeIfMobileAndReady);
