<?php

return [
    'required' => 'Le champ :attribute est obligatoire.',
    'string'   => 'Le champ :attribute doit être une chaîne de caractères.',
    'numeric'  => 'Le champ :attribute doit être un nombre.',
    'integer'  => 'Le champ :attribute doit être un entier.',
    'min'      => [
        'numeric' => 'Le champ :attribute doit être supérieur ou égal à :min.',
        'string'  => 'Le champ :attribute doit contenir au moins :min caractères.',
    ],
    'max'      => [
        'string' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
    ],
    'unique'   => 'Ce :attribute est déjà utilisé.',
    'exists'   => 'La :attribute sélectionnée est invalide.',

    'attributes' => [
        'name'        => 'nom',
        'slug'        => 'slug',
        'price'       => 'prix',
        'stock'       => 'stock',
        'category_id' => 'catégorie',
    ],
];