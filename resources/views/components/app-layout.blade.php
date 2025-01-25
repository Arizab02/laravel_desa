<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{-- {{$title ?? 'MyProject'}} --}}
        {{-- jika $title tidak diisi maka isi yang sebelah kanan (null coalescing) --}}
        

        @isset($title)
            {{$title}}/Laravel 11

        @else
            MyProject/Laravel 11
        @endisset

        {{-- jika $title diisi maka tampilkan $title/Laravel 11 --}}
    </title>
</head>
<body>
    <nav style="background-color:rgb(91, 116, 255); padding: 10px;">    
        <ul style="display: flex; justify-content: space-around;">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contacts">Contact</a></li>
            <li><a href="/book">Book</a></li>
            <li><a href="/users">Users</a></li>
        </ul>  
    </nav>


    Ini adalah halaman {{$slot;}} 
    // mengacu ke book.blade.php, about.blade.php, dan users/index.blade.php
    Home // mengacu ke home.blade.php
</body>
</html>