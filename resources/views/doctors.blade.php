@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-user-md"></i>
            </div>
            <div class="banner-text">
                <h1>Doctors</h1>
                <p>Manage doctor profiles and specializations</p>
            </div>
        </div>
        <a href="{{ route('doctors.create') }}" class="banner-button">
            <i class="fas fa-plus"></i>
            Add New Doctor
        </a>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">
                <i class="fas fa-bars"></i>
                Doctor Profiles
            </h2>
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search doctors...">
                <button class="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Specialization</th>
                        <th>Experience</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Consultation Fee</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dr. James Anderson</td>
                        <td><span class="badge badge-blue">Cardiology</span></td>
                        <td>15 years</td>
                        <td>555-1001</td>
                        <td>james.anderson@hospital.com</td>
                        <td>$200.00</td>
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
                        <td>Dr. Lisa Martinez</td>
                        <td><span class="badge badge-blue">Dermatology</span></td>
                        <td>12 years</td>
                        <td>555-1002</td>
                        <td>lisa.martinez@hospital.com</td>
                        <td>$150.00</td>
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
                        <td>Dr. David Thompson</td>
                        <td><span class="badge badge-blue">General Medicine</span></td>
                        <td>20 years</td>
                        <td>555-1003</td>
                        <td>david.thompson@hospital.com</td>
                        <td>$120.00</td>
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
                        <td>Dr. Maria Garcia</td>
                        <td><span class="badge badge-blue">Pediatrics</span></td>
                        <td>10 years</td>
                        <td>555-1004</td>
                        <td>maria.garcia@hospital.com</td>
                        <td>$130.00</td>
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
                        <td>Dr. William Taylor</td>
                        <td><span class="badge badge-blue">Orthopedics</span></td>
                        <td>18 years</td>
                        <td>555-1005</td>
                        <td>william.taylor@hospital.com</td>
                        <td>$250.00</td>
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

