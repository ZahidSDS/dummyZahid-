@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.mtypes.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.mtypes.fields.name')</th>
                            <td>{{ $mtype->name }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->


<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="clients">
<table class="table table-bordered table-striped {{ count($clients) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.clients.fields.mtype')</th>
                        <th>@lang('quickadmin.clients.fields.name')</th>
                        <th>@lang('quickadmin.clients.fields.surname')</th>
                        <th>@lang('quickadmin.clients.fields.expire-date')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($clients) > 0)
            @foreach ($clients as $client)
                <tr data-entry-id="{{ $client->id }}">
                    <td>{{ $client->mtype->name or '' }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->surname }}</td>

                                @if($client->checkExpireDate($client->expire_date))
                                    <td><strong><font color=red>{{ $client->expire_date }}</font></strong></td>     
                                @else
                                    <td>{{ $client->expire_date }}</td>                          
                                @endif

                                <td>
                                    @can('client_view')
                                    <a href="{{ route('admin.clients.show',[$client->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('client_edit')
                                    <a href="{{ route('admin.clients.edit',[$client->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('client_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.clients.destroy', $client->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>




</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.mtypes.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop