<?php

return [
    'accepted'         => 'Acest :attribute trebuie acceptat.',
    'active_url'       => 'Acest :attribute nu este o legatură URL valida.',
    'after'            => 'Acest :attribute trebuie sa fie o dată după :date.',
    'after_or_equal'   => 'Acest :attribute trebuie sa fie egal cu :date.',
    'alpha'            => 'Acest :attribute trebuie sa conțină doar litere.',
    'alpha_dash'       => 'Acest :attribut poate sa conțină doar litere, cifre și semnul minus (-).',
    'alpha_num'        => 'Acest :attribute poate sa conțină doar litere și cifre.',
    'latin'            => 'Acest :attribute trebuie să conțină doar litere ISO ale alfabetului latin.',
    'latin_dash_space' => 'Acest :attribute trebuie să conțină doar litere ISO ale alfabetului latin, numere, dash-uri si spații.',
    'array'            => 'Acest :attribute trebuie sa fie o matrice.',
    'before'           => 'Acest :attribute trebuie sa fie o dată inaintea :date.',
    'before_or_equal'  => 'Acest :attribute trebuie sa fie o dată inaintea sau egală cu :date.',
    'between'          => [
        'numeric' => 'Acest :attribute trebuie sa fie intre :min si  :max.',
        'file'    => 'Acest :attribute trebuie sa aibă intre :min si :max kilobiți.',
        'string'  => 'Acest :attribute trebuie sa aibă intre :min si  :max caractere.',
        'array'   => 'Acest :attribute trebuie sa aibă intre :min si :max elemente.',
    ],
    'boolean'          => 'Câmpul :attribute trebuie sa fie adevarat sau fals.',
    'confirmed'        => 'Confirmarea acestui :attribute nu se potriveste.',
    'current_password' => 'Parola gresita',
    'date'             => 'Acest :attribute nu este o dată validă.',
    'date_equals'      => 'Acest :attribute trebuie să fie o dată egală cu :date.',
    'date_format'      => 'Acest :attribute nu corespunde formatului :format.',
    'different'        => 'Acest :attribute si :other trebuie să fie diferite.',
    'digits'           => 'Acest :attribute trebuie să aibă :digits cifre.',
    'digits_between'   => 'Acest :attribute trebuie să aibă intre :min si :max cifre.',
    'dimensions'       => 'Acest :attribute are dimensiuni de imagine invalide.',
    'distinct'         => 'Acest :attribute câmp are valoare duplicată.',
    'email'            => 'Acest :attribute trebuie să fie o adresă de email validă.',
    'ends_with'        => 'Acest :attribute trebuie să se termine cu una din urmatoarele :values',
    'exists'           => 'Acest :attribute selectat nu este valid.',
    'file'             => 'Acest :attribute trebuie să fie un fisier.',
    'filled'           => 'Câmpul :attribute trebuie să aibă o valoare.',
    'gt'               => [
        'numeric' => 'Acest :attribute trebuie să fie mai mare de :value.',
        'file'    => 'Acest :attribute trebuie să fie mai mare de :value kilobiți.',
        'string'  => 'Acest :attribute trebuie să fie mai mare de :value caractere.',
        'array'   => 'Acest :attribute trebuie să aibă mai mult de :value opțiuni.',
    ],
    'gte' => [
        'numeric' => 'Acest :attribute trebuie să fie mai mare sau egal cu :value.',
        'file'    => 'Acest :attribute trebuie să fie mai mare sau egal cu  :value kilobiți.',
        'string'  => 'Acest :attribute trebuie să fie mai mare sau egal cu :value caractere.',
        'array'   => 'Acest :attribute trebuie să aibă  :value valori sau mai multe',
    ],
    'image'    => 'Acest :attribute trebuie să fie un o imagine.',
    'in'       => ':attribute selectat  e invalid.',
    'in_array' => 'Acest :attribute câmp nu există in :other.',
    'integer'  => 'Acest :attribute trebuie să fie un un număr intreg.',
    'ip'       => 'Acest :attribute trebuie să fie o adresă IP validă.',
    'ipv4'     => 'Acest :attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6'     => 'Acest :attribute trebuie să fie o adresă IPv6 validă.',
    'json'     => 'Acest :attribute trebuie să fie un sir JSON valid.',
    'lt'       => [
        'numeric' => 'Acest :attribute trebuie sa fie mai mic decat :value.',
        'file'    => 'Acest :attribute trebuie sa fie mai mic decat :value kilobiți.',
        'string'  => 'Acest :attribute trebuie sa fie mai mic decat :value caractere.',
        'array'   => 'Acest :attribute trebuie să aibă mai puțin de :value obiecte.',
    ],
    'lte' => [
        'numeric' => 'Acest :attribute trebuie sa fie mai mic sau egal decat :value.',
        'file'    => 'Acest :attribute trebuie sa fie mai mic sau egal decat :value kilobiți.',
        'string'  => 'Acest :attribute trebuie sa fie mai mic sau egal decat :value caractere.',
        'array'   => 'Acest :attribute nu trebuie să aibă mai mult de :value obiecte.',
    ],
    'max' => [
        'numeric' => 'Acest :attribute nu poate fi mai mare decat :max.',
        'file'    => 'Acest :attribute nu poate fi mai mare decat :max kilobiți.',
        'string'  => 'Acest :attribute nu poate fi mai mare decat :max caractere.',
        'array'   => 'Acest :attribute nu poate avea mai mult de :max obiecte.',
    ],
    'mimes'     => 'Acest :attribute trebuie sa fie un fisier de tipul :values.',
    'mimetypes' => 'Acest :attribute trebuie sa fie un fisier de tipul :values.',
    'min'       => [
        'numeric' => 'Acest :attribute trebuie sa fie cel putin :min.',
        'file'    => 'Acest :attribute trebuie sa aibă cel putin :min kilobiți.',
        'string'  => 'Acest :attribute trebuie sa aibă cel putin :min caractere.',
        'array'   => 'Acest :attribute trebuie sa aibă cel putin :min obiecte.',
    ],
    'not_in'               => ':attribute selectat este invalid.',
    'not_regex'            => 'Formatul acestui :attribute este invalid.',
    'numeric'              => 'Acest :attribute trebuie sa fie un număr.',
    'password'             => 'Parola este incorectă.',
    'present'              => 'Acest :attribute trebuie sa fie prezent.',
    'regex'                => 'Formatul acestui :attribute este invalid.',
    'required'             => 'Câmpul :attribute este necesar.',
    'required_if'          => 'Câmpul :attribute este necesar cand :other este :value.',
    'required_unless'      => 'Câmpul :attribute este necesar doar dacă :other este in :value.',
    'required_with'        => 'Câmpul :attribute este necesar cand :values este prezent.',
    'required_with_all'    => 'Câmpul :attribute este necesar cand :values este prezent.',
    'required_without'     => 'Câmpul :attribute este necesar cand :values nu este prezent.',
    'required_without_all' => 'Câmpul :attribute este necesar cand nicio :values nu este prezentă.',
    'same'                 => 'Acest :attribute si :other trebuie sa fie identice.',
    'size'                 => [
        'numeric' => 'Acest :attribute trebuie sa aibă :size.',
        'file'    => 'Acest :attribute trebuie sa aibă :size kilobiți.',
        'string'  => 'Acest :attribute trebuie sa aibă :size caractere.',
        'array'   => 'Acest :attribute trebuie sa conțină :size valori.',
    ],
    'starts_with' => 'Acest :attribute trebuie sa inceapă cu unul din următoarele :values.',
    'string'      => 'Acest :attribute trebuie sa fie un sir de caractere.',
    'timezone'    => 'Acest :attribute trebuie sa fie o zona validă.',
    'unique'      => 'Acest :attribute a fost deja selectat.',
    'uploaded'    => 'Acest :attribute nu a putut fi incărcat.',
    'url'         => 'Formatul acestui :attribute este invalid.',
    'uuid'        => 'Acest :attribute trebuie să fie un format UUID valid.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'Acest :attribute conține cuvinte rezervate (cheie).',
    'dont_allow_first_letter_number' => 'Acest câmp \":input\" nu poate să aibă primul caracter o cifră.',
    'exceeds_maximum_number'         => 'Acest :attribute depaseste marimea maximă a modelului',
    'db_column'                      => 'Acest :attribute poate sa conțină numai litere din alfabetul Latin ISO, numere, minus si nu poate sa inceapă cu un număr.',
    'attributes'                     => [],
];
