$(function () {
  // var width = $(window).width();
  // if (width <= 768) {

  $('.hideform').hide();
  $('.page125').show();

  $('#request').change(function () {
    $('.hideform').hide();
    if ($('#request').val() == 'インストラクターの派遣') {
       //remove class error message
      $('#datepicker').removeClass('errPosRight chkrequired err');
      $('#comment').addClass('chkrequired errPosRight err');
      //hide show depend on selector
      $('.page125, .hidefor4').show();
      //Change PLACEHOLDER for .hidefor4
      $('#company').attr('placeholder', "例） 株式会社サルサベリー");
      //Change BG COLOR FOR COL1  and HEADER TEXT and VALIDATE for page "1", 2 and 5
      $('.page125 .formcontainer__col1').removeClass('formcontainer__col1--green').addClass('formcontainer__col1--red');
      $('.page125 .formcontainer__col1__text').text("ご希望のジャンル");
      //Change COLOR BAN and TEXT for the end element of all the page
      $('.pageend .formcontainer__col1__text').text("内容の詳細・備考");
      $('.pageend .formcontainer__col1 span').removeClass('formcontainer__ban--grey').addClass('formcontainer__ban--red').text('必須');
    }
    else if ($('#request').val() == 'スタジオレンタル') {
       //remove class error message
      $('#datepicker').addClass('errPosRight chkrequired err');
      $('#comment').addClass('chkrequired errPosRight err');
      //hide show depend on selector
      $('.page125, .page25, .hidefor4').show();
      //Change placeholder for .hidefor4
      $('#company').attr('placeholder', "例） 株式会社サルサベリー");
      //Change BG COLOR FOR COL1  and HEADER TEXT and VALIDATE for page 1, "2" and 5
      $('.page125 .formcontainer__col1').removeClass('formcontainer__col1--green').addClass('formcontainer__col1--red');
      $('.page125 .formcontainer__col1__text').text("ご希望のスタジオ");
      //Change COLOR BAN and TEXT for page "2" and 5 ban
      $('.page25 .formcontainer__col1').removeClass('formcontainer__col1--green').addClass('formcontainer__col1--red');;
      $('.page25 .formcontainer__col1__text').text("レンタル希望日");
      $('.page25 .formcontainer__col1 span').removeClass('formcontainer__ban--grey').addClass('formcontainer__ban--red').text('必須');
      //Change COLOR BAN and TEXT for the end element of all the page
      $('.pageend .formcontainer__col1__text').text("仕様用途・備考");
      $('.pageend span').removeClass('formcontainer__ban--grey').addClass('formcontainer__ban--red').text('必須');
    }
    else if ($('#request').val() == 'その他') {
      //remove class error message
      $('#datepicker').removeClass('errPosRight chkrequired err');
      $('#comment').removeClass('chkrequired errPosRight err'); 
      //hide show depend on selector
      $('.hidefor4').show();
      //Change PLACEHOLDER for .hidefor4
      $('#company').attr('placeholder', "例） 〇〇株式会社");
      //Change COLOR BAN and TEXT for the end element of all the page
      $('.pageend .formcontainer__col1__text').text("内容の詳細・備考");
      $('.pageend .formcontainer__col1 span').removeClass('formcontainer__ban--red').addClass('formcontainer__ban--grey').text('任意');
    }
    else if ($('#request').val() == 'レッスンに関するご質問・お問い合わせ') {
      //remove class error message
      $('#datepicker').removeClass('errPosRight chkrequired err');
      $('#comment').removeClass('chkrequired errPosRight err'); 
      //hide show depend on selector
      $('.hidefor4').hide();
      //Change COLOR BAN and TEXT for the end element of all the page
      $('.pageend .formcontainer__col1__text').text("内容の詳細・備考");
      $('.pageend .formcontainer__col1 span').removeClass('formcontainer__ban--red').addClass('formcontainer__ban--grey').text('任意');
    }
    else if ($('#request').val() == 'イベントの出演依頼') {
      //remove class error message
      $('#datepicker').removeClass('errPosRight chkrequired err');
      $('#comment').removeClass('chkrequired errPosRight err'); 
      //hide show depend on selector
      $('.hideform').hide();
      $('.page125, .page25, .page5, .hidefor4').show();
      //Change PLACEHOLDER for .hidefor4
      $('#company').attr('placeholder', "例） 〇〇株式会社");
      //Change BG COLOR FOR COL1  and HEADER TEXT and VALIDATE for page "1", 2 and 5
      $('.page125 .formcontainer__col1').removeClass('formcontainer__col1--red').addClass('formcontainer__col1--green');
      $('.page125 .formcontainer__col1__text').text("ご希望のジャンル");
      //Change COLOR BAN and TEXT for page 2 and "5" ban
      $('.page25 .formcontainer__col1').removeClass('formcontainer__col1--red').addClass('formcontainer__col1--green');;
      $('.page25 .formcontainer__col1__text').text("出演希望日");
      $('.page25 .formcontainer__col1 span').removeClass('formcontainer__ban--red').addClass('formcontainer__ban--grey').text('任意');
      //Change COLOR BAN and TEXT for the end element of all the page
      $('.pageend .formcontainer__col1__text').text("内容の詳細・備考");
      $('.pageend .formcontainer__col1 span').removeClass('formcontainer__ban--red').addClass('formcontainer__ban--grey').text('任意');
    }
    else {
      $('.hideform').hide();
    }
  });
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
  tel: "chkrequired chktel",
  datepicker: "chkrequired",
  voice: "chkrequired",
  comment: "chkrequired",
  kana: "chkrequired",
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
  $('#comment').removeClass('chkrequired errPosRight err'); 
  $('#datepicker').removeClass('errPosRight chkrequired err');
  var x = 1;
  $("#addrowp2").click(function () {
    $('#tdaddrowp2').prepend($('<input type="text" name="datepicker' + x + '" id="datepicker' + x + '" class="formcontainer__inputdate" placeholder="例） 0000/00/00">'));
    x++;
    $('.formcontainer__inputdate').datepicker();
  });
});

$('.formcontainer__inputdate').datepicker({
  minDate: 0,
  constrainInput: true,
  closeText: "閉じる",
  prevText: "&#x3C;前",
  nextText: "次&#x3E;",
  currentText: "今日",
  monthNames: ["1月", "2月", "3月", "4月", "5月", "6月",
    "7月", "8月", "9月", "10月", "11月", "12月"],
  monthNamesShort: ["1月", "2月", "3月", "4月", "5月", "6月",
    "7月", "8月", "9月", "10月", "11月", "12月"],
  dayNames: ["日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日"],
  dayNamesShort: ["日", "月", "火", "水", "木", "金", "土"],
  dayNamesMin: ["日", "月", "火", "水", "木", "金", "土"],
  weekHeader: "週",
  dateFormat: "yy/mm/dd",
  firstDay: 0,
  isRTL: false,
  showMonthAfterYear: true,
  yearSuffix: "年"
});
