@extends('layouts.app')

@section('content')
    @push('scripts')
        <script src="{{ asset('js/acescore.js') }}" defer></script>
    @endpush
<article>
    <section id="intro">
        <h1>What is Your ACE Score?</h1>
        <p>
            Your ACE score will help you figure out just exactly how traumatic your childhood
            experiences were, in a more or less scientific way.

            It's kinda depressing, but also kinda useful, particularly in helping others,
            especially significant others, realize just how much patience they may need
            just to deal with us :-/
        </p>
    </section>

    <section id="quiz">
        <h1>ACE Quiz</h1>
        <ol>
        @foreach($questions as $index => $question)
            <li>
                {{$question}}<br/>
                <div style="width: 7em; margin-left: 3em;">
                    <label style="float: left"><input type="radio" name="answers[{{$index}}" value="1" class="answer-yes" /> <strong>Yes</strong></label>
                    <label style="float: right"><input type="radio" name="answers[{{$index}}" value="0" class="answer-no" checked="checked" /> <strong>No</strong></label>
                    <div style="clear: both"></div>
                </div>
            </li>
        @endforeach
        </ol>
        <div style="margin-left: 2em">
            <button id="calcACEScore">Get My ACE Score</button>
        </div>
    </section>

    <section id="scoreBox" style="min-height: 75px; max-height: 100px">
        <h2 style="display: none; font-weight: bold; background: red; padding: 20px 50px; color: white">Your ACE Score is <span id="ACEScore"></span>!</h2>
    </section>

    <section id="outro">
        <h3>Inspiration</h3>
        <p>
            Talking with my friend on <a href="https://www.twitter.com/hopeseekr" target="_blank"><strong>Twitter</strong></a>
            inspired me to create this.
        <p>
            You can view the <a href="https://github.com/phpexpertsinc/laravel_quickstart" target="_blank"><strong>complete source code</strong></a>
            for this project over at GitHub.
        </p>
    </section>
</article>
@endsection
