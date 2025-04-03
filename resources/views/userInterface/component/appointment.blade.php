<section id="appointment" class="appointment section light-background">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="container section-title" data-aos="fade-up">
        <h2>MAKE AN APPOINTMENT</h2>
        <p>Schedule your appointment with our specialists</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <form action="{{ route('appointment.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                        required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                        placeholder="Appointment Date" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="department" id="department" class="form-select" required>
                        <option value="">Select Department</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Hepatology">Hepatology</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Ophthalmologists">Ophthalmologists</option>
                    </select>
                </div>
            </div>

            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            </div>
            <div class="mt-3">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Make an Appointment</button>
                </div>
            </div>
        </form>
    </div>
</section>
