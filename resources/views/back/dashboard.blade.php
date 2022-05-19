@extends('layouts.back')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Головна</a></li>
    <li class="breadcrumb-item active">Адмінпанель</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h4>Ласкаво просимо, {{ auth()->user()->name }}</h4>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
