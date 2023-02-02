<?php

return [
    'unique_identifier_filter' => [
        'msg_detail' => 'Este :document :nro_documento, existe en una lista negra',
        'msg_short' => 'prefilter.BLACKLIST_ID'
    ],
    'nationality_filter' => [
        'msg_detail' => 'No puede ser extranjero',
        'msg_short' => 'prefilter.FOREIGNER'
    ],
    'age_filter_min' => [
        'msg_detail' => 'La edad no debe ser menor :min',
        'msg_short' => 'prefilter.AGE_LT_:min'
    ],
    'age_filter_max' => [
        'msg_detail' => 'La edad no debe ser mayor a :max',
        'msg_short' => 'prefilter.AGE_GT_:max'
    ],
    'cellphone_filter' => [
        'msg_detail' => 'En estos momentos tenemos inconvenientes con este número de celular :cellphone',
        'msg_short' => 'prefilter.BLACKLIST_PHONE'
    ],
    'bank_filter' => [
        'msg_detail' => 'Este banco no esta disponible actualmente',
        'msg_short' => 'prefilter.BANK'
    ],
    'email_filter' => [
        'msg_detail' => 'El email :email, existe en una lista negra',
        'msg_short' => 'prefilter.BLACKLIST_EMAIL'
    ],
    'salary_filter' => [
        'msg_detail' => 'El salario no debe estar entre :min y :max',
        'msg_short' => 'prefilter.INSUFFICIENT_SALARY'
    ],
    'situation_job_filter' => [
        'msg_detail' => 'En estos momento no ofertamos con la situación laboral :situation_job',
        'msg_short' => 'prefilter.JOB_SITUATION'
    ],
    'age_salary_filter' => [
        'msg_detail' => 'La edad no debe estar entre :age_min y :age_max, El salario no debe estar entre :salary_min y :salary_max',
        'msg_short' => 'prefilter.AGE_25_PLUS_INSUFFICIENT_SALARY'
    ],
    'age_situation_job_filter' => [
        'msg_detail' => 'La edad no debe estar entre :age_min y :age_max, La situacion laboral no debe ser :situation_job',
        'msg_short' => 'prefilter.AGE_25_PLUS_INDEPENDENT'
    ],
    'account_number_filter' => [
        'msg_detail' => 'Este número de cuenta :account_number, existe en una lista negra',
        'msg_short' => 'prefilter.BLACKLIST_ACCOUNT_NUMBER'
    ],
];
