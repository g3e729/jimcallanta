<div data-go-to="#contact" id="contact" class="content">
  @if(request()->has('email_sent'))
    <div class="alert alert-success">
      Email successfully sent!
    </div>
  @endif
  <h2>Contact Me</h2>
  <p> Questions? Comments? Suggestions? Don't hesitate to send me a holler. <br>
      Please fill out this form and I'll get back to you as soon as I can.
  </p>
  <fieldset>
    <form action="https://formspree.io/mr.jimcallanta@gmail.com" method="POST">
      <input type="hidden" name="_next" value="{{ env('APP_URL') . '#contact?email_sent=true' }}" />
      <div class="form-group">
        <label class="col-md-3 control-label" for="name">Name</label>
        <div class="col-md-5 p-0">
          <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
        </div>
      </div>

      <!-- Email input-->
      <div class="form-group">
        <label class="col-md-3 control-label" for="email">Email</label>
        <div class="col-md-5 p-0">
          <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
        </div>
      </div>

      <!-- Message body -->
      <div class="form-group">
        <label class="col-md-3 control-label" for="message">Say Something</label>
        <div class="col-md-5 p-0">
          <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
        </div>
      </div>

      <!-- Form actions -->
      <div class="form-group">
        <div class="col-md-12 p-0">
          <button type="submit">SEND</button>
        </div>
      </div>
    </form>
  </fieldset>
</div>