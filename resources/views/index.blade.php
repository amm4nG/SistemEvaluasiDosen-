<form action="{{ route('pengampuh-matakuliah.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_prodi" value="2" id="">
    <input type="hidden" name="id_periode" value="2" id="">
    <input type="file" name="file">
    <button type="submit">upload</button>
</form>
@foreach ($users as $user)
    <p>{{ $user->name }}</p>
@endforeach