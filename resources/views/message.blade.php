@if(Session::has('message'))
<div class="alert alert-primary">
  {{Session::get('message')}}

</div>
@endif

<script>
setTimeout(() => {
    document.querySelectorAll(".alert").forEach(el => el.remove());
}, 1500);

</script>
