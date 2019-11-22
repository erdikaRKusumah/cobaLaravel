@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">
                Hello, MABA
            </h1>
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla cum consectetur enim qui ut sequi, rerum eveniet fugiat iure molestias architecto nostrum quibusdam officiis beatae sapiente eligendi perferendis totam consequatur!</P>
        </div>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  kLIK ME
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAPI BOONG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div>
</div>

@endsection