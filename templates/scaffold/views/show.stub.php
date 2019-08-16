@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-buttons1">Details</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <a href="{!! route('$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.index') !!}" class="btn btn-primary">Back</a>
                    </div>
                </div>

                <div class="card-content show">
                    @include('stackadmin-infyom-template::common.errors')
                    <div class="card-body">
                        @include('$VIEW_PREFIX$$MODEL_NAME_PLURAL_SNAKE$.show_fields')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection