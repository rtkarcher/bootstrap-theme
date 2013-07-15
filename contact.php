<div id="modal" class="modal hide">  
    <div class="modal-header">  
        <h2>Contact</h2>  
    </div>      
    <div class="modal-body">  
        
<form class="form-horizontal email" action="email.php" method="post">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Your email :</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email" name="email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Your name :</label>
    <div class="controls">
      <input type="text" placeholder="Name" name="name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Subject :</label>
    <div class="controls">
      <input type="text" placeholder="Subject" name="subject">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Message :</label>
    <div class="controls">
      <textarea rows="6" name="message"></textarea>
    </div>
  </div>




 <script type="text/javascript">
     var RecaptchaOptions = {
        theme : 'custom',
        custom_theme_widget: 'recaptcha_widget'
     };
</script>               

                    <script type="text/javascript">
                         var RecaptchaOptions = {
                            theme : 'custom',
                            custom_theme_widget: 'recaptcha_widget'
                         };
                    </script>
                    <div id="recaptcha_widget" style="display:none">

                        <div class="control-group">
                            <label class="control-label">reCAPTCHA</label>
                            <div class="controls">
                                <a id="recaptcha_image" href="#" class="thumbnail"></a>
                                <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>
                            </div>
                        </div>

                           <div class="control-group">
                               <label class="recaptcha_only_if_image control-label">Enter the words above:</label>
                              <label class="recaptcha_only_if_audio control-label">Enter the numbers you hear:</label>

                              <div class="controls">
                                  <div class="input-append">
                                      <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="input-recaptcha" />
                                      <a class="btn" href="javascript:Recaptcha.reload()"><i class="icon-refresh"></i></a>
                                      <a class="btn recaptcha_only_if_image" href="javascript:Recaptcha.switch_type('audio')"><i title="Get an audio CAPTCHA" class="icon-headphones"></i></a>
                                      <a class="btn recaptcha_only_if_audio" href="javascript:Recaptcha.switch_type('image')"><i title="Get an image CAPTCHA" class="icon-picture"></i></a>
                                    <a class="btn" href="javascript:Recaptcha.showhelp()"><i class="icon-question-sign"></i></a>
                                  </div>
                              </div>
                        </div>

                    </div>

                    <script type="text/javascript"
                       src="<?php echo $recaptcha_url; ?>">
                    </script>

                    <noscript>
                        <iframe src="<?php echo $recaptcha_noscript_url; ?>"
                           height="300" width="500" frameborder="0"></iframe><br>
                        <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                        </textarea>
                        <input type="hidden" name="recaptcha_response_field"
                           value="manual_challenge">
                      </noscript>

<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>

<noscript>
    <iframe src="<?php echo $recaptcha_noscript_url; ?>"
       height="300" width="500" frameborder="0"></iframe><br>
    <textarea name="recaptcha_challenge_field" rows="3" cols="40">
    </textarea>
    <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
</noscript>



  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Send</button>
    </div>
  </div>
  <p style="float:right;"><small>Credit to <a href="http://kippt.com/jasondavis" target="_blank">Jason Davis</a> for <a href="http://kippt.com/jasondavis/twitter-bootstrap/clips/10194153" target="_blank">Bootstrap Captcha</a></small></p>
</form>
    </div>  
</div>  

<script src="/bootstrap/js/bootstrap.js"></script>
