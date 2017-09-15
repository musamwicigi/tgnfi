</div>
</div>
<div id="middle"> 
    <div class="container">
            <div class="row">
                <div class="content span11">
                    <?php foreach ($sermon as $row):?>
                        <article class="post-details">
                            <div class="entry">
                                <div class="post_list">
                                    <div class="post_item clearfix">
                                        <div class="post_title">
                                            <h2><a href="<?php echo base_url();?>sermon/sermonarticle/<?php echo $row->sermon_id;?>"><?php echo $row->sermon_title;?></a></h2>
                                        </div>
                                        <div class="post_meta_top">
                                            <span>Posted on </span>
                                            <span class="post_date"><?php echo $row->sermon_date;?></span>
                                            <p><?php echo $row->sermon_author;?></p>
                                        </div>
                                        <div class="post_img">
                                            <img src="<?php echo base_url();?><?php echo $row->sermon_image;?>"  class=" alignleft" alt="<?php echo $row->sermon_title;?>" width="270" height="150" /> 
                                        </div>
                                        <div class="post_desc clearfix">
                                            <p style="text-align: justify;"><?php echo word_limiter($row->sermon_content);?></p>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endforeach?>
                </div>

                <div class="sidebar span4" style="padding-top: 30px">
                 <h2>More Sermons</h2>
                    <div class="widget_container widget_categories">                        
                                <?php foreach ($sermon as $row):?>       
                                    <ul>
                                    <li class="cat-item cat-item-2"><a href="<?php echo base_url();?>sermon/sermonarticle/<?php echo $row->sermon_id;?>"><i class="fa fa-angle-double-right"></i> <?php echo $row->sermon_title;?></a>
                                    </li>
                                    </ul>
                                <?php endforeach;?>
                            </div>
                                   
                        <script>
                                jQuery(window).load(function() {

                                jQuery("#gallery_images").carouFredSel({
                                        direction: "up",
                                        width: null,
                                        debug: true,
                                        height: "variable",
                                        align : "left",
                                        items: {
                                                visible: 3,
                                                minimum: 1,
                                                width: null,
                                                height: "variable"
                                        },
                                        scroll: {
                                                items: 1,
                                                pauseOnHover:true,
                                                duration: 1000
                                        },
                                        prev: "#gallery_prev",
                                        next: "#gallery_next"
                                        });
                                });
                                </script> 

                             <div class="widget_container gallery_images" style="text-align: center;">
                            <div class="image_carousel">
                                <h2 style="text-align: center;">From Our Gallery</h2>
                                    <div id="gallery_images"><a href="assets/wp-content/uploads/2013/07/risper1.jpg"  data-rel="prettyPhoto[483]" >
                                        <img src="assets/wp-content/images/missions/4.jpg" alt="">
                                         </a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg"  data-rel="prettyPhoto[467]" >

                                    <img src="assets/wp-content/images/missions/7.jpg" alt="">
                                        </a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg"  data-rel="prettyPhoto[450]" >

                                    <img src="assets/wp-content/images/kha/kha6.jpg" alt="">
                                        </a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg"  data-rel="prettyPhoto[433]" >
                                    <img src="assets/wp-content/images/missions/6.jpg" alt="">
                                        </a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg"  data-rel="prettyPhoto[416]" >
                                    <img src="assets/wp-content/images/kha/kha5.jpg" alt="">
                                        </a><a href="assets/wp-content/images/pastorsdesk/pastorandwife.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg"  data-rel="prettyPhoto[416]" >

                                    <img src="assets/wp-content/images/tabitha/feed.jpeg" alt="">
                                        </a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a>
                                        </div>
                                <div class="clearfix">
                            </div>
                         <a class="prev" id="gallery_prev" href="#"></a>
                        <a class="next" id="gallery_next" href="#"></a>
                        </div>
                        </div>
                        </div>            
                        </div>
                        </div>
<div class="clear"></div>
        </div>
        <div class="middle_row footer">
            <div class="category_list ">
                <div class="row">
                                    </div>
            </div>
        </div>
    </div> 
</div>