<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Theme;
use Illuminate\Http\Request;
use App\Filters\ThreadFilters;

class ThreadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Theme $theme, ThreadFilters $filters)
    {
        $threads = $this->getThreads($theme, $filters);

        return view('threads.index', compact('threads'));
    }


    public function create()
    {
        return view('threads.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'theme_id' => 'required|exists:themes,id'
        ]);

        $thread = Thread::create([
            'user_id' => auth()->id(),
            'theme_id' => request('theme_id'),
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect($thread->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($theme, Thread $thread)
    {
        return view('threads.show', [
            'thread' => $thread,
            'replies' => $thread->replies()->paginate(5)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    protected function getThreads(Theme $theme, ThreadFilters $filters)
    {
        $threads = Thread::latest()->filter($filters);

        if ($theme->exists) {
            $threads->where('theme_id', $theme->id);
        }

        return $threads->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update($theme, Thread $thread)
    {
        $this->authorize('update', $thread);

        $thread->update(request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]));
        return $thread;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy($theme, Thread $thread)
    {
        $thread->delete();
        if (request()->wantsJson()) {
            return response([], 204);
        }
        return redirect('/threads');
    }
}
