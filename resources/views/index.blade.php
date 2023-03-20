<x-layouts.app>
    <div>this is a blade view (no livewire)</div>

    <div>
        <!-- Outside of any Livewire component -->
        <button onclick="Livewire.emit('openModal', 'create-user')">Create User</button>
    </div>
</x-layouts.app>
