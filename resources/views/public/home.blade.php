@extends('layouts.home')

@section('body')

<div class="face">
    <div class="face1">
        <div class="face2">
            <div class="welcome"> Welcome</div>
            <div class="to">To</div>
            <div class="juhla">Juhla's</div>
            <div class="shcool">School</div>
            <div class="of">Of</div>
            <div class="art">Art</div>
            <div class="magic">Magic</div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
window.addEventListener('DOMContentLoaded', function(e) {

    let header = document.querySelector('header');
    let face = document.querySelector('.face');

    header.style.position = "absolute";
    header.style.width = "100%";
})
</script>

@endsection
