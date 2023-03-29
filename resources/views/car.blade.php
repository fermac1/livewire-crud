<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single car</title>
    <style>
       
        table{
            border-collapse: collapse;
        }
        th, td{
            border: 1px solid;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div>
        <a href="/">Home</a>
    </div>
    <div class="container">

        <div>
            <img src="{{ asset('storage/'.$car->file )}}" alt="" width="30%">
            <h1>{{ $car->name }}</h1>
          
        </div>
                
        <span><b> Founded: </b>{{ $car->founded }}</span>
        
        <p><b>Description:</b> {{ $car->description }}
        </p>
    
        <p><b>Models:</b> 
            @forelse ($car->carModels as $model)
                <span>{{ $model->model_name }}</span>
                <span>,</span>
            @empty
                <span>No models found</span>
            @endforelse
        </p>
       
        <table>
            <tr>
                <th>Model</th>
                <th>Engines</th>
            </tr>
            @forelse ($car->carModels as $model)
                <tr>
                    <td>{{ $model->model_name }}</td>
                    <td>
                        @foreach ($car->engines as $engine)
                                @if ($model->id == $engine->model_id)
                                    {{ $engine->engine_name }}
                                @endif
                        @endforeach
                    </td>
                </tr>
            @empty
                <span>No models found</span>
            @endforelse
        </table>
    </div>
</body>
</html>