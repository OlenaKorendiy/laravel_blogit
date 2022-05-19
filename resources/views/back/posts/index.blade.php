@extends('layouts.back')
@if (session()->has('addPostSuccess'))
    @section('alerts')
        <div class="alert alert-success alert-dismissible fade show light-green" role="alert">
            {!! session('addPostSuccess') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endsection
@endif
@section('breadcrumb')
    <div class="col-sm-6">
        {{-- <h1 class="m-0">Адмінпанель</h1> --}}
        <a class="btn btn-success" href="{{ route('posts.create') }}">
           Створити новий пост
        </a>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Головна</a></li>
            <li class="breadcrumb-item active">Пости</li>
        </ol>
    </div><!-- /.col -->

@endsection
@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Пости</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 60%">
                                Назва посту
                            </th>
                            <th style="width: 39%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <a>
                                        {{ $post->title }}
                                    </a>
                                    <br />
                                    <small>
                                        Created {{ $post->created_at }}
                                    </small>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('posts.view', $post->id) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Переглянути
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('posts.edit', $post->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редагувати
                                    </a>
                                    <form id="delete-post{{ $post->id }}" class="deletion-form"
                                        action="{{ route('posts.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm show-alert"
                                            data-id="{{ $post->id }}">
                                            <i class="fas fa-trash">
                                            </i>
                                            Видалити
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
@section('javascript')
    <script>
        // show alert before deleting post
        $('.show-alert').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Ви впевнені?',
                text: "Ви не зможете повернути це!",
                icon: 'обоережно',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Так, видалити пост!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#delete-post${id}`).submit();
                }
            })
        })
    </script>
@endsection
