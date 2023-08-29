<?php

namespace App\Models;

use CodeIgniter\Model;

use function unlink;

class M_Data extends Model
{
    protected $table = 'masterdata';


    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData($id = null)
    {
        if ($id == null) {
            return $this->builder->get();
        } else {
            $this->db->builder->where('id', $id);
            return $this->builder->get()->getRowArray();
        }
    }

    public function tambah($data)
    {

        return $this->builder->insert($data);
    }

    public function hapus($id)
    {
        return $this->builder->delete(['id' => $id]);
    }

    public function ubah($data, $id)
    {
        return $this->builder->update($data, ['id' => $id]);
    }

    public function detail($id)
    {
        $this->builder->where('id', $id);
        return $this->builder->get()->getRowArray();
    }
    
}
