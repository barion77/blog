@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="w-50">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                            {{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}"
                                    placeholder="Название поста">
                            </div>
                            @error('title')
                                <div class="text-danger">
                                    Это поле нужно заполнить.
                                </div>
                            @enderror
                            <div class="form-group">
                                <textarea name="content" id="content">{{ $post->content }}</textarea>
                            </div>
                            @error('content')
                                <div class="text-danger">
                                    Это поле нужно заполнить.
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                            @error('preview_image')
                                <div class="text-danger">
                                    Нужно загрузить изображение.
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                            @error('main_image')
                                <div class="text-danger">
                                    Нужно загрузить изображение.
                                </div>
                            @enderror
                            <div class="form-group">
                                <label>Тэги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple"
                                    data-placeholder="Выберите тэги" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                        <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('tag_ids')
                                <div class="text-danger">
                                    Выберите тэги.
                                </div>
                            @enderror
                    
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Изменить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });

        $(function() {
            bsCustomFileInput.init();
        });

        $(function() {
            $('.select2').select2()
        });
    </script>
@endsection