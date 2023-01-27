<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card Manager - {{$title ?? ''}}</title>
    <meta name="description" content="{{$metaDescription ?? 'Default meta-description'}}" />
    @vite(['resources/css/app.css'])
</head>
<body>
    
   <x-layouts.nav />
   @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
    {{ $slot }}
</body>
</html>