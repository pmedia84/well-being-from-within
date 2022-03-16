<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact me to find out more about my Mental Health support and Reiki services. You can also fill out my form and I will come back to you within 3 business days.">
    <title>Well Being From Within - Contact Me</title>

    <?php include("inc/nav.inc.php"); ?>

    <main>
        <section class="hero-pages contact-hero">
            <div class="container">
                <h1>Contact Me</h1>
            </div>
        </section>

        <section class="primarybg">
            <div class="container bg-flower-borders">
                <h2 class="section-title">My Contact Information</h2>
                <p class="section-subtitle m-bt-1">Use the information below, or fill out the contact form and I will get back to you.</p>
                <div class="grid-container-auto white-bg opacity-7 border-standard">
                    <div class="flex-col p-1">
                        <div class="address">
                            <h3 class="section">Well-being From Within</h3>
                            <p>10 Dunlin Drive, Long Sutton, Lincolnshire, PE12 9RR</p>
                        </div>
                        <div class="contactdetails">
                            <h3>Contact Details</h3>
                            <p>melissa@well-beingfromwithin.co.uk</p>
                            <p><strong>Telephone:</strong><br>07923 407143</p>
                        </div>

                        <!-- <div>
                            <h3>Opening Hours</h3>
                            <p class="openinghrs-card-hours">Monday - Friday<span>09:00 - 17:00</span></p>
                            <p class="openinghrs-card-hours">Saturday - Sunday<span>10:00 - 16:00</span></p>
                            <p class="small">Note: I am contactable any time of the day, simply reach out to me. My usual response time is 3 business days. </p>
                        </div> -->
                    </div>
                    <iframe class="maps" width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIeCpJPH510cRXwZqWd4jNR8&key=AIzaSyDQqkD-Qtu2LxJUkNGf7kuQBPX6mY-rgwI"></iframe>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="section-title m-bt-1">Fill out the form below and I will get back to you.</h2>

                <div id="contactdiv">
                    <!-- =========== -->
                    <!-- custom styling for inputs -->
                    <!-- =========== -->
                    <!-- Prepend all inputs with an icon helper -->
                    <form id="indexform" action="contact_form_script.php" name="indexform">



                        <div class="grid-container-auto grid-wide-col">

                            <div class="form-wrapper">
                                <label class="input-label" for="name">Your Name</label>
                                <div class="inputwrapper">
                                    <!-- flex container -->
                                    <div class="input-prepend">
                                        <!-- flex item -->
                                        <span class="input-prepend-text"><i class="fa fa-user-o"></i></span>
                                    </div>
                                    <!-- Flex Item -->
                                    <input class="text-input input" type="text" id="name" placeholder="Your Name *" autocomplete="off" required="" maxlength="45"><small class="form-text text-danger flex-grow-1 help-block lead"></small>
                                </div>
                            </div>

                            <div class="form-wrapper">
                                <label class="input-label" for="email">Your Email</label>
                                <div class="inputwrapper">
                                    <!-- flex container -->
                                    <div class="input-prepend">
                                        <!-- Flex Item -->
                                        <span class="input-prepend-text"><i class="fa fa-envelope-o"></i></span>
                                    </div>
                                    <input class="email-input input" type="email" id="email" placeholder="Your Email *" autocomplete="off" required="" maxlength="75"><small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>



                            <div class="form-wrapper">
                                <label class="input-label" for="phone">Your Phone Number</label>
                                <div class="inputwrapper">
                                    <!-- flex container -->
                                    <div class="input-prepend">
                                        <!-- Flex Item -->
                                        <span class="input-prepend-text"><i class="fas fa-mobile-alt"></i></span>
                                    </div>
                                    <input class="text-input input" type="tel" id="phone" placeholder="Your Phone No. *" autocomplete="off" required="" maxlength="45"><small class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>

                            <div class="form-wrapper">
                                <label class="input-label" for="message">Your Message</label>
                                <textarea class="input textarea" id="message" placeholder="Your Message *" required="" spellcheck="true" autocomplete="off"></textarea><small class="form-text text-danger help-block lead"></small>
                            </div>


                        </div>
                        <div id="button-section">
                            <div class="formrow formsubmit">
                                <div class="formcolumn">
                                    <!-- recaptcha -->
                                    <div id="validation" class="g-recaptcha text-center" data-sitekey="6LeuNYQeAAAAADZcl858Wm9Qz5zeXAq0nUIRf8-D"></div>
                                    <div id="success"></div>
                                    <div id="submit">
                                        <button class="btn" id="sendMessageButton" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <!-- success - for status messages -->
                            </div>
                        </div>

                    </form>


                </div>





            </div>






        </section>
        <div class="banner-centered">
            <img class="banner-image" src="img/Leaves.svg" alt="">
        </div>
    </main>

    <script type="text/javascript">
        //set vars for checking status of recaptcha
        var recaptchaCheck = false;
        var recaptchaRequired = false;
        //function to load recaptcha
        function recaptchaLoad() {
            $.getScript("https://www.google.com/recaptcha/api.js").done(function(script, textStatus) {
                console.log(textStatus); // Success
                console.log("Load was performed.");
                recaptchaCheck = true;
                $(validation).css("margin-bottom", "1rem");
            });
        }
        //monitor user entering form
        $("#indexform").click(function() {
            //check if recaptcha is already loaded
            if (recaptchaCheck == false) {
                //load recaptcha from function
                recaptchaLoad();
            }
        });
        //monitor entering information in form
        $("#indexform").keydown(function() {
            //check if recaptcha is set to required
            if (recaptchaRequired == false) {
                //get dom element for recaptcha form field
                var $recaptcha = document.querySelector('#g-recaptcha-response');
                if ($recaptcha) {
                    //set recaptcha field to required
                    $recaptcha.setAttribute("required", "required");
                    console.log("required set");
                    recaptchaRequired = true;
                } else {
                    //log if recaptcha wasn't found and therefore not set as required
                    console.log("required not set");
                }
            }
        });
    </script>
    <script>
        (function($) {
            "use strict";
            //monitor clicks on form submit button
            $("#sendMessageButton").click(function() {
                //validate form information
                if ($('#name').val() != '' & $('#email').is(":valid") & $('#phone').val() != '' & $('#message').val() != '') {
                    //form information passed, check recaptcha
                    if ($('.g-recaptcha-response').val() == "") {
                        //update page with error, recaptcha not completed
                        var warningmsg = "<div id='response'>0</div><div class='error_message m-bt-1'>Please complete the captcha before submitting form!</div>";
                        document.getElementById('success').innerHTML = warningmsg;
                        $('#success').hide();
                        $('#success').slideDown('slow');
                    }
                } else {
                    //form information didn't pass validation
                    var warningmsg = "<div id='response'>0</div><div class='error_message m-bt-1'>Please verify your details in the form!</div>";
                    document.getElementById('success').innerHTML = warningmsg;
                    $('#success').hide();
                    $('#success').slideDown('slow');
                }
            });

            jQuery(document).ready(function() {
                //form submit
                $('#indexform').submit(function() {
                    //get page to submit to
                    var action = $("#indexform").attr('action');
                    //temporarily hide forms messages, recaptcha and button, proceed with ajax request
                    $("#button-section").slideUp(50, function() {
                        $('#button-section').hide();
                        //ajax request
                        $.post(action, {
                                //collect form fields to post
                                name: $('#name').val(),
                                email: $('#email').val(),
                                phone: $('#phone').val(),
                                message: $('#message').val(),
                                validation: $('.g-recaptcha-response').val()
                            },
                            //ajax complete
                            function(data) {
                                //set contact.php response to success element for user to read
                                document.getElementById('success').innerHTML = data;
                                //get status, 0 for error, 1 for pass
                                var responseType = document.getElementById('response').innerHTML;
                                if (responseType == 0 || responseType == "") {
                                    //response error, reset recaptcha and show section for messages, recaptcha and button
                                    $('.g-recaptcha-response').val("");
                                    grecaptcha.reset();
                                    $('#button-section').slideDown('slow');
                                } else {
                                    //response pass, hid recaptcha and button, show section for messages
                                    $('#validation').hide();
                                    $('#submit').hide();
                                    $('#button-section').slideDown('slow');
                                }
                            }
                        );

                    });

                    return false;

                });

            });
        }(jQuery));
    </script>
    <?php include("inc/footer.inc.php"); ?>