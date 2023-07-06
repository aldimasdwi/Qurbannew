@extends('user.home')

@section('user')

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
        <p>Name: {{ session('ubah')->first()->name }}</p>
        <p>No HP: {{ session('ubah')->first()->no_hp }}</p>
        <p>Harga: {{ session('ubah')->first()->harga }}</p>
        <p>Email: {{ session('ubah')->first()->email }}</p>
        <p>Status: {{ session('ubah')->first()->status }}</p>

        @if (session('ubah')->first()->sapi)
            <p>Sapi: {{ session('ubah')->first()->sapi }}</p>
        @endif

        @if (session('ubah')->first()->kambing)
            <p>Kambing: {{ session('ubah')->first()->kambing }}</p>
        @endif

        <p>No_ref: {{ session('ubah')->first()->no_ref }}</p>
        <p>Waktu: {{ session('ubah')->first()->waktu }}</p>

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




@if(session('ubahh'))
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

        <div class="d-flex justify-content-between">


            <div class="chartt w-[500px] py-4" >
                <div class="d-flex justify-content-between"><div class="bar2" style="width: {{ session('ubahh')->dipotong }}%;"><p style="color: #ffffff"> {{ session('ubahh')->dipotong }}%</p></div></div>
                <div class="d-flex justify-content-between"><div class="bar3" style="width: {{ session('ubahh')->dicaca }}%;"><p style="color: #ffffff"> {{ session('ubahh')->dicaca }}%</p></div></div>
                <div class="d-flex justify-content-between"><div class="bar4" style="width: {{ session('ubahh')->dibungkus }}%;"><p style="color: #ffffff"> {{ session('ubahh')->dibungkus }}%</p></div></div>
                <div><br></div>
        <div style=" display:flex;">
            <div style="margin-left: 10px ; color: #fe3700">Dipotong:{{ session('ubahh')->dipotong }}%</div>
            <div style="margin-left: 10px ; color: #24690d">Dicacah:{{ session('ubahh')->dicaca }}%</div>
            <div style="margin-left: 10px ; color: #960e43">Dibungkus:{{ session('ubahh')->dibungkus }}%</div>
        </div>

        </div>
        </div>


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


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables history {{ Auth::User()->name }}</h1>
    <br>
    <p>jika ada membutuh kan bantuan atau bertanya dengan <p> admin segara hubungi admin Qurban Q <p> Wa : 08975756367 <p> email : aldimasdwi28@gmail.com</p>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables User Membeli Qurban</h6>
            <h6 class="m-0 font-weight-bold text-primary">Jumlah history : {{ $count }}</h6>

            <br>
            <form class="d-flex" role="search" action="/searchuser" method="post">
                @csrf
                <input class="form-control me-2" name="search" type="search" placeholder="untuk mencari lebih tepat search lah no ref nya" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>name</th>
                            <th>email</th>
                            <th>no_hp</th>
                            <th>harga</th>
                            <th>jenis qurban</th>
                            <th>status</th>
                            <th>no_ref</th>
                            <th>waktu</th>
                            <th>cekqurban</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>no</th>
                            <th>name</th>
                            <th>email</th>
                            <th>no_hp</th>
                            <th>harga</th>
                            <th>jenis qurban</th>
                            <th>status</th>
                            <th>no_ref</th>
                            <th>waktu</th>
                            <th>cekqurban</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $a = 1 ?>
                        @foreach ($riwayat as $data)
                        <tr>
                            <td>{{ $a }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td>{{ $data->harga }}</td>

                            @if ($data->sapi)
                            <td>{{ $data->sapi }}</td>
                            @endif

                            @if ($data->kambing)
                            <td>{{ $data->kambing }}</td>
                            @endif

                            <td>{{ $data->status }}</td>
                            <td>{{ $data->no_ref }}</td>
                            <td>{{ $data->waktu }}</td>
                            <td><a href="/cek/{{ $data->id }}" class="btn btn-primary">Cek</a></td>
                        </tr>
                        <?php $a++;?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection
