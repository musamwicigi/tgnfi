
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
                                
              <div class="content">          
            <div id="middle">
            <div class="container">
            <div class="row">
                <div class="span14">
                    <div class="category_item span5">
                            <a href="<?php echo base_url();?>pastor"><h2>Pastor's Welcome note</h2>
                            <img src="<?php echo base_url();?>assets/wp-content/images/pastorsdesk/mwicigi1.jpg"></a>
                            <div class="category_desc" style="text-align: justify; padding-top: 10px"><p> "Every Christian is primarily a a missionary. Soul winning is a command not a gift"</p><p>Welcome to the The Good News Fellowship International (TGNFI) church website. I am glad you have chosen to spend a few moments looking around, discovering our church family.</p>
                            <p>We are a group of Christians committed to winning souls for Jesus, to make disciples of all nations, to baptize them, to train them, to empower them and to send them back into winning more souls.<a href="<?php echo base_url();?>firstlady"> Read More</a></p>
                            </div>
                    </div>
                    <div class="category_item span5">
                            <a href="<?php echo base_url();?>firstlady"><h2>Mother's Welcome note</h2>

                            <img src="<?php echo base_url();?>assets/wp-content/images/jackline.jpg"></a>
                            <div class="category_desc" style="text-align: justify;"><p>I take this opportunity to personally welcome you to the The Good News Fellowship International Church.</p>

                            <p>Our goal is to win more souls to the Kingdom of God. Here, every one works in Love and with a caring heart.</p>

                            <p>To women out there who feels left out or who feels they are not fully participating in their calling, welcome home. Here we aim to cultivate every gift for the edification of the body of Christ.</p>
                            <p>On behalf of all Ladies in our church and on behalf of our entire church family we say welcome. 
                            <a href="<?php echo base_url();?>firstlady">Read More</a></p>
                            
                          
                            
                            </div>
                    </div>
                            <div class="category_item span5">
                            <a href="<?php echo base_url();?>Torgeir"><h2 style=>My tribute to Torgeir Hansen</h2>
                            <video  width="100%" controls poster="<?php echo base_url();?>assets/wp-content/images/pastorsdesk/torgeir2.jpg">
                           
                            <source src="<?php echo base_url();?>video/torgeir.mp4" type="video/mp4">
                            </video></a>

        
                            <div class="category_desc" style="text-align: justify;"><p>"Torgeir Hansen's heart was in Africa. His mind was in winning souls - Moses Mwicigi"</p>
                            <p>You taught me to be a faithful servant of Jesus till the end. You taught me to love unconditionally. You taught me to look at the heart. You taught me follow the King's leadership all the time.</p>
                            <p> I miss you every day Dad. Rest in the presence of Jesus till we meet again. <a href="<?php echo base_url();?>firstlady">Read More</a></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

            <div class="content">          
            <div id="middle">
            <div class="container">
            <div class="row">
                <div class="span14">
                        <div class="span5">
                             <div class="category_title">
                                <a href="<?php echo base_url();?>believe"><h2 style="text-align: center; padding: 10px">Our Mission</h2>
                                  
                                    <a href="<?php echo base_url();?>believe"><div class="category_img"><img src="<?php echo base_url();?>/images/mission.jpg" alt="">
                                    </div></a>
                                    <div class="category_desc">
                                    <h3>Our Mission is...</h3>
                                    <i class="fa fa-check" aria-hidden="true"></i>To teach the word of God.<br/>
                                    <i class="fa fa-check" aria-hidden="true"></i> To evangelize the lost including those who have fallen from faith. <br/>
                                    <i class="fa fa-check" aria-hidden="true"></i>To disciple every believers. <br/> 
                                    <i class="fa fa-check" aria-hidden="true"></i> Show compassion to the poor, the fatherless, the widowed amd the strangers.<br/>
                                    <i class="fa fa-check" aria-hidden="true"></i> To send missionaries to Somalia, Ethiopia, Djibuti Eritria and other parts of the world.<a href="<?php echo base_url();?>firstlady"> Read More</a></p>
                            </div>
                                </div>
                            </div>
                         <div class="span5">
                            <div class="category_title">
                                <a href="<?php echo base_url();?>believe"><h2 style="text-align: center; padding: 10px">Apostles Creed</h2>
                                    <div class="category_img" ><img src="<?php echo base_url();?>/images/creed.jpg"  alt=""></div></a>
                                         <div class="category_desc">
                                            <p style="text-align: justify;">We believe in God the Father almighty, creator of heaven and earth. We believe in Jesus Christ, his only Son, our Lord, who was conceived by the Holy Spiritand born of the virgin Mary. suffered under Pontius Pilate, was crucified, died, and was buried; he descended to the dead. On the third day he rose again;
                                            he ascended into heaven, he is seated at the right hand of the Father,
                                            and he will come to judge the living and the dead..<a href="<?php echo base_url();?>firstlady"> Read More</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="span5">
                                <div class="category_title">
                                  <a href="<?php echo base_url();?>believe"><h2 style="text-align: center; padding: 10px">We believe that...</h2>
                                  <div class="category_img" ><img src="<?php echo base_url();?>/images/bible.jpg" height="200" alt=""></div></a>
                                         <div class="category_desc">
                                            <p style="text-align: justify;">
                                            <i class="fa fa-check" aria-hidden="true"></i>The Bible is the inspired, infallible, authoritative written word of God.<br> 
                                            <i class="fa fa-check" aria-hidden="true"></i>There is one God, eternally existing in three persons. God the Father, God the Son and God Holy Ghost.<br>
                                            <i class="fa fa-check" aria-hidden="true"></i>In the deity of our Lord Jesus Christ. In His virgin birth.<br/> <i class="fa fa-check" aria-hidden="true"></i> In His sinless life. In His miracles. In His vicarious and atoning death. In His bodily resurrection.<br/> <i class="fa fa-check" aria-hidden="true"></i> In His ascension to the right hand of the Father. In His future return to earth in power and glory. <a href="<?php echo base_url();?>firstlady">Read More</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 <div class="header_bottom medium">
                    <div class="container">
                    
            </div>
        </div>
                               
                          <div id="middle">
                            <div class="container">
                                <div class="row">
                                     <div class="span5">
                                        <h2> Our Sermon</h2>
                                     <?php foreach ($sermon1 as $row):?>
                                        <a href="<?php echo base_url();?>sermon/sermonarticle/<?php echo $row->sermon_id;?>"><h3><?php echo $row->sermon_title;?></h3></a>
                                         <div class="post_meta_top">
                                        <span class="post_date"> Authered By: </span><?php echo $row->sermon_author;?> |
                                        <span class="post_date"> Date: </span><?php echo $row->sermon_date;?>
                                        </div>
                                        
                                        <a href="<?php echo base_url();?>sermon"><img src="<?php echo base_url();?>/images/<?php echo $row->sermon_image;?>" width="100%" style="padding-right: 10px" align="left"></a>
                                            <div style="text-align: justify;"><?php echo character_limiter($row->sermon_content, 410);?> <a href="<?php echo base_url();?>firstlady">Read More</a></div>
                                             
                                        <?php endforeach ?> 
                                     </div>



                            <div class="span5">
                            <h2> Our Blog</h2><?php foreach ($blog1 as $row):?>
                             <a href="<?php echo base_url();?>blog/blogarticle/<?php echo $row->blog_id;?>"><h3><?php echo $row->blog_title;?></h3></a>
                             <div class="post_meta_top">
                            <span class="post_date"> Authered By: </span><?php echo $row->blog_author;?> |
                            <span class="post_date"> Date: </span><?php echo $row->blog_date;?>
                            </div>
                            
                            <a href="<?php echo base_url();?>blog"><img src="<?php echo base_url();?>/images/<?php echo $row->blog_image;?>" width="100%" style="padding-right: 10px" align="left"></a>
                                <div style="text-align: justify;"><?php echo character_limiter($row->blog_content, 410);?> <a href="<?php echo base_url();?>firstlady">Read More</a></div>
                                 
                            <?php endforeach ?> 
                            </div>
                 
                
                    <div class="span5" style="text-align: center;">
                            <div class="category_title">
                                <h2>Facebook</h2>
                                    </div>
                                        <div class="fb-page" data-href="https://www.facebook.com/thegoodnewsfellowshipinternational/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thegoodnewsfellowshipinternational/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thegoodnewsfellowshipinternational/">The Good News Fellowship International</a></blockquote></div>
                                     <!--    <div style="padding: 20px; text-align: center">
                                        <a href="https://twitter.com/tgnfi" class="twitter-follow-button" data-show-count="false">Follow @tgnfi</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                