<?php

namespace App\Livewire;

use Livewire\Component;
use Unsplash;

class InputSearch extends Component
{
    public $text = "";
    public $images = [];

    public $page = 1;
    public $perPage = 30;

    public function searchImages() {
        Unsplash\HttpClient::init([
            'applicationId'	=> env('API_ACCESS_KEY', ''),
            'secret'	=> env('API_SECRET_KEY', ''),
            'callbackUrl'	=> 'https://your-application.com/oauth/callback',
            'utmSource' => 'Photodream'
        ]);
        
        $imagesData = Unsplash\Search::photos($this->text, $this->page, $this->perPage);
        for ($i=0; $i < $this->perPage; $i++) { 
            if(!isset($imagesData[$i])) break;
            $this->images[$i]['url'] = $imagesData[$i]['urls']['regular'];
            $this->images[$i]['alt'] = $imagesData[$i]['alt_description'];
        }
        $this->dispatch('contentChanged');
    }

    public function render()
    {
        return view('livewire.input-search');
    }
}
