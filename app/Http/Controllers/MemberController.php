<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MemberController extends Controller
{
    public function addMember()
    {

        $allMembers = Member::all();

        return view('admin_view.team.add_member', compact('allMembers'));
    }

    public function storeMember(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'member_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required',
        ], [
            'name.required' => 'Name is Required',
            'member_img.required' => 'Image Is Required',
            'member_img.image' => 'Enter Real Image',
            'member_img.mimes' => 'Image Must Be Is [ jpg, png, jpeg, gif, svg]',
            'description' => 'Pio is Required',
        ]);


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

        return redirect()->back()->with($notification);
    }

    public function editMember($id)
    {
        $member = Member::findOrFail($id);

        return view('admin_view.team.edit_member', compact('member'));
    }

    public function updateMember(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'job_title' => 'required',
            'member_img' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required',
        ], [
            'name.required' => 'Name is Required',
            'member_img.image' => 'File must be image',
            'member_img.mimes' => 'image must be jpg,png,jpeg,gif,svg',
            'job_title.required' => 'job title is Required',
            'description' => 'Pio is Required',
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


    public function ActiveMember($id)
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


    public function disActiveMember($id)
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

    public function delete($id)
    {

        Member::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Member Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
