<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personal = Personal::all();
        $education = Education::all();
        $experience = Experience::all();
        return view ('personal.index', compact('personal','education', 'experience'));
    }

    public function create(){
        
        return view ('personal.create');
    }

    public function store(Request $request){

        $personal = Personal::create([
            'deskripsi' => $request->deskripsi,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'telephone_number' => $request->telephone_number,
            'link_profile' => $request->link_profile,
        ]);

        $personal->education()->create([
            'Edu_institution' => $request->Edu_institution,
            'Loc_edu' => $request->Loc_edu,
            'Start_date_edu' => $request->Start_date_edu,
            'End_date_edu' => $request->End_date_edu,
            'Achievment' => $request->Achievment,
            'Education_level' => $request->Education_level,
        ]);

        $personal->experience()->create([
            'Company_name' => $request->Company_name,
            'Loc_org' => $request->Loc_org,
            'Start_date_org' => $request->Start_date_org,
            'End_date_org' => $request->End_date_org,
            'Job_desc' => $request->Job_desc,
            'Job_title' => $request->Job_title,
        ]);
        
        return redirect('personal')->with('message', 'Personal Added');
    }

    public function edit(Personal $personal){

        //return $personal;
        return view('personal.edit', compact('personal'));

    }

    public function update(Personal $personal, Request $request){

        $personal->update([
            'deskripsi' => $request->deskripsi,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'telephone_number' => $request->telephone_number,
            'link_profile' => $request->link_profile,

        ]);

        $personal->education()->update([
            'Edu_institution' => $request->Edu_institution,
            'Loc_edu' => $request->Loc_edu,
            'Start_date_edu' => $request->Start_date_edu,
            'End_date_edu' => $request->End_date_edu,
            'Achievment' => $request->Achievment,
            'Education_level' => $request->Education_level,
        ]);

        $personal->experience()->update([
            'Company_name' => $request->Company_name,
            'Loc_org' => $request->Loc_org,
            'Start_date_org' => $request->Start_date_org,
            'End_date_org' => $request->End_date_org,
            'Job_desc' => $request->Job_desc,
            'Job_title' => $request->Job_title,
        ]);


        return redirect('personal')->with('message', 'Data berhasil diupdate');
    }

}
