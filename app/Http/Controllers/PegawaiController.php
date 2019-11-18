<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        // return "Hai, ini adalah method index dari pegawai controller";
        $nama = "Dwi Sugi";
        $bidang = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view('biodata', ['nama' => $nama, 'bidang' => $bidang]);
    }
}