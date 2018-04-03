$(function () {
  // var width = $(window).width();
  // if (width <= 768) {

  $('.hideform').hide();
  $('.page12end').show();

  $('#type').change(function () {
    if ($('#type').val() == 'opt1') {
      $('.hideform').hide();
      $('.page1, #hideforp4, .page12end').show();
    }
    else if ($('#type').val() == 'opt2') {
      $('.hideform').hide();
      $('.page2, #hideforp4, .page12end').show();
      exForm1();
    }
    else if ($('#type').val() == 'opt3') {
      $('.hideform').hide();
      $('.page34end, #hideforp4').show();
    }
    else if ($('#type').val() == 'opt4') {
      $('.hideform').hide();
      $('.page34end').show();
    }
    else if ($('#type').val() == 'opt5') {
      $('.page5, .page34end, #hideforp4').show();
    }
    else {
      $('.hideform').hide();
    }
  });
  // $('.page2, .page34end, .page5').hide();
  // $('#type').change(function () {
  //   if ($('#type').val() == 'opt1') {
  //     $('.page1, #hideforp4, .page12end').show();
  //     $('.page2, .page34end, .page5').hide();
  //   }
  //   else if ($('#type').val() == 'opt2') {
  //     $('.page2, #hideforp4, .page12end').show();
  //     $('.page1, .page34end, .page5').hide();
  //     exForm1();
  //   }
  //   else if ($('#type').val() == 'opt3') {
  //     $('.page34end, #hideforp4').show();
  //     $('.page1, .page2, .page5, .page12end').hide();
  //   }
  //   else if ($('#type').val() == 'opt4') {
  //     $('.page34end').show();
  //     $('.page5, .page12end, .page2, .page1, #hideforp4').hide();
  //   }
  //   else if ($('#type').val() == 'opt5') {
  //     $('.page5, .page34end, #hideforp4').show();
  //     $('.page1, .page2, .page12end').hide();
  //   }
  //   else {
  //     $('.page1, .page2, .page5, .page12end, .page34end').hide();
  //   }
  // });
  exForm();
});

function exForm() {
  $(".formError").remove();
  $("#frmContact").exValidation({
    rules: optionValidate,
    stepValidation: true,
    scrollToErr: true,
    errHoverHide: true
  });
}

var optionValidate = {
  username: "chkrequired",
  email: "chkrequired chkemail",
  tel: "chkrequired chktel"
}

function exForm1() {
  $(".formError").remove();
  $("#frmContact").exValidation({
    rules: {
      vardatepicker: "chkrequired"
    },
    stepValidation: true,
    scrollToErr: true,
    errHoverHide: true
  });
}

function check() {
  var flag = 0;
  if (!document.form1.check1.checked) {
    flag = 1;
  }
  if (flag) {
    window.alert('「個人情報の取扱いに同意する」にチェックを入れて下さい');
    return false;
  }
  else {
    return true;
  }
}

$(document).ready(function () {
  $("#addrowp2").click(function () {
    $('#tdaddrowp2').prepend($('<input type="date" name="" id=""  class="formcontainer__inputdate" placeholder="例） 0000/00/00" required/>'));
  });
  $("#addrowp5").click(function () {
    $('#tdaddrowp5').prepend($('<input type="date" name="" id=""  class="formcontainer__inputdate" placeholder="例） 0000/00/00" required/>'));
  });
  exForm();
});

$('#datepicker').datepicker({
  minDate: 0,
  constrainInput: true,
  closeText: "閉じる",
  prevText: "&#x3C;前",
  nextText: "次&#x3E;",
  currentText: "今日",
  monthNames: [ "1月","2月","3月","4月","5月","6月",
  "7月","8月","9月","10月","11月","12月" ],
  monthNamesShort: [ "1月","2月","3月","4月","5月","6月",
  "7月","8月","9月","10月","11月","12月" ],
  dayNames: [ "日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日" ],
  dayNamesShort: [ "日","月","火","水","木","金","土" ],
  dayNamesMin: [ "日","月","火","水","木","金","土" ],
  weekHeader: "週",
  dateFormat: "yy/mm/dd",
  firstDay: 0,
  isRTL: false,
  showMonthAfterYear: true,
  yearSuffix: "年"
});
