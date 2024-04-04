/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
$.fn.outerOffset = function () {
  /// <summary>Returns an element's offset relative to its outer size; i.e., the sum of its left and top margin, padding, and border.</summary>
  /// <returns type="Object">Outer offset</returns>
  var margin = this.margin();
  var padding = this.padding();
  var border = this.border();
  return {
    x: margin.left + padding.left + border.left,
    y: margin.top + padding.top + border.top
  };
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
var totalPanel = document.getElementById('productOverview');
totalPanel.querySelectorAll('.category-panel').forEach(function (el) {
  el.addEventListener('shown.te.tab', function (_ref) {
    var target = _ref.target;
    var tabPane = totalPanel.querySelector(target.dataset.teTarget);
    var triangleIndicator = tabPane.querySelector('.triangle');
    var left = $(target).fixedPosition().x + target.offsetWidth / 3;
    triangleIndicator.style.left = "".concat(left, "px");
  });
});
totalPanel.querySelectorAll('.tab-close-btn').forEach(function (el) {
  el.onclick = function () {
    var tabPanel = el.closest('.tab-panel');
    tabPanel.attributes.removeNamedItem('data-te-tab-active');
    var category = totalPanel.querySelector("[data-te-target=\"#".concat(tabPanel.id, "\"]"));
    category.attributes.removeNamedItem('data-te-nav-active');
  };
});
$(function () {
  totalPanel.querySelectorAll('.tab-panel').forEach(function (el) {
    el.classList.add('hidden');
  });
});
/******/ })()
;