@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-calendar-plus"></i>
            </div>
            <div class="banner-text">
                <h1>Schedule Appointment</h1>
                <p>Book a new appointment for a patient</p>
            </div>
        </div>
        <a href="{{ route('appointments') }}" class="back-button">
            <i class="fas fa-arrow-left"></i>
            Back to Appointments
        </a>
    </div>
</div>

<div class="container">
    <div class="form-container">
        <div class="form-header">
            <i class="fas fa-calendar-check"></i>
            <h2>Appointment Booking Form</h2>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        Select Patient <span class="required">*</span>
                    </label>
                    <input type="text" class="form-input" name="patient" placeholder="Choose a patient" required>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Select Doctor <span class="required">*</span>
                    </label>
                    <input type="text" class="form-input" name="doctor" placeholder="Choose a doctor" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        Appointment Date <span class="required">*</span>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-input" name="date" placeholder="dd-mm-yyyy" required>
                        <i class="fas fa-calendar input-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">
                        Appointment Time <span class="required">*</span>
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-input" name="time" value="12:32:PM" required>
                        <i class="fas fa-clock input-icon"></i>
                    </div>
                </div>
            </div>
            <div class="form-group full-width">
                <label class="form-label">Notes</label>
                <textarea class="form-textarea" name="notes" placeholder="Any special notes or requirements for this appointment"></textarea>
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn-cancel">
                    <i class="fas fa-times"></i>
                    Cancel
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-calendar-check"></i>
                    Schedule Appointment
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

