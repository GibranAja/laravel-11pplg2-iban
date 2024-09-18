{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
    <h1>Edit Konten</h1>
    <form action="{{ route('dinamis.update', $dinami->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea class="form-control" id="konten" name="konten" rows="3" required>{{ $dinami->konten }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
{{-- @endsection --}}