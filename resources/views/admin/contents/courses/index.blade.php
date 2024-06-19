@extends('admin.main')
@section('content')
    <div class="pagetitle">
        <h1>Courses</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active">Courses</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                @if (Auth::user()->role == 'admin')   
                    <a href="/admin/courses/create" class="btn btn-primary my-3">+ Courses</a>
                @endif
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        @if (Auth::user()->role == 'admin')  
                        <th>Action</th>
                        @endif
                    </tr>
                    @foreach ($courses as $course)
                        <tr>
                            <td>1</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->category }}</td>
                            <td>{{ $course->description }}</td>
                            @if (Auth::user()->role == 'admin')  
                            <td>
                                <a href="/admin/courses/edit/{{ $course->id }}" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                            @endif

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
