<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomDonation extends Model
{
    use HasFactory;

    protected $fillable = [
        'donor_name', 'donor_email', 'donation_amount'
    ];
}
