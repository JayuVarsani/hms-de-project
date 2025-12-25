@extends('layouts.app')

@section('content')
<div class="page-banner">
    <div class="banner-content">
        <div class="banner-left">
            <div class="banner-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="banner-text">
                <h1>Patients</h1>
                <p>Manage patient records and information</p>
            </div>
        </div>
        <a href="{{ route('patients.create') }}" class="banner-button">
            <i class="fas fa-plus"></i>
            Add New Patient
        </a>
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">
                <i class="fas fa-list"></i>
                Patient Records
            </h2>
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search patients...">
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
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Emergency Contact</th>
                        <th>Registered</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Smith</td>
                        <td>1985-03-15</td>
                        <td><span class="badge badge-blue">Male</span></td>
                        <td>555-0101</td>
                        <td>john.smith@email.com</td>
                        <td>555-0102</td>
                        <td>2025-10-03</td>
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
                        <td>1990-07-22</td>
                        <td></td>
                        <td>555-0201</td>
                        <td>sarah.johnson@email.com</td>
                        <td>555-0202</td>
                        <td>2025-10-03</td>
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
                        <td>1978-11-08</td>
                        <td><span class="badge badge-blue">Male</span></td>
                        <td>555-0301</td>
                        <td>michael.brown@email.com</td>
                        <td>555-0302</td>
                        <td>2025-10-03</td>
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
                        <td>1995-01-30</td>
                        <td></td>
                        <td>555-0401</td>
                        <td>emily.davis@email.com</td>
                        <td>555-0402</td>
                        <td>2025-10-03</td>
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
                        <td>1982-09-14</td>
                        <td><span class="badge badge-blue">Male</span></td>
                        <td>555-0501</td>
                        <td>robert.wilson@email.com</td>
                        <td>555-0502</td>
                        <td>2025-10-03</td>
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

