
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Category') }}
            </h2>
            
        </div>
    </x-slot>


    <div class="p-4 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        <div class="flex justify-between">
            <div class="shadow flex">
                <input class="w-full text-green-500 border-gray-300 rounded focus:border-green-300 focus:ring focus:ring-green-500 dark:border-gray-600 dark:bg-dark-eval-1 dark:focus:ring-offset-dark-eval-1" type="text" placeholder="Search..."
                wire:model="search"
                >
                <button class="rounded bg-transparant w-auto flex justify-end items-center text-green-500 p-2 hover:text-green-400">            
                    <x-heroicon-s-search  class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                </button>           
            </div>
            <div class="">
                <x-button class="justify-center w-full gap-2" data-toggle="modal" data-target="#formModal" wire:click="create">
                    <x-heroicon-o-plus-circle class="w-6 h-6" aria-hidden="true" />
                    <span>{{ __('Tambah Baru') }}</span>
                </x-button>
                
            </div>   
                             
        </div>

        <div class="mt-3">
            <table class="border-separate border w-full ">
                <thead class="">
                    <tr >
                        <th style="line-height: 30px; background-color: rgba(243, 244, 246, var(--tw-bg-opacity));" class="text-gray-500 "
                        wire:click="sortBy('name')"
                        >
                            <div class="flex justify-center">
                                <x-heroicon-s-switch-vertical class="w-6 h-6" />Nama
                            </div>
                       </th>                                               
                        <th style="line-height: 50px; background-color: rgba(243, 244, 246, var(--tw-bg-opacity));" class=" text-gray-100">.</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($entities as $entity )
                        <tr wire:loading.class.delay="opacity-50">
                            <td class="px-6 text-sm text-gray-700">{{ $entity->name }}</td>                                                                                   
                            <td>                                                                                                                                                       
                                <div class="dropdown py-3">
                                    <button class="dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                             aria-expanded="false">
                                             Aksi
                                    </button>
                                    <div class="dropdown-menu animated--fade-in"
                                         aria-labelledby="dropdownMenuButton">
                                               <x-dropdown-link  wire:click="edit({{ $entity->id }})"
                                                data-toggle="modal" data-target="#formModal"
                                                >Edit</x-dropdown-link>    
                                                <x-dropdown-link  wire:click="deleteId({{ $entity->id }})"
                                                data-toggle="modal" data-target="#deleteModal"
                                                >Delete</x-dropdown-link>                                                     
                                     </div>
                                </div>
                                                                                   
                            </td>                                                
                        </tr>
                                        
                        @empty

                        <tr>
                            <td colspan="6" style="text-align: center;"> 
                                <p class="py-3">                               
                                    <div class="flex justify-center mb-4">
                                        <x-heroicon-s-inbox-in  class="w-6 h-6" />Data yang Anda cari tidak ditemukan
                                    </div>
                                </p>
                                                   
                             </td>
                        </tr>
                    @endforelse 
                                       
                                       
                    </tbody>
            </table>                       
        </div>
        <div class="mt-4">{{ $entities->links() }}</div>

   
   <!-- Modal Form-->
   <form action="">            
            <div wire:ignore.self class="modal fade" id="formModal"
             tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                <div class="modal-dialog" wire:loading.class.delay="opacity-50">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">
                            {{ $titleEditModal }}
                             Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                       
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name"
                            wire:model.defer="editing.name" required
                            >
                           @error('editing.name') <p class="error text-sm text-red-500 w-full">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"
                        wire:click.prevent="save()"  
                        >Save changes</button>
                    </div>
                    </div>
                </div>
            </div>        
        </form>

        <!-- Modal Delete-->
        <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-red-400">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Akan menghapus Data Ini!!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" wire:click.prevent="delete()" data-dismiss="modal">Ya Saya Yakin</button>
            </div>
            </div>
        </div>
        </div>
    
</div>

    
    