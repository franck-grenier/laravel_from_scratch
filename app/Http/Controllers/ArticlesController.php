<?php

namespace App\Http\Controllers;

use App\Events\ArticleCreated as ArticleCreatedEvent;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Tag;
use App\Notifications\ArticleCreated;
use App\Services\TagService;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

/**
 * Class ArticlesController
 * @package App\Http\Controllers
 */
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request, TagService $tagService)
    {
        if ($request->get('tag')) {
            $articles = Tag::where('name', $request->get('tag'))->firstOrFail()->articles();
        } else {
            $articles = Article::latest();
        }

        return view('spatial/articles/index', [
            'articles' => $articles->simplePaginate(8),
            'assigned_tags' => $tagService->getAssignedTags(),
            'filtered_tag' => $request->get('tag')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('spatial/articles/create', ['tags' => Tag::all()]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreArticleRequest $request)
    {
        $article = new Article($request->validate($request->rules()));
        $article->save();

        if ($request->has('tags')) {
            $article->tags()->attach($request->get('tags'));
        }

        Notification::send($request->user(), new ArticleCreated($article));
        ArticleCreatedEvent::dispatch($article);

        return redirect(route('articles_index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Article $article)
    {
        return view('spatial/articles/show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Article $article)
    {
        return view('spatial/articles/edit',
            [
                'article' => $article,
                'tags' => Tag::all()
            ]
        );
    }

    /**
     * @param Request $request
     * @param Article $article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreArticleRequest $request, Article $article)
    {

        $article->update($request->validate($request->rules()));

        if ($request->has('tags')) {
            $article->tags()->detach();
            $article->tags()->attach($request->get('tags'));
        }

        return redirect(route('articles_show', $article->slug));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
