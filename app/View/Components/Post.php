<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $postId;
    public $username = '';
    public $hoursAgo;
    public $content = "";
    public $like = 0;
    public $dislikes = 0;
    public $comments = 0;
    public $share = 0;
    public $views = 0;
    public $showMore = false;

    public function __construct($postId, $username, $hoursAgo, $content, $like, $dislikes, $comments, $share, $views, $showMore)
    {   
        $this->postId   = $postId;
        $this->username = $username;
        $this->hoursAgo = $hoursAgo;
        $this->content  = $content;
        $this->like     = $like;
        $this->dislikes = $dislikes;
        $this->comments = $comments;
        $this->share    = $share;
        $this->views    = $views;
        $this->showMore = $showMore;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post');
    }
}
