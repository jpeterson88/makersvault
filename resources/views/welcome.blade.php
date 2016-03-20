@extends('layouts.app')

@section('content')
<section class="home">
    <div class="row">
        <div class="small-12 columns">
          @if(Auth::check())
          <h3 class="text-center">Hi, {{Auth::user()->first_name}}</h3>
          @endif
            <h2 class="text-center">{{ $product-> name }}</h2>
        </div>
        <div class="small-12 large-8 columns">
            <img src="http://placehold.it/800x600">
            <p>{{ $product-> description }}</p>
            <div>
                <a href="#" class="button expanded">Purchase for $20</a>
            </div>
            <h3>People that have purchased</h3>
            <ul>
              @foreach($product->users as $user)
                <li>{{$user->first_name}}</li>
              @endforeach
            </ul>
        </div>
        <div class="small-12 large-4 columns">
            <div class="callout">
                <p>Maker: Sleepy</p>
            </div>
            @if(Auth::check())
              <ul>
                @foreach(Auth::user()->products as $product)
                  <li>{{$product->name}}</li>
                @endforeach
              </ul>
            @endif
        </div>
    </div>
</section>
@endsection
