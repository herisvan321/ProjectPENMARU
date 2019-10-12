@extends('auth.template')
@section('mainadmin')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Brosur Pendaftaran</h4>
      <p>
          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tambah">New</button>
          <div class="modal" id="tambah">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Input Brosur Pendaftaran</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container-fluid">
                    <form class="" action="{{ url('/home/brosurpend')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      Title*
                      <input type="text" name="title" class="form-control">
                      pdf*
                      <input type="file" name="pdf" class="form-control">
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
                title
              </th>
              <th>
                Name file
              </th>
              <th>Action</th>
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
                {{ $t->title}}
              </td>
              <td>
                {{ $t->isi}}
              </td>
              <td>
                <form class="" action="{{ url('/home/brosurpend/'.$t->id)}}" method="post">
                  @csrf @method('delete')
                  <button type="submit" class="btn btn-danger"><i class="fa  fa-trash-o"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
