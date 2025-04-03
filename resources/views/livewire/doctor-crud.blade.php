<div class="livewire-doctor-crud">
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="mb-3 d-flex justify-content-between align-items-center">
            <input type="text" wire:model.live="searchTerm" placeholder="Search..." class="form-control w-50">
            <a href="{{ route('doctors.create') }}" class="btn btn-success">Add Doctor</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>Photo</th>
                        <th>Specialization</th>
                        <th>Biography</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->id }}</td>
                            <td>{{ $doctor->name }}</td>
                            <td>
                                @if ($doctor->profile_picture)
                                    <img src="{{ asset('storage/' . $doctor->profile_picture) }}" alt="Doctor Photo" class="rounded-circle" width="30" height="30" style="object-fit: cover;">
                                @else
                                    <img src="{{ asset('images/default-avatar.png') }}" alt="No Photo" class="rounded-circle" width="30" height="30">
                                @endif
                            </td>
                            <td>{{ $doctor->specialization }}</td>
                            <td>{{ Str::limit($doctor->bio, 50) }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->address }}</td>
                            <td>
                                {{-- <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                <button wire:click="delete({{ $doctor->id }})" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $doctors->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <style>
         /* Pagination Styles */
         .pagination {
                display: flex;
                padding-left: 0;
                list-style: none;
                border-radius: 0.25rem;
                margin: 20px 0;
            }
        
            .page-link {
                position: relative;
                display: block;
                padding: 0.5rem 0.75rem;
                margin-left: -1px;
                line-height: 1.25;
                color: #007bff;
                background-color: #fff;
                border: 1px solid #dee2e6;
                font-size: 14px;
            }
        
            .page-item:first-child .page-link {
                margin-left: 0;
                border-top-left-radius: 0.25rem;
                border-bottom-left-radius: 0.25rem;
            }
        
            .page-item:last-child .page-link {
                border-top-right-radius: 0.25rem;
                border-bottom-right-radius: 0.25rem;
            }
        
            .page-item.active .page-link {
                z-index: 3;
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }
        
            .page-item.disabled .page-link {
                color: #6c757d;
                pointer-events: none;
                cursor: not-allowed;
                background-color: #fff;
                border-color: #dee2e6;
            }
        
            /* Fix for pagination icons */
            .pagination svg {
                width: 20px;
                height: 20px;
                vertical-align: middle;
            }
    </style>
</div>