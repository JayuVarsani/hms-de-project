@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-user-md"></i>
            </div>
            <div class="banner-text">
                <h1>Add Doctor</h1>
                <p>Register a new doctor to the system</p>
            </div>
        </div>
        <a href="{{ route('doctors') }}" class="back-button">
            <i class="fas fa-arrow-left"></i>
            Back to Doctors
        </a>
    </div>
</div>

<div class="container">
    <div class="form-container">
        <div class="form-header">
            <i class="fas fa-user-md"></i>
            <h2>Doctor Registration Form</h2>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        First Name <span class="required">*</span>
                    </label>
                    <input type="text" class="form-input" name="first_name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Last Name <span class="required">*</span>
                    </label>
                    <input type="text" class="form-input" name="last_name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        Specialization <span class="required">*</span>
                    </label>
                    <input type="text" class="form-input" name="specialization" placeholder="Select Specialization" required>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Years of Experience <span class="required">*</span>
                    </label>
                    <input type="number" class="form-input" name="experience" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        Phone Number <span class="required">*</span>
                    </label>
                    <input type="tel" class="form-input" name="phone" required>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Email Address <span class="required">*</span>
                    </label>
                    <input type="email" class="form-input" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">
                    Consultation Fee ($) <span class="required">*</span>
                </label>
                <input type="number" step="0.01" class="form-input" name="consultation_fee" required>
            </div>
            <div class="form-group full-width">
                <label class="form-label">Biography</label>
                <textarea class="form-textarea" name="biography" placeholder="Brief professional background, education, achievements, etc."></textarea>
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn-cancel">
                    <i class="fas fa-times"></i>
                    Cancel
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-user-md"></i>
                    Add Doctor
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

