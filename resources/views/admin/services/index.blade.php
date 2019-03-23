@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.services.title')</h3>
    {{-- @can('service_create') --}}
    <p>
        <a href="{{ route('admin.services.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    {{-- @endcan --}}

    {{-- @can('service_delete') --}}
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.services.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            {{-- <li><a href="{{ route('admin.services.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li> --}}
        </ul>
    </p>
    {{-- @endcan --}}


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($services) > 0 ? 'datatable' : '' }} @can('service_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        <th>S. N</th>
                        <th>@lang('quickadmin.services.fields.title')</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($services) > 0)
                        @foreach ($services as $s => $service)
                            <tr data-entry-id="{{ $service->id }}">
                                {{-- @can('service_delete') --}}
                                    {{-- @if ( request('show_deleted') != 1 ) --}}
                                    <td>{{ ++$s }}</td>
                                {{-- @endcan --}}

                                <td field-key='title'>{{ $service->title }}</td>
                                
                                <td>
                                    <form action="">
                                        <a href="#" class="btn btn-success" title="edit">Edit</a>
                                        <button type="submit" class="btn btn-danger" title="delete">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
     

    </script>
@endsection