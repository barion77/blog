@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование категории</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.category.update', $category->id) }}" method="POST"
                            class="w-50">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $category->title }}"
                                    placeholder="Название категории">
                            </div>
                            @error('title')
                                <div class="text-danger mb-3">
                                    Это поле нужно заполнить.
                                </div>
                            @enderror
                            <input type="submit" class="btn btn-success" value="Обновить">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
