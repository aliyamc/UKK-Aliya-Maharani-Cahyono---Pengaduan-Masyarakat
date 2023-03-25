<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aplikasi Pelaporan Pengaduan Masyarakat</title>
</head>
<body>
  <span><strong>Nama Petugas : </strong> {{ Auth::guard('petugas')->user()->nama }}</span>
  <br>
  <span><strong>Tanggal : </strong> {{ now()->format('D, d M Y ') }}</span>
  <table border="1" cellpadding="2" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal Pengaduan</th>
        <th>NIK Pelapor</th>
        <th>Isi Aduan</th>
        <th>Isi Tanggapan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tanggapans as $tanggapan)
        <tr>
          <td>{{ $loop->iteration }}.</td>
          <td>{{ $tanggapan->getStatusPengaduan->tgl_pengaduan }}</td>
          <td>{{ $tanggapan->getStatusPengaduan->nik }}</td>
          <td>{{ $tanggapan->getStatusPengaduan->isi_laporan }}</td>
          <td>{{ $tanggapan->tanggapan }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>