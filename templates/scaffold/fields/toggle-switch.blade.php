<!-- 'bootstrap / Toggle Switch $FIELD_NAME_TITLE$ Field' -->
<div class="form-group ">
    {!! Form::label('$FIELD_NAME$', '$FIELD_NAME_TITLE$:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('$FIELD_NAME$', 0) !!}
        {!! Form::checkbox('$FIELD_NAME$', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>
