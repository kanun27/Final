<?php

namespace AppModels;

use IlluminateDatabaseEloquentFactoriesHasFactory;

use IlluminateDatabaseEloquentModel;

class Product extends Model

{

    use HasFactory;

    protected $fillable = [

        'name', 'detail', 'image'

    ];

}