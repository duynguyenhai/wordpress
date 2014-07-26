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
    <h2 class="titlemain"><a>Tin tức</a><span class="title_c"></span></h2>
    <div class="padd4all">
	
	
	
	
	
	
             
			
			
			
			
		<?php if ( have_posts() ) : ?>	
			
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
				
				
				       <div style="margin-bottom: 6px;">
                <div align="justify">
                                            <div style="float: left; margin-right: 15px;">
											
												<a href="<?php the_permalink(); ?>">
												<!--img src="http://congtyngaviet.vn/admin/img/news/2014072508551468addc821b387ab5cc91c846b627a586.jpg" width="150" class="bdimg1"-->
												<?php 	if ( ! post_password_required() && ! is_attachment() ) :
															the_post_thumbnail();
														endif; 
												?>
												</a>
											</div>
                                        <div class="titleNews"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<div class="content"> <h2>
				<span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">Các nhà sản xuất gach đang mọc lên như nấm,việc lựa chọn hãng sản xuất gạch chất lượng rất khó.Hãy cùng <a href="http://congtyngaviet.vn/gach-prime-47.html">Gach Prime</a> tìm hiểu vấn đề trên</span></span></h2>
			</div>
								<div class="detail"><a href="<?php the_permalink(); ?>">Chi tiết</a></div>
							</div>
							<div class="gachngan"></div>
						</div>
				
				
				
				
				
			<?php
			endwhile;
			?>
			
		<?php endif; ?>
			
			
             
                 
                
                  
            </div>
    <div class="clear"></div>
    <div class="pagination" style="text-align: center; margin: 4px auto;">
        <span class="disabled">«  </span><span class="current">1</span> | <span><a href="/news/index/6/tin-tuc/page:2">2</a></span> | <span><a href="/news/index/6/tin-tuc/page:3">3</a></span> | <span><a href="/news/index/6/tin-tuc/page:4">4</a></span> | <span><a href="/news/index/6/tin-tuc/page:5">5</a></span> | <span><a href="/news/index/6/tin-tuc/page:6">6</a></span> | <span><a href="/news/index/6/tin-tuc/page:7">7</a></span> | <span><a href="/news/index/6/tin-tuc/page:8">8</a></span> | <span><a href="/news/index/6/tin-tuc/page:9">9</a></span> <span class="next"><a href="/news/index/6/tin-tuc/page:2" rel="next">  »</a></span>    </div>
</div>


	
	
	
	
	
               </div>                
                <div class="clear"></div>
            </div>
        </div>
		
		
<?php get_footer(); ?>		
		
		
		
		
		
	