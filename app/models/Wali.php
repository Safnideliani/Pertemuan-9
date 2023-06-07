<?php

namespace App\Models;

use App\Core\Model;

class Wali extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_wali";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
