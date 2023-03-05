<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Feedback;
use Carbon\Carbon;
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

    public function storeFeedback(StoreFeedbackRequest $request)
    {
        $request->validated();

        $img = $request->file('profile_img');

        $createName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        $path = 'uploads/client_img/'.$createName;
        Image::make($img)->save($path);

       Feedback::create([
           'name' => $request['name'],
           'profile_img' => $path,
           'feedback' => $request['feedback'],
           'job' => $request['job'],
       ]);

        return redirect()->route('index.feedback')->with('toast_success', 'feedback added successfully!');
    }

    public function editFeedback(int $id)
    {
        $feedback = Feedback::findOrFail($id);

        return view('admin_view.feedback.edit_feedback', compact('feedback'));
    }


    public function updateFeedback(UpdateFeedbackRequest $request)
    {
        $request->validated();

        $id = $request['feedback_id'];
        $feedback = Feedback::findOrFail($id);

        if ($request->file('client_img'))
        {
            $newImg = $request->file('client_img');
            $createName = hexdec(uniqid()). '.' . $newImg->getClientOriginalExtension();
            $newPath = 'uploads/client_img/'.$createName;

            Image::make($newImg)->save($newPath);
            unlink($feedback['profile_img']);

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

        $feedback->save();

//        $notification = array(
//            'message' => 'feedback updated successfully',
//            'alert-type' => 'info',
//        );

        return redirect()->route('index.feedback')->with('toast_success', 'feedback updated successfully!');
    }
    public function deleteFeedback($id)
    {

        Feedback::findOrFail($id)->delete();

        $notification = array(
            'message' => 'feedback deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with('toast_success', 'feedback deleted!');
    }

    public function disActive(int $id)
    {
        Feedback::findOrFail($id)->update([
            'status' => false,
            'updated_at' => Carbon::now(),
        ]);

//        $notification = array(
//            'message' => 'feedback Dis-Active successfully',
//            'alert-type' => 'info',
//        );

        return redirect()->back()->with('toast_success', 'feedback dis-active');
    }


    public function Activate(int $id)
    {
        Feedback::findOrFail($id)->update([
            'status' => true,
            'updated_at' => Carbon::now(),
        ]);

//        $notification = array(
//            'message' => 'feedback Activated successfully',
//            'alert-type' => 'info',
//        );

        return redirect()->back()->with('toast_success', 'feedback activated!');
    }
}
