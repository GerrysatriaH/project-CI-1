<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class MahasiswaModel extends Model
{
    // Table
    protected $table = 'mahasiswa';
    
    // allowed fields to manage
    protected $allowedFields = ['nim', 'nama','jk','tempat_lahir', 'tanggal_lahir', 'alamat', 'no_tlp', 'id_jp', 'id_status_kawin'];
}