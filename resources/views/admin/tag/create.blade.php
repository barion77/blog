@extends('admin.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавление тэга</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
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
            <form action="{{ route('admin.tag.store') }}" method="POST" class="w-50">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Название категории">
              </div>
              @error('title')
                  <div class="alert alert-danger">
                    Это поле нужно заполнить.
                  </div>
              @enderror
              <input type="submit" class="btn btn-success" value="Добавить">
            </form>
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection 