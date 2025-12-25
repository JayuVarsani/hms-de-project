@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-calendar-check"></i>
            </div>
            <div class="banner-text">
                <h1>Appointments</h1>
                <p>Manage patient appointments and scheduling</p>
            </div>
        </div>
        <a href="{{ route('appointments.create') }}" class="banner-button">
            <i class="fas fa-plus"></i>
            Schedule Appointment
        </a>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">
                <i class="fas fa-bars"></i>
                Appointment Schedule
            </h2>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Notes</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Smith</td>
                        <td>Dr. Dr. James Anderson</td>
                        <td>2025-10-03</td>
                        <td>09:00</td>
                        <td><span class="badge badge-yellow">Scheduled</span></td>
                        <td>Regular checkup and EKG</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn btn-view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn btn-delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sarah Johnson</td>
                        <td>Dr. Dr. Lisa Martinez</td>
                        <td>2025-10-03</td>
                        <td>10:30</td>
                        <td><span class="badge badge-yellow">Scheduled</span></td>
                        <td>Skin examination for mole check</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn btn-view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn btn-delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Michael Brown</td>
                        <td>Dr. Dr. David Thompson</td>
                        <td>2025-10-03</td>
                        <td>14:00</td>
                        <td><span class="badge badge-green">Completed</span></td>
                        <td>Blood pressure follow-up</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn btn-view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn btn-delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Emily Davis</td>
                        <td>Dr. Dr. Maria Garcia</td>
                        <td>2025-10-03</td>
                        <td>15:30</td>
                        <td><span class="badge badge-yellow">Scheduled</span></td>
                        <td>Annual pediatric checkup</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn btn-view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn btn-delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Robert Wilson</td>
                        <td>Dr. Dr. William Taylor</td>
                        <td>2025-10-03</td>
                        <td>11:00</td>
                        <td><span class="badge badge-yellow">Scheduled</span></td>
                        <td>Knee pain consultation</td>
                        <td>
                            <div class="action-buttons">
                                <button class="action-btn btn-view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn btn-edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn btn-delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

