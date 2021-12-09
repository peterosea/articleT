@if ($script)
  <script>
    function share_fb(url) {
      window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626, height=436")
    }
    function new_window(url) {
      window.open(url,'_blank', "width=626, height=436")
    }
  </script>
@endif

<div class="sns flex gap-x-[16px] text-[24px] justify-center">
  {!! do_shortcode('[Sassy_Social_Share]') !!}
</div>