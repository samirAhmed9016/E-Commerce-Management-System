{{-- <x-mail::message>
    # Introduction

    The body of your message.
    Content:{{ $content['content'] }}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message> --}}
<html>

<body>
    {{ $content['content'] }}
</body>

</html>
