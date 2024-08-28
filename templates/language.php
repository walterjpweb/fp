<form action="" class="lang">
    <select name="" id="redirectSelect">
        <option value="" <?php if(get_the_ID()==9){ echo "selected"; }?>><?php if(get_the_ID()==9){ echo "English"; }else{ echo "Inglês"; }?></option>
        <option value="" <?php if(get_the_ID()==10){ echo "selected"; }?>><?php if(get_the_ID()==9){ echo "Portuguese"; }else{ echo "Português"; }?></option>
    </select>
</form>
<style>
    .lang{
        border: 1px #0D1E30 solid;
        width: 160px;
        border-radius: 5px;
        margin: 0 15px;
    }
    .lang select{
        background: transparent;
        border: 0;
        width: 100%;
        padding: 10px;
    }
    @media (max-width: 992px) {
        .lang{
            width: 140px;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('#redirectSelect').change(function() {
            var url = $(this).val();
            if (url) {
                window.location.href = url;
            }
        });
    });
</script>