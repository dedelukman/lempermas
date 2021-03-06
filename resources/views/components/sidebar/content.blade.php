<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

   

    <x-sidebar.dropdown title="Penerimaan" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-archive class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Tambah Baru" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Daftar Transaksi" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
       
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Penjualan" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-s-shopping-cart class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Tambah Baru" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Daftar Transaksi" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
       
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Laporan" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-presentation-chart-bar  class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Rekap Penjualan" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        
       
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Master" :active="Str::startsWith(request()->route()->uri(), 'master')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="Produk" href="{{ route('master.product') }}"
            :active="request()->routeIs('master.product')" />
        <x-sidebar.sublink title="Produsen" href="{{ route('master.supplier') }}"
            :active="request()->routeIs('master.supplier')" />
        <x-sidebar.sublink title="Kategori" href="{{ route('master.category') }}"
            :active="request()->routeIs('master.category')" />       
        <x-sidebar.sublink title="Konsumen" href="{{ route('master.customer') }}"
            :active="request()->routeIs('master.customer')" />
    </x-sidebar.dropdown>

    
       
</x-perfect-scrollbar>