<?php

return [
    'accepted'         => ':attribute mora biti prihvacen.',
    'active_url'       => ':attribute nije vazeci URL.',
    'after'            => ':attribute mora biti datum nakon :date.',
    'after_or_equal'   => ':attribute mora biti datum posle ili na dan :date.',
    'alpha'            => ':attribute moze sadrzati samo slova.',
    'alpha_dash'       => ':attribute  moze sadrzati samo slova, brojeve i crticu.',
    'alpha_num'        => ':attribute moze sadrzati samo slova i brojeve.',
    'latin'            => ':attribute moze sadrzati samo ISO osnovna Latinska slova.',
    'latin_dash_space' => ':attribute moze sadrzati samo ISO osnovna Latinska slova, brojeve, crte, crtice i razmake.',
    'array'            => ':attribute mora biti niz.',
    'before'           => ':attribute mora biti pre :date.',
    'before_or_equal'  => ':attribute mora biti datum pre ili na :date.',
    'between'          => [
        'numeric' => ':attribute mora biti izmedju :min i :max.',
        'file'    => ':attribute mora imati minimum :min  i maksimum :max kilobajta.',
        'string'  => ':attribute mora imati minimum :min i maksimum :max karaktera.',
        'array'   => ':attribute mora imati minimum :min i maksimum :max stavki.',
    ],
    'boolean'          => ':attribute mora biti true ili false.',
    'confirmed'        => ':attribute potvrde se ne poklapaju.',
    'current_password' => 'Lozinka je netacna.',
    'date'             => ':attribute nije vazeci datum.',
    'date_equals'      => ':attribute mora biti datum jednak :date.',
    'date_format'      => ':attribute se ne poklapa sa formatom :format.',
    'different'        => ':attribute  i :other se moraju razlikovati.',
    'digits'           => ':attribute mora biti :digits brojeva.',
    'digits_between'   => ':attribute mora biti izmedju :min i :max brojeva.',
    'dimensions'       => ':attribute ima nevazece dimenzije slike.',
    'distinct'         => ':attribute ima duplikat vrednost.',
    'email'            => ':attribute mora biti validna email adresa.',
    'ends_with'        => ':attribute se mora zavrsavati sa jednim od :values.',
    'exists'           => 'Izabrani :attribute je nevazeci.',
    'file'             => ':attribute mora biti fajl.',
    'filled'           => ':attribute polje mora imati vrednost.',
    'gt'               => [
        'numeric' => ':attribute mora biti veci od :value.',
        'file'    => ':attribute mora biti veci od :value kilobajta.',
        'string'  => ':attribute mora imati vise od :value karaktera.',
        'array'   => ':attribute mora imati vise od :value stavke.',
    ],
    'gte' => [
        'numeric' => ':attribute mora biti veci ili jednak sa :value.',
        'file'    => ':attribute mora biti veci ili jednak :sa value kilobajta.',
        'string'  => ':attribute mora sadrzati minimum :attribute karaktera.',
        'array'   => ':attribute mora imati :value stavki ili vise.',
    ],
    'image'    => ':attribute mora biti slika.',
    'in'       => 'Izabrani :attribute je nevazeci.',
    'in_array' => ':attribute polje ne postoji u :other.',
    'integer'  => ':attribute mora biti broj.',
    'ip'       => ':attribute mora biti validna IP adresa.',
    'ipv4'     => ':attribute mora biti validna IPv4 adresa.',
    'ipv6'     => ':attribute mora biti validna IPv6 adresa.',
    'json'     => ':attribute mora biti validan JSON string.',
    'lt'       => [
        'numeric' => ':attribute mora biti manji od :value.',
        'file'    => ':attribute mora biti manji od :value kilobajta.',
        'string'  => ':attribute mora biti manji od :value karaktera.',
        'array'   => ':attribute mora imati manje od :value stavki.',
    ],
    'lte' => [
        'numeric' => ':attribute mora biti manji ili jednak od :value.',
        'file'    => ':attribute mora biti manji ili jednak sa :value kilobajta.',
        'string'  => ':attribute mora biti manji ili jednak sa :value karaktera.',
        'array'   => ':attribute ne sme sadrzati vise od :value stavki.',
    ],
    'max' => [
        'numeric' => ':attribute ne sme biti veci od :max.',
        'file'    => ':attribute ne sme biti veci od :max kilobajta.',
        'string'  => ':attribute ne sme biti veci od :max karaktera.',
        'array'   => ':attribute ne sme sadzati vise od :max stavki.',
    ],
    'mimes'     => ':attribute mora biti fajl tipa: :values.',
    'mimetypes' => ':attribute mora biti fajl tipa: :values.',
    'min'       => [
        'numeric' => ':attribute mora biti najmanje :min.',
        'file'    => ':attribute mora biti najmanje :min kilobajta.',
        'string'  => ':attribute mora biti najmanje :min karaktera.',
        'array'   => ':attribute mora imati minimum :min stavki.',
    ],
    'not_in'               => 'Izabrani :attribute nije validan.',
    'not_regex'            => ':attribute format nije validan.',
    'numeric'              => ':attribute mora biti broj.',
    'password'             => 'Lozinka je netacna.',
    'present'              => ':attribute polje mora biti prisutno.',
    'regex'                => ':attribute format nije validan.',
    'required'             => ':attribute polje je obavezno.',
    'required_if'          => ':attribute polje je obavezno kada je :other :value.',
    'required_unless'      => ':attribute polje je obavezno osim ako je :other :values.',
    'required_with'        => ':attribute polje je obavezno kada je :values prisutno.',
    'required_with_all'    => ':attribute polje je obavezno kada je :values prisutno.',
    'required_without'     => ':attribute polje je obavezno kada :values nije prisutno.',
    'required_without_all' => ':attribute je obavezno kada nijedan od :values nisu prisutni.',
    'same'                 => ':attribute i :other se moraju poklapati.',
    'size'                 => [
        'numeric' => ':attribute mora biti :size.',
        'file'    => ':attribute mora biti :size kilobajta.',
        'string'  => ':attribute mora biti :size karaktera.',
        'array'   => ':attribute mora sadrzati :size stavki.',
    ],
    'starts_with' => ':attribute mora pocinjati sa jednim od sledecih: :values.',
    'string'      => ':attribute mora biti string.',
    'timezone'    => ':attribute mora biti validna zona.',
    'unique'      => ':attribute je vec zauzet.',
    'uploaded'    => ':attribute nije uspesno otpremljen.',
    'url'         => ':attribute je nevazeceg formata.',
    'uuid'        => ':attribute mora biti validan UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute sadrzi rezervisanu rec.',
    'dont_allow_first_letter_number' => '\":input\" polje ne moze imati za prvo slovo broj',
    'exceeds_maximum_number'         => ':attribute prelazi maksimalnu dozvoljenu duzinu.',
    'db_column'                      => ':attribute moze jedino sadrzati ISO latinska alfabeticna slova, brojeve, srednju crtu i ne moze pocinjati brojem.',
    'attributes'                     => [],
];
