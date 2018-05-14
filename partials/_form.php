<form action="/confirm.php" role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake" method="POST">
  <div class="form-group row">
    <div class="col-12 controls">
      <input type="email" name="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-12 controls">
      <input type="text" id="msg_subject" name="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-12 controls">
      <textarea id="message" rows="4" placeholder="Message" name="message" class="form-control" required data-error="Write your message"></textarea>
    </div>  
  </div>

  <button type="submit" id="submit" class="btn btn-effect"><i class="fa fa-check"></i> Send Message</button> 
  <div class="clearfix"></div>   
</form> 