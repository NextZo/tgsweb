@extends('template')
@section('main')
    <div class="container mx-auto flex flex-col">
        @foreach ($collection as $item)
            <div class="flex py-4 mb-6 rounded-lg shadow">
                <img src="http://127.0.0.1:8000/assets/{{ App\Models\Product::find($collection->keys()[$loop->iteration - 1])->kategori }}{{ App\Models\Product::find($collection->keys()[$loop->iteration - 1])->id }}.png"
                    alt="" class="h-36">
                <div class="flex flex-col w-full">
                    <div class="flex w-full pr-5">
                        <div>
                            <h1 class="text-xl font-semibold">
                                {{ App\Models\Product::find($collection->keys()[$loop->iteration - 1])->nama }}</h1>
                            <p class="text-sm text-slate-950">
                                Rp{{ App\Models\Product::find($collection->keys()[$loop->iteration - 1])->harga }} x
                                {{ count(explode(',', $item)) }}</p>
                        </div>
                    </div>
                    <p class="mt-auto uppercase">
                        @foreach (explode(',', $item) as $size)
                            {{ '[' . $size . ']' }}
                        @endforeach
                    </p>
                </div>
            </div>
        @endforeach

        <div class="modal fade rounded-none backdrop-blur-sm bg-transparent" id="checkout" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="checkoutLabel">Checkout</h1>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-body text-left">
                            <input type="text" placeholder="Alamat"
                                class="w-full mb-3 outline-none rounded-lg px-2 border-blue-600 text-sm" name="alamat"
                                required>
                            <input type="number" placeholder="08xxxxxxxxxx"
                                class="w-full mb-3 outline-none rounded-lg px-2 border-blue-600 text-sm" name="hp"
                                required>

                            <small>Metode Pembayaran</small>
                            <h2>COD (Cash or Duel)</h2>
                        </div>
                        <div class="modal-footer text-center">
                            <button type="submit"
                                class="border-2 px-2 py-1.5 rounded-lg border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white transition text-sm">Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if ($collection->isNotEmpty())
            <button
                class="text-center border-2 w-full my-4 py-2 rounded-lg text-blue-600 border-blue-600 hover:bg-blue-600 hover:text-white transition"
                data-bs-toggle="modal" data-bs-target="#checkout">Checkout</button>
        @else
            <div>
                <h1 class="text-2xl font-bold">Keranjang masih kosong nih</h1>
                <a href="/kategori" class="text-blue-600 underline">Mulai belanja</a>
            </div>
        @endif


        <script>
            const storage = {
                ...localStorage
            }

            if (Object.keys(storage).length != 0) {
                localStorage.clear()
                window.location = `/troli?storage=${JSON.stringify(storage)}`
            }
        </script>
    </div>
@endsection
