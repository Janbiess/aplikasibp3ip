<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UploadSOP</title>
</head>
<body>
    <table> 
        <form action="upload/proses" method="post" enctype="multipart/form-data"> 
            {{ csrf_field() }}
            <tr> 
                <td> 
                    <label for="name"> 
                        Nama SOP 
                    </label> 
                </td> 
                <td><input type="text" name="nama_sop" /> 
                </td> 
            </tr> 
            <tr> 
                <td><label for="email"> 
                        Bidang 
                    </label> 
                </td> 
                <td>
                    <select id="cars" name="bidang">
                        <option value="1">Bidang Peneyelengara</option>
                        <option value="2">Bidang Keuangan dan Umum</option>
                        <option value="3">Bidang Sumber Daya</option>
                        <option value="4">Bidang Usaha</option>
                        <option value="5">Bidang QMR</option>
                        <option value="6">Bidang SPI</option>
                      </select>     
                </td> 
            </tr> 
            <tr> 
                <td><label for="telnum"> 
                        File 
                    </label> 
                </td> 
                <td><input type="file" id="telnum" name="file" /> 
                </td> 
            </tr> 
           
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </form> 
    </table> 
</body>
</html>