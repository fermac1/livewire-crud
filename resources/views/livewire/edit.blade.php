<div>
    <div>
        <div>
            {{-- <a href="" onclick="history.go(-1)">back</a> --}}
            <a href="/">home</a>
            <h1>Edit car</h1>
        </div>
    </div>

    @if (session()->has('success'))
    <div style="color: green">{{ session('success') }}</div>
    @endif

    <div>
        <form action="" method="POST" enctype="multipart/form-data" wire:submit.prevent="update">
            
            <div>
                <input type="hidden" wire:model="hiddenId" value="{{ $hiddenId }}">
                
                <div>
                    <input type="text" name="name" placeholder="Brand name..." wire:model="name">
                </div><br>

                <div>
                    <input type="text" name="founded" placeholder="Founded..." wire:model="founded">
                </div><br>

                <div>
                    <input type="text" name="description" placeholder="Description..." wire:model="description">
                </div><br>

                <div>
                    <input type="file" name="file" wire:model="file">
                </div><br>

                <div>
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </div>
        @endif
    </div>
</div>
