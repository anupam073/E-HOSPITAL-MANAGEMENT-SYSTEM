
  <?php include 'header.php';?>

  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Contact Us -->
    <section class="p-t-b-150"> 
      <!-- CONTACT FORM -->
      <div class="container"> 
        <!-- Tittle -->
        <div class="heading-block">
          <h4>GET IN TOUCH</h4>
          <hr>
          <span>Duis autem vel eum iriure dolor in hendrerit n vuew lputate velit esse molestie conseu vel illum dolore eufe ugiat nulla facilisis at vero.</span> </div>
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="*Name">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="*Email">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Phone">
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="Department">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="*Message"></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MESSAGE</button>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <!-- MAP -->
    <section class="map-block margin-top-100">
      <div class="map-wrapper" id="map-canvas" data-lat="23.740051" data-lng="90.371239" data-zoom="13" data-style="1"></div>
      <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="23.740051" data-lng="90.371239" data-string="Medical Hospital"></a> </div>
    </section>
  </div>
  
  <!-- Footer -->

  <?php include 'footer.php';?>