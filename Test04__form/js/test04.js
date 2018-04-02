// $(document).ready(function() {
// 	$(".page").children().hide();
// 	$("#page1").show();
// 	$('.choose_page').on('change',function(){
// 	  var page = $('option:selected', this).attr('page');
// 	  $(".page").children().hide();
// 	  $("#"+page).fadeIn();
// 	})
// });

$(function () {
  // var width = $(window).width();
  // if (width <= 768) {
    $('.page0').show();
    $('.page1').hide();
    $('.page2').hide();
    $('.page12').hide();
    $('.page12end').hide();
    $('.page34end').hide();

    $('#type').change(function () {
      if ($('#type').val() == 'opt1') {
        $('.page0').show();
        $('.page1').hide();
        $('.page2').hide();
        $('.page12').hide();
        $('.page12end').hide();
        $('.page34end').hide();
      }
      else if ($('#type').val() == 'opt2') {
        $('.page0').hide();
        $('.page1').show();
        $('.page2').hide();
        $('.page12').show();
        $('.page12end').show();
        $('.page34end').hide();
      }
      else if ($('#type').val() == 'opt3') {
        $('.page0').hide();
        $('.page1').hide();
        $('.page2').show();
        $('.page12').show();
        $('.page12end').show();
        $('.page34end').hide();
      }
      else {
        $('.page0').hide();
        $('.page1').hide();
        $('.page2').hide();
        $('.page12').hide();
        $('.page12end').hide();
        $('.page34end').hide();
      }
    });
});

$(document).ready(function(){
  $("#addrow").click(function(){
      // $("#tdaddrow").append('HAHA');
      $('#tdaddrow').prepend($('<input type="date" name="" id=""  class="formcontainer__inputdate" placeholder="例） 0000/00/00" required/>'));
  });
});