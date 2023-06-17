@extends('layouts.dash')
@section('content')
<div class="wrapper">
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Registration System</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Register your Voter's Credentials here!</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Register Voter</h5>
                    <hr>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
            placeholder="First Name" value="{{ old('firstname') }}">
        @error('firstname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="middlename">Middle Name</label>
        <input type="text" name="middlename" class="form-control @error('middlename') is-invalid @enderror" id="middlename"
            placeholder="Middle Name" value="{{ old('middlename') }}">
        @error('middlename')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname"
            placeholder="Last Name" value="{{ old('lastname') }}">
        @error('lastname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
 
    

    <div class="form-group">
        <label for="birthdate">Birthdate</label>
        <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror"
            id="birthdate" placeholder="Birthdate" value="{{ old('birthdate') }}">
        @error('birthdate')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>


    <div class="form-group">
        <label for="street">Purok/Street</label>
        <input type="text" name="street" class="form-control @error('quantity') is-invalid @enderror"
            id="street" placeholder="Purok/Street" value="{{ old('street') }}">
        @error('street')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="barangay">Barangay</label>
        <input type="text" name="barangay" class="form-control @error('barangay') is-invalid @enderror"
            id="barangay" placeholder="Barangay" value="{{ old('barangay') }}">
        @error('barangay')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="town">City/Town</label>
        <input type="text" name="town" class="form-control @error('town') is-invalid @enderror"
            id="town" placeholder="City/Town" value="{{ old('town') }}">
        @error('town')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="fname">Father's Name</label>
        <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror"
            id="fname" placeholder="Father's Name" value="{{ old('fname') }}">
        @error('fname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="mname">Mother's Name</label>
        <input type="text" name="mname" class="form-control @error('mname') is-invalid @enderror"
            id="mname" placeholder="Mother's Name" value="{{ old('mname') }}">
        @error('mname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Register</button>
</form>
</div>
                </div>
            </div>


        </div>
    </div>
</div>
    <!--end page wrapper -->
@endsection
