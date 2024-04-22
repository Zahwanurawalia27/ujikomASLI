<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $table = 'fotos';
    protected $primaryKey = 'FotoID';

    protected $guarded = ['FotoID'];

    protected $fillable = ['JudulFoto', 'DeskripsiFoto', 'TanggalUnggah', 'LokasiFile', 'AlbumID', 'UserID'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    public function album()
    {
        return $this->belongsTo(Album::class, 'AlbumID', 'AlbumID');
    }

    public function likefotoss()
    {
        return $this->hasMany(LikeFoto::class, 'FotoID');
    }

    public function likedByUser($userId)
    {
        return $this->likefotoss()->where('UserID', $userId)->exists();
    }

    public function likesCount()
    {
        return $this->likefotoss()->count();
    }

    public function komentars()
    {
        return $this->hasMany(KomentarFoto::class, 'FotoID');
    }

    public function komentarsCount()
    {
        return $this->komentars()->count();
    }

    // public function likefotoss()
    // {
    //     return $this->hasMany(Foto::class);
    // }

    // public function komentarfoto()
    // {
    //     return $this->hasMany(Foto::class);
    // }
}
