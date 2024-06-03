<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_paket';
    protected $primaryKey       = 'id_paket';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_paket', 'harga_paket', 'deskripsi_paket', 'photo_paket'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getData($id = false)
    {
        if (!$id) return $this->findAll();

        return $this->findAll();
    }

    public function saveData($validData, $idPaket = "")
    {
        $this->save([
            'id_dapur'        => $idPaket,
            'nama_dapur'      => $validData['nama_dapur'],
            'harga_dapur'     => $validData['harga_dapur'],
            'deskripsi_dapur' => $validData['deskripsi_dapur'],
        ]);

        return true;
    }
}
