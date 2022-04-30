{{-- home.blade richiama base.blade che richiama i partials  --}}

@extends('guest.template.base')
{{--
1   title = cosa sotituisco
2   dc - home = cosa inserisco --}}
@section('title', 'DC - Home')



@section('content')
<main>
    <section id="jumbotron">
      <img src="./images/jumbotron.jpg" alt="DC Comics banner personaggi">
    </section>
    <section id="comics">
      <h2>current series</h2>
        <div class="container flex">

            @foreach (config('myconfig.comics') as $item)
                <div class="item">
                    <div class="img-item-content">
                        <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                    </div>
                    <span>{{ $item['series'] }}</span>
                </div>
            @endforeach
            <!-- THUMB è link immagine -->

        </div>
        <span class="span-load">load more</span>
    </section>

    <div class="icons flex">
        <div class="container flex">
            @foreach (config('myconfig.bluebar') as $item)
                <img src="./images/{{ $item['img'] }}":alt="{{ $item['text'] }}">
                <span>{{ $item['text'] }}</span>
            @endforeach
        </div>
    </div>


  </main>

@endsection
