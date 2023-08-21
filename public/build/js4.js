(self["webpackChunk"] = self["webpackChunk"] || []).push([["js4"],{

/***/ "./assets/styles/js/templatemo.js":
/*!****************************************!*\
  !*** ./assets/styles/js/templatemo.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/*

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

*/

jQuery(document).ready(function () {
  // Accordion
  var all_panels = $('.templatemo-accordion1 > li > ul').hide();
  $('.templatemo-accordion1 > li > a').click(function () {
    var target = $(this).next();
    if (!target.hasClass('active')) {
      all_panels.removeClass('active').slideUp();
      target.addClass('active').slideDown();
    }
    return false;
  });
  // End accordion

  // Product detail
  $('.product-links-wap a').click(function () {
    var this_src = $(this).children('img').attr('src');
    $('#product-detail').attr('src', this_src);
    return false;
  });
  $('#btn-minus').click(function () {
    var val = $("#var-value").html();
    val = val == '1' ? val : val - 1;
    $("#var-value").html(val);
    $("#product-quanity").val(val);
    return false;
  });
  $('#btn-plus').click(function () {
    var val = $("#var-value").html();
    val++;
    $("#var-value").html(val);
    $("#product-quanity").val(val);
    return false;
  });
  $('.btn-size').click(function () {
    var this_val = $(this).html();
    $("#product-size").val(this_val);
    $(".btn-size").removeClass('btn-secondary');
    $(".btn-size").addClass('btn-success');
    $(this).removeClass('btn-success');
    $(this).addClass('btn-secondary');
    return false;
  });
  // End roduct detail
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_jquery_dist_jquery_js"], () => (__webpack_exec__("./assets/styles/js/templatemo.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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dGVtcGxhdGVtby5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG5cclxuVGVtcGxhdGVNbyA1NTkgWmF5IFNob3BcclxuXHJcbmh0dHBzOi8vdGVtcGxhdGVtby5jb20vdG0tNTU5LXpheS1zaG9wXHJcblxyXG4qL1xyXG5cclxualF1ZXJ5KGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcclxuXHJcbiAgICAvLyBBY2NvcmRpb25cclxuICAgIHZhciBhbGxfcGFuZWxzID0gJCgnLnRlbXBsYXRlbW8tYWNjb3JkaW9uMSA+IGxpID4gdWwnKS5oaWRlKCk7XHJcblxyXG4gICAgJCgnLnRlbXBsYXRlbW8tYWNjb3JkaW9uMSA+IGxpID4gYScpLmNsaWNrKGZ1bmN0aW9uKCkge1xyXG5cclxuICAgICAgICB2YXIgdGFyZ2V0ID0gICQodGhpcykubmV4dCgpO1xyXG4gICAgICAgIGlmKCF0YXJnZXQuaGFzQ2xhc3MoJ2FjdGl2ZScpKXtcclxuICAgICAgICAgICAgYWxsX3BhbmVscy5yZW1vdmVDbGFzcygnYWN0aXZlJykuc2xpZGVVcCgpO1xyXG4gICAgICAgICAgICB0YXJnZXQuYWRkQ2xhc3MoJ2FjdGl2ZScpLnNsaWRlRG93bigpO1xyXG4gICAgICAgIH1cclxuICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgfSk7XHJcbiAgICAvLyBFbmQgYWNjb3JkaW9uXHJcblxyXG4gICAgLy8gUHJvZHVjdCBkZXRhaWxcclxuICAgICQoJy5wcm9kdWN0LWxpbmtzLXdhcCBhJykuY2xpY2soZnVuY3Rpb24oKXtcclxuICAgICAgdmFyIHRoaXNfc3JjID0gJCh0aGlzKS5jaGlsZHJlbignaW1nJykuYXR0cignc3JjJyk7XHJcbiAgICAgICQoJyNwcm9kdWN0LWRldGFpbCcpLmF0dHIoJ3NyYycsdGhpc19zcmMpO1xyXG4gICAgICByZXR1cm4gZmFsc2U7XHJcbiAgICB9KTtcclxuICAgICQoJyNidG4tbWludXMnKS5jbGljayhmdW5jdGlvbigpe1xyXG4gICAgICB2YXIgdmFsID0gJChcIiN2YXItdmFsdWVcIikuaHRtbCgpO1xyXG4gICAgICB2YWwgPSAodmFsPT0nMScpP3ZhbDp2YWwtMTtcclxuICAgICAgJChcIiN2YXItdmFsdWVcIikuaHRtbCh2YWwpO1xyXG4gICAgICAkKFwiI3Byb2R1Y3QtcXVhbml0eVwiKS52YWwodmFsKTtcclxuICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgfSk7XHJcbiAgICAkKCcjYnRuLXBsdXMnKS5jbGljayhmdW5jdGlvbigpe1xyXG4gICAgICB2YXIgdmFsID0gJChcIiN2YXItdmFsdWVcIikuaHRtbCgpO1xyXG4gICAgICB2YWwrKztcclxuICAgICAgJChcIiN2YXItdmFsdWVcIikuaHRtbCh2YWwpO1xyXG4gICAgICAkKFwiI3Byb2R1Y3QtcXVhbml0eVwiKS52YWwodmFsKTtcclxuICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgfSk7XHJcbiAgICAkKCcuYnRuLXNpemUnKS5jbGljayhmdW5jdGlvbigpe1xyXG4gICAgICB2YXIgdGhpc192YWwgPSAkKHRoaXMpLmh0bWwoKTtcclxuICAgICAgJChcIiNwcm9kdWN0LXNpemVcIikudmFsKHRoaXNfdmFsKTtcclxuICAgICAgJChcIi5idG4tc2l6ZVwiKS5yZW1vdmVDbGFzcygnYnRuLXNlY29uZGFyeScpO1xyXG4gICAgICAkKFwiLmJ0bi1zaXplXCIpLmFkZENsYXNzKCdidG4tc3VjY2VzcycpO1xyXG4gICAgICAkKHRoaXMpLnJlbW92ZUNsYXNzKCdidG4tc3VjY2VzcycpO1xyXG4gICAgICAkKHRoaXMpLmFkZENsYXNzKCdidG4tc2Vjb25kYXJ5Jyk7XHJcbiAgICAgIHJldHVybiBmYWxzZTtcclxuICAgIH0pO1xyXG4gICAgLy8gRW5kIHJvZHVjdCBkZXRhaWxcclxuXHJcbn0pO1xyXG4iXSwibmFtZXMiOlsialF1ZXJ5IiwiZG9jdW1lbnQiLCJyZWFkeSIsImFsbF9wYW5lbHMiLCIkIiwiaGlkZSIsImNsaWNrIiwidGFyZ2V0IiwibmV4dCIsImhhc0NsYXNzIiwicmVtb3ZlQ2xhc3MiLCJzbGlkZVVwIiwiYWRkQ2xhc3MiLCJzbGlkZURvd24iLCJ0aGlzX3NyYyIsImNoaWxkcmVuIiwiYXR0ciIsInZhbCIsImh0bWwiLCJ0aGlzX3ZhbCJdLCJzb3VyY2VSb290IjoiIn0=