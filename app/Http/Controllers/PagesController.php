<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function arunachalinitsheart()
    {
        return view('arunachal-in-its-heart');
    }
    public function hiddenpartsofnortheast()
    {
        return view('hidden-parts-of-northeast');
    }
    public function whattopack()
    {
        return view('what-to-pack');
    }
    public function dzukouvalley()
    {
        return view('dzukou-valley-trip');
    }
    public function zfm()
    {
        return view('ziro-festival-of-music');
    }
    public function terms()
    {
        return view('terms-and-conditions');
    }
    public function nh7()
    {
        return view('nh7');
    }
    public function ecotourism()
    {
        return view('ecotourism');
    }
    public function hornbill()
    {
        return view('hornbill');
    }
    public function dawki()
    {
        return view('dawki');
    }
    public function mawsynram()
    {
        return view('mawsynram');
    }
    public function nongkhnum ()
    {
        return view('nongkhnum');
    }
    public function campsites()
    {
        return view('campsites');
    }
    public function khanapara(){
        return view('khanapara');
    }
    public function abc(){
        return view('abc-trek');
    }
    public function travels(){
        return view('travels');
    }
    public function sevensis(){
        return view('seven');
    }
     public function sevensis1(){
        return view('seven1');
    }
     public function sevensis2(){
        return view('seven2');
    }
     public function sevensis3(){
        return view('seven3');
    }
     public function sevensis4(){
        return view('seven4');
    }
     public function sevensis5(){
        return view('seven5');
    }
    public function dzukou(){
        return view('dzukou');
    }
    public function dzukous(){
        return view('dzukoutour');
    }
    public function carbon(){
        return view('carbon');
    }
    public function staycations(){
        return view('staycations');
    }
    public function tours(){
        return view('tours');
    }
    public function hillside(){
        return view('hillside');
    }
    public function grand(){
        return view('grandsevensister');
    }
    public function thankyou(){
        return view('thankyou');
    }    
    public function freedomTripToMeghalaya(){
        return view('freedom-trip-to-meghalaya');
    }
    public function tripToMysticalTawang(){
        return view('trip-to-mystical-tawang');
    }    
}
