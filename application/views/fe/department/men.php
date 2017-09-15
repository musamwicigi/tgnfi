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
                                     <div>
                                          <h3 style="text-align: center; color: #31870E;">Fathers's Fellowship</a></h3>
                                     </div>
                                         <div class="post_meta_top">
                                               <span>Posted on  
                                               <span class="post_date">March 22nd</span> , 2017        </span>
                                         </div>
                       
                                              <a href="../../new-prayer-books-materials-available-in-our-library/index.html"><img src="assets/wp-content/images/missions/6.jpg"  class=" alignleft" alt="New Prayer Books &#038; Materials Available in our Library"/></a>
                                             <div class="post_desc clearfix">
                                                <div class="post_desc clearfix" style="text-align: justify;">
                                                  
                                                    Father's Fellowship comprises of all married men of The Good News Fellowship International. We recognise that as men, god has given us a bigger role in his plan. That is, God has called us to lead our families in all Godly aspects and the church.

                                                    <p>Therefore, there is need to equip men with the right knowledge first of the word of God and secondry with the skills of life so that men will become the models that God purposed them to be.</p>

                                                    <h3>I Peter 2:9-10</h3>
                                                        <p>But you are a chosen race, a royal priesthood, a holy nation, a people for his own possession, that you may proclaim the excellencies of him who called you out of darkness into his marvelous light. Once you were not a people, but now you are God's people; once you had not received mercy, but now you have received mercy.</p>

                                                   

                                                  <h2>Welcome to the fathers's Fellowship</h2>
                                                </div>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                </article>

                
                        <article class="post-details">
                            <div class="entry">
                                <div class="post_list">
                                    <div class="post_item clearfix">
                                        <div>

                                        <h2>Meet the fathers</h2>
                                        <a href="../../new-prayer-books-materials-available-in-our-library/index.html"><img src="assets/wp-content/images/pastorsdesk/mwicigi2.jpg"  class=" alignleft" alt="New Prayer Books &#038; Materials Available in our Library" width="200" height="100" style="border-radius: 100px" /></a>
                                        <div class="post_desc clearfix">
                                        <div class="post_desc clearfix" style="text-align: justify;">
                                       <p><span style="font-size: 15px; color: #31870E;font-weight: bolder">The godly husband is to lead his family.</span>a husband is called to lead his wife. Though this is an unpopular statement in this day and in this culture, it is one that Christians must affirm. Male headship is taught so clearly in Scripture that to deny it leaves us prone to fall into any number of other radically false teachings. If we can read the Bible and walk away denying male headship, we can walk away denying any doctrine that offends our sensibilities. The godly husband is to lead his family. You are to lead your family.</p>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

    
        <!-- <article class="post-details">
            <div class="entry">
                <div class="post_list">
                    <div class="post_item clearfix">
                        <div>
                            <div class="post_desc clearfix">
                                <div class="post_desc clearfix" style="text-align: justify;">
                                    <a href="../../new-prayer-books-materials-available-in-our-library/index.html"><img src="assets/wp-content/images/kha/kimotho.jpg"  class=" alignleft" alt="New Prayer Books &#038; Materials Available in our Library"  width="200" height="100" align="right" style="border-radius: 100px" /></a>
                                   <p><span style="font-size: 15px; color: #31870E;font-weight: bolder">My Name is Ephantus Kimotho<br/></span>Ephantus is the chairman of the Youth Department at The Good News Fellowship Int'. He is also the founder of Keep Hope Alive Family Kenya <span><a href="kha">see the keep hope alive page</a></span></p><p>He is a reknown blogger and a teacher of the word of God. While at Our Lady Of Fatima Secondary School, He was elected as the bible study assistance while in form one.In Form two, he was elected as the Bible study leader and in Form Four, he was elected as the CU Chairman.This gave him the opportunity to interact with different people.</p>
                                 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </article>-->
         </div>
                           <div class="sidebar span4" style="padding-top: 30px">
                 <h2>More Sermons</h2>
                    <div class="widget_container widget_categories">                        
                                <?php foreach ($list_sermon as $row):?>       
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
                                    <div id="gallery_images"><a href="<?php echo base_url();?>assets/wp-content/uploads/2013/07/risper1.jpg"  data-rel="prettyPhoto[483]" >
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