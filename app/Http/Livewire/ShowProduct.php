<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Supplier;
use Livewire\Component;
use App\Models\Product as Entities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class ShowProduct extends Component
{
    use WithPagination;
    public $search;
    public $sortField='name';
    public $sortDirection ='desc';    
    public $titleEditModal = 'Edit';
    public Entities $editing;
    public Entities $deleting;
    public $dropdown;
    public $dropdown2;
    public $harga;
    public $hargaDiskon;
    public $diskon;
    public $diskonValue;
    

    public function mount(){
        $this->dropdown = Category::all();
        $this->dropdown2 = Supplier::where('active', true)->get();
    }

    public function rules() { 
        return [
            'editing.name' => 'required|min:3',            
            'editing.category_id' => 'required',            
            'editing.supplier_id' => 'required',            
            'editing.price' => 'required',            
            'editing.price_discount' => 'required',                                   
            'editing.discount' => 'required',                                   
            'editing.discount_value' => 'required',                                   
        ]; 
    }

    public function makeBlankTransaction(){
        return Entities::make();
    }

    public function create(){
        $this->editing =  $this->makeBlankTransaction();
        $this->titleEditModal='Tambah';
    }

    public function edit(Entities $entity){
        $this->editing = $entity;
         $this->titleEditModal='Edit';
    }

    public function deleteId(Entities $entity)
    {
        $this->deleting = $entity;
    }

    public function delete(){
        $this->deleting->delete();
        $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Data Berhasil di Delete!!"
            ]);
    }

    public function sortBy($field){

        if($this->sortField == $field){
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        }else{
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }
   
    public function changeActive(Entities $entity, $akses){
        $entity->active = $akses;
        $entity->save();
        
    }

    public function save()
    {
        $this->validate();       

        try {
            $this->editing->save();    
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Data Berhasil Disimpan!!"
            ]);
            $this->dispatchBrowserEvent('closeModal'); 
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert',[
                'type'=>'error',
                'message'=>"Data Tidak Berhasil Disimpan!!"
            ]);
        }
    }

  
    public function render()
    {
        return view('livewire.show-product', [
         'entities' => Entities::leftJoin('categories', 'products.category_id','=','categories.id')  
         ->leftJoin('suppliers', 'products.supplier_id','=','suppliers.id')    
        ->select('products.*', 'categories.name as nameCategory','suppliers.name as nameSupplier')
        ->where('products.name','like',"%{$this->search}%")
        ->orWhere('suppliers.name','like',"%{$this->search}%")
        ->orWhere('categories.name','like',"%{$this->search}%")
        ->orderBy($this->sortField, $this->sortDirection)
        ->paginate(10)
        ]);
    }

   
   
    public function priceDiscount()
    {
        $this->hargaDiskon = $this->editing->price_discount;
        $this->editing->discount_value = $this->editing->price -  $this->hargaDiskon ;
        $this->diskonValue = $this->editing->discount_value;
        $this->editing->discount =  ($this->diskonValue/$this->editing->price) * 100 ;
    }

    public function discount()
    {
        $this->diskon = $this->editing->discount;
        $this->editing->discount_value = $this->editing->price *  ($this->diskon/100) ;
        $this->diskonValue = $this->editing->discount_value;
        $this->editing->price_discount =  $this->editing->price - $this->diskonValue;
    }

    public function discountValue()
    {
        $this->diskonValue = $this->editing->discount_value;
        $this->editing->price_discount = $this->editing->price - $this->diskonValue ;
        $this->diskon=  100 * ($this->diskonValue/$this->editing->price) ;
        $this->editing->discount =  $this->diskon;
    }


}
