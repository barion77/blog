@extends('profile.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Комментарии</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('profile.comment.update', $comment->id) }}" method="POST"
                            class="w-50">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="" cols="30" rows="10">{{ $comment->message }}</textarea>
                            </div>
                            @error('message')
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
