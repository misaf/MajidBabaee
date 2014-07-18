<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>فرم تقاضای تنظیم اظهارنامه مالیاتی</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/jasny-bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.min.css" rel="stylesheet">
		<link href="css/sticky-footer-navbar.min.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php
		if(isset($_POST['submit'])){
			$con=mysql_connect("localhost", "shommaa4_admin", "@Padsanhost123");
			mysql_select_db("shommaa4_database");
			if (!$con) {
				die("<div style='font-family:tahoma;font-size:11px;text-align:center;'><b>قادر به ارتباط با بانک اطلاعاتی نمی باشید</b><br>".mysql_errno()." : ".mysql_error()."</div>");
			} elseif (!$con) {
				die("<div style='font-family:tahoma;font-size:11px;text-align:center;'><b>قادر به انتخاب بانک اطلاعاتی نمی باشید</b><br>".mysql_errno()." : ".mysql_error()."</div>");
			}
			mysql_query("SET NAMES utf8", $con);
			mysql_query("SET CHARACTER SET utf8", $con);
			
			$sql="INSERT INTO personal (
										code_rahgiri, name, family, code_melli, serial_shenasnameh, seri_shenasnameh, shomare_shenasnameh,
										reshteh, shomareh_parvaneh, tarikh_sodoor_parvaneh, email, mobile, metrazh_tarahi,
										nerkh_tarahi92, daramad_tarahi, metrazh_nezarat, nerkh_nezarat92, daramad_nezarat, 
										zarib_hazineh_tarahi, hazineh_tarahi, sayer_daramadha, zarib_hazineh_nezarat,
										hazineh_nezarat, daramad_hoghooghi, jame_hazineha_pezeshki, jame_fishha_varizi,
										daramad_kol, hazineh_kol
										)
										VALUES
					('".$_POST['code_rahgiri']."', '".$_POST['name']."', '".$_POST['family']."',
					'".$_POST['code_melli']."', '".$_POST['serial_shenasnameh']."', '".$_POST['seri_shenasnameh']."',
					'".$_POST['shomare_shenasnameh']."', '".$_POST['reshteh']."', '".$_POST['shomareh_parvaneh']."',
					'".$_POST['tarikh_sodoor_parvaneh']."', '".$_POST['email']."', '".$_POST['mobile']."',
					'".$_POST['metrazh_tarahi']."', '".$_POST['nerkh_tarahi92']."', '".$_POST['daramad_tarahi']."',
					'".$_POST['metrazh_nezarat']."', '".$_POST['nerkh_nezarat92']."', '".$_POST['daramad_nezarat']."',
					'".$_POST['zarib_hazineh_tarahi']."', '".$_POST['hazineh_tarahi']."', '".$_POST['sayer_daramadha']."',
					'".$_POST['zarib_hazineh_nezarat']."', '".$_POST['hazineh_nezarat']."', '".$_POST['daramad_hoghooghi']."',
					'".$_POST['jame_hazineha_pezeshki']."', '".$_POST['jame_fishha_varizi']."', '".$_POST['daramad_kol']."',
					'".$_POST['hazineh_kol']."')";

			$result=mysql_query($sql, $con);
			
			if (!$result) {
				echo mysql_error();
			}
			
			mysql_close($con);
			?>
			<script type="text/javascript">document.location.href='http://pay.shommaa.ir'</script>
			<?php
		}
		?> 
		<div class="container">
			<div class="header">
				<div class="row">
					<br>
					<div class="col-lg-6 col-xs-12 pull-left">
						<img src="img/saman.jpg">
						<img src="img/sarmayeh.jpg">
					</div>
					<div align="right" class="col-lg-6 col-xs-12 pull-right">
						<a href="http://www.padsansystem.ir" title="طراحی و توسعه توسط شرکت پادسان سیستم"><img src="img/padsansystem.jpg"></a>
					</div>
					
				</div>
			</div>
			<hr>
			<form role="form" method="post" action="index.php">
				<div class="panel panel-danger">
					<div class="panel-heading text-right">فرم تقاضای تنظیم اظهارنامه مالیاتی</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3 col-xs-12">
								<div class="form-group">
									<div class="input-group">
										<input name="code_rahgiri" class="form-control" type="text" required autofocus>
										<div class="input-group-addon">کد رهگیری ثبت نام کد اقتصادی</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading text-right">مشخصات فردی <span class="glyphicon glyphicon-user"></span></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12 col-xs-12 pull-right">
								<div class="form-group col-lg-4">
									<div class="input-group">										
										<input name="code_melli" class="form-control" type="text" data-mask="9999999999" placeholder="1345348512" dir="ltr" required>
										<div class="input-group-addon">کد ملی</div>
									</div>
								</div>
								<div class="form-group col-lg-4">
									<div class="input-group">
										<input name="family" class="form-control" type="text" dir="rtl" required>
										<div class="input-group-addon">نام خانوادگی</div>										
									</div>
								</div>
								<div class="form-group col-lg-4">
									<div class="input-group">
										<input name="name" class="form-control" type="text" dir="rtl" required>
										<div class="input-group-addon">نام</div>										
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-xs-12 pull-right">
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="serial_shenasnameh" class="form-control" type="text" required>
										<div class="input-group-addon">سریال شناسنامه</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="seri_shenasnameh" class="form-control" type="text" data-mask="99/***" placeholder="20/الف" dir="rtl" required>
										<div class="input-group-addon">سری شناسنامه</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="shomare_shenasnameh" class="form-control" type="text" required>
										<div class="input-group-addon">شماره شناسنامه</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-xs-12 pull-right">
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<select name="reshteh" class="form-control text-center">
											<option value="0">برق</option>
											<option value="1">ترافیک</option>
											<option value="2">شهرسازی</option>
											<option value="3">عمران</option>
											<option value="4">مکانیک</option>
											<option value="5">معماری</option>
											<option value="6">نقشه برداری</option>
										</select>
										<div class="input-group-addon">رشته</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="shomareh_parvaneh" class="form-control" type="text" required>
										<div class="input-group-addon">شماره پروانه</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="tarikh_sodoor_parvaneh" class="form-control" type="text" data-mask="9999/99/99" placeholder="1360/01/02" dir="ltr" required>
										<div class="input-group-addon">تاریخ صدور پروانه</div>
									</div>
								</div>
								<div class="form-group col-lg-6 col-xs-12 pull-right">
									<div class="input-group">
										<input name="email" id="email" class="form-control" type="text" placeholder="info@example.com">
										<div class="input-group-addon">آدرس ایمیل</div>
									</div>
								</div>
								<div class="form-group col-lg-6 col-xs-12 pull-right">
									<div class="input-group">
										<input name="mobile" id="mobile" class="form-control" type="text" data-mask="99999999999" placeholder="09121234567" dir="ltr" required>
										<div class="input-group-addon">تلفن همراه</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading text-right">مشخصات درآمد و هزینه <span class="glyphicon glyphicon-info-sign"></span></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12 col-xs-12  pull-right">
								<div class="form-group col-lg-4 col-xs-12">
									<div class="input-group">
										<input name="daramad_tarahi" id="daramad_tarahi" class="form-control" type="text" READONLY>
										<div class="input-group-addon">درآمد طراحی</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12">
									<div class="input-group">
										<input name="nerkh_tarahi92" id="nerkh_tarahi92" class="form-control" type="text" placeholder="به ریال وارد نمایید" required>
										<div class="input-group-addon">نرخ طراحی سال 92</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12">
									<div class="input-group">
										<input name="metrazh_tarahi" id="metrazh_tarahi" class="form-control" type="text" required>
										<div class="input-group-addon">متراژ طراحی</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-xs-12  pull-right">
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="metrazh_nezarat" id="metrazh_nezarat" class="form-control" type="text" required>
										<div class="input-group-addon">متراژ نظارت</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="nerkh_nezarat92" id="nerkh_nezarat92" class="form-control" type="text" placeholder="به ریال وارد نمایید" required>
										<div class="input-group-addon">نرخ نظارت سال 92</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="daramad_nezarat" id="daramad_nezarat" class="form-control" type="text" READONLY>
										<div class="input-group-addon">درآمد نظارت</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-xs-12 pull-right">
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<select name="zarib_hazineh_tarahi" id="zarib_hazineh_tarahi" class="form-control text-center">
											<option value="50">50%</option>
											<option value="60">60%</option>
											<option value="70">70%</option>
											<option value="80">80%</option>
											<option value="90">90%</option>
										</select>
										<div class="input-group-addon">ضریب هزینه طراحی</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="hazineh_tarahi" id="hazineh_tarahi" class="form-control" type="text" READONLY>
										<div class="input-group-addon">هزینه طراحی</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="sayer_daramadha" id="sayer_daramadha" class="form-control" type="text" placeholder="به ریال وارد نمایید">
										<div class="input-group-addon">سایر درآمدها</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-xs-12 pull-right">
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<select name="zarib_hazineh_nezarat" id="zarib_hazineh_nezarat" class="form-control text-center">
											<option value="50">50%</option>
											<option value="60">60%</option>
											<option value="70">70%</option>
											<option value="80">80%</option>
											<option value="90">90%</option>
										</select>
										<div class="input-group-addon">ضریب هزینه نظارت و سایر دآمدها</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="hazineh_nezarat" id="hazineh_nezarat" class="form-control" type="text" READONLY>
										<div class="input-group-addon">هزینه نظارت + هزینه سایر درآمدها</div>
									</div>
								</div>
								<div class="form-group col-lg-4 col-xs-12 pull-right">
									<div class="input-group">
										<input name="daramad_hoghooghi" id="daramad_hoghooghi" class="form-control" type="text" placeholder="به ریال وارد نمایید">
										<div class="input-group-addon">درآمد حقوقی</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer text-right text-danger">.در صورت نداشتن سایر درآمدها و هزینه پزشکی عدد صفر را وارد نمایید</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-xs-12  pull-right">
						<div class="form-group">
							<div class="well">
								<h5 class="text-right" style="direction:rtl">منظور از سایر درآمدها شامل درآمد کارهایی خارج از طراحی و نظرات است ( برای مثال می توان به درآمد حاصل از نظارت گاز و آبفا مربوط به مهندسان مکانیک اشاره کرد )</h5>
								<h5 class="text-right" style="direction:rtl">مهندسانی که عضو دفاتر حقوقی می باشند می بایست مبلغ دریافتی خود از دفتر خقوقی در سال 92 را اعلام نمایند. ( البته صرفا جهت اطلاع امور مالیاتی لیکن مالیات مبالغ مذکور قبلا توسط شرکت حقوقی پرداخت گردیده است )</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading text-right">درآمد کل و هزینه کل <span class="glyphicon glyphicon-usd"></span></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12 col-xs-12  pull-right">
								<div class="form-group col-lg-12 col-xs-12">
									<div class="input-group">
										<input name="jame_hazineha_pezeshki" id="jame_hazineha" class="form-control" type="text" placeholder="به ریال وارد نمایید">
										<div class="input-group-addon">جمع هزینه های پزشکی ( بستری بیمارستان، بیمه درمان و ... ) ماده 137 م.م</div>
									</div>
								</div>
								<div class="form-group col-lg-12 col-xs-12">
									<div class="input-group">
										<input name="jame_fishha_varizi" id="jame_fishha" class="form-control" type="text" placeholder="به ریال وارد نمایید">
										<div class="input-group-addon">جمع فیشهای واریزی سازمان نظام مهندسی به اداره دارایی</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xs-12  pull-right">
								<div class="form-group col-lg-6 col-xs-12">
									<div class="input-group">
										<input name="hazineh_kol" id="hazineh_kol" class="form-control" type="text" READONLY>
										<div class="input-group-addon">هزینه کل</div>
									</div>
								</div>
								<div class="form-group col-lg-6 col-xs-12">
									<div class="input-group">
										<input name="daramad_kol" id="daramad_kol" class="form-control" type="text" READONLY>
										<div class="input-group-addon">درآمد کل</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-xs-12  pull-right">
						<div class="form-group">
							<div class="well">
								<h4 class="text-right" style="direction:rtl"><p>قابل توجه :</p><p>قبل از تکمیل فرم مندرجات را مجددأ چک نمایید.</p><p>مسئولیت صحت مندرجات فوق بعهده شما خواهد بود.</p><p class="text-danger">هزینه تنظیم اظهار نامه مالیاتی 250،000 ریال می باشد.</p></h4>								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-offset-5 col-xs-offset-4 col-lg-6 col-xs-6">
						<button type="reset" class="btn btn-danger">بازنویسی فرم&nbsp;&nbsp;<span class="glyphicon glyphicon-repeat"></span></button>
						<button name="submit" type="submit" class="btn btn-primary">ثبت نام&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></button>
					</div>
				</div>
				<br><br>
			</form>
		</div>
		<div id="footer">
			<div class="container">
				<footer>
					<a href="#"><p class="pull-right text-danger">برگشت به بالا</p></a>
					<p class="text-muted copyright"><small><br>&copy; 2014 PadsanSystem Co.</small></p>
				</footer>
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				
				$("#metrazh_nezarat").click(function(){
					$("#daramad_tarahi").val($("#metrazh_tarahi").val()*$("#nerkh_tarahi92").val());
				});
				$("#sayer_daramadha").click(function(){
					$("#daramad_nezarat").val($("#metrazh_nezarat").val()*$("#nerkh_nezarat92").val());
				});
				$("#sayer_daramadha").click(function(){
					$("#hazineh_tarahi").val($("#daramad_tarahi").val()*$("#zarib_hazineh_tarahi").val()/100);
				});
				$("#daramad_hoghooghi").click(function(){
					if($("#sayer_daramadha").val()==""){
						$("#sayer_daramadha").val("0");
					}
					$("#hazineh_nezarat").val((parseInt($("#daramad_nezarat").val())+parseInt($("#sayer_daramadha").val()))*$("#zarib_hazineh_nezarat").val()/100);
				});
				$("#jame_hazineha").click(function(){
					$("#daramad_kol").val(parseInt($("#daramad_tarahi").val())+parseInt($("#daramad_nezarat").val())+parseInt($("#sayer_daramadha").val()));
				});
				$("#jame_hazineha").click(function(){
					$("#hazineh_kol").val(parseInt($("#hazineh_tarahi").val())+parseInt($("#hazineh_nezarat").val()));
				});
			});
		</script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jasny-bootstrap.min.js"></script>
	</body>
</html>