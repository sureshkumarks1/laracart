<x-app-layout>
    <div class="max-w-xl mx-auto mt-10">
        <form method="POST">
            @csrf

            <input name="name" placeholder="Product Name" class="input" />
            <input name="price" placeholder="Price" class="input" />
            <input name="stock" placeholder="Stock" class="input" />

            <button class="btn">Create Product</button>
        </form>
    </div>
</x-app-layout>
