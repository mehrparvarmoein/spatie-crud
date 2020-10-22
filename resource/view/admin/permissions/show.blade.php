@extends('layouts.master-rtl')
@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <div class="">
                    <div class="header-title mb-3">
                        {{ trans('global.show') }} {{ trans('cruds.permission.title') }}
                    </div>
                
                    <div class="card-body">
                        <div class="mb-2">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.permission.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $permission->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.permission.fields.title') }}
                                        </th>
                                        <td>
                                            {{ $permission->name }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a style="margin-top:20px;" class="btn btn-warning" href="{{ url()->previous() }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
</div> <!-- container -->

@endsection