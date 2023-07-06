@extends('admin.home')

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
         {{ session('ubah') }}
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
                            <div style="margin-left: 10px ; color: #08223e">Tersedia:{{ $jumlah_sapi }}<a href="/barang" class="btn btn-warning btn-update" >Tambah</a></div>
                            <div style="margin-left: 10px ; color: #fe3700">Dipotong:{{ $jumlah_dipotong }}%<a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dipotong{{ $jumlah_dipotong }}"><i class="bi bi-file-plus"></i> Ubah</a></div>
                            <div style="margin-left: 10px ; color: #24690d">Dicacah:{{ $jumlah_dicaca }}%<a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dicaca{{ $jumlah_dicaca }}"><i class="bi bi-file-plus"></i> Ubah</a></div>
                            <div style="margin-left: 10px ; color: #960e43">Dibungkus:{{ $jumlah_dibungkus }}%<a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dibungkus{{ $jumlah_dibungkus }}"><i class="bi bi-file-plus"></i> Ubah</a></div>
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
                        <div style="margin-left: 10px ; color: #08223e">Tersedia:{{ $jumlah_kambingg }}<a href="/barang" class="btn btn-warning btn-update" >Tambah</a></div>
                        <div style="margin-left: 10px ; color: #fe3700">Dipotong:{{ $jumlah_dipotongg }}%<a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dipotongg{{ $jumlah_dipotongg }}"><i class="bi bi-file-plus"></i> Ubah</a></div>
                        <div style="margin-left: 10px ; color: #24690d">Dicacah:{{ $jumlah_dicacaa }}%<a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dicacaa{{ $jumlah_dicacaa }}"><i class="bi bi-file-plus"></i> Ubah</a></div>
                        <div style="margin-left: 10px ; color: #960e43">Dibungkus:{{ $jumlah_dibungkuss }}%<a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dibungkuss{{ $jumlah_dibungkuss }}"><i class="bi bi-file-plus"></i> Ubah</a></div>
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
    <div class="dipotong">
        <div class="modal fade" id="dipotong{{ $jumlah_dipotong }}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $jumlah_dipotong }}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $jumlah_dipotong }}Label">ubah persenan dipotong</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dipotong" method="post">
                      @csrf
                      <div class="form-outline" style="width: 22rem;">
                        <label class="form-label" for="form1">max 100%</label>
                        <input type="number" name="dipotong" id="form1" class="form-control form-icon-trailing" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary active">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="dicaca">
        <div class="modal fade" id="dicaca{{ $jumlah_dicaca }}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $jumlah_dicaca }}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $jumlah_dicaca }}Label">ubah persenan dicacah</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dicaca" method="post">
                      @csrf
                      <div class="form-outline" style="width: 22rem;">
                        <label class="form-label" for="form1">max 100%</label>
                        <input type="number" name="dicaca" id="form1" class="form-control form-icon-trailing" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary active">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="dibungkus">
        <div class="modal fade" id="dibungkus{{ $jumlah_dibungkus }}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $jumlah_dibungkus }}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $jumlah_dibungkus }}Label">ubah persenan dibungkus</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dibungkus" method="post">
                      @csrf
                      <div class="form-outline" style="width: 22rem;">
                        <label class="form-label" for="form1">max 100%</label>
                        <input type="number" name="dibungkus" id="form1" class="form-control form-icon-trailing" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary active">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

<div class="kambing">

    <div class="dipotong">
        <div class="modal fade" id="dipotongg{{ $jumlah_dipotongg }}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $jumlah_dipotongg }}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $jumlah_dipotongg }}Label">ubah persenan dipotong</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dipotongg" method="post">
                      @csrf
                      <div class="form-outline" style="width: 22rem;">
                        <label class="form-label" for="form1">max 100%</label>
                        <input type="number" name="dipotongg" id="form1" class="form-control form-icon-trailing" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary active">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="dicaca">
        <div class="modal fade" id="dicacaa{{ $jumlah_dicacaa }}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $jumlah_dicacaa }}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $jumlah_dicacaa }}Label">ubah persenan dicacah</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dicacaa" method="post">
                      @csrf
                      <div class="form-outline" style="width: 22rem;">
                        <label class="form-label" for="form1">max 100%</label>
                        <input type="number" name="dicacaa" id="form1" class="form-control form-icon-trailing" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary active">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>

    <div class="dibungkus">
        <div class="modal fade" id="dibungkuss{{ $jumlah_dibungkuss }}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $jumlah_dibungkuss }}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $jumlah_dibungkuss }}Label">ubah persenan dibungkus</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dibungkuss" method="post">
                      @csrf
                      <div class="form-outline" style="width: 22rem;">
                        <label class="form-label" for="form1">max 100%</label>
                        <input type="number" name="dibungkuss" id="form1" class="form-control form-icon-trailing" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary active">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>



<!-- /.container-fluid -->
@endsection
