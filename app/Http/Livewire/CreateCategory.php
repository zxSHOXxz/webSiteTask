<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Exception;
use Livewire\WithFileUploads;

class CreateCategory extends Component
{
    use WithFileUploads;

    public $name;
    public $image;

    public function render()
    {
        return view('livewire.create-category');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|min:3|max:20',
            'image' => 'image|max:1024',
        ], [
            'name.required' => 'الاسم مطلوب',
            'name.min' => 'لا يقبل أقل من 3 حروف',
            'name.max' => 'لا يقبل أكثر من 20 حروف',
        ]);

        try {
            $category = new Category();
            $category->name = $validatedData['name'];

            if ($this->image) {
                $imageName = time() . 'image.' . $this->image->getClientOriginalExtension();
                $this->image->storeAs('public/images/category', $imageName);
                $category->image = $imageName;
            }

            $isSaved = $category->save();

            if ($isSaved) {
                session()->flash('message', 'تمت الإضافة بنجاح.');
                $this->emit('categoryAdded', ['message' => 'تمت الإضافة بنجاح']);
            } else {
                session()->flash('error', 'فشلت عملية التخزين.');
                $this->emit('categoryError', ['message' => 'فشلت عملية التخزين']);
            }
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('categoryError', ['message' => $e->getMessage()]);
        }
    }
}
