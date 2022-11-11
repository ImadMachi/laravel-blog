@props(["color" => "gray"])

<span class="d-inline-block text-white px-2 rounded-pill" style='background-color:<?= $color ?> ;font-size:12px'>{{$slot}}</span>