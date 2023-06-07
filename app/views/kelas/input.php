<h2>Input Kelas</h2>

<form action="<?php echo URL; ?>/kelas/simpan" method="post">
    <table>
        <tr>
            <td>ID_KELAS</td>
            <td><input type="text" name="id_kelas"></td>
        </tr>
        <tr>
            <td>KELAS</td>
            <td><textarea name="kelas" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>