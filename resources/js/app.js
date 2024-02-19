require('./bootstrap');

import {
  PerfectScrollbar,
  Tab,
  Carousel,
  initTE,
} from "tw-elements";

initTE({ PerfectScrollbar, Tab, Carousel });

const tabEleList = document.querySelectorAll('.our-story .history');
tabEleList.forEach(el => el.addEventListener('show.te.tab', ({ target }) => {
  const tabEle = document.querySelector(`${target.dataset.teTarget}_image_pill`);
  const tab = new Tab(tabEle);
  tab.show();
}));
