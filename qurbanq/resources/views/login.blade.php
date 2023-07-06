@if(session('ubah'))
 <div id="popupTrigger" data-toggle="modal" data-target="#exampleModal"></div>

 <!-- Create the popup modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Gagal Login</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        {{ session('ubah')}}
        <br><br>
        <hr>
        jika belum memiliki akun yuk <a href="/register"><b>Register</b></a> dulu
    </div>

       <div class="modal-footer">
         <button type="button" class="btn btn-secondary active" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>

 <!-- Add JavaScript code to trigger the popup on page load -->
 <script>
   document.addEventListener('DOMContentLoaded', function() {
     document.getElementById('popupTrigger').click();
   });
 </script>
@endif


<!DOCTYPE html>
<html lang="en">
<head>

     <title>Qurban Q</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="b/css/bootstrap.min.css">
     <link rel="stylesheet" href="b/css/font-awesome.min.css">
     <link rel="stylesheet" href="b/css/aos.css">
     <link rel="stylesheet" href="b/css/owl.carousel.min.css">
     <link rel="stylesheet" href="b/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="b/css/templatemo-digital-trend.css">

     <link rel="icon" type="image/png" href="img/cow.png">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
          <a class="navbar-brand" href="/">
              Qurban <b class="text-yellow-500">Q</b>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <p> “Tidak ada amalan anak cucu Adam pada hari raya qurban yang lebih disukai Allah melebihi dari mengucurkan darah (menyembelih hewan qurban), sesungguhnya pada hari kiamat nanti hewan-hewan tersebut akan datang lengkap dengan tanduk-tanduknya, kuku-kukunya, dan bulu- bulunya. Sesungguhnya darahnya akan sampai kepada Allah –sebagai qurban– di manapun hewan itu disembelih sebelum darahnya sampai ke tanah, maka ikhlaskanlah menyembelihnya.”

                        (HR. Ibn Majah dan Tirmidzi) </p>
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">

                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->

                      <form action="/login" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        @csrf
                        <div class="">
                          <div class="col-lg-12 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>
                          <br>
                          <div class="col-lg-12 col-12">
                            <input type="password" class="form-control" name="password" placeholder="password">
                          </div>
                          <br>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Login</button>
                            <p class="text-center">belum memiliki akun <a href="/register">Register</a></p>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>


     <footer class="site-footer">
        <div class="container">
          <div class="row">

            <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
              <h1 class="text-white" data-aos="fade-up" data-aos-delay="100"> <strong> QURBAN Q</strong> </h1>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
              <h4 class="my-4">Contact Info</h4>

              <p class="mb-1">
                <i class="fa fa-phone mr-2 footer-icon"></i>
                +62890464535
              </p>

              <p class="mb-1">
                  <i class="fa fa-envelope mr-2 footer-icon"></i>
                  aldimasdwi28@gmail.com
              </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
              <h4 class="my-4">Pondok</h4>

              <p class="mb-1">
                <i class="fa fa-home mr-2 footer-icon"></i>
                Desa Tirtohargo dsn Kalangan, Rt/Rw 01/00, Gegunung, Tirtohargo, Kec. Kretek, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55772
              </p>
            </div>


          </div>
        </div>
      </footer>


     <!-- SCRIPTS -->
     <script src="b/js/jquery.min.js"></script>
     <script src="b/js/bootstrap.min.js"></script>
     <script src="b/js/aos.js"></script>
     <script src="b/js/owl.carousel.min.js"></script>
     <script src="b/js/custom.js"></script>

</body>
</html>
