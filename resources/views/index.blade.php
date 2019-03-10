<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Демо: пагинатор</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="">
            <ul>
            @foreach ($materials as $material)
            <li>{{ $material->created_at }} {{ $material->title }}</li>
            @endforeach
            </ul>
            {{ $materials->links() }}
        </div>
    </body>
</html>
