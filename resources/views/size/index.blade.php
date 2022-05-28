@extends('layouts.master')
@section('content')




    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Size List
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Size List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Create Size
                                <span class="mr-3"><a class="btn btn-primary btn-sm  float-right" href="{{ route('sizes.create') }}">Add Size  <i class="fa fa-plus ml-1"></i> </a>
                            </h5>
                        </div>
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th>Size</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                             <tbody>
                                @if ($sizes)
                                    @foreach ($sizes as $key=> $size)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $size->size ?? '' }}</td>
                                            <td>
                                                <a title="edit" class="btn btn-primary btn-sm" href="{{ route('sizes.edit', $size->id) }}"><i class="fa fa-edit "></i></a>
                                                <a title="delete"  class=" btn btn-danger btn-sm sa-delete"  href="javascript:;"  data-form-id="size-delete-{{ $size->id }}"><i class="fa fa-trash "></i></a>

                                                <form id="size-delete-{{ $size->id }}" action="{{ route('sizes.destroy', $size->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                @endif
                             </tbody>

                            </table>

                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
