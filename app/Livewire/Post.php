<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Posts;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Livewire\WithFileUploads;

use Livewire\Attributes\Validate;
use Auth;


class Post extends Component
{
    use WithPagination, WithoutUrlPagination,WithFileUploads;

    public $id;
    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $content;
    public $author;
    public $photo;
    public $savedPhotoPath;

    public function mount()
    {
        $this->getPosts();
    }
    public function createOrUpdatePost()
    {
        $this->validate();

        if ($this->photo) {
            $filename = $this->photo->store('uploads', 'public');
        }


        $post = Posts::updateOrCreate(['id' => $this->id],[
            'title' => $this->title,
            'content' => $this->content,
            'author' => Auth::user()->name,
            'photo' =>  $this->photo ? $filename : $this->savedPhotoPath
        ]);
        
        $this->resetInputFields();

    }
    public function editPost($id)
    {
        $this->resetInputFields();

        $post = Posts::find($id);
        $this->id = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->savedPhotoPath = $post->photo;
    }

    public function deletePost($id)
    {
        $post = Posts::find($id);
        $post->delete();
        
    }

    public function resetInputFields()
    {
        $this->id = '';
        $this->title = '';
        $this->content = '';
        $this->photo = '';
        $this->savedPhotoPath = '';
        
    }

    public function getPosts()
    {
      return Posts::orderBy('id', 'desc')->paginate(5);
  
    }

    public function render()
    {
        return view('livewire.post', [
            'posts' => $this->getPosts()
        ]);
    }
}
