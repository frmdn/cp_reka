<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="polisi, indonesia, polresta, sidoarjo" />
	<meta name="author" content="Polresta Bitung">
	<meta name="description" content="Website Resmi Polresta Bitung, seputar informasi, inovasi, dan berita.">
	<title>Beranda | Polresta Bitung</title>
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css' rel='stylesheet' type='text/css'>



@if(Session::has('alert-success'))
    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
@endif
<a href="{{ url('siswa/create') }}">Tambah Siswa</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Options</th>
    </tr>
</thead>
<tbody>
    @php
        $no = 1;
    @endphp
    @foreach($data as $items)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $items->nama }}</td>
        <td>{{ $items->email }}</td>
        <td>{{ $items->alamat }}</td>
        <td>
        <form action="{{ route('siswa.destroy', $items->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{ route('siswa.show',$items->id) }}">Lihat</a>
            <a type="submit" href="{{ route('siswa.edit',$items->id) }}">Edit</a>
            <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</html>