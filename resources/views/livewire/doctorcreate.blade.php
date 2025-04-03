<div class="livewire-doctor-create">
    <div class="container">
        <h1>Create Doctor</h1>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="store">
            @include('livewire.doctor-form')

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('doctors') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>