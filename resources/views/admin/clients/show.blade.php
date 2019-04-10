@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.clients.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.clients.fields.mtype')</th>
                            <td>{{ $client->mtype->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.name')</th>
                            <td>{{ $client->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.surname')</th>
                            <td>{{ $client->surname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.phone')</th>
                            <td>{{ $client->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.expire-date')</th>
                            @if($client->checkExpireDate($client->expire_date))
                                <td><strong><font color=red>{{ $client->expire_date }}</font></strong></td>     
                            @else
                                <td>{{ $client->expire_date }}</td>                          
                            @endif

                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.address')</th>
                            <td>{{ $client->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.mailing_address')</th>
                            <td>{{ $client->mailing_address }}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.clients.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop