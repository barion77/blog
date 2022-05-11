@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-3">
                        <a class="btn btn-primary" href="{{ route('admin.user.create') }}">Добавить</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Имя</th>
                                            <th>Email</th>
                                            <th>Роль</th>
                                            <th colspan="3" class="text-center">Действие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $roles[$user->role] }}</td>
                                                <td class="text-center"><a
                                                        href="{{ route('admin.user.edit', $user->id) }}"><i
                                                            class="fas fa-pencil-alt"></i></a></td>
                                                <td class="text-center"><a
                                                        href="{{ route('admin.user.show', $user->id) }}"><i
                                                            class="far fa-eye"></i></a></td>
                                                <td>
                                                    <form action="{{ route('admin.user.delete', $user->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="border-0 bg-transparent"><i
                                                                class="fas fa-trash text-danger"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
