<?php
if(!defined("APP_URL")){
	include('../wp/wp-load.php');
	get_template_part( 404 );
	exit();
}

//========================================================================================== お問い合わせ確認画面

	//email list
	$aMailto = $aMailtoContact;
	if(count($aBccToContact)) $aBccTo = $aBccToContact;
	$from = $fromContact;
	$fromname = "";
	$subject = "ホームページからお問い合わせがありました";
	$subject1 = "お問い合わせありがとうございました";
	$email_head_ctm1 = "ホームページからお問い合わせがありました。";
	$email_head_ctm = "この度はお問い合わせいただきまして誠にありがとうございます。
こちらは自動返信メールとなっております。
弊社にて確認した後、改めてご連絡させていただきます。

以下、お問い合わせ内容となっております。
ご確認くださいませ。";
	$email_body_footer = "
		About company
	";

	$entry_time = gmdate("Y/m/d H:i:s",time()+9*3600);
	$entry_host = gethostbyaddr(getenv("REMOTE_ADDR"));
	$entry_ua = getenv("HTTP_USER_AGENT");


$msgBody = "

■お問い合わせの種類
$reg_sl01

■お名前
$reg_name

■性別
$reg_gender
";
if(isset($reg_checkAll01) && $reg_checkAll01 != '')
{
$msgBody .= "
■Checkbox1
$reg_checkAll01
";
}
if(isset($reg_company) && $reg_company != '')
{
$msgBody .= "

■会社名
$reg_company
";
}


if(isset($reg_department) && $reg_department != '')
{
$msgBody .= "

■部署
$reg_department
";
}


$msgBody .= "

■お電話番号
$reg_tel
";

if(isset($reg_fax) && $reg_fax != '')
{
$msgBody .= "

■FAX番号
$reg_fax
";
}

$msgBody .= "
■郵便番号
$reg_zipcode

■住所
$reg_pref_name$reg_address01$reg_address02

■メールアドレス
$reg_email
";

if(isset($reg_time) && $reg_time != '')
{
$msgBody .= "

■連絡希望の時間帯
$reg_time
";
}

if(isset($reg_content) && $reg_content != '')
{
$msgBody .= "
■お問い合わせ内容
$reg_content
";
}



//お問い合わせメッセージ送信
	$body = "

登録日時：$entry_time
ホスト名：$entry_host
ブラウザ：$entry_ua


$email_head_ctm1


$msgBody


";

//お客様用メッセージ
	$body1 = "

$reg_name 様

$email_head_ctm

---------------------------------------------------------------

$msgBody

---------------------------------------------------------------
".$email_body_footer."
---------------------------------------------------------------

";



	// メール送信
	mb_language("ja");
	mb_internal_encoding("UTF-8");
	


	//お客様受け取りメール送信
	$email1 = new JPHPmailer();
	$email1->addTo($reg_email);
	$email1->setFrom($from,$fromname);
	$email1->setSubject($subject1);
	$email1->setBody($body1);

	//if($email1->send()) {};
	
	//Anti spam advanced version 2 start: Don't send blank emails
	if( $reg_name <> "" && $reg_email <> "" ) {
		
		//Anti spam advanced version 1 start: The preg_match() is there to make sure spammers can’t abuse your server by injecting extra fields (such as CC and BCC) into the header.
		if( $reg_email && !preg_match( "/[\r\n]/", $reg_email) ) {
			
			//Anti spam part1: the contact form start
			if($reg_url == ""){
				
		     	// then send the form to your email
				if($email1->Send()) {};
			} // otherwise, let the spammer think that they got their message through
			//Anti spam part1: the contact form end
		}//Anti spam advanced version 1 end
	}//Anti spam advanced version 2 end: Don't send blank emails
	


	//メール送信
	$email = new JPHPmailer();
	 for($i = 0; $i < count($aMailto); $i++)
	 {
	 	$email->addTo($aMailto[$i]);
	 }
	 for($i = 0; $i < count($aBccTo); $i++)
    {
        $email->addBcc($aBccTo[$i]);
    }
	//$email->setFrom($reg_email, $reg_name."様");//can not send from Yahoo mail(customer) to Gmail(admin)
	$email->setFrom($from,$fromname);
	
	$email->setSubject($subject);
	$email->setBody($body);
	

	//if($email->Send()) {};
	
	//Anti spam advanced version 2 start: Don't send blank emails
	if( $reg_name <> "" && $reg_email <> "" ) {
		
		//Anti spam part1: the contact form start
		if($reg_url == ""){
			
	     	// then send the form to your email
			if($email->Send()) {};
		} // otherwise, let the spammer think that they got their message through
		//Anti spam part1: the contact form end
	}//Anti spam advanced version 2 end: Don't send blank emails
	

	$_SESSION['fromContact'] = 1;
	header("Location: indexThx.php");
	exit;
?>