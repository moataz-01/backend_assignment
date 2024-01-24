<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Create product</title>
</head>
<body>
    <h1>create new product</h1>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div class="p-2 w-fit">
            <p class="font-bold pb-2">choose category</p>
            @foreach ($categories as $category)
            <input type="checkbox" id="{{$category->name}}" name="category_id[]" value="{{$category->id}}">
            <label for="{{$category->id}}">{{$category->name}}</label>  
            @endforeach 
        </div>
        

        <input type="text" name="Name" id="Name" placeholder="product name">
        <input type="number" name="Price" id="Price" placeholder="Price" step=".01">
        <input type="number" name="Quantity" id="Quantity" placeholder="Quantity">
        <textarea name="description" id="description" cols="25" placeholder="description (optional)"></textarea>
        <button type="submit" class="bg-blue-900">Create</button>
    </form>
</body>
</html>