<section id="appointment" class="appointment section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>MAKE AN APPOINTMENT</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <form wire:submit.prevent="submitForm" class="php-email-form">
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" wire:model="name" class="form-control" placeholder="Your Name">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" wire:model="email" class="form-control" placeholder="Your Email">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" wire:model="phone" class="form-control" placeholder="Your Phone">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="datetime-local" wire:model="date" class="form-control datepicker" placeholder="Appointment Date">
                    @error('date') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select wire:model="department" class="form-select">
                        <option value="">Select Department</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Hepatology">Hepatology</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Ophthalmologists">Ophthalmologists</option>
                    </select>
                    @error('department') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group mt-3">
                <textarea wire:model="message" class="form-control" rows="5" placeholder="Message (Optional)"></textarea>
                @error('message') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mt-3">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @else
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                @endif
                <div class="text-center"><button type="submit">Make an Appointment</button></div>
            </div>
        </form>
    </div>
</section>