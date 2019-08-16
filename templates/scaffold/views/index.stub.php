@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-buttons1">$MODEL_NAME_PLURAL_HUMAN$</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <a href="{!! route('$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.create') !!}" class="btn btn-primary">Add New</a>
                    </div>
                </div>

                <div class="card-content show">
                    <div class="card-body">
                        @include('$VIEW_PREFIX$$MODEL_NAME_PLURAL_SNAKE$.table')
                    </div>
                </div>

                <div class="text-center">
                    $PAGINATE$
                </div>
            </div>
        </div>
    </div>
@endsection