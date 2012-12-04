<?php
$pageTitle = 'Contact Us';
$pageId = 'contact-us';
$activeMenu = 6;
$langUrl = 'contact-us_fa.php';
include('template/header.php');
?>
<!-- start === main content ===== -->

    <div class="main-container" id="contact_us">

<!-- start ===== changeable =========================================================================================================================== -->

    	<div class="all-pages-slider">

        	<?php include_once( "sliders/contact-slide-config.php" ); ?>

        </div>

        

        <div class="all-pages-text">

            

            <!-- content ===== -->

                    <h2>Contact Us</h2>

                    

                    <div class="addresses_wrapper">

                        

                        <div class="address">

                        	<strong>Mashhad Office:</strong><br />

                            <br />

                            <div>

                            SAPCO Building, Television Blvd.<br />

                            Phone: 8450954<br />

                            Fax: 8450956

                            </div>

                        </div>

                        

                        <div class="address">

                        	<strong>Tehran Office:</strong><br />

                            <br />

                            <div>

                            No. 124, Opposite the Kaj st.<br />

                            Fatemi St.<br />

                            Telefax: 88969226

                            </div>

                        </div>

                        

                    	<div class="address last">

                        	<strong>Factory:</strong><br />

                            <br />

                            <div>

                            Asian Road, 20km, Mashhad<br />

                            Phone: 2463711 (10 Line)<br />

                            Fax: 2463513

                            </div>

                        </div>

                        

                    </div>

                    

                    <?php if ( isset($_REQUEST['sent']) ) { ?>

                    

                        <div class="form-wrraper">

                            <div class="contact_messages" >

                                Thank you for your contact.<br />

                                Your message has been sent succesfuly.<br />

                                To return click <a href="contact-us.php">here</a>, please.

                            </div>

                        </div>

                    

                    <?php } else if ( isset($_REQUEST['conterr']) ) { ?>

                    

                        <div class="form-wrraper">

                            <div class="contact_messages" >

                                Oops!<br />

                                Your message has not been sent. It seems there was a problem!<br />

                                Please try again from <a href="contact-us.php">here</a>.

                            </div>

                        </div>

                    

                    <?php } else { ?>

                    

                    <div class="form-wrraper">

                        <form action="contact.php" method="post" onSubmit="return checkFormValidation(this);" >

                            

                            <div class="form_fields">

                            

                            <select name="department" id="department" class="contact_form_field" onFocus="changeColor(this);" onBlur="backColor(this);" >

                            	<option value="info" >Information</option>

                                <option value="ac" >Commercial</option>

                                <option value="ma" >Finance</option>

                                <option value="pl" >Planing</option>

                                <option value="ed" >office</option>

                                <option value="qc" >Quality Control</option>

                                <option value="tc" >Quality Assurance</option>

                                <option value="en" >Engineering</option>

                                <option value="ne" >Maintenance</option>

                                <option value="to" >produce</option>

                                <option value="mn" >management</option>

                                <option value="it" >IT</option>

                                

                            </select>

                            

                            <input type="text" name="fullname" id="fullname" class="contact_form_field" value="Full Name *" 

                                onFocus="runEvent.onFocus(this);" onBlur="runEvent.onBlur(this);" />

                            

                            <input type="text" name="phone" id="phone" class="contact_form_field" value="Phone Number" 

                                onFocus="runEvent.onFocus(this);" onBlur="runEvent.onBlur(this);" />

                            

                            <input type="text" name="email" id="email" class="contact_form_field" value="eMail Address" 

                                onFocus="runEvent.onFocus(this);" onBlur="runEvent.onBlur(this);" />

                            

                            <input type="text" name="subject" id="subject" class="contact_form_field" value="Subject *" 

                                onFocus="runEvent.onFocus(this);" onBlur="runEvent.onBlur(this);" />

                            </div>

                            

                            <div class="form_textarea">

                            <textarea name="message" id="message" 

                                onFocus="runEvent.onFocus(this);" onBlur="runEvent.onBlur(this);" >Your Message *</textarea>

                            </div>

                            

                            

                            

                            <div class="form_buttons">

                            <span class="required">* Required</span>

                            <input type="reset" name="reset" id="reset" class="contact_form_btn" value="Clear Form" 

                                onClick="backColorOnReset();" />

                                

                            <input type="submit" name="submit" id="submit" class="contact_form_btn" value="Send Form" />

                            </div>

                            

                        </form>

                        <span class="error_message" id="email_error"></span>

                        <span class="error_message" id="fields_error"></span>

                    </div>

                    

                    <?php } ?>

                        

                        

        </div>

<!-- end ===== changeable ============================================================================================================================= -->

    </div><!-- end === main content ===== -->

    

    <?php include('template/footer.php'); ?>