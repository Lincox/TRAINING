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
  $('.page1').hide();
  $('#type').change(function () {
    if ($('#type').val() == 'opt1') {
      $('.page1').show();
      $('.page2').hide();
    }
    if ($('#type').val() == 'opt2') {
      $('.page2').show();
      $('.page1').hide();
    }
    else{
      $('.page2').hide();
      $('.page1').hide();
    }
  });
});