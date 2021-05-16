<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QrCodeGenerator extends Model
{
  protected $fillable = [
      'name', 'morada', 'codpostal','local','created_at',
  ];
}
