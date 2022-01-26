<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
    <table  border="1" bordercolor="#000000">
        <tr>
        <th>Field</th>
        <th>Value</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                @if($gender==1)
                {{ 'Laki-laki' }}
                @else
                {{'Perempuan'}}
                @endif
            </td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>{{ $nohp }}</td>
        </tr>
        <tr>
            <td>Email Aktif</td>
            <td>{{ $email }}</td>
        </tr>
        <tr>
            <td>Current Salary</td>
            <td>{{ $salary }}</td>
        </tr>
        <tr>
            <td>Foto Profil</td>
            <td><img src="{{asset($photo)}}" height="75" width="75" alt="" /></td>
        </tr>
        
    </table>
</body>
</html>