{{-- home.blade richiama base.blade che richiama i partials  --}}

@extends('guest.template.base')
{{--
1   title = cosa sotituisco
2   dc - home = cosa inserisco --}}
@section('title', 'DC - Home')


{{--
1   = cosa sotituisco
2   = cosa inserisco (h1 e p) --}}
@section('content')
    <h1>prova</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi neque similique eveniet laborum omnis doloremque esse asperiores qui repudiandae fugiat illum, fugit ullam alias earum facere recusandae cum eos voluptatum.</p>

    @foreach (config('comics') as $item)
        <div class="item">
            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
            <span>{{ $item['series'] }}</span>
        </div>
    @endforeach

@endsection
