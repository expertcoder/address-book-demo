<!-- Street Field -->
<div class="form-group col-sm-6">
    {!! Form::label('street', 'Street:') !!}
    {!! Form::text('street', null, ['class' => 'form-control']) !!}
</div>

<!-- Town Field -->
<div class="form-group col-sm-6">
    {!! Form::label('town', 'Town:') !!}
    {!! Form::text('town', null, ['class' => 'form-control']) !!}
</div>

<!-- Postcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postcode', 'Postcode:') !!}
    {!! Form::text('postcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('addresses.index') !!}" class="btn btn-default">Cancel</a>
</div>
