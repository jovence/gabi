    <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
            <div class="row">
                <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div>
                            <p class="statistics-title">Bounce Rate</p>
                            <h3 class="rate-percentage">32.53%</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                        </div>
                        <div>
                            <p class="statistics-title">Page Views</p>
                            <h3 class="rate-percentage">7,682</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                        </div>

                        <div class="d-none d-md-block">
                            <p class="statistics-title">New Sessions</p>
                            <h3 class="rate-percentage">68.8</h3>
                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                        </div>
                        <div class="d-none d-md-block">
                            <p class="statistics-title">Avg. Time on Site</p>
                            <h3 class="rate-percentage">2m:35s</h3>
                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex flex-column">

                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="card-title card-title-dash">List of doctors</h4>
                                            <p class="card-subtitle card-subtitle-dash">You
                                                have 50 doctors</p>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"
                                                data-bs-toggle="modal" data-bs-target="#addMemberModal">
                                                <i class="mdi mdi-account-plus"></i>Add new member
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive  mt-1">
                                        <table class="table select-table">
                                            <thead>
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif
                                                <tr>
                                                    <th>
                                                        <div class="form-check form-check-flat mt-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                    aria-checked="false" id="check-all"><i
                                                                    class="input-helper"></i></label>
                                                        </div>
                                                    </th>
                                                    <th>Profile</th>
                                                    <th>Specialization</th>
                                                    <th>biography</th>
                                                    <th>phone</th>
                                                    <th>email</th>
                                                    <th>address</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $doctors = \App\Models\Doctor::all(); // Fetch doctors directly in the view
                                                @endphp
                                                @foreach ($doctors as $doctor)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-flat mt-0">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        aria-checked="false"><i
                                                                        class="input-helper"></i></label>
                                                            </div>


                                                        </td>
                                                        <td>
                                                            <div class="d-flex ">
                                                                <img
                                                                    src="{{ asset('storage/' . $doctor->profile_picture) }}">

                                                                <div>
                                                                    <h6>{{ $doctor->name }}</h6>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h6>{{ $doctor->specialization }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6>{{ $doctor->bio }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6>{{ $doctor->phone }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6>{{ $doctor->email }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6>{{ $doctor->address }} </h6>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editMemberModal">
                                                                <i class="mdi mdi-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-danger btn-sm" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteMemberModal">
                                                                <i class="mdi mdi-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                @include('adminComponents.createuser')
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Reset form when modal is closed
            document.getElementById('addMemberModal').addEventListener('hidden.bs.modal', function() {
                document.getElementById('addMemberForm').reset();
            });
        });
    </script>
