@extends('template.header')
@section('content')
    <link rel="stylesheet" href="{{asset('css/order.css')}}">

<form action="" >
    <fieldset>
    <div dir="rtl">
        <div class="order-box">
            <label for="">الاسم:</label><br>
            <input type="text" name="name" required>
        </div>
        <div class="order-box">
        <label for="">رقم الجوال:</label><br>
        <input type="text" name="mobile" required>
        </div>
        <div class="order-box">
        <label for="">التاريخ:</label><br>
        <input type="datetime-local" name="date" required>
        </div>
        <div class="order-box">
        <label for="">الجنسيه:</label><br>
        <input type="text" name="Country" required>
        </div>
        <div class="order-box">
            <label for="">الموقع:</label><br>
            <input type="text" id="#pac-input" name="location" disabled>
            <div id="map" ></div>
        </div>
        <div>
            <input type="submit" value="ارسال">
        </div>
    </div>
    </fieldset>
</form>
<script src="{{asset('js/map.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZYVTmpHgciweQf-J4bPiHJ_F9M6lfXeU&libraries=places&callback=initAutocomplete&language=ar&region=EG
         async defer"></script>
@stop
