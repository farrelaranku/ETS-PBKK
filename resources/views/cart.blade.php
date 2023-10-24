<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


     <div>

            <h3>TAMBAH DATA</h3>
        <form method="POST" action="/store">
                @csrf
                <div>
                   
                    <label for="type" class="form-label">Tipe:</label>

                    <select name="type" id="type">
                      <option value="baju">Baju</option>
                      <option value="celana">Celana</option>
                    </select>

                    {{-- <label for="type" class="form-label">Type:</label>
                    <input type="text" class="form-control" id="type" name="type" required>
              --}}
                </div>
                   
                   <br>
                    <div>

                   <label for="cond" class="form-label">Kondisi:</label>

                   <select name="cond" id="cond">
                     <option value="baik">Baik</option>
                     <option value="layak">Layak</option>
                     <option value="rusak">Rusak</option>
                   </select>


                    </div>
                   
                    <br>


                    <div>
                    <label for="keterangan" class="form-label">Keterangan:</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                </div>

        
                <br>
                <div>
                <label for="kecacatan" class="form-label">Kecacatan:</label>
                <input type="text" class="form-control" id="kecacatan" name="kecacatan" required>
            </div>


            <br>
                <div>
                    <label for="stock" class="form-label">Stock:</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                </div>

                    <br>

                    {{-- <div>
                        <label for="image">Upload Gambar:</label> <br>
                                <input type="file" class="form-control" id="image" name="image" required accept="image/*">
                              
                    </div> --}}

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>


        <hr>

        <div>
            <h3>Daftar Barang:</h3>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Kondisi</th>
                    <th>Keterangan</th>
                    <th>Kecacatan</th>
                    <th>Stock</th>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->cond }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->kecacatan }}</td>
                        <td>{{ $item->stock }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <hr>


        <div>
            <h3>EDIT DATA</h3>
            <form method="POST" action="/update">
                @csrf
                <div>
                    <label for="id" class="form-label">ID Data yang akan Diubah:</label>
                    <input type="number" class="form-control" id="id" name="id" required>
                </div>

                <div>
                <label for="cond" class="form-label">Kondisi:</label>

                <select name="cond" id="cond">
                  <option value="baik">Baik</option>
                  <option value="layak">Layak</option>
                  <option value="rusak">Rusak</option>
                </select>
            </div>

                <div>
                    <label for="keterangan" class="form-label">Keterangan (Kosongkan jika tidak ingin diubah):</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                </div>

                <div>
                    <label for="kecacatan" class="form-label">Kecacatan (Kosongkan jika tidak ingin diubah):</label>
                    <input type="text" class="form-control" id="kecacatan" name="kecacatan">
                </div>
                <div>
                    <label for="stock" class="form-label">Stock (Kosongkan jika tidak ingin diubah):</label>
                    <input type="number" class="form-control" id="stock" name="stock">
                </div>
                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>

        <hr>

        <div>
            <h3>HAPUS DATA</h3>
            <form method="POST" action="/delete">
                @csrf
                <div>
                    <label for="id" class="form-label">ID Data yang akan Dihapus:</label>
                    <input type="number" class="form-control" id="id" name="id" required>
                </div>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>


</body>
</html>