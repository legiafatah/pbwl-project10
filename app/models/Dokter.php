<?php

namespace App\Models;

use App\Core\Model;

class Dokter extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_dokter";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $spesialis = $_POST['spesialis'];
            $alamat = $_POST['alamat'];

            $sql = "INSERT INTO tb_dokter
            SET nama=:nama, spesialis=:spesialis, alamat=:alamat";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":spesialis", $spesialis);
            $stmt->bindParam(":alamat", $alamat);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_dokter WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $spesialis = $_POST['spesialis'];
            $alamat = $_POST['alamat'];
            $id = $_POST['id'];

            $sql = "UPDATE tb_dokter
                  SET nama=:nama, spesialis=:spesialis,alamat=:alamat 
                  WHERE id=:id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":spesialis", $spesialis);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_dokter WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
