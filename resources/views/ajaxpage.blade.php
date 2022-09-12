@foreach ($data as $item )

<div class="row ml-5">
    <img src="/images/{{$item->gambar[0]->gambar}}" width="100px" alt="..." class="img-thumbnail" style="border-radius: 10px;">
    <div class="col-4 col-span"><a href="/produk-detail/{{ $item->id }}">{{ $item->nama_produk }}</a>
    </div>
    <div><a>{{ $item->harga_produk }}</a></div>
@endforeach
