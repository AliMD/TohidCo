<?php
$pageTitle = 'تماس با ما';
$pageId = 'contact-us';
$activeMenu = 6;
$langUrl = 'contact-us.php';
include('template/header_fa.php');
?>
<!-- start === main content ===== -->
<div class="main-container" id="contact_us">

<!-- start ===== changeable =========================================================================================================================== -->

		<div class="all-pages-slider">

			<?php include_once( "sliders/contact-slide-config.php" ); ?>

		</div>

		

		<div class="all-pages-text">

			<!-- content ===== -->

					<h2>تماس با ما</h2>
					<table>
						<tr>
							<td class="first">دفتر مشهد :</td>
							<td>دفتر تهران :</td>
							<td>کارخانه :</td>
						</tr>
						<tr>
							<td class="first">
								بلوار تلویزیون، ساختمان ساپکو
								<br />
								تلفن : 8450954 (511 98+)
							</td>
							<td>
								خیابان فاطمی روبروي هشت بهشت
								<br />و خيابان کاج - پلاک 122
								<br />
								تلفکس : 4-88997242 (21 98+)
							</td>
							<td>
								مشهد، کیلومتر 20 جاده‌ی آسیایی
								<br />
								تلفـن : (10 خط) 3711 246 (511 98+)
								<br />
								فکس : 3513 246 (511 98+)
							</td>
						</tr>
					</table>

					<?php if ( isset($_REQUEST['sent']) ) { ?>

					

						<div class="form-wrraper">

							<div class="contact_messages" >

								از تماس شما سپاس گذاریم.<br />

								پیام شما با موفقیت ارسال شد.<br />

								لطفا برای بازگشت <a href="contact-us_fa.php">این جا</a> را کلیک نمایید.

							</div>

						</div>

					

					<?php } else if ( isset($_REQUEST['conterr']) ) { ?>

					

						<div class="form-wrraper">

							<div class="contact_messages" >

								اوه‌ه!<br />

								پیام شما ارسال نشد. به نظر می‌رسد مشکلی وجود داشت!<br />

								لطفا <a href="contact-us_fa.php">دوباره</a> سعی نمایید.

							</div>

						</div>

					

					<?php } else { ?>

					

					<div class="form-wrraper">

						<form action="contact.php" method="post" onSubmit="return checkFormValidation(this);" >

							

							<div class="form_fields">

							

							<select name="department" id="department" class="contact_form_field" onFocus="changeColor(this);" onBlur="backColor(this);" >

								<option value="info" >پذیرش</option>

								<option value="ac" >بازرگانی</option>

								<option value="ma" >مالی</option>

								<option value="pl" >برنامه ریزی</option>

								<option value="ed" >اداری</option>

								<option value="qc" >کنترل کیفیت</option>

								<option value="tc" >تضمین کیفیت</option>

								<option value="en" >مهندسی</option>

								<option value="ne" >نگهداری و تعمیرات</option>

								<option value="to" >تولید</option>

								<option value="mn" >مدیریت</option>

								<option value="it" >فناوری اطلاعات</option>

								<option value="web" >پشتیبانی سایت</option>

							</select>

							

							<input type="text" name="fullname" id="fullname" class="contact_form_field" value="نام کامل *" 

								onFocus="runEvent.onFocus(this);" onBlur="runEvent.onBlur(this);" />

							

							<input type="text" name="phone" id="phone" class="contact_form_field" value="شماره تلفن" 

								onFocus="runEvent.onFocus(this); runEvent.direction(this, 'change');" 

								onBlur="if(this.value == '') runEvent.direction(this, 'back'); runEvent.onBlur(this);" />

							

							<input type="text" name="email" id="email" class="contact_form_field" value="آدرس ایمیل" 

								onFocus="runEvent.onFocus(this); runEvent.direction(this, 'change');" 

								onBlur="if(this.value == '') runEvent.direction(this, 'back'); runEvent.onBlur(this);" />

							

							<input type="text" name="subject" id="subject" class="contact_form_field" value="موضوع *" 

								onFocus="runEvent.onFocus(this);" onBlur="runEvent.onBlur(this);" />

							</div>

							

							<div class="form_textarea">

							<textarea name="message" id="message" 

								onFocus="runEvent.onFocus(this);" onBlur="runEvent.onBlur(this);" >پیام شما *</textarea>

							</div>

							

							

							

							<div class="form_buttons">

							<span class="required">* الزامی</span>

							<input type="reset" name="reset" id="reset" class="contact_form_btn" value="پاک کردن فرم" 

								onClick="backColorOnReset();" />

								

							<input type="submit" name="submit" id="submit" class="contact_form_btn" value="ارسال فرم" />

							</div>

							

						</form>

						<span class="error_message" id="email_error"></span>

						<span class="error_message" id="fields_error"></span>

					</div>

					

					<?php } ?>

						

						

		</div>

<!-- end ===== changeable ============================================================================================================================= -->

	</div><!-- end === main content ===== -->

	

	<?php include('template/footer_fa.php'); ?>