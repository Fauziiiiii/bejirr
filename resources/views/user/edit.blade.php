@extends('layout.app')

@section('content')
<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Edit User</h4>
        <p class="card-description">
            Basic form layout
        </p>
        <form class="forms-sample" method="post" action="{{'/user/' . $data->id}}">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" value="">
            </div>
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="">
            </div>
            <div class="form-group">
            <label for="password">Password Baru</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="">
            </div>
            <div class="form-group">
                <label for="role">Pilih Role User 2</label><br>
                <select class="form-select" name="role" id="role">
                    <option value=""></option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <a href="/user" class="btn btn-light">Cancel</a>
        </form>
        </div>
    </div>
    </div>
    @endsection
