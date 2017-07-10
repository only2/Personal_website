<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>LZX-ZONE</title>
   <base href="<?php echo site_url();?>"/>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <style>
      .require{
         color: #f00;
      }
      .prompt{
         color: #333;
         background-repeat: no-repeat;
         padding-left: 20px;
      }
      .wrong{
         background-image: url(images/wrong.gif);
      }
      .right{
         background-image: url(images/right.gif);
      }
   </style>

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>
   <script src="js/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>


   <!-- Favicons
	================================================== -->
	<!-- <link rel="shortcut icon" href="favicon.png" > -->

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio">Life</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">I'm Li ZhiXiang.</h1>
            <h3>I'm a junior student <span>major in software engineering</span>, <span> now in self-study front,</span>this is my personal website. Let's <a class="smoothscroll" href="#about">start scrolling</a>
            and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>
            <?php
                  foreach ($users as $user){
            ?>
            <p> 
                <?php echo $user -> INTRODUCE;?>       
            </p>



            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>
                       <?php echo $user -> ADDRESS;?> </span>
						   <span>
						    <?php echo $user -> SCHOOL;?> 
                     </span>
						   <span><?php echo $user -> TELEPHONE;?></span><br>
                     <span><?php echo $user -> EMAIL;?> </span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a  href="me/lzx-resume.doc" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->
         <?php } ?>
         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>What i Learn</h3>
                  <p class="info">Studying in Northeast Forestry University <span>&bull;</span> <em class="date">from september 2014</em></p>

                  <p>
                  2014年9月——2018年6月 东北林业大学软件工程专业本科学历
                  本专业主要学习编程，算法，以及数据结构等方面的基本理论，基础知识和专业技能，主要课程有：C语言 C++ JAVA 数据结构 数据库 线性代数 离散数学 高等数学。主要实践性教学环节包括：C语言课程设计，C++课程设计，JAVA课程设计，数据库设计，网页设计与动画效果的实现。
                  </p>

               </div>

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3>Life of University</h3>
                  <p class="info">My college life is very full<span>&bull;</span> <em class="date">During 2014——2018</em></p>
                  <p>
                  在大学的3年短暂时光里，我一直没有忘记父母对我的敦敦教导，不去挥霍珍贵的大学时光，在我看来，大学的这段经历是人生最重要的一段路程，只有学好专业技能，才能得到公司的认可，才能为公司的发展做出贡献，在专业知识，技能的学习过程中，我一直坚信勤能补拙，多学多练才是硬道理，正是因为这样，我才能具备扎实的基础知识，生活上，与其他同学和睦相处，多为别人着想一直是我的生活准则，所以也建立了良好的同学关系。大学这4年时间里我收获颇丰。
                  </p>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>My blog</h3>
                  <p class="info">Finish my bloh <span>&bull;</span> <em class="date">March 2016</em></p>
                  <p>
                  My blog是我自己动手做的一个小型的个人博客，前后端集合，前端方面主要涉及 HTML CSS JS JQ,后端相关功能的实现，比如登录 注册 修改个人信息 浏览他人博客 发表评论等等 借助于PHP CI框架来实现，在这个过程中，得到了大量的锻炼，对前后端相当于做了个综合练习，为以后的大型项目奠定了基础。
                  </p>

               </div>

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3>Mian Ba</h3>
                  <p class="info">Team Leader<span>&bull;</span> <em class="date">March 2016</em></p>
                  <p>
                  Mian ba(面霸)是我导师打算建立的一个网上面试平台，能够为在校学生提供与各大公司面试官或者高管面试的机会，我和我的队员主要负责前期数据库的设计，以及后端相关功能的实现，刚开始在数据库的设计中，由于有些复杂的逻辑关系没有理清，数据库的设计不够合理，给后端开发人员造成了很多的麻烦，后来经过多次修改，终于完美的建立起了数据库，数据库的设计至关重要。后端相关功能的实现，以及相关代码的编写，利用了SVN，能够提高工作效率，我们组在我的带领下完成了后台管理员相关功能的实现，比如项目后台管理员的注册，登录，显示所有已注册用户并显示其个人信息，对注册的面试官进行审核，添加，修改平台信息等....对MVC模式有了更清晰的认识。同时也锻炼了团队合作的能力。
                  </p>

               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>In learning professional knowledge at the same time， I also taught myself and some related The front-end engineering knowledge and skills,Let's start scrolling and learn more about that.
            </p>

				<div class="bars">

				   <ul class="skills">
					   <li><span class="bar-expand photoshop"></span><em>Photoshop</em></li>
                  <li><span class="bar-expand HTML5"></span><em>HTML5</em></li>
						<li><span class="bar-expand CSS"></span><em>CSS</em></li>
						<li><span class="bar-expand JavaScript"></span><em>JavaScript</em></li>
						<li><span class="bar-expand jquery"></span><em>jquery</em></li>
                  <li><span class="bar-expand PHP"></span><em>PHP</em></li>
					</ul>

				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->

   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My life.</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
          
            <?php

                  foreach ($blogs as $blog) {
            ?>
          	   <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#kkk" title="">
                        <img alt="" src="<?php echo $blog -> BG_IMAGE;?>">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5><?php echo $blog -> TITLE;?></h5>
                             
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>
                  </div>
               </div> <!-- item end -->

               <div id="kkk" class="popup-modal mfp-hide">
                  <img class="scale-with-grid" src="<?php echo $blog -> BIGBG_IMAGE;?>">

                  <div class="description-box">
                     <h4><?php echo $blog -> TITLE;?></h4>
                     <p><?php echo $blog -> OUTLINE;?></p>
                     <span class="categories"><i class="fa fa-tag"></i><?php echo $blog -> TITLE;?></span>
                  </div>

                  <div class="link-box">
                     <a class="popup-modal-dismiss">Close</a>
                  </div>

               </div><!-- modal-01 End -->
            <?php } ?>
               <!-- <! <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="images/portfolio/chongqing.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>重庆</h5>
                              <p>真的热</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <! item end -->

               <!-- <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-03" title="">
                        <img alt="" src="images/portfolio/changchun.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>长春</h5>
                              <p>真的冷</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <! item end --> 
<!-- 
               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-04" title="">
                        <img alt="" src="images/portfolio/dormitory.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>宿舍</h5>
                              <p>我的家</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <! item end --> 
<!-- 
               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-05" title="">
                        <img alt="" src="images/portfolio/class.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>班级</h5>
                              <p>很有爱</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <! item end --> 

              <!--  <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-06" title="">
                        <img alt="" src="images/portfolio/sky.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>天空</h5>
                              <p>很蔚蓝</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!item end -->
 
               <!-- <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="images/portfolio/militory.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>军训</h5>
                              <p>很热血</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> < item end --> 

               <!-- <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-08" title="">
                        <img alt="" src="images/portfolio/game.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>LOL</h5>
                              <p>很基情</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div>  -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      - -->
         <!-- <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/big-chongqing.jpg" alt="" />

		      <div class="description-box">
			      <h4>重庆3日游</h4>
			      <p>2016年6月端午，自己去重庆游玩，热是第一感觉，品尝了正宗的重庆小面和重庆火锅。让人辣的酣畅淋漓。</p>
               <span class="categories"><i class="fa fa-tag"></i>Super spicy hot pot</span>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><! modal-02 End -->

         <!-- <div id="modal-03" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/big-changchun.jpg" alt="" />

		      <div class="description-box">
			      <h4>长春世纪影城</h4>
			      <p>长影世纪城科学并开创性地借鉴了美国好莱坞环球影城和迪斯尼乐园的精华，集当今世界最先进的各种特效电影于一地，以其高科技含量、高新颖程度、高制作水平和高民族文化特质，充分展示了世界特效电影文化独有的魅力，令人印象深刻</p>
               <span class="categories"><i class="fa fa-tag"></i>The magic of movies</span>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><! modal-03 End -->

         <!-- <div id="modal-04" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/big-dormitory.jpg" alt="" />

		      <div class="description-box">
			      <h4>我的宿舍</h4>
			      <p>干净整洁我想会是你的第一印象，相比于其他寝室，我觉得它会是鹤立鸡群，360度无死角壁纸全覆盖，家的温馨有木有.</p>
               <span class="categories"><i class="fa fa-tag"></i>My home</span>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><! modal-04 End --> 

         <!-- <div id="modal-05" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/big-class.jpg" alt="" />

		      <div class="description-box">
			      <h4>我的班级</h4>
			      <p>在这个大家庭里，充满了团结友爱，班级凝聚力包括执行力都很强，每个人的班级荣誉感都很强，为了班级荣誉贡献自己的力量.</p>
               <span class="categories"><i class="fa fa-tag"></i>友爱的大家庭</span>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><! modal-05 End -->
 
         <!-- <div id="modal-06" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/big-sky.jpg" alt="" />

		      <div class="description-box">
			      <h4>蔚蓝天空</h4>
			      <p>在飞机上向外看，蔚蓝的天空顿时令人心胸开阔，顿生豪情壮志，海阔凭鱼跃，天高任鸟飞，我会努力闯出自己的一片天空.</p>
               <span class="categories"><i class="fa fa-tag"></i>我的天空</span>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><! modal-06 End --> 

         <!-- <div id="modal-07" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/big-militory.jpg" alt="" />

		      <div class="description-box">
			      <h4>大学军训</h4>
			      <p>15天的军训让我们都褪去了刚入学的懒散，纪律性得到了提高，集体荣誉感增强了，也锻炼了吃苦耐劳的品质.</p>
               <span class="categories"><i class="fa fa-tag"></i>大学军训</span>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><! modal-07 End --> 

         <!-- <div id="modal-08" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/big-game.jpg" alt="" />

		      <div class="description-box">
			      <h4>英雄联盟</h4>
			      <p>周末的时候约上小伙伴一起相聚召唤师峡谷，放松身心的同时也联系了感情，它更像是一个纽带将我和我的朋友联系在一起，为了取得胜利一起合作，最后推掉对方水晶的感觉真的赞。</p>
               <span class="categories"><i class="fa fa-tag"></i>激情四射</span>
		      </div>

            <div class="link-box">
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><! modal-01 End --> 


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->

   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>你只闻到我的香水，却没看到我的汗水；
                              你有你的规则，我有我的选择；
                              你否定我的现在，我决定我的未来；
                              你嘲笑我一无所有，不配去爱，我可
                              怜你总是等待；
                              你可以轻视我们的年轻，我们会证明
                              这是谁的时代；
                              梦想注定是孤独的旅行；
                              路上少不了质疑和嘲笑；
                              但那又怎样，就算遍体鳞伤，也要活得漂亮！！！ 
                           </p>
                           <cite>陈欧</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                     <li>
                        <blockquote>
                           <p>从未年轻过的人，一定无法体会这个世界 
                           的偏见。我们被世俗拆散，也要为爱情勇 
                           往直前；我们被房价羞辱，也要让简陋的 
                           现实变的温暖；我们被权威漠视，也要为自己的天分保持骄傲；我们被平庸折磨， 
                           也要开始说走就走的冒险。所谓的光辉岁 
                           月，并不是后来闪耀的日子，而是无人问津时，你对梦想的偏执，你是否有勇气， 
                           对自己忠诚到底。
                           </p>
                           <cite>陈欧</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">如果你想有什么话或者什么建议想要跟我说，可以给我留言或者打我电话。
                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns" >

               <!-- form -->
               <form action="welcome/comment" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName">Name<span class="required">*</span></label>
						   <input type="text" value="" size="10" id="contactName" class="one" name="contactName">

                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="25" id="contactEmail" class="one" name="contactEmail">
                     <span class="require">*</span>
                     <span class="info"></span>
                  </div>

                  <div>
						   <label for="contactPhonenumber">Phonenumber <span class="required">*</label>
						   <input type="text" value="" size="20" id="contactPhone" class="one" name="contactNumber">
                    
                        <span class="require">*</span>
                        <span class="info"></span>
                  </div>

                  <div>
                     <label for="contactMessage">Message<span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>
                  <div>
                     <label for="submit"><span class="required"></span></label>
                     <input value="Submit" class="do_comment" type="submit">
                    <!--  <button class="submit" >Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span> -->
                  </div>
					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
						   李智想<br>
						   黑龙江省哈尔滨市 <br>
						   东北林业大学<br>
						   <span>18845724671</span>
					   </p>

				   </div>
            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->
  <!--  表单数据验证-->
<script type="text/javascript">
   $(function(){    
         var $contactEmail = $('#contactEmail')
            $contactPhone = $('#contactPhone');

         var bSubmit = true;//标识位，true代表可以提交，false不可提交

         $contactPhone.on('focus', function(){
            var $info = $(this).nextAll('.info').empty();
            var $prompt = $('<span class="prompt"></span>');
            if(this.value.length < 11){
               $prompt.addClass('wrong')
                     .html('')
                     .appendTo($info);
               bSubmit = false;
            }else{
               $prompt.addClass('right')
                     .html('')
                     .appendTo($info);
               bSubmit = true;
            }
         }).on('keyup', function(){
            $(this).triggerHandler('focus');
         });

         $contactEmail.on('focus', function(){
            var $info = $(this).nextAll('.info').empty();
            if(this.value.indexOf('@') == -1){
               $info.append('<span class="prompt wrong"></span>');
               bSubmit = false;
            }else{
               $info.append('<span class="prompt right"></span>');
               /*if(bSubmit == false){

               }else{
                  bSubmit = true;
               }*/
               bSubmit = !bSubmit?false:true;
            }
         }).on('keyup', function(){
            $(this).triggerHandler('focus');
         });

         $('#contactForm').on('submit', function(){
            $contactEmail.triggerHandler('focus');
            $contactPhone.triggerHandler('focus');

            return bSubmit;
         });
   



   });  
</script>   
</body>
</html>
