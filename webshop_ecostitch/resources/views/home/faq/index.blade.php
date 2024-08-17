<!-- resources/views/faq/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>FAQ</title>
</head>
<body>
    <h1>Frequently Asked Questions</h1>

    @if($categories->isEmpty())
        <p>No FAQs available at the moment.</p>
    @else
        @foreach($categories as $category)
            <h2>{{ $category->name }}</h2>
            <ul>
                @foreach($category->items as $item)
                    <li><strong>{{ $item->question }}</strong>
                        <p>{{ $item->answer }}</p>
                    </li>
                @endforeach
            </ul>
        @endforeach
    @endif
</body>
</html>
