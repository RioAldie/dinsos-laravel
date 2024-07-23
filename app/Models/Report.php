<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Report extends Model{
    use HasFactory;

    protected $fillable = [
        'NIK',
        'nama_pelapor',
        'umur_pelapor',
        'pekerjaan',
        'alamat',
        'judul',
        'isi',
        'nama_terlapor',
        'umur_terlapor',
        'hubungan',
        'status',
        'phone',
        'email',
    ];
}

?>