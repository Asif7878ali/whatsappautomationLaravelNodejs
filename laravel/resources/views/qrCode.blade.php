<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       <div>
            <h1>{{$data->message}}</h1>
              @if(isset($data->screenshot))
                  <img src="data:image/png;base64,{{ $data->screenshot }}" alt="QR Code">
              @else
                  <p>No QR Code available</p>
               @endif
       </div>
      
</body>
</html>