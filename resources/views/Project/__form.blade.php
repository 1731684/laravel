@if (isset($errors) && (count($errors) > 0))
    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    {{ Form::label('name', 'Name') }} <em class="required">*</em>
    {{ Form::text('pname', null, ['class' => 'form-control', 'id' => 'pname', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('budget', 'Budget') }} <em class="required">*</em>
    {{ Form::text('budget', null,['class' => 'form-control', 'id' => 'budget', 'required' => 'required']) }}
</div>



<div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
</div>