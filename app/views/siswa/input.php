<h2>Input Siswa</h2>

<form action="<?php echo URL; ?>/siswa/simpan" method="post">
    <table>
        <tr>
            <td>ID_SISWA</td>
            <td><input type="text" name="id_siswa"></td>
        </tr>
        <tr>
            <td>ID_KELAS</td>
            <td><textarea name="id_kelas" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>ID_WALi</td>
            <td><textarea name="id_wali" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>NAMA_SISWA</td>
            <td><textarea name="nama_siswa" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>TANGGAL_LULUS</td>
            <td><textarea name="tanggal_lulus" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>