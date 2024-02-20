import {
  Tab,
} from "tw-elements";

const carouselPanel = document.getElementById('carouselPanel');
const totalPanel = carouselPanel.parentElement;
const carouselItems = carouselPanel.querySelectorAll('.carousel-item');
let oldMinPerSlide = 1;

const getMinPerSlide = () => {
  if (window.innerWidth > 1024)
    return 4;
  else if (window.innerWidth > 640)
    return 2;
  else
    return 1;
};

const closeNavPanel = (target) => {
  const activedNav = target.querySelector('[data-te-nav-active]');
  if (!activedNav)
    return;

  activedNav.removeAttribute('data-te-nav-active');
  const tabPane = document.querySelector(activedNav.dataset.teTarget);
  tabPane.removeAttribute('data-te-tab-active');
}


const adjustCarousel = () => {
  const minPerSlide = getMinPerSlide();
  if (oldMinPerSlide == minPerSlide)
    return;

  closeNavPanel(carouselPanel)

  carouselItems.forEach((el) => {
    let node = el.children[0]
    while (node.children[1])
      node.removeChild(node.children[1]);
  })
  carouselItems.forEach((el) => {
    let next = el.nextElementSibling
    for (var i = 1; i < minPerSlide; i++) {
      if (!next) {
        next = carouselItems[0]
      }
      let node = next.children[0];
      let cloneChild = node.cloneNode(true)
      el.children[0].appendChild(cloneChild.children[0]);
      next = next.nextElementSibling
    }
  })
  oldMinPerSlide = minPerSlide;
}
adjustCarousel();
window.onresize = () => {
  adjustCarousel();
}

carouselPanel.addEventListener('slide.te.carousel', () => {
  closeNavPanel(carouselPanel);
});

totalPanel.onmouseover = (ev) => {
  const category = ev.target.closest('.category');
  const activedPanel = ev.target.closest('[data-te-tab-active]');

  if (!category && !activedPanel) {
    closeNavPanel(ev.currentTarget)
  } else if (category) {
    const tabInstance = new Tab(category);
    tabInstance.show();

    const tabPane = document.querySelector(category.dataset.teTarget);
    const triangleIndicator = tabPane.querySelector('.triangle')

    const left = category.offsetLeft + category.offsetWidth / 3;
    triangleIndicator.style.left = `${left}px`;
  }
}
totalPanel.onmouseout = (ev) => {
  const category = ev.target.closest('.category');
  const activedPanel = ev.target.closest('[data-te-tab-active]');

  if (!category && !activedPanel) {
    closeNavPanel(ev.currentTarget)
  }
}
