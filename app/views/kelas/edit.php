<h2>Edit Kelas</h2>

<form action="<?php echo URL; ?>/kelas/update" method="post">
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
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>