{!! Form::open(['route' => ['$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.destroy', $$PRIMARY_KEY_NAME$], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.show', $$PRIMARY_KEY_NAME$) }}" class='btn btn-default btn-xs'>
        <i class="ft-eye"></i>
    </a>
    <a href="{{ route('$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.edit', $$PRIMARY_KEY_NAME$) }}" class='btn btn-default btn-xs'>
        <i class="ft-edit"></i>
    </a>
    {!! Form::button('<i class="ft-trash-2"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}