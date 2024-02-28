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


const totalPanel = document.getElementById('productOverview');
totalPanel.querySelectorAll('.category-panel').forEach(el => {
  el.addEventListener('shown.te.tab', ({target}) => {
    const tabPane = totalPanel.querySelector(target.dataset.teTarget);
    const triangleIndicator = tabPane.querySelector('.triangle')

    var left = $(target).fixedPosition().x + target.offsetWidth / 3;
    triangleIndicator.style.left = `${left}px`;
  })
})
totalPanel.querySelectorAll('.tab-close-btn').forEach(el => {
  el.onclick = () => {
    const tabPanel = el.closest('.tab-panel')
    tabPanel.attributes.removeNamedItem('data-te-tab-active')
    const category = totalPanel.querySelector(`[data-te-target="\#${tabPanel.id}"]`)
    category.attributes.removeNamedItem('data-te-nav-active')
  }
})

$(() => {
  totalPanel.querySelectorAll('.tab-panel').forEach(el => {
    el.classList.add('hidden');
  })
})
