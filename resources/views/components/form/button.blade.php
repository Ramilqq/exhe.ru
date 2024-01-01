<div>
    <button id="123123" class="btn" type="{{ $type }}">{{$slot}}</button>
</div>

<script type="module">
    $('#123123').click(function(){
        console.log(this.id);
    });
</script>