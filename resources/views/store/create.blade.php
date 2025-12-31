<x-app-layout>
    <div class="max-w-xl mx-auto mt-10">
        <form method="POST">
            @csrf

            <input
                type="text"
                name="name"
                placeholder="Store Name"
                class="w-full border p-2 rounded mb-3"
            >

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Create Store
            </button>
        </form>
    </div>
</x-app-layout>
