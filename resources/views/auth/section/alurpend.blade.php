@extends('auth.template')
@section('mainadmin')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">alur Pendaftaran</h4>
      <p>
          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tambah">New</button>
          <div class="modal" id="tambah">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Input poendaftaran</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container-fluid">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#home">text</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#menu1">PDF</a>
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                          <h3>Text</h3>
                          <p>
                            <form class="" action="{{ url('/home/alurpend')}}" method="post">
                              @csrf
                              Title*
                              <input type="text" name="title" class="form-control">
                              isi
                              <textarea name="isi" rows="8" cols="80" class="ckeditor" id="ckeditor"></textarea>
                              <p><br>
                                  <input type="submit" value="simpan!" class="btn btn-outline-primary">
                              </p>
                            </form>
                          </p>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                          <h3>PDF</h3>
                          <p><form class="" action="{{ url('/home/alurpend')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            Title*
                            <input type="text" name="title" class="form-control">

                            pdf*
                            <input type="file" name="file" class="form-control">
                            <p> <br>
                                <input type="submit" value="simpan!" class="btn btn-outline-primary">
                            </p>
                          </form></p>
                        </div>
                      </div>

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
                Title
              </th>
              <th>
                Status
              </th>
              <th>
                Active
              </th>
              <th>
                Action
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
                {{ $t->title}}
              </td>
              <td>
                {{ $t->status}}
              </td>
              <td>
                {{ $t->active}}
              </td>
              <td>
                <form class="" action="{{ url('/home/alurpend/'.$t->id)}}" method="post">
                  @csrf @method('delete')
                  <button type="submit" class="btn btn-danger"><i class="fa  fa-trash-o"></i></button>
                  <a href="#" class="btn btn-info"><i class="fa  fa-edit"></i></a>
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
