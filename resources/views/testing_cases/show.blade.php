@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Testing Case' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('testing_cases.testing_case.destroy', $testingCase->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('testing_cases.testing_case.index') }}" class="btn btn-primary" title="Show All Testing Case">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('testing_cases.testing_case.create') }}" class="btn btn-success" title="Create New Testing Case">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('testing_cases.testing_case.edit', $testingCase->id ) }}" class="btn btn-primary" title="Edit Testing Case">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Testing Case" onclick="return confirm(&quot;Click Ok to delete Testing Case.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Length</dt>
            <dd>{{ $testingCase->length }}</dd>
            <dt>Width</dt>
            <dd>{{ $testingCase->width }}</dd>
            <dt>Average Of Values</dt>
            <dd>{{ $testingCase->average_of_values }}</dd>
            <dt>Area</dt>
            <dd>{{ $testingCase->area }}</dd>
            <dt>Area Square</dt>
            <dd>{{ $testingCase->area_square }}</dd>

        </dl>

    </div>
</div>

@endsection