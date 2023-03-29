<div>
    <h3>Livewire CRUD operation</h3>

    @if (session()->has('success'))
    <div style="color: green">{{ session('success') }}</div>
    @endif

    <div style="width:100px; background:blue; padding:8px; margin-bottom:5px;">
        <a href="/create" wire:click="add" style="color:white; text-decoration:none;">Add cars</a>
    </div>
    <table>
        <tr>
            <th>Name</th>
            <th>Founded</th>
            <th>image</th>
            <th>description</th>
            <th>actions</th>
        </tr>
        
        @forelse ($car as $item)
            <tr>
                <td>
                    <a href="/car/{{ $item->id }}"> 
                    {{ $item->name }}
                    </a>
                </td>
                <td>{{ $item->founded }}</td>
                <td>
                    <img src="{{ asset('storage/'.$item->file )}}" alt="" width="100px">
                </td>
                <td>{{ $item->description }}</td>
                <td>
                    <a href="/edit/{{ $item->id }}" wire:click="edit({{ $item->id }})">Edit</a>
                    <a href="javascript:void(0)" wire:click="delete({{ $item->id }})">Delete</a>
                </td>
            </tr>
        @empty
        
            <p>No cars found</p>
        
        @endforelse
           
    
    </table>
    

            

            {{-- <table>
                <tr>
                    <th>Model</th>
                    <th>Engines</th>
                    <th>Date</th>
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
                    </td> --}}
                    {{-- <td>{{ date('d-m-Y', strtotime($car->productionDate->created_at)) }}</td> --}}
                    {{-- <td>{{ $car->productionDate->created_at }}</td>
                </tr>
                @empty
                    <p>No models found</p>
                @endforelse 
            </table> --}}

            {{-- <p>
                @forelse ($car->products as $product)
                    Product tyoes: {{ $product->name }}
                @empty
                    <p>No car product description</p>
                @endforelse
            </p> --}}

            {{-- <ul>
                <p>
                    Models:
                </p> --}}
                {{-- @forelse ($car->carModels as $model)
                    <li>{{ $model['model_name'] }}</li> --}}
                {{-- @forelse ($car->carModels as $model)
                    <li>{{ $model->model_name }}</li>
                @empty
                    <p>No models found</p>
                @endforelse
            </ul> --}}
            
</div>
