<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\NewsLetterRequest;
use App\Http\Requests\Dashboard\UnsubscribeNewsletterRequest;
use App\Jobs\NewsLetterJob;
use App\Models\NewsLetter;
use App\Models\NewsLetterMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class NewsLetterController extends Controller
{
    private $news_letter;
    private $message;

    public function __construct(NewsLetter $news_letter, NewsLetterMessage $message)
    {
        $this->middleware(['permission:read-news_letters'])->only('index', 'show');
        $this->middleware(['permission:show_subscribed_users-news_letters'])->only('subscribedUsers');
        $this->middleware(['permission:create-news_letters'])->only('create', 'store');
        $this->middleware(['permission:resend-news_letters'])->only('edit', 'update');
        $this->middleware(['permission:delete-news_letters'])->only('destroy');
        $this->middleware(['permission:delete_subscribed_users-news_letters'])->only('deleteSubscribedUsers');
        $this->news_letter = $news_letter;
        $this->message = $message;
    }

    public function index()
    {
        try {
            $news_letters = $this->message->latest('id')->get();
            return view('admin.news_letters.index', compact('news_letters'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function create()
    {
        return view('admin.news_letters.create');
    }


    public function store(NewsLetterRequest $request)
    {
        try {
            $mail_data = $request->only(['subject','message']);
            $emails = $this->news_letter->chunk(100,function ($data) use ($mail_data){

                dispatch(new NewsLetterJob($data,$mail_data));
            });


            $this->message->create($mail_data);

            return redirect()->route('news-letters.index')->with(['success' => __('message.created_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function show(NewsLetterMessage $newsLetter)
    {
        return view('admin.news_letters.show', compact('newsLetter'));
    }

    public function edit(NewsLetterMessage $newsLetter)
    {
        return view('admin.news_letters.edit', compact('newsLetter'));
    }

    public function update(NewsLetterRequest $request, NewsLetterMessage $newsLetter)
    {
        try {
            $requested_data = $request->only(['subject','message']);
            $requested_data['updated_at'] = Carbon::now();
            $newsLetter->update($requested_data);
            $emails = $this->news_letter->chunk(100,function ($data) use ($requested_data){

                dispatch(new NewsLetterJob($data,$requested_data));
            });
            return redirect()->route('news-letters.index')->with(['success' => __('message.updated_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function destroy(NewsLetterMessage $newsLetter)
    {
        try {
            $newsLetter->delete();
            return redirect()->route('news-letters.index')->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }

    public function deleteSubscribedUsers($id)
    {
        try {
            $user = $this->news_letter->find($id);
            $user->delete();
            return redirect()->back()->with(['success' => __('message.deleted_successfully')]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.deleted_successfully')]);
        }
    }

    public function subscribedUsers(){
        try {
            $users = $this->news_letter->latest('id')->paginate(PAGINATION_COUNT);
            return view('admin.news_letters.subscribed',compact('users'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function unsubscribe($id){
        try {
            $user = $this->news_letter->find($id);
            if(!isset($user))
                return view('errors.404');
            return view('admin.news_letters.unsubscribe',compact('user'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }

    public function unsubscribeAction(Request $request){
        try {
            $user = $this->news_letter->find($request->id);
            if(!isset($user))
                return view('errors.404');
            $user->delete();
            return view('admin.news_letters.unsubscribe_confirmation')->with(['success' => __('message.unsubscribed')]);
        } catch (\Exception $e) {
            return view('errors.404');
        }
    }
}
