@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.services.title')</h3>

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.services.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
        </ul>
    </p>
    {{-- @endcan --}}


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">
           <form  method="post" action="{{ route('admin.services.store') }}">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : ''}}">
                <label for="title" >Title</label>
                <input id="title" name="title" class="form-control" type="text">
                @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                @csrf
                <button class="btn btn-primary">Save</button>
            </div>      
          </form>
        </div>
    </div>
@stop

@section('javascript') 
@endsection