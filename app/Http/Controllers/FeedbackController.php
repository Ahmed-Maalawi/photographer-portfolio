<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FeedbackController extends Controller
{

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin_view.feedback.manage_feedback', compact('feedbacks'));
    }

    public function addFeedback()
    {
        return view('admin_view.feedback.add_feedback');
    }

    public function storeFeedback(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'profile_img' => 'image | mimes:jpg,png,jpeg,gif,svg:',
            'feedback' => 'required',
            'job' => 'required',
        ],[
            'name.required' => 'name is required',
            'profile_img.image' => 'enter real image',
            'profile_img.mimes' => 'image must be [ jpg, png, jpeg, gif, svg ]',
            'feedback.required' => 'feedback is required',
            'job.required' => 'job is required',
        ]);


        $img = $request->file('profile_img');

        $createName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        $path = 'uploads/client_img/'.$createName;
        Image::make($img)->save($path);

        $feedback = Feedback::insert([
            'name' => $request->name,
            'profile_img' => $path,
            'feedback' => $request->feedback,
            'job' => $request->job,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'feedback added successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('index.feedback')->with($notification);
    }

    public function editFeedback($id)
    {
        $feedback = Feedback::findOrFail($id);

        return view('admin_view.feedback.edit_feedback',compact('feedback'));
    }


    public function updateFeedback(Request $request)
    {

        $request->validate([
            'client_name' => 'required',
            'client_img' => 'image | mimes:jpg,png,jpeg,gif,svg:',
            'feedback' => 'required',
            'job_title' => 'required',
        ],[
            'client_name.required' => 'name is required',
            'client_img.image' => 'enter real image',
            'client_img.mimes' => 'image must be [ jpg, png, jpeg, gif, svg ]',
            'feedback.required' => 'feedback is required',
            'job_title.required' => 'job is required',
        ]);


        $id = $request->feedback_id;
        $feedback = Feedback::findOrFail($id);

        if ($request->file('client_img'))
        {

            $newImg = $request->file('client_img');
            $createName = hexdec(uniqid()). '.' . $newImg->getClientOriginalExtension();
            $newPath = 'uploads/client_img/'.$createName;

            Image::make($newImg)->save($newPath);
            unlink($feedback->profile_img);

            $feedback->update([
                'name' => $request->client_name,
                'profile_img' => $newPath,
                'feedback' => $request->feedback,
                'job' => $request->job_title,
                'updated_at' => Carbon::now(),
            ]);

        } else {

            $feedback->update([
                'name' => $request->client_name,
                'feedback' => $request->feedback,
                'job' => $request->job_title,
                'updated_at' => Carbon::now(),
            ]);
        }

        $notification = array(
            'message' => 'feedback updated successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('index.feedback')->with($notification);
    }
    public function deleteFeedback($id)
    {

        Feedback::findOrFail($id)->delete();

        $notification = array(
            'message' => 'feedback deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function disActive($id)
    {
        Feedback::findOrFail($id)->update([
            'status' => false,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'feedback Dis-Active successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }


    public function Activate($id)
    {
        Feedback::findOrFail($id)->update([
            'status' => true,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'feedback Activated successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }
}
