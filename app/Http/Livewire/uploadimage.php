<?php

namespace App\Http\Livewire;

use App\Models\Files;
use Livewire\Component;
use Livewire\WithFileUploads;

class uploadimage extends Component
{
  use WithFileUploads;

  public $componentId;
  public $files;
  public $imgPath;

  public function mount()
  {
    $userId = 1;

    $imgPath = Files::where('user_id', $userId)->where('status', 'draft')->latest()->first();

    $imgPath = $imgPath[$this->componentId] ?? null;

    $this->imgPath = $imgPath;
  }

  public function save()
  {
    $userId = 1;

    $photoName = $this->files->store('files', 'public');

    $files_exists = Files::where('user_id', $userId)->where('status', 'draft');

    if ($files_exists->count()) {
      $files_exists->update([
        $this->componentId => $photoName,
      ]);
    } else {
      Files::create([
        'user_id' => $userId,
        $this->componentId => $photoName,
      ]);
    }

    $this->imgPath = $photoName;
  }
}