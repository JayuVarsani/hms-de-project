@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-sign-in-alt"></i>
            </div>
            <div class="banner-text">
                <h1>Login</h1>
                <p>Sign in to your account</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="form-container" style="max-width: 500px; margin: 2rem auto;">
        <div class="form-header">
            <i class="fas fa-sign-in-alt"></i>
            <h2>Login Form</h2>
        </div>
        <form>
            <div class="form-group">
                <label class="form-label">
                    Email Address <span class="required">*</span>
                </label>
                <input type="email" class="form-input" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label class="form-label">
                    Password <span class="required">*</span>
                </label>
                <input type="password" class="form-input" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                    <input type="checkbox" name="remember" style="width: auto;">
                    <span style="font-size: 0.95rem; color: #374151;">Remember me</span>
                </label>
                <a href="#" style="font-size: 0.95rem; color: #3b82f6; text-decoration: none;">Forgot Password?</a>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                    <i class="fas fa-sign-in-alt"></i>
                    Login
                </button>
            </div>
            <div style="text-align: center; margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid #e5e7eb;">
                <p style="color: #6b7280; font-size: 0.95rem;">
                    Don't have an account? 
                    <a href="{{ route('register') }}" style="color: #3b82f6; text-decoration: none; font-weight: 500;">Register here</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection

