import {
  Tab,
} from "tw-elements";

const totalPanel = document.getElementById('productOverview');
$(() => {
  totalPanel.querySelectorAll('.tab-panel').forEach(el => {
    el.classList.add('hidden');
  })
})

const closeNavPanel = (target) => {
  const activedNav = target.querySelector('[data-te-nav-active]');
  if (!activedNav)
    return;

  activedNav.removeAttribute('data-te-nav-active');
  const tabPane = document.querySelector(activedNav.dataset.teTarget);
  tabPane.removeAttribute('data-te-tab-active');
}

$.fn.outerOffset = function () {
  /// <summary>Returns an element's offset relative to its outer size; i.e., the sum of its left and top margin, padding, and border.</summary>
  /// <returns type="Object">Outer offset</returns>
  var margin = this.margin();
  var padding = this.padding();
  var border = this.border();
  return {
    x: margin.left + padding.left + border.left,
    y: margin.top + padding.top + border.top
  }
};


$.fn.fixedPosition = function () {
  var offset = this.offset();
  var $doc = $(document);
  // var bodyOffset = $(document.body).outerOffset();
  return {
    x: offset.left - $doc.scrollLeft(),
    y: offset.top - $doc.scrollTop()
  };
};

totalPanel.onmouseover = (ev) => {
  const category = ev.target.closest('.category-panel');
  const activedPanel = ev.target.closest('[data-te-tab-active]');

  if (!category && !activedPanel) {
    closeNavPanel(ev.currentTarget)
  } else if (category) {
    const tabInstance = new Tab(category);
    tabInstance.show();

    const tabPane = document.querySelector(category.dataset.teTarget);
    const triangleIndicator = tabPane.querySelector('.triangle')

    var left = $(category).fixedPosition().x + category.offsetWidth / 3;
    triangleIndicator.style.left = `${left}px`;
  }
}
totalPanel.onmouseout = (ev) => {
  const category = ev.target.closest('.category-panel');
  const activedPanel = ev.target.closest('[data-te-tab-active]');

  if (!category && !activedPanel) {
    closeNavPanel(ev.currentTarget)
  }
}
