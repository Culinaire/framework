{!! Form::open(['route'=>'recipes.store']) !!}

<div class="form-group">
  {!! Form::label('name', 'Name: ', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-9">
    {!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::label('type', 'Type: ', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-9">
    {!! Form::select('type', ['batch'=>'Batch', 'build'=>'Build'],old('type'), ['class'=>'form-control']) !!}
  </div>
</div>


<div class="form-group">
  <div class="col-md-9 col-md-offset-3">
    {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
  </div>
</div>

{!! Form::close() !!}