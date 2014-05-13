<?php
/**
 * Created by PhpStorm.
 * User: tania_nicola
 * Date: 6/05/14
 * Time: 10:12
 */
?>

<ul>
    @foreach ($list as $item)
        <li>{{$item->title}}</li>
    @endforeach
</ul>