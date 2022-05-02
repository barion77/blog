@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление категории</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.user.store') }}" method="POST" class="w-50">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Имя">
                            </div>
                            @error('name')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            @error('email')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Пароль">
                            </div>
                            @error('password')
                                <div class="text-danger mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="submit" class="btn btn-success" value="Добавить">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
