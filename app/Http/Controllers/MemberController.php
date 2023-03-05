<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class MemberController extends Controller
{
    public function addMember()
    {

        $allMembers = Member::all();

        return view('admin_view.team.add_member', compact('allMembers'));
    }

    public function storeMember(StoreMemberRequest $request)
    {
        $request->validated();

        $img = $request->file('member_img');

        $img_name = hexdec(uniqid()). '.' . $img->getClientOriginalExtension();
        $img_path = 'uploads/our_team/'.$img_name;
        Image::make($img)->save($img_path);

        $member = Member::insert([
           'name' => $request->name,
           'img_path' => $img_path,
           'jop_title' => $request->job_title,
           'pio' => $request->description,
           'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('toast_success', 'member added successfully !');
    }

    public function editMember(int $id)
    {
        $member = Member::findOrFail($id);

        return view('admin_view.team.edit_member', compact('member'));
    }

    public function updateMember(UpdateMemberRequest $request)
    {
        $request->validated();

        $member = Member::findOrFail($request['member_id']);
        $newImg = $request->file('member_img');

        if($newImg) {
            $createName = hexdec(uniqid()).'.'.$newImg->getClientOriginalExtension();
            $newpath = 'uploads/our_team/'.$createName;

            Image::make($newImg)->save($newpath);
            unlink($member->img_path);

            $member->update([
                'name' => $request->name,
                'img_path' => $newpath,
                'jop_title' => $request->job_title,
                'pio' => $request->description,
            ]);

        } else {

            $member->update([
                'name' => $request['name'],
                'jop_title' => $request['job_title'],
                'pio' => $request['description'],
            ]);
        }

        return redirect()->route('team')->with('toast_success', 'member updated successfully!');
    }

    public function ActiveMember(int $id)
    {
        Member::findOrFail($id)->update([
            'status' => true,
        ]);

        return redirect()->back()->with('toast_success', 'member activated!');
    }


    public function disActiveMember(Int $id)
    {
        Member::findOrFail($id)->update([
            'status' => false,
            'updated_at' =>  Carbon::now(),
        ]);

        return redirect()->back()->with('toast_success', 'member dis-activated');
    }

    public function delete(int $id)
    {
        Member::findOrFail($id)->delete();

        return redirect()->back()->with('toast_success', 'member deleted');
    }
}
