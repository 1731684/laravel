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
    {{ Form::text('ename', null, ['class' => 'form-control', 'id' => 'ename', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }} <em class="required">*</em>
    {{ Form::email('email', null,['class' => 'form-control', 'id' => 'email', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('house_number', 'Number') }} <em class="required">*</em>
    {{ Form::number('house_number', null,['class' => 'form-control', 'id' => 'house_number', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('street', 'Street') }} <em class="required">*</em>
    {{ Form::text('street', null, ['class' => 'form-control', 'id' => 'street', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('city', 'City') }} <em class="required">*</em>
    {{ Form::text('city', null, ['class' => 'form-control', 'id' => 'city', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('state', 'State') }} <em class="required">*</em>
    {{ Form::text('state', null, ['class' => 'form-control', 'id' => 'state', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('postcode', 'Postcode') }} <em class="required">*</em>
    {{ Form::text('postcode', null, ['class' => 'form-control', 'id' => 'postcode', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('country', 'Country') }} <em class="required">*</em>
    {{ Form::select('country', $country,null,['class' => 'form-control', 'id' => 'country', 'required' => 'required']) }}

</div>
<div class="form-group">
    {{ Form::label('job', 'Job') }} <em class="required">*</em>
    {{ Form::text('job', null, ['class' => 'form-control', 'id' => 'job', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('mgr', 'Mgr') }} <em class="required">*</em>
    {{ Form::text('mgr', null, ['class' => 'form-control', 'id' => 'mgr']) }}
</div>
<div class="form-group">
    {{ Form::label('hiredate', 'Hiredate') }} <em class="required">*</em>
    {{ Form::date('hiredate', null, ['class' => 'form-control', 'id' => 'hiredate', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('sal', 'Salary') }} <em class="required">*</em>
    {{ Form::number('sal', null, ['class' => 'form-control', 'id' => 'sal', 'required' => 'required']) }}
</div>
<div class="form-group">
    {{ Form::label('comm', 'Comm') }} <em class="required">*</em>
    {{ Form::number('comm', null, ['class' => 'form-control', 'id' => 'comm', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('deptno', 'Deptno') }} <em class="required">*</em>
    {{ Form::text('deptno' ,null,['class' => 'form-control', 'id' => 'deptno', 'required' => 'required']) }}

</div>
<div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
</div>