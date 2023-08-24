<!-- resources/views/frontend/view.blade.php -->
<!doctype html>
<head>
    <title>Frontend with Backend Integration</title>
</head>
<body>
    <h1>Data from Backend</h1>
    <ul>
        @foreach ($data as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
</body>
</html>
