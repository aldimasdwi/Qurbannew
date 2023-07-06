@extends('admin.home')

@section('barang')

<!-- Begin Page Content -->
<div class="container-fluid">
    @if(session('sapi'))
  <div class="alert alert-success">
    {{ session('sapi') }}
  </div>
@endif

@if(session('hapus'))
<div class="alert alert-success">
  {{ session('hapus') }}
</div>
@endif

@if(session('harga'))
<div class="alert alert-success">
  {{ session('harga') }}
</div>
@endif

 @if(session('kambing'))
  <div class="alert alert-success">
    {{ session('kambing') }}
  </div>
@endif

@if(session('error'))
<div class="alert alert-success">
  {{ session('error') }}
</div>
@endif

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Qurban Q</h1>

    <br><br>
    <a  class="btn btn-primary" data-toggle="modal" data-target="#popup">Tambah Kurban</a>
    <a  class="btn btn-primary" data-toggle="modal" data-target="#harga">Ubah Harga</a>
    <br><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Qurban</h6>
            <h6 class="m-0 font-weight-bold text-primary">Jumlah Qurban : {{ $hasil }}</h6>
            <h6 class="m-0 font-weight-bold text-primary">Harga Sapi : Rp {{ $hargasapi }}</h6>
            <h6 class="m-0 font-weight-bold text-primary">Harga Kambing : Rp {{ $hargakambing }} </h6>

            <br>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>No_ref</th>
                            <th>Waktu</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>No_ref</th>
                            <th>Waktu</th>
                            <th>Hapus</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $a = 1 ?>
                        @foreach ($sapi as $sapii)

                        <tr>
                            <td>{{ $a }}</td>
                            <td>{{ $sapii->name }}</td>
                            <td>{{ $sapii->no_ref }}</td>
                            <td>{{ $sapii->waktu }}</td>
                            <td><a href="/hapussapi/{{ $sapii->id }}" class="d-flex justify-content-center btn btn-primary"><i class="bi bi-trash-fill"> </i> Hapus</a></td>
                        </tr>
                        <?php $a++ ?>
                        @endforeach

                        @foreach ($kambing as $kambingi)

                        <tr>
                            <td>{{ $a }}</td>
                            <td>{{ $kambingi->name }}</td>
                            <td>{{ $kambingi->no_ref }}</td>
                            <td>{{ $kambingi->waktu }}</td>
                            <td><a href="/hapuskambing/{{ $kambingi->id }}" class="d-flex justify-content-center btn btn-primary"><i class="bi bi-trash-fill"> </i> Hapus</a></td>
                        </tr>
                        <?php $a++ ?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>





<script>
    $(document).ready(function() {
      $('.btn-update').click(function() {
        var id = $(this).closest('tr').find('td:first').text();
        $('#inputID').val(id);
      });
    });
  </script>

<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popupLabel">Tambah Kurban</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/tambahqurban" method="post">
            @csrf
            <select class="form-select" name="name" aria-label="Default select example">
                <option selected>Pilih Qurban</option>
                <option value="kambing">Kambing</option>
                <option value="sapi">Sapi</option>
              </select>
              <div><br></div>
              <div>
                <button type="submit" class="btn btn-primary active">Tambah</button>
              </div>
              <br>
            </form>
        </div>
    </div>
  </div>
</div>

{{-- ++++++++++++++++++++++++++++++++++++++++++++++++++ --}}

<div class="modal fade" id="harga" tabindex="-1" role="dialog" aria-labelledby="popupLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="popupLabel">Ubah Harga Qurban</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/harga" method="post">
              @csrf
              <div>
                <input class="form-control" type="number" placeholder="Harga" name="harga" aria-label="default input example" required>
                <br>
                  <select class="form-select" name="name" aria-label="Default select example">
                      <option selected>Pilih Qurban</option>
                      <option value="kambing">Kambing</option>
                      <option value="sapi">Sapi</option>
                    </select>
              </div>
                <div><br></div>
                <div>
                  <button type="submit" class="btn btn-primary active">Tambah</button>
                </div>
                <br>
              </form>
          </div>
      </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- /.container-fluid -->
@endsection
