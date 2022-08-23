<div class="col-md-8">
    <div class="row mb-2">
        <div class="col-md-6">
            <label>Penyedia</label><br>
            <select class="form-control" name="id_penyelenggara">
                @foreach($partner as $data)
                    <option value="{{$data->id}}">{{$data->nama_partner}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>Judul</label><br>
            <input class="form-control" type="text" name="judul" value="{{$event->judul}}">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <label>Ringkasan</label><br>
            <textarea class="form-control" cols="30" rows="3" name="ringkasan">{{$event->ringkasan}}</textarea>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-12">
            <label>Isi</label><br>
            <textarea class="form-control konten" id="konten" cols="30" rows="10" name="isi">{!! $event->isi !!}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Tanggal Publish</label><br>
            <input type="date" class="form-control" name="date_publish" value="{{$event->date_publish}}">

        </div>
        <div class="col-md-3">
            <label>Status</label><br>
            <select class="form-control" name="status">
                <option value="">---------</option>
                <option value="0" @if($event->status === 0) selected @endif>Blokir</option>
                <option value="1" @if($event->status === 1) selected @endif>Publish</option>
            </select>

        </div>
        <div class="col-md-3">
            <label>Tanggal Mulai</label><br>
            <input type="date" class="form-control" name="date_mulai" value="{{$event->date_mulai}}">
        </div>
        <div class="col-md-3">
            <label>Tanggal Selesai</label><br>
            <input type="date" class="form-control" name="date_selesai" value="{{$event->date_selesai}}">
        </div>
    </div>
    <div class="form-group">
        <label>Tempat</label><br>
        <input class="form-control" name="tempat" value="{{$event->tempat}}">
    </div>
    <div class="row">
        <div class="col-md-3">
            <label>Harga Dasar</label><br>
            <input type="number" class="form-control" name="harga" value="{{$event->harga}}">
        </div>
        <div class="col-md-3">
            <label>Kuota</label><br>
            <input type="number" class="form-control" name="kuota" value="{{$event->kuota}}">
        </div>
        <div class="col-md-6">
            <label>Banner</label><br>
            <input type="file" class="form-control" accept="image/*" name="banner">
        </div>
    </div>
</div>
