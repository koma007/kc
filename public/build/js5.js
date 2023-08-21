(self["webpackChunk"] = self["webpackChunk"] || []).push([["js5"],{

/***/ "./assets/styles/js/custom.js":
/*!************************************!*\
  !*** ./assets/styles/js/custom.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
// 👇️ using noConflict mode
$(document).ready(function () {
  $('#carousel-related-product').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 3,
    dots: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3
      }
    }]
  });

  // licznik w koszyku
  var totalQuantity = localStorage.getItem('totalQuantity');
  if (totalQuantity !== null) {
    $('#cart-total-items').text(totalQuantity);
  }
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_jquery_dist_jquery_js"], () => (__webpack_exec__("./assets/styles/js/custom.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoianM1LmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7OztBQUFBO0FBQ0FBLENBQUMsQ0FBQ0MsUUFBUSxDQUFDLENBQUNDLEtBQUssQ0FBQyxZQUFVO0VBQ3hCRixDQUFDLENBQUMsMkJBQTJCLENBQUMsQ0FBQ0csS0FBSyxDQUFDO0lBQ3JDQyxRQUFRLEVBQUUsSUFBSTtJQUNkQyxNQUFNLEVBQUUsS0FBSztJQUNiQyxZQUFZLEVBQUUsQ0FBQztJQUNmQyxjQUFjLEVBQUUsQ0FBQztJQUNqQkMsSUFBSSxFQUFFLElBQUk7SUFDVkMsVUFBVSxFQUFFLENBQUM7TUFDYkMsVUFBVSxFQUFFLElBQUk7TUFDaEJDLFFBQVEsRUFBRTtRQUNWTCxZQUFZLEVBQUUsQ0FBQztRQUNmQyxjQUFjLEVBQUU7TUFDcEI7SUFDQSxDQUFDLEVBQ0Q7TUFDSUcsVUFBVSxFQUFFLEdBQUc7TUFDZkMsUUFBUSxFQUFFO1FBQ1ZMLFlBQVksRUFBRSxDQUFDO1FBQ2ZDLGNBQWMsRUFBRTtNQUNwQjtJQUNBLENBQUMsRUFDRDtNQUNJRyxVQUFVLEVBQUUsR0FBRztNQUNmQyxRQUFRLEVBQUU7UUFDVkwsWUFBWSxFQUFFLENBQUM7UUFDZkMsY0FBYyxFQUFFO01BQ3BCO0lBQ0EsQ0FBQztFQUVELENBQUMsQ0FBQzs7RUFJTTtFQUNBLElBQU1LLGFBQWEsR0FBR0MsWUFBWSxDQUFDQyxPQUFPLENBQUMsZUFBZSxDQUFDO0VBQzNELElBQUlGLGFBQWEsS0FBSyxJQUFJLEVBQUU7SUFDeEJaLENBQUMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDZSxJQUFJLENBQUNILGFBQWEsQ0FBQztFQUM5QztBQUVSLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvanMvY3VzdG9tLmpzIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIPCfkYfvuI8gdXNpbmcgbm9Db25mbGljdCBtb2RlXHJcbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XHJcbiAgICAkKCcjY2Fyb3VzZWwtcmVsYXRlZC1wcm9kdWN0Jykuc2xpY2soe1xyXG4gICAgaW5maW5pdGU6IHRydWUsXHJcbiAgICBhcnJvd3M6IGZhbHNlLFxyXG4gICAgc2xpZGVzVG9TaG93OiA0LFxyXG4gICAgc2xpZGVzVG9TY3JvbGw6IDMsXHJcbiAgICBkb3RzOiB0cnVlLFxyXG4gICAgcmVzcG9uc2l2ZTogW3tcclxuICAgIGJyZWFrcG9pbnQ6IDEwMjQsXHJcbiAgICBzZXR0aW5nczoge1xyXG4gICAgc2xpZGVzVG9TaG93OiAzLFxyXG4gICAgc2xpZGVzVG9TY3JvbGw6IDNcclxufVxyXG59LFxyXG57XHJcbiAgICBicmVha3BvaW50OiA2MDAsXHJcbiAgICBzZXR0aW5nczoge1xyXG4gICAgc2xpZGVzVG9TaG93OiAyLFxyXG4gICAgc2xpZGVzVG9TY3JvbGw6IDNcclxufVxyXG59LFxyXG57XHJcbiAgICBicmVha3BvaW50OiA0ODAsXHJcbiAgICBzZXR0aW5nczoge1xyXG4gICAgc2xpZGVzVG9TaG93OiAyLFxyXG4gICAgc2xpZGVzVG9TY3JvbGw6IDNcclxufVxyXG59XHJcbiAgICBdXHJcbn0pO1xyXG5cclxuXHJcblxyXG4gICAgICAgIC8vIGxpY3puaWsgdyBrb3N6eWt1XHJcbiAgICAgICAgY29uc3QgdG90YWxRdWFudGl0eSA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCd0b3RhbFF1YW50aXR5Jyk7XHJcbiAgICAgICAgaWYgKHRvdGFsUXVhbnRpdHkgIT09IG51bGwpIHtcclxuICAgICAgICAgICAgJCgnI2NhcnQtdG90YWwtaXRlbXMnKS50ZXh0KHRvdGFsUXVhbnRpdHkpO1xyXG4gICAgICAgIH1cclxuXHJcbn0pO1xyXG4iXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJzbGljayIsImluZmluaXRlIiwiYXJyb3dzIiwic2xpZGVzVG9TaG93Iiwic2xpZGVzVG9TY3JvbGwiLCJkb3RzIiwicmVzcG9uc2l2ZSIsImJyZWFrcG9pbnQiLCJzZXR0aW5ncyIsInRvdGFsUXVhbnRpdHkiLCJsb2NhbFN0b3JhZ2UiLCJnZXRJdGVtIiwidGV4dCJdLCJzb3VyY2VSb290IjoiIn0=