{{ Form::hidden('menu_id', $menu_id) }}
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name', null, ['class' => $errors->has('name') ?  'form-control is-invalid' : 'form-control']) }}
            @include('admin.partials._help_block',['field' => 'name'])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ Form::label('email', 'E-mail') }}
            {{ Form::email('email', null, ['class' => $errors->has('email') ?  'form-control is-invalid' : 'form-control']) }}
            @include('admin.partials._help_block',['field' => 'email'])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ Form::label('phone', 'Telefone') }}
            {{ Form::text('phone', null, ['class' => $errors->has('phone') ?  'form-control is-invalid sp_celphones' : 'form-control sp_celphones']) }}
            @include('admin.partials._help_block',['field' => 'phone'])
        </div>
    </div>
</div>