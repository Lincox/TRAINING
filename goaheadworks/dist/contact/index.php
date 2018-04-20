<?php
session_start();
header("Cache-control: private"); 
header_remove("Expires"); 
header_remove("Cache-Control"); 
header_remove("Pragma"); 
header_remove("Last-Modified");
ob_start();
include_once('../app_config.php');
include(APP_PATH.'libs/head.php');
?>
<meta name = "format-detection" content = "telephone=no">

<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS ?>css/exvalidation.css">
<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS ?>css/contact.css">

<!-- Anti spam part1: the contact form start -->
</head>
<body id="contact">
<!-- header Part ==================================================
================================================== -->
<?php include(APP_PATH.'libs/header.php'); ?>
<!-- header Part ==================================================
================================================== -->
<div class="mainImg"><h2>CONTACT<span>お問い合わせ</span></h2></div>
<?php

// 設定
require(APP_PATH."libs/form/jphpmailer.php");
$script = "";
$gtime = time();

//always keep this
$action = htmlspecialchars($_POST['action']);
$reg_url = htmlspecialchars($_POST['url']);
//end always keep this


//お問い合わせフォーム内容
$reg_sl01 = $_POST['sl01'];
$reg_name = htmlspecialchars($_POST['nameuser']);
$reg_company = htmlspecialchars($_POST['company']);
$reg_gender = htmlspecialchars($_POST['gender']);
$reg_check01 = $_POST['check01'];
$reg_checkAll01 = htmlspecialchars($_POST['checkAll01']);
$reg_department = htmlspecialchars($_POST['department']);
$reg_tel = htmlspecialchars($_POST['tel']);
$reg_fax = htmlspecialchars($_POST['fax']);
$reg_zipcode = htmlspecialchars($_POST['zipcode']);
$reg_address01 = htmlspecialchars($_POST['address01']);
$reg_address02 = htmlspecialchars($_POST['address02']);
$reg_pref_name = htmlspecialchars($_POST['pref_name']);
$reg_email = htmlspecialchars($_POST['email']);
$reg_time = htmlspecialchars($_POST['time']);
$reg_content = htmlspecialchars($_POST['content']);

// 処理分岐
if($action == "confirm"){
	
	require("step2.php");

}elseif($action == "send"){
	
	require("step3.php");
	
}else{

	require("step1.php");

}
?>

<!--Footer ==================================================
================================================== -->

<?php include(APP_PATH.'libs/footer.php'); ?>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/exvalidation.js"></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/form/exchecker-ja.js"></script>
<script type="text/javascript">
	$(function(){
	  $("form.form-1").exValidation({
	    rules: {
			name: "chkrequired",
			email: "chkrequired chkemail",
			cemail: "chkrequired",
			tel: "chkrequired chktel",
			zipcode: "chkrequired",
			address01: "chkrequired",
			address02: "chkrequired",
			content: "chkrequired"
	    },
	    stepValidation: true,
	    scrollToErr: true,
	    // errHoverHide: true
	  });
	});
</script>
<script type="text/javascript">
	<!--
	function check(){
		var flag = 0;
		if(!document.form1.check1.checked){
			flag = 1;
		}
		if(flag){
			window.alert('「個人情報の取扱いに同意する」にチェックを入れて下さい');
			return false;
		}
		else{
			return true;
		}
	}
	// -->
</script>

<script>
	$(document).ready(function() {
		var address = "xxx" + "@" + "xxxxxxx.com";
		$("#mailContact").attr("href", "mailto:" + address);
		$("#mailContact").text(address);
	});
</script>


</body>
</html>