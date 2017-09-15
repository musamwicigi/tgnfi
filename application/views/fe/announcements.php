</div>
    </div>
        <div id="middle">
        <div class="container">
            <div class="row">
            <div class="span14">
                <div class="content span10">
                    <article class="post-details" style="background-color: #fafaf0;padding-left:20px; padding-right:20px;">
                        <div class="entry">
                            <div class="post_list">
                                <div class="post_item clearfix">
                                <?php foreach ($weekly_announcements as $row):?>
                                <div class="post_title" style="background-color: #f1f0ee;padding-left:20px; padding-right:20px;">
                                <h2><a href="<?php echo base_url();?>home/announcements_item/<?php echo $row->announcements_id;?>"><?php echo $row->title;?></a></h2>
                                </div>
                                <div class="post_meta_top">
                                <span>Posted on: <span class="post_date"><?php echo $row->date;?></span></span>
                                </div>
                                <div class="post_img">
                                <a href="<?php echo base_url();?>home/announcements_item/<?php echo $row->announcements_id;?>"><img src="<?php echo base_url();?>assets/wp-content/images/<?php echo $row->imagelocation;?>"  class=" alignleft" alt="<?php echo $row->title;?>" width="270" height="150" /></a>
                                </div>
                                <div class="post_desc clearfix" style="text-align: justify;">
                                <p><?php echo character_limiter($row->content, 550);?>&#8230;<a href="<?php echo base_url();?>home/announcements_item/<?php echo $row->announcements_id;?>"><span>Keep Reading</span></a></p>
                                </div>
                                <div class="clear"></div>
                                 <hr/>
                                <?php endforeach ?>

                                </div>

                            </div>
                        </article>
                    </div>


                


                <div class="sidebar span4" style="padding-top: 30px">
                <h3 style="font-weight: bold"> Listed Announcements</h3>
                    <div class="widget_container widget_categories">                        
                                  <?php foreach ($weekly_announcements as $row):?>   
                                    <ul>
                                    <li> <i class="fa fa-check" style="color:  #d64100"></i><a href="<?php echo base_url();?>home/announcements_item/<?php echo $row->announcements_id;?>"><?php echo $row->title;?><br/><span style="color:#00bdad;padding-left:15px">Posted on: <span class="post_date"><?php echo $row->date;?></span> </span></a>
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


                            <div class="widget_container gallery_images">
                              <div class="widget_container gallery_images">
                                    <div class="image_carousel">
                                    <h3 style="text-align: center;">Our Gallery</h3>
                                    <div id="gallery_images"><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg"  data-rel="prettyPhoto[483]" >

                                    <img src="<?php echo base_url();?>assets/wp-content/images/kha/kha1.jpg" alt="">
                                    </a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg"  data-rel="prettyPhoto[467]" >

                                    <img src="<?php echo base_url();?>assets/wp-content/images/kha/kha2.jpg" alt="">
                                    </a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg"  data-rel="prettyPhoto[450]" >

                                    <img src="<?php echo base_url();?>assets/wp-content/images/kha/kha3.jpg" alt="">
                                    </a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg"  data-rel="prettyPhoto[433]" >
                                    <img src="<?php echo base_url();?>assets/wp-content/images/kha/kha4.jpg" alt="">
                                    </a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img15.jpg"  data-rel="prettyPhoto[416]" >
                                    <img src="<?php echo base_url();?>assets/wp-content/images/kha/kha5.jpg" alt="">
                                    </a><a href="assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a></div>
                                <div class="clearfix">
                            </div>
                         <a class="prev" id="gallery_prev" href="#"></a>
                        <a class="next" id="gallery_next" href="#"></a>
                        </div>
                        </div>
                        </div>            
                        </div>
                        </div>
                    </div>
                   </div>
                </div> 
                        <div class="container">