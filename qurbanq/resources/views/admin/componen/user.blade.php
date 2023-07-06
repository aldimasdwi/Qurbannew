@extends('admin.home')

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


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables history user</h1>
    <br>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables User Membeli Qurban</h6>
            <h6 class="m-0 font-weight-bold text-primary">Jumlah history : {{ $count }}</h6>

            <br>
            <form class="d-flex" role="search" action="/search" method="post">
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
                            <th>dipotong</th>
                            <th>dicaca</th>
                            <th>dibungkus</th>
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
                            <th>dipotong</th>
                            <th>dicaca</th>
                            <th>dibungkus</th>
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

                            <td>

                                <form action="/status/{{ $data->id }}" method="post">
                                    @csrf
                                    <select class="form-select" name="status" aria-label="Default select example" >
                                        <option value="pembayaran sedang di proses oleh admin">
                                            {{ $data->status }}
                                        </option>
                                        <option value="pembayaran sedang di proses oleh admin">
                                            pembayaran sedang di proses oleh admin
                                        </option>
                                        <option value="berhasil membayar sapi">
                                            berhasil membayar
                                            @if ($data->sapi)
                                            {{ $data->sapi }}
                                            @endif
                                            @if ($data->kambing)
                                            {{ $data->kambing }}
                                            @endif
                                        </option>

                                        @if ($data->sapi)
                                        <option value="gagal sapi">
                                            gagal {{ $data->sapi }}
                                        </option>
                                        @else
                                        <option value="gagal kambing">
                                            gagal {{ $data->kambing }}
                                        </option>
                                        @endif
                                    </select>
                                    <br>
                                    <input type="submit" class="btn btn-primary active" value="ubah">
                                </form>


                            </td>
                            <td>{{ $data->no_ref }}</td>
                            <td>{{ $data->waktu }}</td>
                            <td>{{ $data->dipotong }} % <br>
                                <a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dipotong{{ $data->id }}">Ubah</a></td>
                            <td>{{ $data->dicaca }} % <br>
                                <a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dicaca{{ $data->id }}">Ubah</a></td>
                            <td>{{ $data->dibungkus }} % <br>
                                <a class="btn btn-primary btn-update" data-toggle="modal" data-target="#dibungkus{{ $data->id }}">Ubah</a></td>
                        </tr>
                        <?php $a++;?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@foreach ($riwayat as $data)

<div class="sapi">
    <div class="dipotong">
        <div class="modal fade" id="dipotong{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $data->id }}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $data->id }}Label">ubah persenan dipotong</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dipotong/{{ $data->id }}" method="post">
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
        <div class="modal fade" id="dicaca{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $data->id }}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $data->id }}Label">ubah persenan dicacah</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dicaca/{{ $data->id }}" method="post">
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
        <div class="modal fade" id="dibungkus{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="updateModal{{ $data->id}}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="updateModal{{ $data->id}}Label">ubah persenan dibungkus</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/dibungkus/{{ $data->id }}" method="post">
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

@endforeach




<!-- /.container-fluid -->
@endsection
