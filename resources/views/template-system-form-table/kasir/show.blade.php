<!-- Menambahkan ID pada form untuk referensi -->
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tabel Menu</h4>
            <div class="menu-container align-content-center">
                <div class="row">
                    @foreach($data as $item)
                    <div class="col-sm-6 mb-3 mb-sm-0 mt-2">
                        <div class="card">
                            <img src="img/desktop.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <p class="id-product" style="display: none;">{{$item->id}}</p>
                                <h5 class="card-title">{{$item->nama_produk}}</h5>
                                <h5 class="card-subtitle mb-2 text-body-secondary harga">{{$item->harga}}</h5>
                                <p class="card-text">Stok: {{$item->stok}}</p>
                                <a href="#" class="btn btn-primary add-order-btn" data-product-id="{{$item->id}}">Tambah Pesanan</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="" id="tambah-kasir">
                @csrf
                @method('POST')
                <h4 class="card-title">Tabel Daftar Pesanan</h4>
                <div class="form-group">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <input type="text" class="form-control id_pelanggan" id="id_pelanggan" name="id_pelanggan" placeholder="Masukkan ID Pelanggan">
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="order-list">
                        </tbody>
                    </table>
                    <div id="total_harga" class="m-3 total-harga" name="total_harga">Total: $0</div>
                </div>
                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-primary simpan-penjualan-btn">Simpan</button>
            </form>
        </div>
    </div>
</div>
