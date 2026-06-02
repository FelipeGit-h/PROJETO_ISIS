<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Publico\Agendar;
use App\Livewire\Publico\AnamneseForm;
use App\Livewire\Publico\ConsentimentoForm;
use App\Livewire\Admin\Agendamentos;

Route::get('/', fn() => view('home'))->name('home');

Route::get('/agendar', Agendar::class)->name('agendar');

Route::get('/anamnese/{agendamento}', AnamneseForm::class)->name('anamnese.form');

Route::get('/consentimento/{agendamento?}', ConsentimentoForm::class)->name('consentimento.form');

Route::get('/avaliacao/{agendamento}', function($agendamento) {
    return redirect()->route('home')->with('success', 'Avaliação estética em desenvolvimento.');
})->name('avaliacao.form');

Route::get('/admin', Agendamentos::class)->name('admin.agendamentos');

Route::get('/termo-consentimento', function() {
    return view('termo-consentimento');
})->name('termo.consentimento');