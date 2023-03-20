<div>
    <form wire:submit.prevent="doSomething" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Username
            </label>
            <input
                wire:model="state.username"
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text">
            @error('state.username')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Email
            </label>
            <input
                wire.model="state.email"
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                type="email">
            @error('state.email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Create user
            </button>
        </div>
    </form>
</div>
