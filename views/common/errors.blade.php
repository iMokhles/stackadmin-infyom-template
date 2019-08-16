@if(!empty($errors))
    @if($errors->any())
        <div class="alert bg-danger alert-dismissible mb-2" role="alert">
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </div>
    @endif
@endif