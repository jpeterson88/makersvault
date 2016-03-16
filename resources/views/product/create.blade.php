@extends('layouts.app')

@section('content')
<section class="home">
  <div class="row">
    <div class="small-12 columns">
      <h2 class="text-center">Create Product</h2>
    </div>
    <div class="small-12 large-8 large-offset-2 end columns">
      <form action="/product" method="post" class="callout">
        {!! csrf_field() !!}
        <label for="name">Name
          <input type="text" name="name" id="name" required>
        </label>
        <label for="description">Description
          <input type="text" name="description" id="description" required>
        </label>
        <button type="submit" class="button">Create Product</button>
      </form>
    </div>
  </div>
</section>
@endsection
