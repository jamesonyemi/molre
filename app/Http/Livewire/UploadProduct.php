<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Livewire\WithFileUploads;


class UploadProduct extends Component
{

    use WithFileUploads;

    public $photo;
    public $price;
    public $product_name;


    protected $rules = [
        'photo' => 'file|mimes:png,jpg,pdf|max: 1024 * 5', // 5MB Max
        'price' => 'required|integer|min:0',
        'product_name' => 'required|string|min:4',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.upload-product');
    }

    public function save()
    {

        $this->validate();
        $create_product = Products::create([
            'photo' => $this->photo->store('product_images'),
            'price' => $this->price,
            'product_name' => $this->product_name,
            'currency_symbol' => '$',
         ]);

         session()->flash('message', 'Product "#'.$create_product->id.'" successfully updated.');
         return redirect()->route('products.index');

    }


}
