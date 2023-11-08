@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('message'))
                <div class="alert alert-success">{{ 'berhasil'}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>
                        Personal Information
                        <a href="{{ url('/personal/create')}}" class="btn btn-primary float-end">Add Personal Information</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>desc</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>address</th>
                                <th>PN</th>
                                <th>city</th>
                                <th>link</th>
                                <th>Inst</th>
                                <th>Loc</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Achiev</th>
                                <th>EduLevel</th>
                                <th>comp</th>
                                <th>Jl</th>
                                <th>Stdt</th>
                                <th>Eddt</th>
                                <th>Jdesc</th>
                                <th>Jtit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personal as $itemP)
                            
                            <tr>
                               
                                <td>{{$itemP->id}}</td>
                                <td>{{$itemP->deskripsi}}</td>
                                <td>{{$itemP->full_name}}</td>
                                <td>{{$itemP->email}}</td>
                                <td>{{$itemP->address}}</td>
                                <td>{{$itemP->telephone_number}}</td>
                                <td>{{$itemP->city}}</td>
                                <td>{{$itemP->link_profile}}</td>

                                @foreach ($itemP->education as $education)
                                <td>{{$education->Edu_institution}}</td>
                                <td>{{$education->Loc_edu}}</td>
                                <td>{{$education->Start_date_edu}}</td>
                                <td>{{$education->End_date_edu}}</td>
                                <td>{{$education->Achievment}}</td>
                                <td>{{$education->Education_level}}</td>
                                @endforeach

                                @foreach ($itemP->experience as $experience)
                                <td>{{$experience->Company_name}}</td>
                                <td>{{$experience->Loc_org}}</td>
                                <td>{{$experience->Start_date_org}}</td>
                                <td>{{$experience->End_date_org}}</td>
                                <td>{{$experience->Job_desc}}</td>
                                <td>{{$experience->Job_title}}</td>
                                @endforeach
                                
                        
                                 <td>
                                    <a href="{{ url('personaledit/'.$itemP->id.'/edit')}}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection