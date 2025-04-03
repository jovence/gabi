<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Appointments List</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Department</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->name }}</td>
                                        <td>{{ $appointment->email }}</td>
                                        <td>{{ $appointment->phone }}</td>
                                        <td>{{ $appointment->date }}</td>
                                        <td>{{ $appointment->department }}</td>
                                        <td>{{ Str::limit($appointment->message, 30) }}</td>
                                        <td>{{ $appointment->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('mails', ['appointmentId' => $appointment->id]) }}" 
                                               class="btn btn-primary btn-sm">
                                                <i class="mdi mdi-email"></i> Send Mail
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
