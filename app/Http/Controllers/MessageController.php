<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Queue;
use Log;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $messages = \App\Message::with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('messages.list', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     * @return void
     */
    public function create()
    {
        //
        if ($a = 1) {
            echo 123;
            echo 2;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'message-content' => 'required|max:255',
        ]);

        $message = new \App\Message();
        $content = $request->input('message-content');
        // 可以使用auth和request
        // $user = \Auth::user();
        $user = $request->user();

        $message->content = $content;
        $message->user()->associate($user);
        $message->save();

        return redirect('message');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
