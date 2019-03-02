@extends('layouts.landing') 
@section('content')
<section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(img/parceiro.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">
        <div class="fh5co-intro no-js-fullheight">
            <div class="fh5co-intro-text">

                <div class="fh5co-center-position">
                    <h2 class="animate-box">NOSSOS PARCEIROS FAZEM A DIFERENÇA</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-learn-more animate-box">
        <a href="#" class="scroll-btn">
            <span class="text">Veja nossos Parceiros</span>
            <span class="arrow"><i class="fas fa-caret-down"></i></span>
        </a>
    </div>
</section>


<section id="fh5co-features">
    <div class="container">
        <div class="row text-center row-bottom-padded-md">
            <div class="col-md-8 col-md-offset-2">

                <h2 class="fh5co-lead animate-box">
                    Generosas corporações, fundações e investidores individuais.</h2>

            </div>
        </div>
        <div class="row">
            @foreach ($parceiros as $p)
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="fh5co-feature">
                    <div class="fh5co-icon animate-box">
                        <a href="{{ $p->referencia }}" target="__blank" class="ml-auto mr-auto"><img src="{{ asset('storage/'.$p->logo) }}" style="width: 280px; height:209px"></a>
                    </div>
                    <h3 class="animate-box">{{ $p->nome }}</h3>

                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            @endforeach
        </div>
    </div>
</section>
@endsection