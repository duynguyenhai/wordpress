<?php get_header(); ?>







        <div id="wrapper_outer">
            <div id="content_right">
                <div class="boxright">
    <div class="titleright">Hỗ trợ trực tuyến</div>
    <div class="" style="border: 1px solid #3F3E3E;">
        <table width="100%" align="center" border="0" cellspacing="0" cellpadding="0">		
                            <tr>
                    <td class="bgsupport">
                        <div class="titlesupport">Mr. Trung</div>
                        <div>
                            <a href="ymsgr:sendIM?abc"> <img src="http://opi.yahoo.com/online?u=abc&t=1" mce_src="http://opi.yahoo.com/online?u=abc&t=1"></a> &nbsp;
                                                                                        <a href="skype:ab?call"><img src="http://congtyngaviet.vn/images/skype.png" height="20" /></a>
                                                    </div>
                        <div style="margin-bottom: 12px;"><img src="http://congtyngaviet.vn/images/phone.png" height="20" />0976.299.888</div>
                    </td>
                </tr>
                    </table>
    </div>
</div>

<!--<div class="boxright">
    <div class="titleright">Video</div>
    <div class="box1">
    </div>
</div>-->            </div>
            <div id="wrapper">      




			
                <div class="boxmain">                    
                  
				
			
        <h2 class="titlemain"><a href="">Sản phẩm mới</a><span class="title_c"></span></h2>
        <div>	
		
		<div class="bgproduct">
            <div><a title="06.2525.7438" href="http://congtyngaviet.vn/25x25/06-2525-7438-343.html" class="preview" rel="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/06.2525.7438.jpg&w=400&zc=1"><img src="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/06.2525.7438.jpg&w=222&h=222&zc=1" class="bdimg" title="06.2525.7438" alt="06.2525.7438" /></a></div>
			<div class="proName">06.2525.7438</div>
        </div>                     
		
		
		
		
		
		
		
		
		
		
		
				<?php if ( have_posts() ) : ?>

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content' ); ?>
								
								  
								
								
								
								
							<?php endwhile; ?>

					<?php //twentytwelve_content_nav( 'nav-below' ); ?>

					<?php else : ?>
						lỗi
				<?php endif; // end have_posts() check ?>		
				
			             </div>
    </div>	
				
				
				
				
                         
                            
                            
                          
                           
    

	
	
	
    <div class="boxmain">
        <h2 class="titlemain"><a href="http://congtyngaviet.vn/gach-op-2-49.html">Gạch ốp</a><span class="title_c"></span></h2>
        <div>
		
	
		
					<?php
					
					//cat=49&posts_per_page=1
				
					$query = new WP_Query("cat=1&posts_per_page=10");
					if ( $query->have_posts() ) {
							while ( $query->have_posts() ) : $query->the_post(); ?>
							
							
									<div class="bgproduct">
								<div>
										<?php if (has_post_thumbnail()) {
										
										//	the_post_thumbnail('medium');
											?>
											<a title="05.3060.9952" href="<?php the_permalink();?>" class="preview" rel="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/05.3060.9952.jpg&w=400&zc=1">
												<!--img src="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/05.3060.9952.jpg&w=222&h=222&zc=1" class="bdimg" title="05.3060.9952" alt="05.3060.9952" /-->
											<?php the_post_thumbnail('medium');	?>
											
											
											</a>
										<?php	
										} else { 
										?>
										
										
										
										<a title="05.3060.9952" href="<?php the_permalink();?>" class="preview" rel="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/05.3060.9952.jpg&w=400&zc=1">
										
											<img src="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/05.3060.9952.jpg&w=222&h=222&zc=1" class="bdimg" title="05.3060.9952" alt="05.3060.9952" >
										</a>
										<?php
										
										 } ?>
									
									
										
											
										</div>
										
										<div class="proName"><a title="05.3060.9952" href="<?php the_permalink();?>"><?php the_title();?></a></div>
									</div>
									


						<?php endwhile; } ?>
		
	
                
                    </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  <div class="boxmain">
        <h2 class="titlemain"><a href="http://congtyngaviet.vn/gach-op-2-49.html">Gạch Lát</a><span class="title_c"></span></h2>
        <div>
		
	
		
					<?php
					
					//cat=49&posts_per_page=1
				
					$query = new WP_Query("cat=5&posts_per_page=10");
					if ( $query->have_posts() ) {
							while ( $query->have_posts() ) : $query->the_post(); ?>
							
							
									<div class="bgproduct">
								<div>
										<?php if (has_post_thumbnail()) {
										
										//	the_post_thumbnail('medium');
											?>
											<a title="05.3060.9952" href="<?php the_permalink();?>" class="preview" rel="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/05.3060.9952.jpg&w=400&zc=1">
												<!--img src="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/05.3060.9952.jpg&w=222&h=222&zc=1" class="bdimg" title="05.3060.9952" alt="05.3060.9952" /-->
											<?php the_post_thumbnail('medium');	?>
											
											
											</a>
										<?php	
										} else { 
										?>
										
										
										
										<a title="05.3060.9952" href="<?php the_permalink();?>" class="preview" rel="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/05.3060.9952.jpg&w=400&zc=1">
										
											<img src="http://congtyngaviet.vn/admin/timthumb.php?src=img/product/05.3060.9952.jpg&w=222&h=222&zc=1" class="bdimg" title="05.3060.9952" alt="05.3060.9952" >
										</a>
										<?php
										
										 } ?>
									
									
										
											
										</div>
										
										<div class="proName"><a title="05.3060.9952" href="<?php the_permalink();?>"><?php the_title();?></a></div>
									</div>
									


						<?php endwhile; } ?>
		
	
                
                    </div>
    </div>
	
	
	
	
	
<div class="boxmain">
    <h2 class="titlemain1"><a>Tin tức</a><span class="title_c1"></span></h2>
    <div>
                <div class="box-new">
                                    <div style="float: left; margin-right: 10px; padding-top: 8px;"><a href="http://congtyngaviet.vn/chi-tiet-tin/35/thiet-ke-tu-bep-phong-cach-hien-dai-cho-gia-dinh.html"><img src="http://congtyngaviet.vn/admin/img/news/20140705103036090793f7ac0ed3232628dbbcef5f9928.jpg" width="133" height="104" title="Thiết kế tủ bếp phong cách hiện đại cho gia đình" alt="Thiết kế tủ bếp phong cách hiện đại cho gia đình" /></a></div>
                                <div class="titleNews"><a href="http://congtyngaviet.vn/chi-tiet-tin/35/thiet-ke-tu-bep-phong-cach-hien-dai-cho-gia-dinh.html">Thiết kế tủ bếp phong cách hiện đại cho gia đình</a></div>
                <div cl class="content"><h2 data-mce-style="text-align: justify;">
	<span style="font-size:12px;"><a href="http://congtyngaviet.vn/gach-prime-47.html">Gạch Prime</a> sẽ g...</div>
                <div class="clear"></div>
            </div>
              
            </div>
			
			
			
			
			
    <div class="clear"></div>
</div>                </div>                
                <div class="clear"></div>
            </div>
        </div>
		
		
<?php get_footer(); ?>		
		
		
		
		
		
	