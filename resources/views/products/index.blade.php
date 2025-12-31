<x-app-layout>
    <div class="max-w-4xl mx-auto mt-10">
        <table class="w-full border">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>

            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
