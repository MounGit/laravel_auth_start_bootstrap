<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoFooter extends Model
{
    use HasFactory;

    protected $table = "info_footers";

    protected $fillable = ["street", "city", "info", "link_url", "link"];
}
