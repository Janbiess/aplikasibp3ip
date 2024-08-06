<!DOCTYPE html>
<html>

<head>
	<title>
		HTML table border Attribute
	</title>
	<style>
		body {
			text-align: center;
		}

		table {
			margin: 0 auto;
			height: 20vh;
			width: 40vh;
		}

		h1 {
			color: green;
		}
	</style>
</head>

<body>
	<h1>GeeksforGeeks</h1>
	<h2>HTML table border Attribute</h2>
	<table border="1">
		<caption>
			Upload SOP  <a href="upload" class="button">Go to Google</a>
		</caption>
    

		<tr>
			<th>No</th>
			<th>Nama SOP</th>
			<th>Bidang</th>
            <th>Aksi</th>
		</tr>
		<tr>
			<td>1</td>
			<td>SOP QMS PENDAFTARAN DIKLAT</td>
			<td>USAHA</td>
            <td>
                <a href="">Edit</a> - <a href="">Download</a> - <a href="">Hapus</a>
            </td>
		</tr>
        @forelse ($files as $files)
        <tr>
			<td>{{ $files->id }}</td>
			<td>{{ $files->original_name }}</td>
            @if($files->bidang =='1')
                <td>Bidang Penyelenggaraan</td>
            @elseif($files->bidang =='2')
                <td>Bidang Keuangan dan Umum</td>
            @elseif($files->bidang =='3')
                <td>Bidang Sumber Daya </td>
            @elseif($files->bidang =='4')
                <td>Bidang Usaha</td>
            @elseif($files->bidang =='5')
                <td>Bidang QMR</td>
            @elseif($files->bidang =='6')
                <td>Bidang SPI</td>
            @endif
			{{-- <td>{{ $files->bidang }}</td> --}}
            <td>
                <a href="">Edit</a> - <a href="">Download</a> - <a href="">Hapus</a>
            </td>
		</tr>  
        @empty
        <tr>
			<td>Data Tidak Ditemukan</td>
			
		</tr>   
        @endforelse
       
		
	</table>
</body>

</html>
