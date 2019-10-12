@extends('auth.template')
@section('mainadmin')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Data Terdaftar</h4>
      <p>
          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tambah">New</button>
          <div class="modal" id="tambah">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Input data Pendaftaran</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container-fluid">
                    <form class="" action="{{ url('/home/dterftar')}}" method="post">
                      @csrf
                      Title*
                      <input type="text" name="title" class="form-control">
                      Img*
                      <input type="file" name="img" class="form-control">
                      <p>
                          Active
                          <input type="radio"  name="aktive"  value="Y" checked> Y
                          <input type="radio"  name="aktive"  value="N" > N
                      </p>
                      <p>
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
                User
              </th>
              <th>
                First name
              </th>
              <th>
                Progress
              </th>
              <th>
                Amount
              </th>
              <th>
                Deadline
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="py-1">
                <img src="../../images/faces-clipart/pic-1.png" alt="image" />
              </td>
              <td>
                Herman Beck
              </td>
              <td>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td>
                $ 77.99
              </td>
              <td>
                May 15, 2015
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
