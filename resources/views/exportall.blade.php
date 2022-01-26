<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
@foreach($employees as $key =>$value)
<table  border="1" bordercolor="#000000">
        <tr>
        <th>Field</th>
        <th>Value</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $value->name }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                @if($value->gender==1)
                {{ 'Laki-laki' }}
                @else
                {{'Perempuan'}}
                @endif
            </td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>{{ $value->no_hp }}</td>
        </tr>
        <tr>
            <td>Email Aktif</td>
            <td>{{ $value->email }}</td>
        </tr>
        <tr>
            <td>Current Salary</td>
            <td>{{ $value->salary }}</td>
        </tr>
        <tr>
            <td>Foto Profil</td>
            <td><img src="{{asset($value->photo)}}" height="75" width="75" alt="" /></td>
        </tr>
        
    </table>

    @endforeach
</body>
</html>