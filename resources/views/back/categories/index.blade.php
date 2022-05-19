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
        <a class="btn btn-success" href="{{ route('categories.create') }}">
           Створити нову категорію
        </a>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Головна</a></li>
            <li class="breadcrumb-item active">Категорії</li>
        </ol>
    </div><!-- /.col -->

@endsection
@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Категорії</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 60%">
                                Назва Категорії
                            </th>
                            <th style="width: 39%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <a>
                                        {{ $category->title }}
                                    </a>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('categories.edit', $category->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редагувати
                                    </a>
                                    <form class="deletion-form" action="{{ route('categories.destroy', $category->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm show-alert">
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
            Swal.fire({
                title: 'Ви впевнені?',
                text: "Ви не зможете повернути це!",
                icon: 'обережно',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Так, видалити!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('.deletion-form').submit();
                }
            })
        })
    </script>
@endsection
