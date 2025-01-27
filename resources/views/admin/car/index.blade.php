@extends('layouts.admin')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Fixed Layout</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Fixed Layout</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Model</th>
                                    <th>Category</th>
                                    <th>Color</th>
                                    <th>Image</th>
                                    <th>Year</th>
                                    <th>Price</th>
                                    <th>Availability</th>
                                    <th>License plate</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($cars as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->model }}</td>
                                            <td>{{ optional($car->category)->type }}</td>
                                        <td>{{ $car->color }}</td>
                                        <td><img src="{{Storage::url($car->image) }}"  style="height: 80px"></td>
                                        <td>{{ $car->year }}</td>
                                        <td>{{ $car->price }}</td>


                                        <td>{{ $car->availability ? 'Available' : 'Not Available' }}</td>
                                        <td>{{ $car->license_plate }}</td>
                                        <td>
                                      <a href={{route('admin.car.edit',['id'=>$car->id ])}} class="btn btn-success" >Edit</a>
                                            <a href={{route('admin.car.destroy',['id'=>$car->id ])}} class="btn btn-danger" >Delete </a>
                                            <a href={{route('admin.car.show',['id'=>$car->id ])}} class="btn btn-warning" >QrCode </a>

                                        </td>
                                    </tr>


                                @endforeach
                                </tbody>
                            </table>

                            <div class="col-3 align-items-center">
                                <a href="{{ route('admin.car.create') }}" class="btn btn-block btn-outline-danger btn-sm">Add Cars</a>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
