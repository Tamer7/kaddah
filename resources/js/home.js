import {
  Tab,
  Carousel,
} from "tw-elements";

const carouselItems = document.querySelectorAll('#carouselPanel .carousel-item');
carouselItems.forEach((el) => {
  const minPerSlide = 4
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

const carouselPanel = document.getElementById('carouselPanel');
const totalPanel = carouselPanel.parentElement;

const closeNavPanel = (target) => {
  const activedNav = target.querySelector('[data-te-nav-active]');
  if (!activedNav)
    return;

  activedNav.removeAttribute('data-te-nav-active');
  const tabPane = document.querySelector(activedNav.dataset.teTarget);
  tabPane.removeAttribute('data-te-tab-active');
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
