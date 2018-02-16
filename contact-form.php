
<div class="row">
<div class="col-md-12">

  <div class="form-group">
    <label for="contact-name" class="sr-only">Name</label>
    [text* your-name class:form-control class:input-lg id:contact-name placeholder "Your Name"]
  </div>

  <div class="form-group">
    <label for="subject" class="sr-only">Subject</label>
    [text* subject class:form-control class:input-lg id:subject placeholder "Subject"]
  </div>

  <div class="form-group">
    <label for="contact-email" class="sr-only">Your Email</label>
    <input type="email" class="form-control input-lg" id="email" placeholder="Your Email">
    [email* your-email class:form-control class:input-lg id:email placeholder "Your Email"]
  </div>

  <div class="form-group">
    <label for="message" class="sr-only">Message</label>
    [textarea* message class:form-control class:input-lg id:message x3 placeholder "Your Message"]
  </div>

</div>
</div>
<input type="submit" class="btn btn-info btn-lg pull-right" value="Send &raquo;">
[submit class:btn class:btn-info class:btn-lg class:pull-right "Send"]
