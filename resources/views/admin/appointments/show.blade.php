@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.appointments.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.client_name')</th>
                            <td field-key='client'>{{ $appointment->first_name .' '. $appointment->last_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.email')</th>
                            <td field-key='client'>{{ $appointment->email  }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.phone')</th>
                            <td field-key='client'>{{ $appointment->phone  }}</td>
                        </tr>
                      
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.start-time')</th>
                            <td field-key='start_time'>{{ $appointment->start_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.finish-time')</th>
                            <td field-key='finish_time'>{{ $appointment->finish_time }}</td>
                        </tr>
                        <tr>
                            <th>Interested In</th>
                            <td>{{ $appointment->service->title ?? null}}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.budget')</th>
                            <td field-key='comments'>{{ $appointment->budget }}</td>
                        </tr>
                        {{-- <tr>
                            <th>@lang('quickadmin.appointments.fields.comments')</th>
                            <td field-key='comments'>{!! $appointment->comments !!}</td>
                        </tr> --}}
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.appointments.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop

@section('javascript')
    @parent

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.datetime').datetimepicker({
                format: "{{ config('app.datetime_format_moment') }}",
                locale: "{{ App::getLocale() }}",
                sideBySide: true,
            });
            
        });
    </script>
            
@stop
