<?php


namespace App\Services;


use App\Models\Article;
use Illuminate\Support\Collection;

class TagService
{
    protected $APIkey;

    /**
     * TagService constructor.
     */
    public function __construct(string $APIkey)
    {
        $this->APIkey = $APIkey;
    }

    public function getAssignedTags(int $nbTags = null): Collection
    {
        return Article::all()->pluck('tags.*.name')->collapse()->unique();
    }
}
