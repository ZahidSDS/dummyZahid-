@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.mtypes.title')</h3>
    @can('mtype_create')
    <p>
        <a href="{{ route('admin.mtypes.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($mtypes) > 0 ? 'datatable' : '' }} @can('mtype_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('mtype_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.mtypes.fields.name')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($mtypes) > 0)
                        @foreach ($mtypes as $mtype)
                            <tr data-entry-id="{{ $mtype->id }}">
                                @can('mtype_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $mtype->name }}</td>
                                <td>
                                    @can('mtype_view')
                                    <a href="{{ route('admin.mtypes.show',[$mtype->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('mtype_edit')
                                    <a href="{{ route('admin.mtypes.edit',[$mtype->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('mtype_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.mtypes.destroy', $mtype->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('mtype_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.mtypes.mass_destroy') }}';
        @endcan

    </script>
@endsection