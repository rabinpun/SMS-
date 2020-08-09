@extends('layouts.app')
@section('content')
    
    <section>
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
              <!-- Embedded Google Map -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2039.1992677487501!2d84.51558175139623!3d27.621288673768845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994ef51641bec3f%3A0xbb0549722c5c6ee6!2sTandi%20Bus%20Stop!5e0!3m2!1sen!2snp!4v1596820778613!5m2!1sen!2snp"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
              <h3>Contact Details</h3>
              <p>
                 Tandi
                <br>Chitwan, Bagmati
                <br>
              </p>
              <p>
                <abbr title="Phone">Phone</abbr>: 9845902604
              </p>
              <p>
                <abbr title="Email">Email</abbr>:
                <a href="mailto:sms@gmail.com">sms@gmail.com
                </a>
              </p>
              <p>
                <abbr title="Hours">Hours</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
              </p>
            </div>
          </div>
    </section>
    <hr>
    <h4>Please follow us on following social media handles</h4>
    <ul class=" links-wrapper d-flex">
        <a href="http://Facebook.com/sms"><li class="link-wrapper "><i class=" fab fa-facebook-f" style="margin-left:20px;color: #3b5998"></i></li></a>
        <a href="http://twitter.com/sms"><li class="link-wrapper "><i class=" fab fa-twitter" style="margin-left:15px;color: #1DA1F2"></i></li></a>
        <a href="http://instagram.com/sms"><li class="link-wrapper" ><i class=" fab fa-instagram" style="margin-left:17px;color: #ca1b1bdc"></i></li></a>
        <a href="http://linkedin.com/sms"><li class="link-wrapper" ><i class=" fab fa-linkedin" style="margin-left:17px;color: #1765c4"></i></li></a>
        <a href="http://youtube.com/sms"><li class="link-wrapper"><i class=" fab fa-youtube" style="margin-left:15px;color: #FF0000"></i></li></a>
        
    </ul>
@endsection