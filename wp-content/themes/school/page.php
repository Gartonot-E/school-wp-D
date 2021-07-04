<? 
get_header(); 

?>
<main>
    <div class="container">
        <? get_template_part('top-main');?>
        <section class="main">
            <? get_template_part('aside');?>
            <div class="content">
	            <?
	                $posts = get_posts( [
	                    'post_type' => 'page'
	                ] );
	            ?>
                <div class="news-block">
                    <div class="news-title">
                        <h2><?=$post->post_title?></h2>
                        <small><?=$post->post_date?></small>
                    </div>
                    <div class="news-content page">
                        <p><?=$post->post_content;?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?

get_footer();
?>
