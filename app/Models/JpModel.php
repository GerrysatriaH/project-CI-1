<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class JpModel extends Model
{
    // Table
    protected $table = 'jp';
    // allowed fields to manage
    protected $allowedFields = ['id','jp'];
}