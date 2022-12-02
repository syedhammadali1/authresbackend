<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTempPostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\TempPost;
use App\Models\Type;
use App\Models\User;
use App\Notifications\TempPostNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class FrontendController extends Controller
{
    function uploadPost(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::all();
            $types = Type::all();
            $html = view('frontend.inner-pages.components.upload-post-component', compact('categories', 'types'))->render();
            return response()->json([
                'html' => $html
            ]);
        }
        $categories = Category::all();
        $types = Type::all();
        return view('frontend.inner-pages.upload-post', compact('categories', 'types'));
    }

    function uploadTempPost(StoreTempPostRequest $request)
    {
        $admins = User::where('role_id', 1)->get();
        DB::transaction(function () use ($request, &$admins) {
            $post = Post::create($request->validated());
            $post->addMedia($request->file('file'))
                ->toMediaCollection();
            $request->request->add(['post_id' => $post->id]);
            $tempPost = TempPost::create($request->all());
            Notification::send($admins, new TempPostNotification());
        });
        return redirect()->back();
    }


    function markAsRead()
    {
        $unreadNotifications = auth()->user()->notifications->whereNull('read_at');

        foreach ($unreadNotifications as $unreadNotification) {
            $unreadNotification->markAsRead();
        }
        return;
    }
}
