document.addEventListener('DOMContentLoaded', () => {
  carrouselImagesHotel()
  menuResponsive()
  loadFormContact()
  faqAccordion()

  let prevScrollPos = window.scrollY || window.pageYOffset;
  const header = document.querySelector(".header__top");

  window.addEventListener("scroll", function() {
    const currentScrollPos = window.scrollY || window.pageYOffset;

    if (prevScrollPos < currentScrollPos) {
      header.classList.add("hidden");
      header.classList.remove("visible");
    } else {
      header.classList.add("visible");
      header.classList.remove("hidden");
    }

    prevScrollPos = currentScrollPos;
  });

})

const carrouselImagesHotel = () => {
  const carousels = document.querySelectorAll('.main-carousel');
  carousels.forEach(carousel => {
    new Flickity(carousel, {
      cellAlign: 'left',
      pageDots: false,
      lazyLoad: true
    });
  });
}

const menuResponsive = () => {
  const menuToggle = document.querySelector('#menu-icon');
  const menuList = document.querySelector('.header__nav-list');
  const subMenuItems = menuList.querySelectorAll('li.menu-item-has-children a');
  const mediaQuery = window.matchMedia('(max-width: 768px)');

  menuToggle.addEventListener('click', toggleMenu);

  if(mediaQuery.matches) {
    subMenuItems.forEach(item => item.addEventListener('click', toggleSubMenu));
  }

  window.addEventListener('resize', resetMenuOnResize);

  function toggleMenu() {
    menuToggle.classList.toggle('is-active');
  }

  function toggleSubMenu() {
    this.parentElement.classList.toggle('open');
  }

  function resetMenuOnResize() {
    if(!mediaQuery.matches) {
      menuToggle.classList.remove('is-active');
      subMenuItems.forEach(item => item.parentElement.classList.remove('open'));
    }
  }
}

const loadFormContact = () => {
  const btnAbrirPopup = document.querySelector( '.link-contacto' );
  const btnClosePopup = document.querySelector( '.popup__close' );
  const body = document.querySelector( 'body' );
  const backdrop = document.querySelector( '.popup__overlay' );
  const popup = document.querySelector( '.popup' );
  const menu = document.querySelector('#menu-icon');
  const form = document.querySelector('.contact-form');

  btnAbrirPopup.addEventListener( 'click', () => { 
    popup.classList.add( 'open' );
    body.classList.add( 'no-scroll' );
    menu.classList.remove('is-active')
  });

  if ( btnClosePopup || backdrop ) {
    [ btnClosePopup, backdrop].forEach( (e) => {
      e.addEventListener( 'click', () => {
        popup.classList.remove( 'open' );
        body.classList.remove( 'no-scroll' );
      });
    });
  }
}

const faqAccordion = () => {
  const allDetails = document.querySelectorAll(".section-faq details");
  allDetails.forEach((details) => {
    details.addEventListener("toggle", () => {
      if (details.open) {
        allDetails.forEach((otherDetails) => {
          if (otherDetails !== details) {
            otherDetails.removeAttribute("open");
          }
        });
      }
    });
  });
}


