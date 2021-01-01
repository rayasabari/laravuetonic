@props(['errors'])

@if ($errors->any())
    <div class="text-warning">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
@endif
