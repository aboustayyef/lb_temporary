@extends('layouts.administration')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Manage Blogs</td>
                                <td><a href="/admin/blog" class="btn btn-primary">Go</a></td>
                            </tr>
                            <tr>
                                <td>Manage Tags</td>
                                <td><a href="/admin/tag" class="btn btn-primary">Go</a></td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
