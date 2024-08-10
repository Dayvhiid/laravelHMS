
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            color: #34C759; /* green */
            margin-bottom: 20px;
        }
        
        img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #FFC107; /* orange */
            border-radius: 10px;
        }
        
        .image-container:hover {
            background-color: #FFA07A; /* yellow */
        }
    </style>
</head>
<body>
    <div class="image-container">
        @foreach($images as $image)
            <div class="image-item">
                <h3>{{ $image->title }}</h3>
                @if($image->file_path)
                    <img src="{{ asset('storage/' . $image->file_path) }}" alt="{{ $image->title }}" width="300">
                @else
                    <img src="data:image/jpeg;base64,{{ base64_encode($image->image_data) }}" alt="{{ $image->title }}" width="300">
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>