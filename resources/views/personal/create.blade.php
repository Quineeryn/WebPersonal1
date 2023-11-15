@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Personal Information
                            <a href="{{ url('personal') }}" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('/personalstore') }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4>Personal Information</h4>

                            <div class="mb3">
                                <label>Masukkan Foto</label>
                                <input type="file" name="foto" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Email</label>
                                <input type="email" name="email" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Phone Number</label>
                                <input type="tel" name="telephone_number" class="form control">
                            </div>

                            <div class="mb3">
                                <label>City</label>
                                <input type="text" name="city" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Address</label>
                                <input type="text" name="address" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Link Profile</label>
                                <input type="text" name="link_profile" class="form control">
                            </div>

                            <h4>Education</h4>
                            <div class="mb3">
                                <label>Education Institution</label>
                                <input type="text" name="Edu_institution" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Education Location</label>
                                <input type="text" name="Loc_edu" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Start Date</label>
                                <input type="date" name="Start_date_edu" class="form control">
                            </div>

                            <div class="mb3">
                                <label>End Date</label>
                                <input type="date" name="End_date_edu" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Achievement</label>
                                <input type="text" name="Achievment" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Education Level</label>
                                <input type="text" name="Education_level" class="form control">
                            </div>

                            <h4>Experience</h4>
                            <div class="mb3">
                                <label>Company Name</label>
                                <input type="text" name="Company_name" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Company Location</label>
                                <input type="text" name="Loc_org" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Start Date Company</label>
                                <input type="date" name="Start_date_org" class="form control">
                            </div>

                            <div class="mb3">
                                <label>End Date Company</label>
                                <input type="date" name="End_date_org" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Job Title</label>
                                <input type="text" name="Job_title" class="form control">
                            </div>

                            <div class="mb3">
                                <label>Job Description</label>
                                <input type="text" name="Job_desc" class="form control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class ="btn btn-primary"> Submit </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
