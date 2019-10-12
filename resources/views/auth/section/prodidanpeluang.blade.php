@extends('auth.template')
@section('mainadmin')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Prodi dan Peluang</h4>
      <p>
          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tambah">New</button>
          <div class="modal" id="tambah">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Input Prodi dan peluang</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container-fluid">
                    <form class="" action="{{ url('/home/prodidanpeluang')}}" method="post">
                      @csrf
                      nama Prodi*
                      <input type="text" name="namaprodi" class="form-control">
                      Peluang kerja
                      <textarea name="isi" rows="8" cols="80" class="ckeditor"></textarea>
                      <p><br>
                          <input type="submit" value="simpan!" class="btn btn-outline-primary">
                      </p>
                    </form>
                  </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>
      </p>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                No
              </th>
              <th>
                Nama Prodi
              </th>
              <th>
                Peluang kerja
              </th>

            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach($tampil as $t)
            <tr>
              <td class="py-1">
              {{ $no++}}
              </td>
              <td>
                {{ $t->namaprodi }}
              </td>
              <td>
                {!! $t->peluangkerja!!}
              </td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
