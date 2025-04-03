<div class="livewire-doctor-edit">
    <div class="container">
        <h1>Edit Doctor</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="update">
            @include('livewire.doctor-form')

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('doctors') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>