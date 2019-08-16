<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            $FIELD_HEADERS$
            <th colspan="3">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($$MODEL_NAME_PLURAL_CAMEL$ as $$MODEL_NAME_CAMEL$)
            <tr>
                $FIELD_BODY$
                <td>
                    {!! Form::open(['route' => ['$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.destroy', $$MODEL_NAME_CAMEL$->$PRIMARY_KEY_NAME$], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.show', [$$MODEL_NAME_CAMEL$->$PRIMARY_KEY_NAME$]) !!}" class='btn btn-default btn-xs'><i class="ft-eye"></i></a>
                        <a href="{!! route('$ROUTE_NAMED_PREFIX$$MODEL_NAME_PLURAL_CAMEL$.edit', [$$MODEL_NAME_CAMEL$->$PRIMARY_KEY_NAME$]) !!}" class='btn btn-default btn-xs'><i class="ft-edit"></i></a>
                        {!! Form::button('<i class="ft-trash-2"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>