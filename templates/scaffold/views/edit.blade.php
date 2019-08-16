@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-buttons1">$MODEL_NAME_HUMAN$</h4>
                </div>

                <div class="card-content show">
                    @include('stackadmin-infyom-template::common.errors')
                    <div class="card-body">
                        {!! Form::model($$MODEL_NAME_CAMEL$, ['route' => ['$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.update', $$MODEL_NAME_CAMEL$->$PRIMARY_KEY_NAME$], 'method' => 'patch']) !!}

                        @include('$VIEW_PREFIX$$MODEL_NAME_PLURAL_SNAKE$.fields')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection