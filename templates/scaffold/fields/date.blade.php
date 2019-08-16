<!-- $FIELD_NAME_TITLE$ Field -->
<div class="form-group ">
    {!! Form::label('$FIELD_NAME$', '$FIELD_NAME_TITLE$:') !!}
    {!! Form::date('$FIELD_NAME$', null, ['class' => 'form-control','id'=>'$FIELD_NAME$']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#$FIELD_NAME$').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection