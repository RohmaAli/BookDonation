@extends("master")

@section("content")
  <div class="">
    <div class="overlay"></div>
    <img class="contact-img" src="{{URL::to('/')}}/Main/images/img2.jpg" alt="">
  </div>
  <div class="container-fluid bg-dark p-5 contact">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-white mt-5 fontweight-bold">Contact Us</h1>
        <div class="underline mb-5"></div>
      </div>
      <div class="col-md-6">
        <div class="contact-info">
            <h4>CONTACT INFO</h4>
            <ul>
              <li>
                <strong>Email :</strong>
                "hamzaahmed@gmail.com"
              </li>
              <li>
                <strong>Phone :</strong>
                "0723-681823"
              </li>
              <li>
                <strong>Mobile :</strong>
                "0333-1231123"
              </li>
              <li>
                <strong>Web :</strong>
                "bookdonation.com"
              </li>
            </ul>
          </div>
      </div>
      <div class="col-md-6">
        <div class="contact-info">
							<h4>Working Hours</h4>
							<ul>
								<li>
									<strong>Mon-Thurs</strong>
									"24 hours"
								</li>
								<li>
									<strong>Friday</strong>
									"24 hours"
								</li>
								<li>
									<strong>Saturday</strong>
									"9 am to 5 pm"
								</li>
								<li>
									<strong>Sunday</strong>
									"12 hours"
								</li>
							</ul>
						</div>
      </div>
      <div class="m-auto">
        <form class="text-white">
          <div class="form-row text-white">
            <div class="col-md-6 mb-3">
              <label for="validationDefault01">First name</label>
              <input type="text" class="form-control" id="validationDefault01" placeholder="First Name*" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationDefault02">Last name</label>
              <input type="text" class="form-control" id="validationDefault02" placeholder="Last Name*"  required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationDefault03">Email</label>
              <input type="Email" class="form-control" id="validationDefault03" placeholder="Email*" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationDefault05">Subject</label>
              <input type="text" class="form-control" id="validationDefault05" placeholder="Subject*" required>
            </div>
          </div>
          <div class="form-group">
          </div>
          <div class="form-group">
            <label for="validationDefault05">Message</label>
            <textarea id="validationDefault05" placeholder="Your message*...." class="form-control" required name="name" rows="8" cols="80"></textarea>
          </div>
            <a style="border-radius: 10px !important; padding: 10px;" type="submit" class="col-md-4 btn btn-block bg-info m-auto text-light font-weight-bold">Send Message</a>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.718250557515!2d72.78447685030363!3d33.742101041363675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa6bc26bfa2db%3A0x2344c019578abeac!2sCOMSATS%20University%2C%20Islamabad%2C%20Wah%20Campus!5e0!3m2!1sen!2s!4v1597139632427!5m2!1sen!2s" style="width: 100%;" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
@endsection
