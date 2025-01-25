<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-app-layout title="User">
        <h1>User </h1>
    </x-app-layout>
    
    <div>
        {{-- <?php foreach ($users as $user): ?>
        <h1><?= $user['name']; ?></h1>
        <p><?= $user['email']; ?></p>
        <?php endforeach; ?> --}}

        {{-- bisa diringkas menjadi seperti yang di bawah --}}

        @foreach ($users as $user)
            <h1>{{ $user['name'] }}</h1>
            <p>{{ $user['email'] }}</p>
        @endforeach

    </div>
</body>
</html>