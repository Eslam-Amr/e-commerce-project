{{-- @props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif --}}

@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger text-sm text-red-600 space-y-1']) }} id="messagesList">
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>

    <script>
        setTimeout(function() {
            var messagesList = document.getElementById('messagesList');
            messagesList.style.display = 'none';
        }, 3000); // Disappear after 2 seconds (2000 milliseconds)
    </script>
@endif
