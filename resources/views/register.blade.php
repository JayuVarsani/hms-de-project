@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <div class="banner-text">
                <h1>Register</h1>
                <p>Create a new account</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="form-container" style="max-width: 600px; margin: 2rem auto;">
        <div class="form-header">
            <i class="fas fa-user-plus"></i>
            <h2>Registration Form</h2>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        First Name <span class="required">*</span>
                    </label>
                    <input type="text" class="form-input" name="first_name" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Last Name <span class="required">*</span>
                    </label>
                    <input type="text" class="form-input" name="last_name" placeholder="Enter your last name" required>
                </div>
            </div>
            <div class="form-group full-width">
                <label class="form-label">
                    Email Address <span class="required">*</span>
                </label>
                <input type="email" class="form-input" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        Password <span class="required">*</span>
                    </label>
                    <input type="password" class="form-input" name="password" placeholder="Create a password" required>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Confirm Password <span class="required">*</span>
                    </label>
                    <input type="password" class="form-input" name="password_confirmation" placeholder="Confirm your password" required>
                </div>
            </div>
            <div class="form-group" style="margin-bottom: 1rem;">
                <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <input type="checkbox" name="terms" required style="width: auto;">
                    <span style="font-size: 0.95rem; color: #374151;">
                        I agree to the <a href="#" style="color: #3b82f6; text-decoration: none;">Terms and Conditions</a>
                    </span>
                </label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                    <i class="fas fa-user-plus"></i>
                    Register
                </button>
            </div>
            <div style="text-align: center; margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid #e5e7eb;">
                <p style="color: #6b7280; font-size: 0.95rem;">
                    Already have an account? 
                    <a href="{{ route('login') }}" style="color: #3b82f6; text-decoration: none; font-weight: 500;">Login here</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection

