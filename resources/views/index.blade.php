<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- blade 문법 공부 --}}

    {{-- 1. welcom대신 index나오게 하기 --}}
    <h1>이것은 인덱스 블레이드!</h1>

    {{-- 2. 변수가 출력되도록 하기 --}}
    <p><strong>{{ $hello }}</strong>{{ $name }}</p>
    

    {{-- 3. if문을 사용해 보아요. --}}
    {{-- @if($a == 1)
        🍎가 한개 있습니다.
    @elseif($a == 2)
        🥝가 2개 있습니다.
    @else
        과일이 하나도 없어요!
    @endif --}}

    {{-- 4. foreach 사용해보기 --}}
    @foreach($fruit as $item)
        <li>{{ $item }}</li>        
    @endforeach


</body>
</html>