<?php

namespace App\Http\Controllers;
use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FeedController extends Controller
{
    public function index(){

        $feeds = Feed::paginate(5);
        return view('pages.feed.index', compact('feeds'));

    }

    public function create(){

        return view('pages.feed.create');

    }

    public function edit(){

        return view('pages.feed.edit');

    }

    public function show(Feed $feed){
        
        //dd($feed);
        Log::debug("Show feed", ["feed"=> $feed]);
        //return, 'This is feed List'
        return view('pages.feed.show',compact('feed'));

    }

    public function store(Request $request){
        
        //Gate:authorize('update', $feed)
        $validated_request = $request->validate([
                'title' =>'required | string | max:100 | min:3',
                'description'=> 'required | string | max:300',
        ]);

        //add a user id to the $validated_request
        $validated_request['user_id'] = 1;

        // ORM
        // $feed->create($validated_request);
        Feed::create($validated_request);
        return redirect()->route('feeds')->with('success','Feed created successfully!');

        // $feed->update($this->validateRequest($request));
        //return redirect()->route('feeds')->with('success','Feed created successfully!');

    }
    public function update(Request $request,Feed $feed){
        
        //Gate:authorize('update', $feed)
        $validated_request = $request->validate([
                'title' =>'required | string | max:100',
                'description'=> 'required | string | max:300',
        ]);

        $feed->update($validated_request);
        return redirect()->route('feeds');

        // $feed->update($this->validateRequest($request));
        // return redirect()->route('feeds')->with('sucess', 'Feed updated sucessfully');

    }
}
