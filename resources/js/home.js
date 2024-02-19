import {
  Tab,
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

const categories = document.querySelectorAll('#carouselPanel .category');
categories.forEach(el => {
  el.onmouseenter = (ev) => {
    ev.preventDefault();
    ev.stopPropagation();

    const tabInstance = new Tab(ev.currentTarget);
    tabInstance.show();
  };

  el.onmouseleave = (ev) => {
    ev.preventDefault();
    ev.stopPropagation();

    ev.currentTarget.removeAttribute('data-te-nav-active')
    const tabPane = document.querySelector(ev.currentTarget.dataset.teTarget);
    tabPane.removeAttribute('data-te-tab-active');
  }
});
