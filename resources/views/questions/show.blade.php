<x-app-layout>

        <div class="container">
            <h1>{{ $question->question}} ?</h1>

            @foreach ($question->answers as $answer)
                <x-answer :answer="$answer"/>
            @endforeach
        </div>

</x-app-layout>