<?php
$this->load->view('header_page');
?>
<div class="container mquiz-margin-top">
    <h2 class="text-center head-color"><?php echo $this->session->userdata('get_category_name');?></h2>
    <div class="mquiz-space-20"></div>
    <div class="col-sm-2">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Free Mobile Recharge -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5188082201348298"
             data-ad-slot="1177379642"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script> 
    </div>
    <div class="col-sm-8 r-w-img">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Free Mobile Recharge -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5188082201348298"
                 data-ad-slot="1177379642"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script> 
            <img src="<?=base_url()?>images/game-over.png" alt="animal_image" class="game-over">
            <h1 class="text-center money head-color">You Won <span class="val"><?php echo $tot_amount
            ?></span> Rs</h1>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Free Mobile Recharge -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-5188082201348298"
                 data-ad-slot="1177379642"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <div class="mquiz-space-50"></div>  
            <div class="col-sm-offset-4 col-sm-4">
                <a href="<?=base_url()?>mquiz/quiz.html" id="res" class="btn-lg btn-info text-center" role="button">Go to Categories</a>
            </div>
    </div>
    <div class="col-sm-2">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Free Mobile Recharge -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5188082201348298"
             data-ad-slot="1177379642"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>		
</div>
<?php
$this->load->view('footer_page');
?>