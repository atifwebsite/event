<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    /* footer css */
    :root{
         --primary-color:#ff5e14;
         --bg-color:#151414;
         --light-black:#373636;
         --light-black-2:#2e2e2e;
         --light-black-3:#202020;
         --white-color:#ffff;
         --dark-gray:#757575;
         --dark-gray-2:#7e7e7e;
         --dark-gray-3:#878787;
         --facebook:#3b599b;
         --twitter:#55acee;
         --instagram:#e93b81;
         }

         ul{
         margin: 0;
         padding: 0;
         }
         .footer-section{
         background:var(--bg-color);
         position: relative;
         }
         .footer-cta{
         border-bottom: 1px solid var(--light-black);
         }
         .single-cta i{
         color: var(--primary-color);
         font-size: 40px;
         float: left;
         margin-top: 8px;
         }
         .cta-text{
         padding: 15px;
         display: inline-block;
         }
         .cta-text h4{
         color:var(--white-color);
         font-size: 20px;
         font-weight: 600;
         margin-bottom: 2px;
         }
         .cta-text span{
         color:var(--dark-gray);
         font-size: 15px;
         }
         .footer-center{
         color:var(--dark-gray);
         z-index: 2;
         }
         .footer-logo{
         margin-bottom: 20px;
         }
         .footer-logo img{
         max-width: 200px;:
         }
         .footer-text p{
         margin-bottom: 14px;
         font-size: 14px;
         color:var(--dark-gray);
         line-height: 28px;
         }
         .footer-social-icon samp{
         color: var(--white-color);
         display: block;
         font-size: 20px;
         font-weight: 700;
         margin-bottom: 20px;
         }
         .footer-social-icon a{
         color: var(--white-color);
         font-size: 16px;
         margin-right: 15px;
         }
         .footer-social-icon i{
         height: 40px;
         width: 40px;
         text-align: center;
         line-height: 38px;
         border-radius: 50%;
         }
         .facebook-bg{
         background:var(--facebook);
         }
         .twitter-bg{
         background:var(--twitter);
         }
         .instagram-bg{
         background:var(--instagram);
         }
         .footer-widget-heading h3{
         color:var(--white-color);
         font-size: 20px;
         font-weight: 600;
         margin-bottom: 40px;
         position: relative;
         }
         .footer-widget-heading h3::before{
         content: '';
         position: absolute;
         left: 0;
         bottom: -15px;
         height: 2px;
         width: 50px;
         background:var(--primary-color);
         }
         .footer-widget ul li{
         display: block;
         float: left;
         width: 50%;
         margin-bottom: 12px;
         }
         .footer-widget ul li a:hover{
         color:var(--primary-color);
         }
         .footer-widget ul li a{
         color:var(--white-color);
         text-transform: capitalize;
         }
         .subscribe-form{
         position: relative;
         overflow: hidden;
         }
         .subscribe-form input{
         width: 100%;
         padding: 14px 28px;
         background:var(--light-black-2);
         border:1px solid var(--light-black-2);
         color: var(--white-color);
         }
         .subscribe-form button{
         position: absolute;
         right: 0;
         background: var(--primary-color);
         padding:13px 20px;
         background: var(--primary-color);
         top: 0;
         }
         .subscribe-form button i{
         color:var(--white-color);
         font-size: 22px;
         transform: rotate(-6deg);
         }
         .copyright{
            padding-bottom: 2rem;
         }
         .copyright-area{
         background:var(--dark-gray-3);
         padding: 25px 0;
         }
         .copyright-text p{
         margin: 0;
         font-size: 14px;
         color: var(--white-color);
         }
         .copyright-text p a{
         color: var(--primary-color)
         }
         .footer-menu li{
         display: inline-block;
         margin-left: 20px;
         }
         .footer-menu li:hover a{
         color: var(--primary-color);
         }
         .footer-menu li a{
         font-size: 14px;
         color:var(--dark-gray-3);
         }
         .subscribe-text p{
            color: aqua;
         }
         @media(max-width:1030px){
         .md-30{
         margin-bottom: 30px;
         }
         .footer-text p,
         .footer-social-icon{
         margin-bottom: 30px;
         }
         }
</style>
 {{-- footer start  --}}
 <footer class="footer-section">
    <?php
    $data = get_master_details();
    ?>
    <div class="container">
       <div class="footer-cta py-5">
          <div class="row">
             <div class="col-sm-6 col-xl-4 mb-30">
                <div class="single-cta">
                   <i class="fas fa-map-marker"></i>
                   <div class="cta-text">
                      <h4>find-us</h4>
                      <span>{{$data->address}}</span>
                   </div>
                </div>
             </div>
             <div class="col-sm-6 col-xl-4 mb-30">
                <div class="single-cta">
                   <i class="fal fa-phone-square-alt "></i>
                   <div class="cta-text">
                      <h4>Call-Us</h4>
                      <span>{{$data->phone}}</span>
                   </div>
                </div>
             </div>
             <div class="col-sm-6 col-xl-4 mb-30">
                <div class="single-cta">
                   <i class="fas fa-envelope"></i>
                   <div class="cta-text">
                      <h4>Mail-Us</h4>
                      <span>{{$data->email}}</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="footer-content py-5">
          <div class="row">
             <div class="col-lg-4">
                <div class="footer-widget">
                   <div class="footer-logo">
                      <a href="#"><img src="{{ asset('logo/'.$data->logo) }}" height="50px" width="50px"  class="img-fluid"></a>
                   </div>
                   <div class="footer-text">
                      <p>{{$data->description}}</p>
                   </div>
                   <div class="footer-social-icon">
                      <samp> Follow Us</samp>
                      <ul>
                        {{-- @foreach ($socialmedia as $link) --}}
                        {{-- <li> --}}
                            {{-- <a href="{{ $link->facebook }}"><i class="fab fa-facebook-f facebook-bg"></i></a>
                        </li>
                        @endforeach
                      </ul> --}}
                      <a href="{{$data->facebook}}" target="_blank"><i class="fab fa-facebook-f facebook-bg"></i></a>
                      <a href="{{$data->twitter}}" target="_blank"><i class="fab fa-twitter twitter-bg"></i></a>
                      <a href="{{$data->instagram}}" target="_blank"><i class="fab fa-instagram-square instagram-bg"></i></a>

                   </div>
                </div>
             </div>
             <div class="col-lg-4">
                <div class="footer-widget">
                   <div class="footer-widget-heading">
                      <h3>Usefull</h3>
                   </div>
                   <ul>
                      <li><a href="#">home</a></li>
                      <li><a href="#">about</a></li>
                      <li><a href="#">contacts</a></li>
                      <li><a href="#">Upcoming event</a></li>
                      <li><a href="#">completed event</a></li>
                      <li><a href="#">Latest Event</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-4">
                <div class="footer-widget">
                   <div class="footer-widget-heading">
                      <h3>Subscribe</h3>
                   </div>
                   <div class="subscribe-text">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim harum error, repellendus hic iste iure eaque nemo illum pariatur ullam!</p>
                   </div>
                   <div class="subscribe-form">
                      <form action="#">
                         <input type="text" placeholder="Email Address">
                         <button><i class="fab fa-telegram-plane"></i></button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
       {{--
    </div>
    --}}
    <div class="copyright">
       <div class="container">
          <div class="row">
             <div class="col-xl-6 col-lg-6 text-center text-lg-left ">
                <div class="copyright-text">
                   <p>Copyright &copy; 2023, All right reserved <a href="#">Events</a></p>
                </div>
             </div>

             <div class="col-xl-6 col-lg-6 text-right d-none d-lg-block ">
                <div class="footer-menu">
                   <ul>
                      <li><a href="#">home</a></li>
                      <li><a href="#">trems</a></li>
                      <li><a href="#">privacy</a></li>
                      <li><a href="#">policy</a></li>
                      <li><a href="#">Contact</a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 {{-- footer end  --}}
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    @yield('js')
    {{-- <x-notify::notify />
        @notifyJs --}}
   </body>
</html>
