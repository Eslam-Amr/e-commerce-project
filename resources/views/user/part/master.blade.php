<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    @include('user.part.head')
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    @include('user.part.navbar')
    <x-success />
    <x-error />
    @yield('content')
    @include('user.part.subscribe')
    @include('user.part.more-category')
    @include('user.part.footer')
    @include('user.part.script')


</body>
</html>
