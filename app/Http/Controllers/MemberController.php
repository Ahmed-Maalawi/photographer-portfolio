<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;


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

        $notification = array(
            'message' => 'Member Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with('toast_success', 'member added successfully !');
    }

    public function editMember($id)
    {
        $member = Member::findOrFail($id);

        return view('admin_view.team.edit_member', compact('member'));
    }

    public function updateMember(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3',
            'job_title' => 'required|min:3',
            'member_img' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required|min:3',
        ]);

        $id = $request->member_id;

        $member = Member::findOrFail($id);
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
                'updated_at' => Carbon::now(),
            ]);

        } else {

            $member->update([
                 'name' => $request->name,
                 'jop_title' => $request->job_title,
                 'pio' => $request->description,
                 'updated_at' => Carbon::now(),
             ]);
        }

        $notification = array(
            'message' => 'Member Updated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('team')->with($notification);
    }

    public function ActiveMember(Int $id)
    {
        Member::findOrFail($id)->update([
            'status' => true,
            'updated_at' =>  Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Member Activated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }


    public function disActiveMember(Int $id)
    {
        Member::findOrFail($id)->update([
            'status' => false,
            'updated_at' =>  Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Member Dis-Activated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    public function delete(Int $id)
    {

        Member::findOrFail($id)->delete();

        alert()->question('Are You Sure ?','this member will be removed ?');

        $notification = array(
            'message' => 'Member Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with('toast_success', 'member deleted successfully!');
    }
}
