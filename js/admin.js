/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
$(document).ready(function () {
  $('.approve').click(function () {
    var btn = $(this);
    var id = $(this).attr("data-id");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: 'ajaxrequest/' + id,
      type: 'post',
      dataType: 'json',
      success: function success(response) {
        if (response.data == 'saved') {
          // btn.parents().find('.approved').text('Approved');
          location.reload();
        }
      }
    });
  });
  $('.userapprove').click(function () {
    //e.preventDefault();
    //alert('good');
    var btn = $(this);
    var user_id = $(this).attr("data_id");
    var customerid = $(this).attr("data_id");
    console.log(customerid);
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: '../ajaxrequest_user_portfolio/' + user_id,
      type: 'post',
      dataType: 'json',
      success: function success(response) {
        if (response.data == 'saved') {
          //btn.parents().find('.userapproved').text('Approved');
          location.reload(); //alert('abc');
        }
      }
    });
  });
});
/******/ })()
;