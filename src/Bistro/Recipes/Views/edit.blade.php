<div class="page-header">
  <h1>Edit: {{ $recipe->name }}</h1>
</div>

@if ($recipe->type == 'batch')
  @include('bistro/recipes::partials.edit-batch', ['recipe'=>$recipe])
@elseif ($recipe->type == 'build')
  @include('bistro/recipes::partials.edit-build', ['recipe'=>$recipe])
@endif