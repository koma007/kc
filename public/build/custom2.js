(self["webpackChunk"] = self["webpackChunk"] || []).push([["custom2"],{

/***/ "./assets/styles/js/custom2.js":
/*!*************************************!*\
  !*** ./assets/styles/js/custom2.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
function fetchCena(element, cenaId) {
  var selectedOption = element.value;
  var specificPriceUrl = '{{ path(\'app_get_cena\') }}';
  $.ajax({
    url: specificPriceUrl,
    type: 'POST',
    success: function success(data) {
      // Update the form value with the cena value
      $('#' + cenaFieldId).val(data.cena);
    }
  });
}
;

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_jquery_dist_jquery_js"], () => (__webpack_exec__("./assets/styles/js/custom2.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiY3VzdG9tMi5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFDQSxTQUFTQSxTQUFTLENBQUNDLE9BQU8sRUFBRUMsTUFBTSxFQUFFO0VBQ2hDLElBQUlDLGNBQWMsR0FBR0YsT0FBTyxDQUFDRyxLQUFLO0VBQ2xDLElBQUlDLGdCQUFnQixHQUFHLDhCQUE4QjtFQUNyREMsQ0FBQyxDQUFDQyxJQUFJLENBQUM7SUFDSEMsR0FBRyxFQUFFSCxnQkFBZ0I7SUFDckJJLElBQUksRUFBRSxNQUFNO0lBQ1pDLE9BQU8sRUFBRSxpQkFBU0MsSUFBSSxFQUFFO01BQ3BCO01BQ0FMLENBQUMsQ0FBQyxHQUFHLEdBQUdNLFdBQVcsQ0FBQyxDQUFDQyxHQUFHLENBQUNGLElBQUksQ0FBQ0csSUFBSSxDQUFDO0lBQ3ZDO0VBQ0osQ0FBQyxDQUFDO0FBQ047QUFBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvanMvY3VzdG9tMi5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyJcclxuZnVuY3Rpb24gZmV0Y2hDZW5hKGVsZW1lbnQsIGNlbmFJZCkge1xyXG4gICAgdmFyIHNlbGVjdGVkT3B0aW9uID0gZWxlbWVudC52YWx1ZTtcclxuICAgIHZhciBzcGVjaWZpY1ByaWNlVXJsID0gJ3t7IHBhdGgoXFwnYXBwX2dldF9jZW5hXFwnKSB9fSc7XHJcbiAgICAkLmFqYXgoe1xyXG4gICAgICAgIHVybDogc3BlY2lmaWNQcmljZVVybCxcclxuICAgICAgICB0eXBlOiAnUE9TVCcsXHJcbiAgICAgICAgc3VjY2VzczogZnVuY3Rpb24oZGF0YSkge1xyXG4gICAgICAgICAgICAvLyBVcGRhdGUgdGhlIGZvcm0gdmFsdWUgd2l0aCB0aGUgY2VuYSB2YWx1ZVxyXG4gICAgICAgICAgICAkKCcjJyArIGNlbmFGaWVsZElkKS52YWwoZGF0YS5jZW5hKTtcclxuICAgICAgICB9XHJcbiAgICB9KTtcclxufTtcclxuXHJcblxyXG4iXSwibmFtZXMiOlsiZmV0Y2hDZW5hIiwiZWxlbWVudCIsImNlbmFJZCIsInNlbGVjdGVkT3B0aW9uIiwidmFsdWUiLCJzcGVjaWZpY1ByaWNlVXJsIiwiJCIsImFqYXgiLCJ1cmwiLCJ0eXBlIiwic3VjY2VzcyIsImRhdGEiLCJjZW5hRmllbGRJZCIsInZhbCIsImNlbmEiXSwic291cmNlUm9vdCI6IiJ9