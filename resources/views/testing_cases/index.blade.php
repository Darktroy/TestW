@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Testing Cases</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="#" class="btn btn-success" title="Create New Testing Case">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($testingCases) == 0)
            <div class="panel-body text-center">
                <h4>No Testing Cases Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Length</th>
                            <th>Width</th>
                            <th>Average Of Values</th>
                            <th>Area</th>
                            <th>Area Square</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($testingCases as $testingCase)
                        <tr>
                            <td>{{ $testingCase->length }}</td>
                            <td>{{ $testingCase->width }}</td>
                            <td>{{ $testingCase->average_of_values }}</td>
                            <td>{{ $testingCase->area }}</td>
                            <td>{{ $testingCase->area_square }}</td>

                            <td> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $testingCases->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection