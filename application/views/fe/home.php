
                    <div class="content">
                        <script>
                        jQuery(document).ready(function($) {

                            var showcase_dup = jQuery('#showcase').clone();
                            showcase_dup.attr('id', 'showcase-dup');
                            showcase_dup.hide();
                            jQuery('body').append(showcase_dup);

                            function ShowcaseDefaults()
                            {
                                jQuery("#showcase").awShowcase({
                                    content_width:($(window).width() <= 1024) ? ($(window).width()<=745) ? 300 : 700 : 953,
                                    content_height:($(window).width() <= 1024) ? ($(window).width()<=745) ? 499 : 366 : 499,
                                    fit_to_parent:            false,
                                    auto:                     true,
                                    interval:                 6000,
                                    continuous:               true,
                                    loading:                  true,
                                    tooltip_width:            200,
                                    tooltip_icon_width:       32,
                                    tooltip_icon_height:      20,
                                    tooltip_offsetx:          18,
                                    tooltip_offsety:          0,
                                    arrows:                   false,
                                    buttons:                  true,
                                    btn_numbers:              false,
                                    keybord_keys:             true,
                                    mousetrace:               false,
                                    pauseonover:              true,
                                    stoponclick:              true,
                                    transition:               'fade',
                                    transition_delay:         300,
                                    transition_speed:         500,
                                    show_caption:             'onhover',
                                    thumbnails:($(window).width() <= 1024) ? ($(window).width()<=745) ? true : false : true,
                                    thumbnails_position:      'outside-last',
                                    thumbnails_direction:     'vertical',
                                    thumbnails_slidex:         0,
                                    dynamic_height:            false,
                                    speed_change:              true,
                                    viewline:                  false
                                });
                            }

                            ShowcaseDefaults();

                            jQuery(window).resize(function(){
                                jQuery('#showcase').replaceWith(jQuery('#showcase-dup').clone().attr('id', 'showcase').show());
                                ShowcaseDefaults();
                            })
                        });
                        </script>
                        <div class="header_slider">
                            <div id="showcase" class="showcase" >
                                <div class="showcase-slide">
                                    <div class="showcase-content">
                                        <a href="events"><img src="assets/wp-content/images/missions/5.jpg" alt /></a>
                                    </div>
                                    <div class="showcase-caption">
                                        <h4>No matter where you are on life’s journey, you are welcome here.<span>"Gospel of the Blessed God"</span></h4>
                                    </div>
                                    <div class="showcase-thumbnail">
                                        <div class="showcase-thumbnail-content">
                                            <h5>Welcome to the Family...</h5>
                                                <p>Starting with someone close</p>
                                        </div>
                                    <div class="slider-date">
                                        <span class="month">year</span>
                                        <span class="date text_yellow">2017</span>
                                    </div>
                                    </div>
                                </div>
                        <div class="showcase-slide">
                                <div class="showcase-content">
                                    <a href="events"><img src="assets/wp-content/images/worship/praise1.jpg" alt /></a>
                                </div>
                            <div class="showcase-caption">
                                <h4>No matter where you are on life’s journey, you are welcome here. <span>"Gospel of the Blessed God"</span></h4>
                            </div>
                            <div class="showcase-thumbnail">
                                <div class="showcase-thumbnail-content">
                                    <h5>Sunday Sermon</h5>
                                        <p>Starting with someone close</p>
                                </div>
                                <div class="slider-date">
                                    <span class="month">Sunday</span>
                                    <span class="date text_yellow">2017</span>        
                                </div>
                            </div>
                    </div>
                        <div class="showcase-slide">
                                <div class="showcase-content">
                                    <a href="<?php echo base_url();?>youth"><img src="assets/wp-content/images/missions/3.jpg" alt /></a>
                                </div>
                            <div class="showcase-caption">
                                <h4>No matter where you are on life’s journey, you are welcome here. <span>"Gospel of the Blessed God"</span></h4>
                            </div>
                        <div class="showcase-thumbnail">
                                <div class="showcase-thumbnail-content">
                                    <h5>Online Ministry</h5>
                                        <p>Online Service from 3.00PM</p>
                                </div>
                            <div class="slider-date">
                                <span class="month">Sundays</span>
                                <span class="date text_yellow">3 PM</span>        
                            </div>
                        </div>
                    </div>
                        <div class="showcase-slide">
                            <div class="showcase-content">
                                <a href="events"><img src="assets/wp-content/images/kha/kha3.jpg" alt /></a>
                            </div>
                                <div class="showcase-caption">
                                    <h4>No matter where you are on life’s journey, you are welcome here. <span>"Gospel of the Blessed God"</span></h4>
                                </div>
                        <div class="showcase-thumbnail">
                                <div class="showcase-thumbnail-content">
                                    <h5>Feed Your Neighbour</h5>
                                        <p>Starting with someone close</p>
                                </div>
                                                    <div class="slider-date">
                                                        <span class="month">August</span>
                                                        <span class="date text_yellow">28</span>        
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="showcase-button">
                                            <span class="btn-up">UPCOMING EVENTS</span>
                                         </div> 
                                </div>
                            </div>           
                                                        
                    <div class="header_bottom" style="text-align:center">
                        <div id="resource" class="carousel slide clearfix">
                            <div class="carousel-inner">
                            <div class=" item clearfix">
                            <div class="item_col ">
                            <h3 style="color:#bf4927;"><a href="<?php echo base_url();?>uploads/Winning Souls.pdf" class="img_nothover0">
                            </span>Download our Sermons <i class="fa fa-download" aria-hidden="true"></i></a>
                            </h3>
                        </div>
                            <script>
                                jQuery(".item_col a.img_nothover0").mouseenter(function(){
                                    jQuery(".item_col a.img_nothover0 img").attr("src","assets/wp-content/themes/evangelist-parent/images/icons/resource_hover_ico3.png");
                                }).mouseleave(function() {      
                                    jQuery(".item_col a.img_nothover0 img").attr("src","assets/wp-content/themes/evangelist-parent/images/icons/resource_ico3.png");
                                });
                            </script>
                            <div class="item_col text-center">
                                <a href="http://tgnfi.co.ke/home/announcements_item/donate_your_gift_today" target="_blank" class="resources_btn"><span>Donate Today</span></a>
                            </div>
                                <div class="item_col text-right">
                                    <h6>
                                   <audio controls>                         
                                              <source src="horse.ogg" type="audio/ogg">
                                              <source src="<?php echo base_url();?>music/worship.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                            </audio></h6>
                                </div> 

                                
                                <script>
                                        jQuery(".item_col a.img_nothover1").mouseenter(function(){
                                            jQuery(".item_col a.img_nothover1 img").attr("src","assets/wp-content/themes/evangelist-parent/images/icons/resource_hover_ico4.png");
                                        }).mouseleave(function() {      
                                            jQuery(".item_col a.img_nothover1 img").attr("src","assets/wp-content/themes/evangelist-parent/images/icons/resource_ico4.png");
                                        });
                                </script>
                            </div>
                        </div>
                                        <!-- <a class="carousel-control left" href="#resource" data-slide="prev"></a>
                                        <a class="carousel-control right" href="#resource" data-slide="next"></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                
                        
            <div id="middle">
            <div class="container">
            <div class="row">
                <div class="span14">
                    <div class="category_item span5">
                            <a href="<?php echo base_url();?>pastor"><h2 style="text-align: center;">Pastor's Welcome note</h2>
                            <img src="<?php echo base_url();?>assets/wp-content/images/pastorsdesk/mwicigi1.jpg"></a>
                            <div class="category_desc" style="text-align: justify; padding-top: 10px"><p> "Every Christian is primarily a a missionary. Soul winning is a command not a gift"</p><p>Welcome to the The Good News Fellowship International (TGNFI) church website. I am glad you have chosen to spend a few moments looking around, discovering our church family.</p>
                            <p>We are a group of Christians committed to winning souls for Jesus, to make disciples of all nations, to baptize them, to train them, to empower them and to send them back into winning more souls.</p>
                            <div class="category_foot">
                            <a href="<?php echo base_url();?>pastor">Read More</a>
                            </div>
                            </div>
                    </div>
                    <div class="category_item span5">
                            <a href="<?php echo base_url();?>firstlady"><h2 style="text-align: center;">Mother's Welcome note</h2>

                            <img src="<?php echo base_url();?>assets/wp-content/images/jackline.jpg"></a>
                            <div class="category_desc" style="text-align: justify;"><p>I take this opportunity to personally welcome you to the The Good News Fellowship International Church.</p>

                            <p>Our goal is to win more souls to the Kingdom of God. Here, every one works in Love and with a caring heart.</p>

                            <p>To women out there who feels left out or who feels they are not fully participating in their calling, welcome home. Here we aim to cultivate every gift for the edification of the body of Christ.</p>
                            <p>On behalf of all Ladies in our church and on behalf of our entire church family we say welcome. </p>
                            <div class="category_foot">
                            <a href="<?php echo base_url();?>firstlady">Read More</a>
                            </div>
                            
                            </div>
                    </div>
                            <div class="category_item span5">
                            <a href="<?php echo base_url();?>Torgeir"><h2 style=>My tribute to Torgeir Hansen</h2>
                            <video  width="100%" controls poster="<?php echo base_url();?>assets/wp-content/images/pastorsdesk/torgeir2.jpg">
                           
                            <source src="<?php echo base_url();?>video/torgeir.mp4" type="video/mp4">
                            </video></a>

        
                            <div class="category_desc" style="text-align: justify;"><p>"Torgeir Hansen's heart was in Africa. His mind was in winning souls - Moses Mwicigi"</p>
                            <p>You taught me to be a faithful servant of Jesus till the end. You taught me to love unconditionally. You taught me to look at the heart and not the physical. You taught me to accept the King to lead me even into unknown.</p>
                            <p> I miss you every day Dad. Rest in the presence of Jesus till we meet again.</p>

                            <!-- <p>I remember that day in Nairobi Kenya when he came besides me and placed his Hand over my shoulder and said, "You shall become a pastor. I bless you; Moses." 

                            The words had the annointing of God. Waoh! This servant of Jesus lived his life winning souls and then... then... he was passing over the mantle to me! </p> -->

                            
                            <div class="category_foot">
                            <a href="<?php echo base_url();?>Torgeir">Read More</a>
                            </div>
                            </div>
                    </div>     

                                    <!-- The welcome section ends there -->
                        <div class="span5">
                            <div class="category_title">
                                <h2 style="text-align: center;">Our Mission</h2>
                                    </div>
                                    <a href="<?php echo base_url();?>believe"><div class="category_img"><img src="assets/wp-content/uploads/2013/07/resource_img2.jpg" width="300" alt="">
                                    </div></a>
                                    <div class="category_desc">
                                    <h3>Our Mission is...</h3>
                                    <i class="fa fa-check" aria-hidden="true"></i>To teach the word of God.<br/>
                                    <i class="fa fa-check" aria-hidden="true"></i> To evangelize the lost including those who have fallen from faith. <br/>
                                    <i class="fa fa-check" aria-hidden="true"></i>To disciple every believers. <br/> 
                                    <i class="fa fa-check" aria-hidden="true"></i> Show compassion to the poor, the fatherless, the widowed amd the strangers.<br/>
                                    <i class="fa fa-check" aria-hidden="true"></i> To send missionaries to Somalia, Ethiopia, Djibuti Eritria and other parts of the world.<br/><!--
                                    <i class="fa fa-check" aria-hidden="true"></i> To serve all humanity by showing love through Building vocational schools and medical facilities.<br/>
                                    <i class="fa fa-check" aria-hidden="true"></i>To spread the Good news of our Lord Jesus to hostile grounds by organizing and sponsoring medical camps in places like: Wajir, Mandera, Garissa etc<br/> -->

                                    <div class="category_foot">
                                    <a href="<?php echo base_url();?>believe">READ MORE</a>
                                </div>
                            </div>
                       </div>
                    
                         <div class="span5">
                            <div class="category_title">
                                <a href="<?php echo base_url();?>believe"><h2 style="text-align: center; padding: 10px">Apostles Creed</h2>
                                    <div class="category_img" ><img src="assets/wp-content/images/missions/appostles.png" height="200" alt=""></div></a>
                                         <div class="category_desc">
                                            <p style="text-align: justify;">We believe in God the Father almighty, creator of heaven and earth. We believe in Jesus Christ, his only Son, our Lord, who was conceived by the Holy Spiritand born of the virgin Mary. suffered under Pontius Pilate, was crucified, died, and was buried; he descended to the dead. On the third day he rose again;
                                            he ascended into heaven,</p>
                                        <div class="category_foot">
                                            <a href="believe">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span5">
                                <div class="category_title">
                                  <a href="<?php echo base_url();?>believe"><h2 style="text-align: center; padding: 5px">We believe that...</h2>
                                  <div class="category_img" ><img src="assets/wp-content/images/bible.jpg" height="200" alt=""></div></a>
                                         <div class="category_desc">
                                            <p style="text-align: justify;">
                                            <i class="fa fa-check" aria-hidden="true"></i>The Bible is the inspired, infallible, authoritative written word of God.<br> 
                                            <i class="fa fa-check" aria-hidden="true"></i>There is one God, eternally existing in three persons. God the Father, God the Son and God Holy Ghost.<br>
                                            <i class="fa fa-check" aria-hidden="true"></i>In the deity of our Lord Jesus Christ. In His virgin birth.<br/> <i class="fa fa-check" aria-hidden="true"></i> In His sinless life. In His miracles. In His vicarious and atoning death. In His bodily resurrection.<br/> <i class="fa fa-check" aria-hidden="true"></i> In His ascension to the right hand of the Father. In His future return to earth in power and glory.<!--
                                            <i class="fa fa-check" aria-hidden="true"></i>The only means of being cleansed from sin is through repentance and faith in the precious blood of Christ.</p> -->
                                            <div class="category_foot">
                                                <a href="believe">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               
            <!-- </div>
        </div>

        <div style="padding:20px; background-color: #f1f0ee; text-align: center;">
            <div class="container"><h2>Read our Latest Sermon</h2></div>
        </div>

        <div id="middle">
            <div class="container">
                
                    <div class="span14" style="padding-left: 10px;"> -->
                         <div class="span7">
                           
                                
                         <?php foreach ($sermon1 as $row):?>
                            <a href="<?php echo base_url();?>sermon/sermonarticle/<?php echo $row->sermon_id;?>"><h2><?php echo $row->sermon_title;?></h2></a>
                                <span style="padding-top: 10px; font-size: 16px;color:rgb(187, 52, 4);""><?php echo $row->sermon_author;?>
                                </span>
                                    <br/>
                                <span style="color:rgb(187, 52, 4);">Date: <?php echo $row->sermon_date;?>
                                </span>
                                <a href="<?php echo base_url();?>sermon"><img src="<?php echo $row->sermon_image;?>" height="100%" width="100%"  align="left"></a>
                                <div style="text-align: justify;"><?php echo word_limiter($row->sermon_content, 150);?></div>
                                <div class="category_foot">
                                            <a href="<?php echo base_url();?>sermon/sermonarticle/<?php echo $row->sermon_id;?>">Read More</a>
                                        </div>   
                            <?php endforeach ?> 
                         </div>
                          <div class="category_item span3" style="text-align: center;">
                                    <div class="category_title">
                                <h2>Gallery</h2>
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
                                                            visible: 4,
                                                            minimum: 1,
                                                            width: null,
                                                            height: "variable"
                                                    },
                                                    scroll: {
                                                            items: 1,
                                                            pauseOnHover:true,
                                                            duration: 1000
                                                    },
                                                    
                                                    });
                                            });
                                            </script>

                        <div class="widget_container gallery_images" style="text-align: center;">
                            <div class="image_carousel">
                                
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
                           
                                
                            </div>
                        </div>
                </div>
                
                    <div class="span5" style="text-align: center;">
                            <div class="category_title">
                                <h2>Facebook</h2>
                                    </div>
                                        <div class="fb-page" data-href="https://www.facebook.com/thegoodnewsfellowshipinternational/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thegoodnewsfellowshipinternational/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thegoodnewsfellowshipinternational/">The Good News Fellowship International</a></blockquote></div>
                                        <div style="padding: 20px; text-align: center">
                                        <a href="https://twitter.com/tgnfi" class="twitter-follow-button" data-show-count="false">Follow @tgnfi</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                                </div>
                            </div>
                          



                                        
                                
          


                        
                 <div class="container">
                