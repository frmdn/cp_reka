
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

 <title>Sistem</title>
<!--

-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Tooplate">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.png') }}"/>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::to('assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ URL::to('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ URL::to('assets/css/owl.theme.default.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ URL::to('assets/css/tooplate-style.css') }}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

 <!-- PRE LOADER -->
 <section class="preloader">
  <div class="spinner">

   <span class="spinner-rotate"></span>

 </div>
</section>


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation" >
  <div class="container">

   <div class="navbar-header">
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
     <span class="icon icon-bar"></span>
     <span class="icon icon-bar"></span>
     <span class="icon icon-bar"></span>
   </button>

   <!-- lOGO TEXT HERE -->
   <a href="index.html" class="navbar-brand">
     <img src="/{{ $setting->logo }}" width="225px" height="45px"></a>
   </div>


   <!-- MENU LINKS -->
   <div class="collapse navbar-collapse">
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="dropdown" class="smoothScroll">Home</a></li>

                               <!--
                               <li class="dropdown">
                                   <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                                   <span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                     <li><a href="#">Page 1-1</a></li>
                                     <li><a href="#">Page 1-2</a></li>
                                     <li><a href="#">Page 1-3</a></li>
                                   </ul>
                                </li>
                              -->
                              @foreach($data as $hal )
                              @if ($hal->halaman == 1)
                              <li><a href="/halaman/{{ $hal->post_id }}" class="smoothScroll">{{ $hal->title }}</a></li>
                              @elseif ($hal->halaman == 2)
                              <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ $hal->title }}<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                 <?php 
                                 $dx = \App\Page::where('sub_page', '=', $hal->sub_page)->where('halaman','=',3)->get();
                                 foreach ($dx as $val) {
                                 echo "<li><a href='/halaman/".$hal->post_id."'>".$val->title."</a></li>";
                               }
                               ?>
                             </ul>
                           </li>
                           @endif
                           @endforeach
                               <!--@foreach($data as $list )
                         <li><a href="#about" class="smoothScroll">{{ $list->title }}</a></li>
                               @endforeach
                          
                          <li><a href="#team" class="smoothScroll">Product</a></li>
                          <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                        -->
                      </ul>
                    </div>

                  </div>
                </section>


                <!-- HOME -->
                <section id="home" class="slider" data-stellar-background-ratio="0.5" >
                  <div class="container" >
                   <div class="row">

                    <div class="owl-carousel owl-theme">
                     @foreach($post1 as $head)
                     <div style="item">
                      <img src="{{ URL::asset('assets/images') }}/{{$head->pic }}" height="400px;">   
                     </div>
                     @endforeach

            <!--
                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Pelayanan Customer Services untuk Program Jangka Panjang</h3>
                                        <h1>Best Customer Services</h1>

                                   </div>
                              </div>
                         </div>
            
                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Product IT terbaik dan terlengkap</h3>
                                        <h1>Best Products</h1>
                                   </div>
                              </div>
                         </div>
             
                       -->
                     </div>
                   </div>
                 </div>
               </section>


               <div class="container">
                <div class="row" >

                  @foreach($post2 as $subpost)
                  <div class="col-md-4 col-sm-4">
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                     <div class="footer-thumb">
                      <h3><i class="fa fa-registered" style="color:red;"></i> {{ $subpost->title }}</h3><br/>
                      <p>{{ $subpost->body }}</p>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>


            <!-- FOOTER -->
            <footer data-stellar-background-ratio="5" >
              <div class="container">
               <div class="row">

                <div class="col-md-4 col-sm-4">
                 <div class="footer-thumb">
                  <h4 class="wow fadeInUp" data-wow-delay="0.4s">Company</h4>
                  <p>{{ $setting->company }}</p>

                  <div class="contact-info">
                   <p><i class="fa fa-phone"></i> {{ $setting->hp }}</p>
                   <p><i class="fa fa-building"></i> {{ $setting->phone }}</p>
                   <p><i class="fa fa-envelope-o"></i> {{ $setting->email }}<a href="#"></a></p>
                   <p><i class="fa fa-briefcase"></i> {{ $setting->name }}<a href="#"></a></p>
                 </div>
               </div>
             </div>

             <div class="col-md-4 col-sm-4">
               <div class="footer-thumb">
                <h4 class="wow fadeInUp" data-wow-delay="0.4s">Address</h4>
                <div class="latest-stories">
                 <p>{{ $setting->address }}</p>
               </div>
             </div>
           </div>

           <div class="col-md-4 col-sm-4">
             <div class="footer-thumb">
              <div class="opening-hours">
               <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
               <p><span>Jam 08.00 Pagi - 17.00 Malam</span></p>
               <p>Sunday <span>Closed</span></p>
             </div>

             <ul class="social-icon">
               <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
               <li><a href="#" class="fa fa-twitter"></a></li>
               <li><a href="#" class="fa fa-instagram"></a></li>
             </ul>
           </div>
         </div>

         <!-- GOOGLE MAP -->
         <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
          -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.488400141366!2d124.85212231403322!3d1.4794010615593736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32877531d5789deb%3A0x217a7b821396a069!2sJl.+Daan+Mogot+No.33%2C+Tikala+Baru%2C+Tikala%2C+Kota+Manado%2C+Sulawesi+Utara!5e0!3m2!1sid!2sid!4v1529706525369" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>



        <div class="col-md-12 col-sm-12 border-top">
         <div class="col-md-4 col-sm-6">
          <div class="copyright-text">
           <p>Copyright &copy; 2018 | Reka Sistem Teknologi

           </p>
         </div>
       </div>
       <div class="col-md-6 col-sm-6">
        <div class="footer-link">
         <a href="#">Laboratory Tests</a>
         <a href="#">Departments</a>
         <a href="#">Insurance Policy</a>
         <a href="#">Careers</a>
       </div>
     </div>
     <div class="col-md-2 col-sm-2 text-align-center">
      <div class="angle-up-btn">
        <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>

</div>
</div>
</footer>

<!-- SCRIPTS -->
<script src="{{ URL::to('assets/js/jquery.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ URL::to('assets/js/wow.min.js') }}"></script>
<script src="{{ URL::to('assets/js/smoothscroll.js') }}"></script>
<script src="{{ URL::to('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::to('assets/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
<script src="https://unpkg.com/axios@0.18.0/dist/axios.min.js"></script>
<script>
  var vm = new Vue({
    el: '#menuApp',
    data: {
      menuListHtml: '',
    },
    mounted: function() {
      this.loadMenu();
      this.loadSettings();
    },
    methods: {
      loadMenu: function() {
        axios({
          method: 'post',
          url: 'api/page/list.php'
        }).then(function(response) {
          vm.menuListHtml = response.data;
        }).catch(function(error) {
          console.log(error);
        });
      },
      loadSettings: function() {
        axios({
          method: 'post',
          url: 'api/setting/read.php'
        }).then(function(response) {
          var data = response.data["data"][0];
          vm.menuListHtml = vm.menuListHtml ;
        }).catch(function(error) {
          console.log(error);
        });
      }
    }
  });



  var hm = new Vue({
    el: '#headerApp',
    data: {
      name: '',
      hp:'',
      nmrkantor:'',
      email:'',
      waktu:''
    },
    mounted: function() {
      this.loadSettings();
    },
    methods: {
      loadSettings: function() {
        axios({
          method: 'post',
          url: 'api/setting/read.php'
        }).then(function(response) {
          var data = response.data["data"][0];
          hm.name = data.name;
          hm.des = response.data["data"][0]["des"];
          hm.hp = response.data["data"][0]["hp"];
          hm.nmrkantor = response.data["data"][0]["nmrkantor"];
          hm.email = response.data["data"][0]["email"];
          hm.waktu = response.data["data"][0]["waktu"];
        }).catch(function(error) {
          console.log(error);
        });
      }
    }
  });

  var mm = new Vue({
    el: '#midApp',
    data: {
      muncul: ''
    },
    mounted: function() {
      this.loadSettings();
    },
    methods: {
      loadSettings: function() {
        axios({
          method: 'post',
          url: 'api/post/read_cont.php'
        }).then(function(response) {
          mm.muncul = response.data["data"];
        }).catch(function(error) {
          console.log(error);
        });
      }
    }
  });

  var fm = new Vue({
    el: '#footApp',
    data: {
      name: '',
      hp:'',
      des:'',
      nmrkantor:'',
      email:'',
      waktu:'',
      address:''
    },
    mounted: function() {
      this.loadSettings();
    },
    methods: {
      loadSettings: function() {
        axios({
          method: 'post',
          url: 'api/setting/read.php'
        }).then(function(response) {
          var data = response.data["data"][0];
          fm.name = data.name;
          fm.des = response.data["data"][0]["des"];
          fm.hp = response.data["data"][0]["hp"];
          fm.nmrkantor = response.data["data"][0]["nmrkantor"];
          fm.email = response.data["data"][0]["email"];
          fm.waktu = response.data["data"][0]["waktu"];
          fm.address = response.data["data"][0]["address"];
        }).catch(function(error) {
          console.log(error);
        });
      }
    }
  });

  function openLink(id, title) {
    localStorage.setItem("pageid", id);
    localStorage.setItem("title", title);
    window.location.href = "page.html";
  }
</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5b4ed16491379020b95ef76b/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>

