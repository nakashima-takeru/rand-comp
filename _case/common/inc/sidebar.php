        <div id="contents_left" class="pc">
            <a href="/salesforce/case/" class="page_ttl">導入事例</a>
            <p class="list_ttl list_ttl_1">Pick Up</p>
            <ul class="list">

<?php
    $i=0;$max=5;
    query_posts('cat=26&showposts=-1');
    while (have_posts()) : the_post();
        $flg_top = get_post_meta( $post->ID , 'flg_pickup_sf' , true );//表示フラグ
        if($flg_top){
?>
    <li class=""><a href="/salesforce/case/detail.php?id=<?php echo $post->ID ?>">
<?php
echo $post->post_title;
?>
    </a></li>
<?php
            $i++;
            if($i>=$max){
                break;
            }
      	}
    endwhile;
?>
            </ul>
        </div>