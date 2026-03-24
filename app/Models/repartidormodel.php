<?php
namespace App\Models;
use CodeIgniter\Model;

class RepartidorModel extends Model
{
    protected $table      = 'repartidor';
    protected $primaryKey = 'id_repartidor';
    
    // Estos son los únicos campos que dejarás que se modifiquen
    protected $allowedFields = ['nombre', 'telefono', 'vehiculo'];
}