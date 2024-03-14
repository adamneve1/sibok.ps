<div>
    <html>
        <table>
        <thead>
            <tr>
                <th>ID REGISTER</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>NAMA USER</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
            <tr>
               
                <td>{{$dataku["id_register"]}}</td>
                <td>{{$dataku["username"]}}</td>
                <td>{{$dataku["password"]}}</td>
                <td>{{$dataku["nama_user"]}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </html>
</div>
