<div>
    <h1>إنشاء فئة جديدة</h1>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form wire:submit.prevent="store" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">الاسم</label>
            <input type="text" class="form-control" id="name" wire:model="name">
        </div>

        <div class="form-group">
            <label for="image">الصورة</label>
            <input type="file" class="form-control" id="image" wire:model="image">
        </div>

        <button type="submit" class="btn btn-primary">إنشاء</button>
    </form>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('categoryAdded', (data) => {
                Swal.fire({
                    icon: 'success',
                    title: 'تمت الإضافة بنجاح',
                    text: data.message
                });
            });

            Livewire.on('categoryError', (data) => {
                Swal.fire({
                    icon: 'error',
                    title: 'فشلت عملية التخزين',
                    text: data.message
                });
            });
        });
    </script>
</div>
