<div class="row">
    @foreach ($data as $item )
    <div class="card" style="width: 18rem; border:dashed #ebebeb; border-radius:2px; margin-right:5px;">
        <img src="/images/{{$item->gambar[0]->gambar}}" width="140px" alt="..." class="img-thumbnail" style="margin-left:25%; margin-top:10%;">
        <div class="card-body">
            <span><a href="/produk-detail/{{ $item->id }}">{{ $item->nama_produk }}</a></span>
          <span><p class="text-info">Rp.{{ $item->harga_produk }}</p></span>
        </div>
    </div>
    @endforeach
</div>

