<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $address->id !!}</p>
</div>

<!-- Street Field -->
<div class="form-group">
    {!! Form::label('street', 'Street:') !!}
    <p>{!! $address->street !!}</p>
</div>

<!-- Town Field -->
<div class="form-group">
    {!! Form::label('town', 'Town:') !!}
    <p>{!! $address->town !!}</p>
</div>

<!-- Postcode Field -->
<div class="form-group">
    {!! Form::label('postcode', 'Postcode:') !!}
    <p>{!! $address->postcode !!}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{!! $address->country !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $address->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $address->updated_at !!}</p>
</div>

