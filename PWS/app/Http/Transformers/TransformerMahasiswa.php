<?php
namespace App\Http\Transformers;

use League\Fractal\TransformerAbstract;
use App\Http\Models\Mahasiswa;

class TransformerMahasiswa extends TransformerAbstract
{
  public function transform(Mahasiswa $field)
  {
    // ngubah format tampilan di postman
    return [
      'NIM' => $field->nim,
      'Nama' => $field->nama,
      'Agama' => $field->agama,
      'Alamat' => $field->alamat,
      'Nomor Telepon' => $field->notelp,
      'Jenis Kelamin' => $field->jk,
      'Prodi' => $field->prodi,
      'Fakultas' => $field->fakultas
    ];
  }
}
