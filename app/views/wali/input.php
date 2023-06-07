<h2>Input Wali</h2>

<form action="<?php echo URL; ?>/wali/simpan" method="post">
    <table>
        <tr>
            <td>ID_WALi</td>
            <td><input type="text" name="id_wali"></td>
        </tr>
        <tr>
            <td>ID_KELAS</td>
            <td><textarea name="id_kelas" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>NAMA_WALi</td>
            <td><textarea name="nama_wali" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>TANGGAL_LAHIR</td>
            <td><textarea name="tanggal_lahir" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>