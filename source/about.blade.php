@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">I am a Christian in the Roman Catholic tradition. This means I am called to love others as God loves me. If that seems all-encompassing, it is. I am pretty bad at it, but I am trying. It's a pretty high bar.</p>

    <p class="mb-6">Speaking of bars, I'm pretty into cocktails and beer. I also love music and books and games and traveling with my wife.</p>

    <p class="mb-6">I work at <a href="https://desalesmedia.org" target="_blank">DeSales Media</a>, a nonprofit based in Brooklyn, New York. Our mission is drive Catholics to put their faith in action. I lead DeSales Tech as Director of Product & Innovation, where we bring technology solutions to parishes, schools, and dioceses. We also work to better understand formation, discipleship and evangelization so that we can all do a better job of it.</p>
    
    <p class="mb-6">If you'd like to get in touch, you can find me on <a href="http://www.linkedin.com/in/daveplisky" target="_blank">LinkedIn</a>.</p>
@endsection
