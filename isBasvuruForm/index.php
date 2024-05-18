<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/
dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/
jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/
umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/
bootstrap.min.js"></script>
</head>

<!-- .arkaplan
{
    mmargin:auto;
margin-top:20px;
height:auto;
width:500px;
color:indigo;
border:2px solid black;
padding:25px;
background:azure;
} -->

<html>
    <body>
        <div class="arkaplan">
            <form action="index.php" name="basvuru">
                <h2>Yazılım uzman bilgi formu</h2>
                <h3>kişisel bilgiler</h3>
                <table cellpadding="5px">
                    <tr>
                        <td>T.C kimlik no</td>
                        <td><input type="text" name="tc" maxlength="11" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Ad soyad</td>
                        <td><input type="text" name = "adSoyad" class = "form-control"></td>
                    </tr>
                    <tr>
                        <td>yaş</td>
                        <td><input type="text" name="yas" min ="20" max="40" class ="form-control"></td>
                    </tr>
                    <tr>
                        <td>Mail Adresi</td>
                        <td><input type="email" name = "ePosta" class = "form-control"></td>
                    </tr>
                    <tr>
                        <td>fotograf ekle</td>
                        <td><input type="file" name="profil"></td>
                    </tr>
                </table>
                <h3>Mesleki Deneyim</h3>
                <table cellpadding = "5px">
                    <tr>
                        <td>yazılama Giriş Tarihi</td>
                        <td><input type="date" name = "tarih" value="2024-05-02" class = "form-control"></td>
                    </tr>
                    <tr>
                        <td>yazılım deneyimi</td>
                        <td>
                            <select name="pDili" multiple size="3" class = "form-control">
                            <option>c#</option>
                            <option>javaScript</option>
                            <option>html</option>
                            <option>pyhton</option>
                            <option>php</option>
                            <option>java</option>

                            </select>
                        </td>
                    </tr>
                </table>
                <h3>form onay</h3>
                <label><input type="checkbox" name="onay">yukarıdaki bilgilerin doğrulugunu onaylıyorum ve kabulediyorum</label><br>
                <input type="submit" value = "kaydet" class = "btn btn-primary btn-block">
                <input type="reset" value = "temizle" class = "btn btn-primary btn-block">
            </form>
        </div>
    </body>
</html>
