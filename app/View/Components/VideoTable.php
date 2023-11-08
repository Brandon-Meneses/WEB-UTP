<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VideoTable extends Component
{
    public $videos;

    public function __construct($videos)
    {
        $this->videos = $videos;
    }

    public function render()
    {
        return view('components.video-table');
    }
}
