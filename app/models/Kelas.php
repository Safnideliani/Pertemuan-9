<?php

namespace App\Models;

use App\Core\Model;

class Kelas extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_kelas";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
