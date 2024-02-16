require('./bootstrap');

import {
  Carousel,
  PerfectScrollbar,
  Tab,
  initTE,
} from "tw-elements";

initTE({ Carousel, PerfectScrollbar, Tab });

const tabEleList = document.querySelectorAll('.our-story .history');
tabEleList.forEach(el => el.addEventListener('show.te.tab', ({ target }) => {
  const tabEle = document.querySelector(`${target.dataset.teTarget}_image_pill`);
  const tab = new Tab(tabEle);
  tab.show();
}));
