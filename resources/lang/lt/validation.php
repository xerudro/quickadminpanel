<?php

return [
    'accepted'         => 'Turite sutikti su :attribute.',
    'active_url'       => ':attribute netinkama nuoroda.',
    'after'            => 'Laukas :attribute turi būti data po :date.',
    'after_or_equal'   => 'Laukas :attribute turi būti didesnės datos arba lygus datai :date.',
    'alpha'            => 'Laukas :attribute gali būti sudarytas tik iš raidžių.',
    'alpha_dash'       => 'Laukas :attribute gali būti sudarytas tik iš raidžių, skaičių ir brūkšnių.',
    'alpha_num'        => 'Laukas :attribute gali būti sudarytas tik iš raidžių ir skaičių.',
    'latin'            => ':attribute gali būti tik ISO pagrindinės lotyniškos abėcėlės raidės.',
    'latin_dash_space' => ':attribute gali būti tik ISO pagrindinės lotyniškos abėcėlės raidės, skaičiai, brūkšneliai, brūkšneliai ir tarpai.',
    'array'            => 'Laukas :attribute turi būti masyvas.',
    'before'           => 'Laukas :attribute turi būti data prieš :date.',
    'before_or_equal'  => 'Laukas :attribute turi būti ankstesnis arba lygus datai :date.',
    'between'          => [
        'numeric' => 'Lauko :attribute reikšmė turi būti tarp :min ir :max.',
        'file'    => ':attribute dydis turi būti tarp :min ir :max  kilobaitų',
        'string'  => ':attribute turi būti tarp :min ir :max simbolių',
        'array'   => 'Laukas :attribute turi būti tarp :min ir :max items.',
    ],
    'boolean'          => ':attribute lauko reikšmė turi būti Taip arba Ne.',
    'confirmed'        => 'Lauko  :attribute patvirtinimas nesutampa.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'Lauko :attribute reikšmė nėra tinkama data.',
    'date_equals'      => 'Lauko :attribute data turi sutapti su :date.',
    'date_format'      => ':attribute neatitinka formato :format.',
    'different'        => ':attribute ir :other turi skirtis.',
    'digits'           => 'Laukas :attribute turi būti :digits skaitmenų.',
    'digits_between'   => 'Laukas :attribute turi būti tarp :min and :max.',
    'dimensions'       => 'Laukas :attribute turi neteisingus paveikslų išmatavimus.',
    'distinct'         => 'Toks :attribute jau yra naudojamas.',
    'email'            => ':attribute turi būti validaus formato.',
    'ends_with'        => ':attribute turi baigtis viena iš šių reikšmių :values.',
    'exists'           => 'Pasirinktas :attribute yra neteisingas.',
    'file'             => ':attribute turi būti failas.',
    'filled'           => ':attribute yra privalomas.',
    'gt'               => [
        'numeric' => ':attribute turi būti didesni nei :value.',
        'file'    => ':attribute turi būti didesnis nei :value kilobaitai.',
        'string'  => ':attribute turi būti didesnis nei :value simboliai.',
        'array'   => ':attribute turi turėti daugiau nei :value elementų.',
    ],
    'gte' => [
        'numeric' => ':attribute turi būti didesnis arba lygus :value.',
        'file'    => ':attribute turi būti didesnis arba lygus :value kilobaitams.',
        'string'  => ':attribute turi būti didesnis arba lygus :value simboliams.',
        'array'   => ':attribute turi turėti :value ar daugiau elementų.',
    ],
    'image'    => ':attribute turi būti paveikslėlis.',
    'in'       => 'Pasirinktas :attribute yra neteisingas.',
    'in_array' => ':attribute laukas neegzistuoja :other.',
    'integer'  => ':attribute turi būti skaičius.',
    'ip'       => ':attribute turi būti galiojantis IP adresas.',
    'ipv4'     => ':attribute turi būti galiojantis IPv4 adresas.',
    'ipv6'     => ':attribute turi būti galiojantis IPv6 adresas.',
    'json'     => ':attribute turi būti galiojanti JSON eilutė.',
    'lt'       => [
        'numeric' => ':attribute turi būti mažesnis nei :value.',
        'file'    => ':attribute turi būti mažesnis nei :value kilobaitai.',
        'string'  => ':attribute turi būti mažiau nei :value simbolių.',
        'array'   => ':attribute turi turėti mažiau nei :value elementų.',
    ],
    'lte' => [
        'numeric' => ':attribute turi būti mažesnis arba lygus :value.',
        'file'    => ':attribute turi būti mažesnis arba lygus :value kilobaitams.',
        'string'  => ':attribute turi būti mažesnis arba lygus :value simboliams.',
        'array'   => ':attribute negali būti daugiau nei :value elementai.',
    ],
    'max' => [
        'numeric' => ':attribute negali būti didesnis nei :max.',
        'file'    => ':attribute negali būti didesnis nei :max kilobaitai.',
        'string'  => ':attribute negali būti didesnis nei :max simboliai.',
        'array'   => ':attribute negali būti daugiau nei :max elementai.',
    ],
    'mimes'     => ':attribute turi būti tokio tipo failas: :values.',
    'mimetypes' => ':attribute turi būti tokio tipo failas: :values.',
    'min'       => [
        'numeric' => ':attribute turi būti bent :min.',
        'file'    => ':attribute turi būti bent :min kilobaitai.',
        'string'  => ':attribute turi būti bent :min simboliai.',
        'array'   => ':attribute turi turėti bent :min elementus.',
    ],
    'not_in'               => 'Pažymėtas laukelis :attribute neteisingas.',
    'not_regex'            => 'Laukelio :attribute formatas neteisingas.',
    'numeric'              => 'Laukelis :attribute turi būti skaičius.',
    'password'             => 'Slaptažodis neteisingas.',
    'present'              => 'Laukelis :attribute turi būti.',
    'regex'                => 'Laukelio :attribute formatas neteisingas.',
    'required'             => 'Laukelis :attribute yra privalomas',
    'required_if'          => 'Laukelis :attribute yra privalomas, kai :other yra :value.',
    'required_unless'      => 'Laukelis :attribute yra privalomas, nebent :other yra :values.',
    'required_with'        => 'Laukelis :attribute yra privalomas, kai yra :values.',
    'required_with_all'    => 'Laukelis :attribute yra privalomas, kai yra :values.',
    'required_without'     => 'Laukelis :attribute yra privalomas, kai :values nėra.',
    'required_without_all' => 'Laukelis :attribute yra privalomas, kai nėra nė vieno iš :values.',
    'same'                 => ':attribute ir :other turi sutapti.',
    'size'                 => [
        'numeric' => 'Laukelis :attribute turi būti :size dydžio.',
        'file'    => 'Laukelis :attribute turi būti :size kilobitų dydžio.',
        'string'  => 'Laukelis :attribute turi būti :size simbolių ilgio.',
        'array'   => ':attribute turi būti :size elementai.',
    ],
    'starts_with' => 'Laukelio :attribute įrašas turi prasidėti vienu iš :values',
    'string'      => 'Laukas :attribute turi būti tekstas.',
    'timezone'    => 'Laukelis :attribute turi būti su teisingai parinkta zona.',
    'unique'      => 'Laukelis :attribute jau egzistuoja.',
    'uploaded'    => 'Laukelyje :attribute nepavyko įkelti failo.',
    'url'         => 'Lauko :attribute formatas yra neteisingas.',
    'uuid'        => 'Lauko :attribute UUID reikšmė turi būti galiojanti.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute yra rezervuotas žodis',
    'dont_allow_first_letter_number' => '\":input\" laukas negali būti pradėtas skaičiumi',
    'exceeds_maximum_number'         => ':attribute viršija maksimalų modelio ilgį',
    'db_column'                      => ':attribute gali būti tik ISO pagrindinės lotyniškos abėcėlės raidės, skaičiai, brūkšnys ir negali prasidėti skaičiumi.',
    'attributes'                     => [],
];