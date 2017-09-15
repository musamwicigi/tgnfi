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
                    <div class="content span11"  style="padding-top: 30px">
                        <article class="post-details">
                            <div class="entry">
                                <div class="post_list">
                                <div class="post_item clearfix">
                                <h1 style="text-align: center; font-weight: bold">Come and worship with us...</a>
                                </h1>
                                <div class="post_meta_top">
                                    <span>Posted on  
                                    <span class="post_date">July 2nd</span> , 2013      </span>
                                </div>

                                <img src="assets/wp-content/images/worship/worship.jpg"  class=" alignleft" alt="Come worship with us">
                                        
                                <div class="post_desc clearfix" style="text-align: justify;">
                                    <p><span style="font-size: 15px; color: #31870E;font-weight: bolder">You are invited...<br/></span>You are invited to come and worship the Lord with us on Sunday morning. Both the 8:00 am and the 11:30 am services have a full choir and orchestra with a blended style of music that is a mix of traditional hymns and contemporary worship music. Our two Sunday morning services are as identical as possible and provide two great opportunities to worship the Lord through music, fellowship, giving, and responding to the preached Word of God. On Sunday evenings we worship with singing and focusing on the study of God's Word.</p>

                                    <p>We encourage individuals to worship the Lord as an audience of one focusing on developing a personal relationship with Him. In the same way we encourage you, the individual, to listen to the Lord speak through the message of the music and the biblical preaching as if He was speaking directly to you as an audience of one.</p>

                                    <h4>Ecclesiastes 12:1</h4>
                                    <p>And remenber thy creator in the days of thy youth, before the evil days come, and the years draw nigh, of which thou shall say, i have no pleasure in them</p>

                                    <h3>Once more, come and worship with us...</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            

         
            <div style="padding:10px; background-color: #cec9c9; color: #fff; text-align: center">
                    <h2> View the Videos</h2>
                </div>
               
                <div class="resources_item clearfix" style="border-bottom: 1px solid #c3baba">
                    <?php foreach ($youtube as $row):?>
                    <div class="resource_meta">
                        <h5 class="resource_title"><a href="../../all-resource-list/the-ancestry-of-christ-part-3-13-08-6/index.html" class="resources_link"><?php echo $row->youtube_title;?></h5>
                    </div>
                    <div class="resource_btn" id="btn_712">
                        <a href="<?php echo $row->youtube_link;?>" rel="prettyPhoto[712]" class="resources_download  play prettyPhoto resources_preview">Play</a>
                    </div>
                    <br />
                    <hr/>
                    <?php endforeach;?>
                </div>
                    <script type="text/javascript">
                        if ( jQuery.browser.mozilla === true ){
                            //<![CDATA[
                                jQuery(document).ready(function(){
                        
                                new jPlayerPlaylist({
                                    jPlayer: "#jquery_jplayer_711",
                                    cssSelectorAncestor: "#jp_container_711"
                                }, [
                                    {
                                        title:"The Harsh but Good News-Part 3 13-04",
                                        mp3:""
                                    }
                                ], {
                                    swfPath: "https://demo.themefuse.com/evangelist/wp-content/themes/evangelist-parent/js",
                                    supplied: "mp3",
                                    wmode: "window",
                                    smoothPlayBar: false,
                                    keyEnabled: false,
                                    volume: 1,
                                    solution:"flash,html"
                                    
                                });
                            });
                            //]]>
                        }
                        else
                        {
                            //<![CDATA[
                                jQuery(document).ready(function(){
                        
                                new jPlayerPlaylist({
                                    jPlayer: "#jquery_jplayer_711",
                                    cssSelectorAncestor: "#jp_container_711"
                                }, [
                                    {
                                        title:"The Harsh but Good News-Part 3 13-04",
                                        mp3:""
                                    }
                                ], {
                                    swfPath: "https://demo.themefuse.com/evangelist/wp-content/themes/evangelist-parent/js",
                                    supplied: "mp3",
                                    wmode: "window",
                                    smoothPlayBar: false,
                                    keyEnabled: false,
                                    volume: 1
                                    
                                });
                            });
                            //]]>
                        };
                    </script>
                </div>
           
      



                

            <div class="sidebar span4" style="padding-top: 30px">
            <h1>More Articles</h1>
                   
                        <div class="widget_container widget_categories">
                        <?php foreach ($list_articles as $row):?>       
                            <ul>
                                <li class="cat-item cat-item-2"><a href="<?php echo base_url();?>blog/article/<?php echo $row->no;?>"><?php echo $row->blog_title;?></a>
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
                           
                                <a class="prev" id="gallery_prev" href="#"></a>
                                <a class="next" id="gallery_next" href="#"></a>
                            </div>
                        </div>
                    </div>