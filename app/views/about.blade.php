<?php
/**
 * Created by PhpStorm.
 * User: tania_nicola
 * Date: 6/05/14
 * Time: 10:12
 */
?>
<h2>About View</h2>
<p>Studyx, Masterclass - Laravel basics</p>
    <a href="{{URL::to('/test/help')}}">Help!!<a/> //uses url
    <br />
    <a href="{{URL::route('test.help1')}}">Help1!!<a/> //uses named routing
    <br />
    <a href="{{URL::action('test.controller')}}">Controller!!<a/>
    <br />
    <a href="{{URL::action('test.showname',array('voornaam'=>'Tania','naam'=>'Nicola'))}}">Toon naam!!<a/>