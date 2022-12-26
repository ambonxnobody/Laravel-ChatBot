<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $time;

    function setTime($now)
    {
        $pagiStart = Carbon::createFromTimeString('05:00');
        $pagiEnd = Carbon::createFromTimeString('10:00');
        $siangStart = Carbon::createFromTimeString('10:00');
        $siangEnd = Carbon::createFromTimeString('15:00');
        $soreStart = Carbon::createFromTimeString('15:00');
        $soreEnd = Carbon::createFromTimeString('18:00');
        $malamStart = Carbon::createFromTimeString('18:00');
        $malamEnd = Carbon::createFromTimeString('23:59');
        $diniStart = Carbon::createFromTimeString('00:00');
        $diniEnd = Carbon::createFromTimeString('05:00');

        if ($now->between($pagiStart, $pagiEnd)) {
            $this->time = 'pagi';
        } elseif ($now->between($siangStart, $siangEnd)) {
            $this->time = 'siang';
        } elseif ($now->between($soreStart, $soreEnd)) {
            $this->time = 'sore';
        } elseif ($now->between($malamStart, $malamEnd)) {
            $this->time = 'malam';
        } elseif ($now->between($diniStart, $diniEnd)) {
            $this->time = 'malam';
        } else {
            $this->time = 'bertanya';
        }
        return $this->time;
    }

    public function index()
    {
        $time = $this->setTime(Carbon::now());
        return view('Dashboard', [
            'introMessage' => 'Hai saat ini Anda sedang bertukar pesan dengan CS AKNPSF Blitar. Selamat ' . $time . ', apakah ada yang bisa dibantu?',
        ]);
    }
}
