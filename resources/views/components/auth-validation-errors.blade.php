@props(['errors'])

@if ($errors->any())
    <div class="text-red-300 ">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
@endif
