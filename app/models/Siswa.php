<?php

namespace App\Models;

use App\Core\Model;

class Siswa extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_siswa";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
