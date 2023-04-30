<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class StatusKawinModel extends Model
{
    // Table
    protected $table = 'status_perkawinan';
    // allowed fields to manage
    protected $allowedFields = ['id','status_perkawinan'];
}