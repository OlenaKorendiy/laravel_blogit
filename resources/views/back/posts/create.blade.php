@extends('layouts.back')
@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Адмінпанель</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Головна</a></li>
            <li class="breadcrumb-item active">Редагувати пост</li>
        </ol>
    </div><!-- /.col -->

@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Головна</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="featured" id="exampleCheck1">
                                <label class="form-check-label"  for="exampleCheck1">Рекомендований пост</label>
                            </div>
                            <div class="form-group">
                                <label for="title">Назва поста </label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="excerpt">Витяг поста</label>
                                <textarea id="excerpt" name="excerpt" class="form-control" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">Опис поста</label>
                                <textarea id="description" name="body" class="form-control" rows="4" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Нове зображення</label>
                                <input type="file" name="image" class="form-control-file" id="image" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Додатково</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category">Категорії</label>
                                <select id="category" name="category" class="form-control custom-select">
                                    <option selected disabled>Оберіть категорію</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('posts.store') }}" class="btn btn-secondary">Вийти</a>
                    <input type="submit" value="Редагувати" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
