@extends('user.home')

@section('index')
 <!-- Begin Page Content -->

 @if(session('ubah'))
 <div id="popupTrigger" data-toggle="modal" data-target="#exampleModal"></div>

 <!-- Create the popup modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Success</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
        <p>Name: {{ session('ubah')->name }}</p>
        <p>No HP: {{ session('ubah')->no_hp }}</p>
        <p>Harga: {{ session('ubah')->harga }}</p>
        <p>Email: {{ session('ubah')->email }}</p>
        <p>Status: {{ session('ubah')->status }}</p>

        @if (session('ubah')->sapi)
            <p>Sapi: {{ session('ubah')->sapi }}</p>
        @endif

        @if (session('ubah')->kambing)
            <p>Kambing: {{ session('ubah')->kambing }}</p>
        @endif

        <p>No_ref: {{ session('ubah')->no_ref }}</p>
        <p>Waktu: {{ session('ubah')->waktu }}</p>
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




 <div class="container-fluid">

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4 ml-5">
            <div class="card border-left-success shadow h-100 py-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Hewan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_hewan }} Ekor</div>
                        </div>
                        <div class="col-auto">
                            <img src="c//img/double-up-sign-circle-svgrepo-com.svg" alt="/" class="w-[110px]">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example sapi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sapi
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $jumlah_sapi }} Ekor</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <img src="c//img/cow-svgrepo-icon.svg" alt="" class="w-[140px]">
                        </div>
                        <div>
                            <a class="btn btn-primary btn-update" data-toggle="modal" data-target="#sapi">Beli Qurban</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example kambing -->
        <div class="col-xl-3 col-md-6 mb-4 mr-3">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kambing</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_kambingg }} Ekor</div>
                        </div>
                        <div class="col-auto">
                            <img src="c//img/iconfinder-goat-4591892_122119.png" alt="kambing" class="w-[140px]">
                        </div>
                        <div>
                            <a class="btn btn-primary btn-update" data-toggle="modal" data-target="#kambing{{ $jumlah_kambingg }}">Beli Qurban</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Pie Chart -->
        <div class="col-xl-10 col-lg-5 ml-5">
            <div class="card shadow mb-6 ">
            <div class="d-flex justify-content-between">


                    <div class="chart w-[500px] py-4" >
                        <div class="d-flex justify-content-between"><div class="bar" style="width: {{ $jumlah_terjual }}%;"><p style="color: #ffffff"> {{ $jumlah_terjual }}% </p></div></div>
                        <div class="d-flex justify-content-between"><div class="bar1" style="width: {{ $jumlah_sapi }}%;"><p style="color: #ffffff"> {{ $jumlah_sapi }}%</p></div></div>
                        <div class="d-flex justify-content-between"><div class="bar2" style="width: {{ $jumlah_dipotong }}%;"><p style="color: #ffffff"> {{ $jumlah_dipotong }}%</p></div></div>
                        <div class="d-flex justify-content-between"><div class="bar3" style="width: {{ $jumlah_dicaca }}%;"><p style="color: #ffffff"> {{ $jumlah_dicaca }}%</p></div></div>
                        <div class="d-flex justify-content-between"><div class="bar4" style="width: {{ $jumlah_dibungkus }}%;"><p style="color: #ffffff"> {{ $jumlah_dibungkus }}%</p></div></div>
                        <div><br></div>
                        <div style=" display:flex;">
                            <div style="margin-left: 10px ; color: #007bff">Terjual:{{ $jumlah_terjual }}</div>
                            <div style="margin-left: 10px ; color: #08223e">Tersedia:{{ $jumlah_sapi }}</div>
                            <div style="margin-left: 10px ; color: #fe3700">Dipotong:{{ $jumlah_dipotong }}%</div>
                            <div style="margin-left: 10px ; color: #24690d">Dicacah:{{ $jumlah_dicaca }}%</div>
                            <div style="margin-left: 10px ; color: #960e43">Dibungkus:{{ $jumlah_dibungkus }}%</div>
                        </div>

                    </div>
                        <div class="mr-6 mb-6">
                            <img src="c/img/458cow_100744.svg" alt="" class="w-[170px]">
                        </div>
                    </div>
                </div>
        </div>



    </div>
    <div class="row">

        <!-- Pie Chart -->
        <div class="col-xl-10 col-lg-5 ml-5">
            <div class="card shadow mb-4 ">
            <div class="d-flex justify-content-between">


                <div class="chart w-[500px] py-4" >
                    <div class="d-flex justify-content-between"><div class="bar" style="width: {{ $jumlah_terjuall }}%;"><p style="color: #ffffff"> {{ $jumlah_terjuall }}% </p></div></div>
                    <div class="d-flex justify-content-between"><div class="bar1" style="width: {{ $jumlah_kambingg }}%;"><p style="color: #ffffff"> {{ $jumlah_kambingg }}%</p></div></div>
                    <div class="d-flex justify-content-between"><div class="bar2" style="width: {{ $jumlah_dipotongg }}%;"><p style="color: #ffffff"> {{ $jumlah_dipotongg }}%</p></div></div>
                    <div class="d-flex justify-content-between"><div class="bar3" style="width: {{ $jumlah_dicacaa }}%;"><p style="color: #ffffff"> {{ $jumlah_dicacaa }}%</p></div></div>
                    <div class="d-flex justify-content-between"><div class="bar4" style="width: {{ $jumlah_dibungkuss }}%;"><p style="color: #ffffff"> {{ $jumlah_dibungkuss }}%</p></div></div>
                    <div><br></div>
                    <div style=" display:flex;">
                        <div style="margin-left: 10px ; color: #007bff">Terjual:{{ $jumlah_terjuall }}</div>
                        <div style="margin-left: 10px ; color: #08223e">Tersedia:{{ $jumlah_kambingg }}</div>
                        <div style="margin-left: 10px ; color: #fe3700">Dipotong:{{ $jumlah_dipotongg }}%</div>
                        <div style="margin-left: 10px ; color: #24690d">Dicacah:{{ $jumlah_dicacaa }}%</div>
                        <div style="margin-left: 10px ; color: #960e43">Dibungkus:{{ $jumlah_dibungkuss }}%</div>
                    </div>

                </div>

                        <div class="mr-7 py-5">
                            <img src="c/img/Goat.svg" alt="" class="w-[150px]" style="transform: scaleX(-1);">
                        </div>
                    </div>
                </div>
        </div>



    </div>



</div>

<div class="sapi">
    <div class="modal fade" id="sapi" tabindex="-1" role="dialog" aria-labelledby="sapi{{ $jumlah_sapi }}Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="sapi{{ $jumlah_sapi }}Label">Qurban Q</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/belisapi" method="post">
                  @csrf
                <div class="form-group">
                    <div>
                        <p>hai {{ Auth::user()->name }} yuk beli qurban di Qurabn Q</p>
                    </div>
                    <br>
                    <div>
                        <h6>harga sapi </h6>
                        <h1><b>Rp{{ $hargasapi }}</b></h1>
                        <br>
                        <h6>yuk isi data ini</h6>
                        <input class="form-control" type="text" placeholder="name" value="{{ $hargasapi }}" name="harga" aria-label="default input example" hidden><br>
                        <input class="form-control" type="text" placeholder="name" name="name" aria-label="default input example"><br>
                        <input class="form-control" type="email" placeholder="email" name="email" aria-label="default input example"><br>
                        <input class="form-control" type="number" placeholder="no hp" name="no_hp" aria-label="default input example"><br>
                        <input class="form-control" type="text" name="status" value="pembayaran sedang di peroses oleh admin" aria-label="default input example" hidden><br>
                        <input class="form-control" type="text" name="sapi" value="sapi" aria-label="default input example" hidden><br>
                        <input class="form-control" type="text" name="id_user" value="{{ Auth::User()->id }}" aria-label="default input example" hidden><br>
                    </div>

                    <div>
                        <p>hai {{ Auth::user()->name }} kami dari Qurban Q cuman memiliki 1 metode pembayaran yaitu bsi</p>
                        <br>
                        <img src="img/atm.jpg" alt="">
                        <br>
                        <p>no rekening : 112 234 515 536 21</p>
                        <p>nama : Qurban Q</p>
                        <p>jika sudah terbayar kan selamat {{ Auth::user()->name }} kamu sudah memebeli satu hewan Qurban dan membantu anak-anak penjuang Quran..</p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary active">Selesai</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="kambing">
    <div class="modal fade" id="kambing{{ $jumlah_kambingg }}" tabindex="-1" role="dialog" aria-labelledby="sapi{{ $jumlah_kambingg }}Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="sapi{{ $jumlah_kambingg }}Label">Qurban Q</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/belikambing" method="post">
                  @csrf
                <div class="form-group">
                    <div>
                        <p>hai {{ Auth::user()->name }} yuk beli qurban di Qurabn Q</p>
                    </div>
                    <br>
                    <div>
                        <h6>harga kambing </h6>
                        <h1><b>Rp{{ $hargakambing }}</b></h1>
                        <input class="form-control" type="text" name="harga" value="{{ $hargakambing }}" aria-label="default input example" hidden><br>

                        <h6>yuk isi data ini</h6>
                        <input class="form-control" type="text" placeholder="name" name="name" aria-label="default input example"><br>
                        <input class="form-control" type="email" placeholder="email" name="email" aria-label="default input example"><br>
                        <input class="form-control" type="number" placeholder="no hp" name="no_hp" aria-label="default input example"><br>
                        <input class="form-control" type="text" name="status" value="pembayaran sedang di peroses oleh admin" aria-label="default input example" hidden><br>
                        <input class="form-control" type="text" name="kambing" value="kambing" aria-label="default input example" hidden><br>
                        <input class="form-control" type="text" name="id_user" value="{{ Auth::User()->id }}" aria-label="default input example" hidden><br>
                    </div>

                    <div>
                        <p>hai {{ Auth::user()->name }} kami dari Qurban Q cuman memiliki 1 metode pembayaran yaitu bsi</p>
                        <br>
                        <img src="img/atm.jpg" alt="">
                        <br>
                        <p>no rekening : 112 234 515 536 21</p>
                        <p>nama : Qurban Q</p>
                        <p>jika sudah terbayar kan selamat {{ Auth::user()->name }} kamu sudah memebeli satu hewan Qurban dan membantu anak-anak penjuang Quran..</p>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary active">Selesai</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>





  @endsection
