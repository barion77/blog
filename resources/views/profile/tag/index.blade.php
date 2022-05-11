@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Тэги</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-3">
            <a class="btn btn-primary" href="{{ route('admin.tag.create') }}">Добавить</a>
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
                      <th>Название тэга</th>
                      <th colspan="3" class="text-center">Действие</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                      <td>{{ $tag->id }}</td>
                      <td>{{ $tag->title }}</td>
                      <td class="text-center"><a href="{{ route('admin.tag.edit', $tag->id) }}"><i class="fas fa-pencil-alt"></i></a></td>
                      <td class="text-center"><a href="{{ route('admin.tag.show', $tag->id) }}"><i class="far fa-eye"></i></a></td>
                      <td>
                        <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash text-danger"></i></button>
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