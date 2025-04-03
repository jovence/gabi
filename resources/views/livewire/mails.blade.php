<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Send Email to Patient</h4>
                    
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if($appointments)
                            <div class="patient-info mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table class="table">
                                            <tr>
                                                <th>Name:</th>
                                                <td>{{ $appointments->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ $appointments->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone:</th>
                                                <td>{{ $appointments->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th>Department:</th>
                                                <td>{{ $appointments->department }}</td>
                                            </tr>
                                            <tr>
                                                <th>appointments Date:</th>
                                                <td>{{ $appointments->date }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        <form wire:submit.prevent="sendMail">
                            <div class="form-group">
                                <label for="emailContent">Email Message</label>
                                <textarea 
                                    wire:model="emailContent" 
                                    class="form-control" 
                                    id="emailContent" 
                                    rows="6" 
                                    placeholder="Type your message here..."
                                ></textarea>
                                @error('emailContent') 
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">
                                    <i class="mdi mdi-send me-1"></i> Send Email
                                </button>
                                <a href="{{ route('doctor.appointment') }}" class="btn btn-light">
                                    <i class="mdi mdi-arrow-left me-1"></i> Back to appointmentss
                                </a>
                            </div>
                        </form>
                    @else
                        <div class="alert alert-danger">
                            appointments not found.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>