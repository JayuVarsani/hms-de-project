@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-cog"></i>
            </div>
            <div class="banner-text">
                <h1>Dashboard</h1>
                <p>Welcome to the Hospital Management System.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="dashboard-cards">
        <div class="dashboard-card purple">
            <div class="dashboard-card-icon">
                <i class="fas fa-user-injured"></i>
            </div>
            <div class="dashboard-card-number">5</div>
            <div class="dashboard-card-label">Total Patients</div>
        </div>
        <div class="dashboard-card pink">
            <div class="dashboard-card-icon">
                <i class="fas fa-user-md"></i>
            </div>
            <div class="dashboard-card-number">5</div>
            <div class="dashboard-card-label">Total Doctors</div>
        </div>
        <div class="dashboard-card blue">
            <div class="dashboard-card-icon">
                <i class="fas fa-calendar-check"></i>
            </div>
            <div class="dashboard-card-number">5</div>
            <div class="dashboard-card-label">Total Appointments</div>
        </div>
        <div class="dashboard-card green">
            <div class="dashboard-card-icon">
                <i class="fas fa-calendar-day"></i>
            </div>
            <div class="dashboard-card-number">5</div>
            <div class="dashboard-card-label">Today's Appointments</div>
        </div>
    </div>

    <div class="quick-actions">
        <div class="quick-actions-section">
            <h3 class="section-title">
                <i class="fas fa-plus"></i>
                Quick Actions
            </h3>
            <div class="quick-action-buttons">
                <a href="{{ route('patients.create') }}" class="quick-action-btn blue">
                    <i class="fas fa-user-plus"></i>
                    Register New Patient
                </a>
                <a href="{{ route('doctors.create') }}" class="quick-action-btn green">
                    <i class="fas fa-user-md"></i>
                    Add New Doctor
                </a>
                <a href="{{ route('appointments.create') }}" class="quick-action-btn dark-blue">
                    <i class="fas fa-calendar-plus"></i>
                    Schedule Appointment
                </a>
            </div>
        </div>
        <div class="quick-actions-section">
            <h3 class="section-title">
                <i class="fas fa-chart-line"></i>
                System Overview
            </h3>
            <p style="margin-bottom: 1rem; color: #374151;">This Hospital Management System provides comprehensive tools for managing:</p>
            <ul class="feature-list">
                <li>
                    <i class="fas fa-check"></i>
                    <span>Patient Registration & Records</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Doctor Profile Management</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Appointment Scheduling</span>
                </li>
                <li>
                    <i class="fas fa-check"></i>
                    <span>Medical History Tracking</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

