                                      
                        </div>
                        </div>
                         <div class="header_bottom medium">
                    <div class="container">
                    <div class="breadcrumbs"><a href="<?php echo base_url();?>home">Homepage </a></div>
                    <div class="subscribe hidden-phone">
                    <a href="#" target="_blank">SUBSCRIBE TO OUR EVENTS FEED</a>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="row top-info">
        <div class="span11">
                
                        <div>                    
                            <div style="background: white;padding: 10px;">
                                <h3> Today's Word</h3>
                                <?php foreach ($khatoday as $row):?>
                                <span style="font-weight: bolder; color: #31870E"><?php echo $row->keephopealive_title;?></span><br/>
                                <span style="font-size:12px;font-weight: bold"><?php echo $row->keephopealive_date;?></span><br/>
                                <span style="font-size:15px"><?php echo $row->keephopealive_content;?></span>
                                <?php endforeach?>
                            </div>
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
                    <div style="padding: 10px">                    
                            
                                    <div style="background-color: #f1f1f1;padding: 10px;font-size: 17px;font-weight: bolder;" "> Monthly Inspirational Messages</div>

                                        <div id="gallery_images" style="background-color: white">
                                        <?php foreach ($keephopealive30 as $row):?>
                                        <div style="padding: 20px" >
                                            <span style="font-size: 15px; color: #31870E;font-weight: bolder"><?php echo $row->keephopealive_title;?></span><br/>  
                                            <span style="font-weight: bolder"><?php echo $row->keephopealive_date;?></span>
                                            
                                            <p style="text-align: justify;"><?php echo $row->keephopealive_content;?></p>
                                            </div>
                                         <?php endforeach?>
                                        
                                        
                                        <a class="prev" id="gallery_prev" href="#"></a>
                                        <a class="next" id="gallery_next" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    

   
                               
                       <!--  <div class="span">
                            <div class="page_title">
                                <img src="assets/wp-content/uploads/2013/07/donate_ico.png" alt="">
                                    <h2>Partner with us in the ministry</h2>
                                    <span>Your Donation will help us Improve the sending of inspirational messages to many more across the world </span>
                            <article class="post-details">
                                <div class="entry">                                
                                <div class="btn_donate">
                                    <a href="#" class="donate_btn">DONATE VIA PAYBILL NUMBER</a>
                                </div>                                  
                                <h5 class="important">Keep Hope Alive thanks you for your donation!</h5>
                                </div>
                            </article>
                                </div>
                                </div>
                                -->

                               <div class="sidebar span4" style="padding-top: 30px">
                    <div class="widget_container widget_categories">                        
                                <?php foreach ($list_sermon as $row):?>       
                                    <ul>
                                    <li class="cat-item cat-item-2"><a href="<?php echo base_url();?>sermon/sermonarticle/<?php echo $row->no;?>"><?php echo $row->sermon_title;?></a>
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
                                                visible: 8,
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
                                    <div id="gallery_images"><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/risper1.jpg"  data-rel="prettyPhoto[483]" >
                                        <img src="<?php echo base_url();?>assets/wp-content/images/missions/4.jpg" alt="">
                                         </a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[483]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img2.jpg"  data-rel="prettyPhoto[467]" >

                                    <img src="<?php echo base_url();?>assets/wp-content/images/missions/7.jpg" alt="">
                                        </a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[467]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img3.jpg"  data-rel="prettyPhoto[450]" >

                                    <img src="<?php echo base_url();?>assets/wp-content/images/kha/kha6.jpg" alt="">
                                        </a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[450]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img13.jpg"  data-rel="prettyPhoto[433]" >
                                    <img src="<?php echo base_url();?>assets/wp-content/images/missions/6.jpg" alt="">
                                        </a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img15.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img15.jpg"  data-rel="prettyPhoto[416]" >
                                    <img src="<?php echo base_url();?>assets/wp-content/images/kha/kha5.jpg" alt="">
                                        </a><a href="<?php echo base_url();?>assets/wp-content/images/pastorsdesk/pastorandwife.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img14.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[433]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img15.jpg"  data-rel="prettyPhoto[416]" >

                                    <img src="<?php echo base_url();?>assets/wp-content/images/tabitha/feed.jpeg" alt="">
                                        </a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img13.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img12.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img11.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img10.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img9.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img8.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img7.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img6.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img5.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img4.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img3.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img2.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/gallery_img1.jpg" class="hidden"  data-rel="prettyPhoto[416]" ></a>
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

										