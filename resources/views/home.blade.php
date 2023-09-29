<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nama : Anita Sari</h1>
    <h1>SMKN 1 Sayung,{{$nama}},{{$sekolah}}</h1>
    @if($nama=='admin')
    <a href ="">Ke Halaman Admin</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman User</a>
    @else
    <h2> Anda Bukan ADMIN dan User</h2>
    @endif

    @switch($buah)
        @case(1)
            first case...
            @break

        @case(2)
            second case...
            @break

        @default
          
    @endswitch 

<br>
    @foreach ($buah as $nama)
    {{ $nama }}</br>
    @endforeach

</body>
</html>