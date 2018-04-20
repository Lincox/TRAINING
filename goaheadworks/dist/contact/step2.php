<?php
if(!defined("APP_URL")){
	include('../wp/wp-load.php');
	get_template_part( 404 );
	exit();
}
//======================================================================================== お問い合わせ確認画面

	$br_reg_content = nl2br($reg_content);
?>
<form method="post" class="form-1" action="<?php echo $script ?>?<?php echo $gtime ?>" >

<div class="formBlock container">

<p class="taC t30b0"><img src="<?php echo APP_ASSETS; ?>images/form/img_step02.png" width="630" height="39" alt="STEP2"></p>

<div>

	<p class="hid_url">Leave this empty: <input type="text" name="url" value="<?php echo $reg_url ?>"></p><!-- Anti spam part1: the contact form -->
	<table class="tableContact" cellspacing="0">
			<tr>
				<th>お問い合わせの種類</th>
				<td>
					<?php echo $reg_sl01 ?>
				</td>
			</tr>
			<tr>
				<th>お名前</th>
				<td>
				<?php
				echo $reg_name;
				?>
				</td>
			</tr>
			<tr>
				<th>性別</th>
				<td><?php echo $reg_gender ?></td>
			</tr>
			<tr>
				<th>Checkbox1</th>
				<td>
				<?php
				$strCheckbox = "";
				for($i=0; $i < count($reg_check01); $i++)
				{
					$strCheckbox .= $reg_check01[$i].", ";
				}
				if($strCheckbox != "") $strCheckbox = substr($strCheckbox,0,strlen($string)-2);
				echo $strCheckbox;
				?>
				 </td>
			</tr>
		<?php
		if(!empty($reg_company)){
		?>
			<tr>
				<th>会社名</th>
				<td><?php echo $reg_company ?></td>
			</tr>
		<?php
		}
		?>
		<?php
		if(!empty($reg_department)){
		?>
			<tr>
				<th>部署</th>
				<td><?php echo $reg_department ?></td>
			</tr>
		<?php
		}
		?>
			<tr>
				<th>お電話番号</th>
				<td><?php echo $reg_tel ?></td>
			</tr>
			<tr>
				<th>FAX番号</th>
				<td><?php echo $reg_fax ?></td>
			</tr>
			<tr>
				<th>郵便番号</th>
				<td>
					<?php echo $reg_zipcode ?>
				</td>
			</tr>
			<tr>
				<th>住所</th>
				<td>
					<p><?php echo $reg_pref_name.$reg_address01.$reg_address02 ?></p>
				</td>
			</tr>
			<tr>
				<th>メールアドレス</th>
				<td>
                    <?php echo $reg_email ?>
				</td>
			</tr>
			<?php if(!empty($reg_time)) { ?>
				<tr>
					<th>連絡希望の時間帯</th>
					<td><?php echo $reg_time ?></td>
				</tr>
			<?php } ?>
			<tr>
				<th>お問い合わせ内容</th>
				<td>
                <?php echo $br_reg_content ?></td>
			</tr>
		</table>


</div>
<input type="hidden" name="sl01" value="<?php echo $reg_sl01 ?>">
<input type="hidden" name="nameuser" value="<?php echo $reg_name ?>">
<input type="hidden" name="gender" value="<?php echo $reg_gender ?>">
<input type="hidden" name="checkAll01" value="<?php echo $strCheckbox ?>">
<input type="hidden" name="company" value="<?php echo $reg_company ?>">
<input type="hidden" name="department" value="<?php echo $reg_department ?>">
<input type="hidden" name="tel" value="<?php echo $reg_tel ?>">
<input type="hidden" name="fax" value="<?php echo $reg_fax ?>">
<input type="hidden" name="email" value="<?php echo $reg_email ?>">
<input type="hidden" name="zipcode" value="<?php echo $reg_zipcode ?>">
<input type="hidden" name="pref_name" value="<?php echo $reg_pref_name ?>">
<input type="hidden" name="address01" value="<?php echo $reg_address01 ?>">
<input type="hidden" name="address02" value="<?php echo $reg_address02 ?>">
<input type="hidden" name="time" value="<?php echo $reg_time ?>">
<input type="hidden" name="content" value="<?php echo $reg_content ?>">
<!-- always keep this -->
<input type="hidden" name="url" value="<?php echo $reg_url ?>">
<!-- end always keep this -->

<p class="taR">
	<a href="javascript:history.back()">
		入力内容を修正する
	</a>
</p>

<p class="taC t20b20">
	<button name="action" value="send"><span>この内容で送信する</span></button>
</p>

<p class="taC t30b0">上記フォームで送信できない場合は、必要項目をご記入の上、<br>
<a id="mailContact" href="#"></a>までメールをお送りください。</p><!-- Anti spam part2: clickable email address -->

</div>
</form> 