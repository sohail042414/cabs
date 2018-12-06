@if ($errors->any())
<div class="alert alert-danger mt-1" role="alert">
    <h4 class="alert-heading">Fix errors!</h4>
    @foreach ($errors->all() as $error)
    <p class="mb-0">{{ $error }}</p>
    @endforeach
</div>
@endif