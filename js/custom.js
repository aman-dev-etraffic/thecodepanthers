/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
$(document).ready(function () {
  $('#country').change(function () {
    var id = $(this).val();
    $('#state').find('option').not(':first').remove();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: 'ajaxrequests/states/' + id,
      type: 'get',
      dataType: 'json',
      success: function success(response) {
        var len = 0;

        if (response.data != null) {
          len = response.data.length;
        }

        if (len > 0) {
          for (var i = 0; i < len; i++) {
            var id = response.data[i].id;
            var state_name = response.data[i].state_name;
            var option = "<option value='" + id + "'>" + state_name + "</option>";
            $("#state").append(option);
          }
        }
      }
    });
  });
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      //clearHeader, not clearheader - caps H
      $(".custom-nav ").addClass("darkHeader");
    } else {
      $(".custom-nav ").removeClass("darkHeader");
    }
  });
});
$(document).ready(function () {
  $('.your-class').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slideToScroll: 3,
    autoplay: true
  });
});
/******/ })()
;