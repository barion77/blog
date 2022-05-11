@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редактирование тэга</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">  
            <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST" class="w-50">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $tag->title }}" placeholder="Название тэга">
              </div>
              @error('title')
                  <div class="alert alert-danger">
                    Это поле нужно заполнить.
                  </div>
              @enderror
              <input type="submit" class="btn btn-success" value="Обновить">
            </form>
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection 