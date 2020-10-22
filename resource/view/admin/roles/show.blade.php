@extends('layouts.master-rtl')
@section('content')
 <!-- Start Content-->
 <div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <div class="">
                    <div class="header-title mb-3">
                        {{ trans('global.show') }} {{ trans('cruds.role.title') }}
                    </div>
                
                    <div class="card-body">
                        <div class="mb-2">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.role.fields.id') }}
                                        </th>
                                        <td>
                                            {{ $role->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('cruds.role.fields.title') }}
                                        </th>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Permissions
                                        </th>
                                        <td>
                                            @foreach($role->permissions()->pluck('name') as $permission)
                                                <span class="label label-info label-many">{{ $permission }}</span>
                                            @endforeach
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