<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function addTopic()
    {
        $data['title'] = 'Add Topic';
        return view('topic.add_topic', $data);
    }
    public function saveTopic(Request $request)
    {
        $request->validate([
            "topic_name" => 'required'
        ]);
        $topic = New Topic();
        $topic->topic_name = $request->topic_name;
        $topic->save();
        return back()->with('success_message', 'Topic Added Successfully');
    }
}
