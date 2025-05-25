<?php
/**
 * Contact form section
 */
?>

<div class="content-section light-bg form-section">
    <div class="container">
        <form action="https://www.creativethemes.co.in/" method="post" id="contactForm">
            <div class="col-xs-4 no-padding">
                <label>Name *</label>
                <input type="text" class="form-control" name="name" id="contact_name"/>
            </div>
            <div class="col-xs-4 no-padding">
                <label>Email *</label>
                <input type="email" class="form-control" name="email" id="contact_email"/>
            </div>
            <div class="col-xs-4 no-padding">
                <label>Subject *</label>
                <input type="text" class="form-control" name="subject" id="contact_subject"/>
            </div>
            <div class="col-xs-12 no-padding">
                <label>Message *</label>
                <textarea class="form-control" name="message" id="contact_message"></textarea>
            </div>
            <div  class="clearfix"></div>
            <div class="text-center">
                <input type="button" value="send message" class="submit" onClick="return ajaxmailcontact();"/>
                <input type="reset" value="reset" class="reset"/>
            </div>
        </form>
        <div class="clearfix"></div>
        <!-- /col -->
    </div>
</div>
