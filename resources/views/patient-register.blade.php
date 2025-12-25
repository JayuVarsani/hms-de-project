@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <div class="banner-text">
                <h1>Register Patient</h1>
                <p>Add a new patient to the system</p>
            </div>
        </div>
        <a href="{{ route('patients') }}" class="back-button">
            <i class="fas fa-arrow-left"></i>
            Back to Patients
        </a>
    </div>
</div>

<div class="container">
    <div class="form-container">
        <div class="form-header">
            <i class="fas fa-user"></i>
            <h2>Patient Registration Form</h2>
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
                        Date of Birth <span class="required">*</span>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-input" name="dob" placeholder="dd-mm-yyyy" required>
                        <i class="fas fa-calendar input-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Gender <span class="required">*</span>
                    </label>
                    <select class="form-select" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
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
            <div class="form-group full-width">
                <label class="form-label">
                    Address <span class="required">*</span>
                </label>
                <textarea class="form-textarea" name="address" required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        Emergency Contact <span class="required">*</span>
                    </label>
                    <input type="text" class="form-input" name="emergency_contact" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Medical History</label>
                    <textarea class="form-textarea" name="medical_history" placeholder="Any known medical conditions, allergies, etc."></textarea>
                </div>
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn-cancel">
                    <i class="fas fa-times"></i>
                    Cancel
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-user"></i>
                    Register Patient
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

