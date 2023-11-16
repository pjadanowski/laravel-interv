@props(['answer'])

<div class="border p-2 mb-3">
    <span class="fw-bold">{{ $answer->user->name }}  </span>
    @if ($answer->isAuthor())
        <span class="text-danger font-bold">
        Author
        </span>
    @endif
    <p>
        {{ $answer->answer}} 
    </p>
</div>