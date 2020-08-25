 <!-- Footer -->
  <footer id="footer" class="footer" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img height="170px" width="100%" class="mt-10 mb-20" alt="" src="{{ asset('assets/logo.png') }}">
       
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Recents events</h5>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="images/blog/ln1.jpg"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="images/blog/ln2.jpg"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="images/blog/ln3.jpg"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Links</h5>
            <ul class="list angle-double-right list-border">
               <li class="active"><a href="{{ route('home.path') }}">Home</a></li>
              <li><a href="{{ route('about.path') }}">Qui-sommes-nous?</a>
              <li><a href="{{ route('event.path') }}">Evenements</a>
              <li><a href="{{ route('gallery.path') }}">Galérie</a>
              <li><a href="{{ route('contact.path') }}">Contactez-nous</a>            
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
              <h5 class="widget-title line-bottom">Contact infos</h5>
              <div id="flickr-feed" class="clearfix">
                  <p>Toronto, Canada</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">+1 416-500-170</a></li>
              <li class="m-0 pl-10 pr-10"> 
                <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">johnvanier@datprodcanada.com</a> </li>
         
            </ul>
            <ul class="social-icons icon-dark icon-theme-colored icon-circled icon-sm mt-15">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0 sm-text-center">Copyright &copy;{{date('Y')}} all right reserved by DBZ</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<script src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>')}}
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
')}}<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
')}}<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
@include('flashy::message')

</body>