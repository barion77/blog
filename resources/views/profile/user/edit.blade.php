@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST"
                            class="w-50">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                                    placeholder="Имя">
                                @error('name')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                    placeholder="Email">
                                @error('email')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите роль</label>
                                <select name="role" class="form-control">
                                    @foreach ($roles as $id => $role)
                                        <option value="{{ $id }}"
                                            {{ $id == $user->role ? ' selected' : '' }}>
                                            {{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="text-danger mb-3">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success" value="Обновить">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
