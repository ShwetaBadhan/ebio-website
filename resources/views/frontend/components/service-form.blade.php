<div class="form-header">
    <span class="form-tag">Get Started Today</span>
    <h3>Book Your Consultation</h3>
    <p>Speak with our experts and get personalized guidance for your healthcare needs.</p>
</div>

{{-- Toast Notification Container --}}
<div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
    {{-- Success Toast --}}
    @if(session('success'))
    <div id="successToast" class="toast align-items-center text-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endif

    {{-- Error Toast --}}
    @if(session('error'))
    <div id="errorToast" class="toast align-items-center text-white bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                <i class="fas fa-exclamation-circle me-2"></i>
                {{ session('error') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    @endif
</div>

{{-- Form Action points to the named route --}}
<form action="{{ route('consultation.store') }}" method="POST">
    @csrf
    <div class="row g-2">
        <div class="col-md-6">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" value="{{ old('name') }}">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6">
            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" value="{{ old('phone') }}">
            @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}">
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-6">
            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
            @error('date') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        {{-- Services Dropdown --}}
        <div class="col-md-12">
            <select name="service" class="form-select @error('service') is-invalid @enderror">
                <option value="" disabled selected>Select a Service</option>
                <option value="Autism" {{ old('service') == 'Autism' ? 'selected' : '' }}>Autism</option>
                <option value="ADHD" {{ old('service') == 'ADHD' ? 'selected' : '' }}>ADHD</option>
                <option value="Speech Disorder" {{ old('service') == 'Speech Disorder' ? 'selected' : '' }}>Speech Disorder</option>
                <option value="Behaviour Disorder" {{ old('service') == 'Behaviour Disorder' ? 'selected' : '' }}>Behaviour Disorder</option>
                <option value="Cerebral Palsy" {{ old('service') == 'Cerebral Palsy' ? 'selected' : '' }}>Cerebral Palsy</option>
                <option value="Paralysis" {{ old('service') == 'Paralysis' ? 'selected' : '' }}>Paralysis</option>
                <option value="Diabetes" {{ old('service') == 'Diabetes' ? 'selected' : '' }}>Diabetes</option>
                <option value="Lung Diseases" {{ old('service') == 'Lung Diseases' ? 'selected' : '' }}>Lung Diseases</option>
                <option value="Cancer Treatment" {{ old('service') == 'Cancer Care Center' ? 'selected' : '' }}>Cancer Care Center</option>
            </select>
            @error('service') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-12">
            <textarea name="message" rows="6" class="form-control @error('message') is-invalid @enderror" placeholder="Enter Message">{{ old('message') }}</textarea>
            @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="theme-btn btn-style-one w-100">
                <span class="btn-title">Book Consultation</span>
            </button>
        </div>
    </div>
</form>

{{-- JavaScript for Toast Auto-Dismiss --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-hide success toast after 5 seconds
    const successToastEl = document.getElementById('successToast');
    if (successToastEl) {
        const successToast = new bootstrap.Toast(successToastEl, { delay: 5000 });
        successToast.show();
    }

    // Auto-hide error toast after 5 seconds
    const errorToastEl = document.getElementById('errorToast');
    if (errorToastEl) {
        const errorToast = new bootstrap.Toast(errorToastEl, { delay: 5000 });
        errorToast.show();
    }
});
</script>