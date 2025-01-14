@extends('layouts.content')

@section('title', 'Tambah Admin')

@section('content')

    <div class="card my-3">
        <div class="card-body">
            <form action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">      
                        <div class="form-group">
                            <label for="email">Email Admin</label>
                            <input type="text" class="form-control" name="email" id="email"
                                value="{{ old('email') }}" placeholder="....">
                            @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>                  
                        <div class="form-group">
                            <label for="name">Nama Admin</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('name') }}" placeholder="....">
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username Admin</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="....">{{ old('username') }}</textarea>
                            @error('username')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="....">{{ old('password') }}</textarea>
                            @error('password')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <a href="{{ route('admins.index') }}" class="btn btn-secondary my-3">
                            <span class="text">Kembali</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
