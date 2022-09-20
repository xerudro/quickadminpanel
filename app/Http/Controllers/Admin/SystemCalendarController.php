<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\App\Models\TimeProject',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => '',
            'suffix'     => '',
            'route'      => 'admin.time-projects.edit',
        ],
        [
            'model'      => '\App\Models\User',
            'date_field' => 'created_at',
            'field'      => 'name',
            'prefix'     => 'User',
            'suffix'     => '',
            'route'      => 'admin.users.edit',
        ],
        [
            'model'      => '\App\Models\Expense',
            'date_field' => 'entry_date',
            'field'      => 'description',
            'prefix'     => 'Text',
            'suffix'     => '',
            'route'      => 'admin.expenses.edit',
        ],
        [
            'model'      => '\App\Models\Transaction',
            'date_field' => 'transaction_date',
            'field'      => 'id',
            'prefix'     => 'Text',
            'suffix'     => '',
            'route'      => 'admin.transactions.edit',
        ],
        [
            'model'      => '\App\Models\Income',
            'date_field' => 'entry_date',
            'field'      => 'description',
            'prefix'     => 'Text',
            'suffix'     => '',
            'route'      => 'admin.incomes.edit',
        ],
    ];

    public function index()
    {
        $events = [];
        foreach ($this->sources as $source) {
            foreach ($source['model']::all() as $model) {
                $crudFieldValue = $model->getAttributes()[$source['date_field']];

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim($source['prefix'] . ' ' . $model->{$source['field']} . ' ' . $source['suffix']),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
