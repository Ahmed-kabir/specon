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
        $topic = new Topic();
        $topic->topic_name = $request->topic_name;
        $topic->save();
        return back()->with('success_message', 'Topic Added Successfully');
    }

    public function manageTopic()
    {
        $data['title'] = 'Manage Topic';
        $data['topics'] = Topic::paginate(5);
        return view('topic.manage_topic', $data);
    }

    public function editTopic(Request $request, $id)
    {
        $data['title'] = 'Edit Topic';
        $data['topic'] = Topic::find($id);
        return view('topic.edit_topic', $data);
    }

    public function updateTopic(Request $request, $id)
    {

        $topic = Topic::where('id', $id)->first();

        $topic->topic_name = $request->topic_name;

        $topic->save();
        return redirect()->route('manageTopic')->with('success_message', 'Topic Updated Successfully');
    }

    public function deleteTopic($id)
    {
        $topic = Topic::where('id', $id)->first();
        $topic->delete();
        return redirect()->route('manageTopic')->with('success_message', 'Topic Deleted Successfully');
    }
}
