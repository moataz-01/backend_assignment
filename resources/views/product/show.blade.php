<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Product</title>
</head>

<body>
    <h1>product {{ $product->id }} details</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                @if ($product->description !== null)
                    <th>Description</th>
                @endif
                @if (count($product->categories))
                    <th>Categories</th>
                @endif
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->Name }}</td>
                <td>{{ $product->Price }}</td>
                <td>{{ $product->Quantity }}</td>
                @if ($product->description !== null)
                    <td>{{ $product->description }}</td>
                @endif
                @if (count($product->categories))
                <td>
                    <ul>
                        @foreach ($product->categories as $category)
                            <li>{{$category->Name}}</li>
                        @endforeach
                    </ul>
                </td>
                @endif
            </tr>
        </tbody>
    </table>
</body>

</html>
