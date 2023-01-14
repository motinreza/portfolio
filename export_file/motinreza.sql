-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 03:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motinreza`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_one` varchar(1000) NOT NULL,
  `description_two` varchar(1000) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `behance` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `fiverr` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description_one`, `description_two`, `facebook`, `twitter`, `instagram`, `behance`, `linkedin`, `fiverr`, `resume`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Web developer', 'I am Motin. I have 2+ years of experience in Web Development. Customer service: 20/7. You will get 100% full support of work assured until you are fully satisfied. My key skills are: 1. HTML5, CSS3, JavaScript & Jquery, Bootstrap,Wordpress Elementor, PHP, MySql 2. Any sketch, PSD, ai, photo, xd to HTML, Bootstrap, Wordpress with Elementor 3. demo import and customize with client requirement, page build with Elementor, SEO with Yoast plugin, login, registration 4. Admin Panel, Controler Others.', '<p>&nbsp;</p>\r\n\r\n<p>Hey,</p>\r\n\r\n<p>I am Zahid. I have 3+ years of experience in Web Development.&nbsp;<strong><a href=\"https://www.fiverr.com/mjhm12\" target=\"_blank\">Customer service: 20/7.</a></strong></p>\r\n\r\n<p>You will get&nbsp;<strong><a href=\"https://www.fiverr.com/mjhm12\" target=\"_blank\">100% full support</a></strong>&nbsp;of work assured until you are fully satisfied</p>\r\n\r\n<h2>My key skills are:</h2>\r\n\r\n<ul>\r\n	<li>HTML5</li>\r\n	<li>CSS3</li>\r\n	<li>JavaScript&nbsp;</li>\r\n	<li>Jquery</li>\r\n	<li>Bootstrap</li>\r\n	<li>SASS (SCSS)</li>\r\n	<li>PHP</li>\r\n	<li>OOP, PDO</li>\r\n	<li>Rest API</li>\r\n	<li>MySql</li>\r\n	<li>Any sketch&nbsp;or PSD to HTML</li>\r\n	<li>Demo import WordPress</li>\r\n	<li>PHP Website Installation</li>\r\n	<li>User panel with PHP, OOP, Mysql</li>\r\n	<li>Admin Panel with PHP, OOP, Mysql</li>\r\n	<li>Controller with PHP, OOP, Mysql</li>\r\n	<li>Laravel</li>\r\n</ul>\r\n', 'https://www.facebook.com/motinreza2021', 'https://twitter.com/motinreza2021', 'https://www.instagram.com/motinreza2021/', 'https://www.behance.net/motinreza', 'https://www.linkedin.com/in/motinreza2021/', 'https://www.fiverr.com/motinreza/', 'https://drive.google.com/file/d/142puPu9Jh4CItspGQZRfBSP6DC9DEFY0/preview', '63add1791bee6.jpg', 'active', '2022-07-17 04:25:57', '2023-01-03 13:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(3) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `image` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `cat_id`, `title`, `slug`, `content`, `status`, `image`, `username`, `created_at`, `updated_at`) VALUES
(13, 5, 'Web Design Trends You Need To Know About', 'web-design-trends-you-need-to-know-about', '<p><strong>Web Design Trends You Need To Know About</strong><br />\r\nAutumn is upon us, and it might be time for you to take cue from the trees by shedding the old to make way for the new. This year has been a big one for web design with the rise of the mobile web, an emphasis on usability, and the increasing use of multimedia on websites. Here are some web design trends to keep in mind this fall whether you’re just making a few tweaks, or doing a full overhaul of your website.</p>\r\n\r\n<h3><strong>Simplicity of Design</strong></h3>\r\n\r\n<p>Many a dollar has gone into creating eye-catching websites over the years. Now the trend has gone toward simplistic design that offers an optimum user experience. Minimalist websites are not only easier to use, but they also load faster and better support embedded multimedia content. Advances in HTML5 and CSS3 make it more feasible than ever to create designs that are both appealing and functional.<strong> </strong></p>\r\n\r\n<h3><strong>Responsive Design</strong></h3>\r\n\r\n<p>Mashable dubbed 2013 as <a href=\"http://mashable.com/2012/12/11/responsive-web-design/\">the year of responsive design</a>, and the trend toward responsive web design will continue on into the latter part of the year. Responsive web design utilizes HTML attributes to make websites “flexible” and able to adapt to a variety of devices. The popularity of responsive design came about due to a dramatic shift in web consumption habits. Analyst Mary Meeker, a partner at investment firm KCPB, predicted earlier in the year that mobile internet would overtake desktop internet by 2014. In this age of the mobile web, smart web designers are <a href=\"https://www.bluehost.com/blog/educational/responsive-website-design-is-it-worth-it-2387\">using responsive design</a> more than ever.</p>\r\n\r\n<h3><strong>App-Like Interfaces</strong></h3>\r\n\r\n<p>Seeing as the mobile web has skyrocketed in popularity, it’s only natural that desktop versions of websites would begin to mimic app interfaces. This creates continuity between both the mobile and desktop user experience. Desktop interfaces that mimic mobile apps naturally lend themselves well to responsive design projects, so expect to see more of this trend in the coming months.</p>\r\n\r\n<h3><strong>Page Transparency</strong></h3>\r\n\r\n<p>One of the new developments in CSS3 is the ability to adjust the opacity of page elements, which makes for a pretty cool effect. This feature comes in handy when you want to apply transparency without having to combine elements into a single image.</p>\r\n\r\n<p><img alt=\"PAGE-TRANSPARENCY-SCREENSHOT\" src=\"https://www.bluehost.com/content/uploads/sites/2/2013/10/PAGE-TRANSPARENCY-SCREENSHOT-1024x445.png\" /></p>\r\n\r\n<h3><strong>Javascript</strong></h3>\r\n\r\n<p>In the quest to make websites even more device agnostic, web designers are increasingly opting to use HTML and Javascript/JQuery instead of Flash, which isn’t as flexible. You can do quite a few cool tricks with Javascript. Some trends for this year include:</p>\r\n\r\n<ul>\r\n	<li><strong>Parallax Scrolling: </strong>Parallax scrolling is quite trendy in 2013. It’s when the position of an object or objects on the page are relative to the page’s scroll position. Parallax comes from the Greek word for “change.” A good example is the WordPress <a href=\"http://balloonsdemo.wordpress.com/\">Balloons theme</a>, or the website of purse company <a href=\"http://www.bagigia.com/\">Bagigia</a>. Parallax scrolling gives the illusion of depth, and can also be used to create a fluid scrolling experience for storytelling websites.</li>\r\n	<li><strong>Infinite Scrolling: </strong>Infinite scrolling is when the page’s contents automatically load when you get to the bottom of the page. The user doesn’t have to click on anything or reload the page. You might have seen examples of infinite scrolling on your Facebook page or Pinterest boards.</li>\r\n	<li><strong>Sliding Panels: </strong>Sliding web page panels are a way for web pages to transition with a sliding panel animation, which is a pretty cool break from the ordinary. You can also use sliding panels to draw attention to a feature within the web page.</li>\r\n</ul>\r\n\r\n<p>Uses for Javascript aren’t limited to just these. It solves the problems that Flash has with accessibility and SEO, and so it’s become a popular alternative for designing website animations.</p>\r\n\r\n<h3><strong>Typography</strong></h3>\r\n\r\n<p>Gone are the days when web designers only had a precious few choices when it came to fonts that show up well on a screen. Today, graphic designers and companies like Adobe have created vast <a href=\"https://www.bluehost.com/blog/bluehost/great-wordpress-plugins-font-1128\">libraries of fonts</a> that render well on any screen. Expect them to become more expressive and larger as screen resolutions have greatly improved to display them. You can also expect to see more creative uses of fonts, including different typeface combinations.</p>\r\n\r\n<h3><strong>Retina Support</strong></h3>\r\n\r\n<p>Speaking of screen resolutions, you can’t really talk about it these days without mention retina display. Apple first popularized this feature with its iPhone 4, and has since integrated it into more of their products. The trend is now moving toward pixel-dense displays. Web designers can accommodate this by creating responsive images: One set meant for regular screens, and one set at double the resolution that will show up well on retina displays. For a better idea of how to accomplish this, see Lee Munroe’s article <a href=\"http://www.leemunroe.com/designing-for-high-resolution-retina-displays/\">5 Things I Learned Designing for H<strong>igh-Resolution retina displays</strong></a>.</p>\r\n\r\n<h3><strong>Single Page Websites</strong></h3>\r\n\r\n<p>This continues to be a popular trend in 2013 for simple sites such as landing pages and mobile apps. A single page website can help reduce load times. Be aware that this format won’t serve you well if you have a ton of content. For some great single page inspiration, see <a href=\"http://onepagelove.com/\">One Page Love</a> and <a href=\"http://onepagelove.com/\">One Page Mania</a>.</p>\r\n\r\n<h3><strong>Large Photos as Backgrounds</strong></h3>\r\n\r\n<p>This trend isn’t just for photography portfolios anymore. Because of improved screen resolution on computers and devices, large background images have become a popular choice among web designers who want to make a great impression (and that’s pretty much all of them).</p>\r\n\r\n<h3><strong>Fixed Header Bars</strong></h3>\r\n\r\n<p>Fixed headers are incredibly practical and make for a better user experience. Much like a frozen row in a spreadsheet, a fixed header will remain at the top of the page no matter how far down you scroll. This page element is also easy to create. Just use the line “header {position:} fixed” in your CSS and voila!<strong> </strong></p>\r\n\r\n<p>As you can see, the main trends of web design in 2013 all point toward a better, not necessarily a more impressive, user experience. After all, ease of use and helpfulness are more likely to attract users to a website than bells and whistles. Consider implementing a few of these trends on your website to bring it up to speed this fall.</p>\r\n', 'active', '63ae8030e9bee.jpg', 'motinreza', '2022-12-30 05:52:33', '2022-12-30 06:40:43'),
(14, 6, 'What Is a Developer & How to Hire a Developer to Build Your Site', 'what-is-a-developer--how-to-hire-a-developer-to-build-your-site', '<p>o, you&rsquo;ve decided to start a business.&nbsp;</p>\r\n\r\n<p>You&rsquo;ve done a little bit of research and you know that it will entail launching a website, and possibly creating a new software application.&nbsp;</p>\r\n\r\n<p>And now you&rsquo;re starting to feel like you&rsquo;re in over your head.&nbsp;</p>\r\n\r\n<p>Maybe it&rsquo;s because you lack a single technical bone in your body, or perhaps it&rsquo;s because you just don&rsquo;t have the time to learn.&nbsp;</p>\r\n\r\n<p>Whatever the reason you&rsquo;re stressing out, have no fear! You don&rsquo;t have to build your website on your own. A developer can help you achieve your dreams, instead.&nbsp;</p>\r\n\r\n<p>Alas, hiring for a position you don&rsquo;t know much about can be intimidating, too. That&rsquo;s why you&rsquo;re here.&nbsp;</p>\r\n\r\n<p>These tips will tell you what you need to know about hiring the right developer for your project, answering questions like:</p>\r\n\r\n<ul>\r\n	<li>What is a developer?</li>\r\n	<li>What kinds of developers are there?</li>\r\n	<li>When it comes to code languages, what are the most popular?</li>\r\n</ul>\r\n\r\n<p>Ready, set, hire!</p>\r\n\r\n<h2>What Is a Developer?</h2>\r\n\r\n<p>A developer is someone who writes computer code to create websites, applications, software, games, or computer systems. Developers are also known as software programmers, software developers, and software engineers.&nbsp;</p>\r\n\r\n<p>For projects that involve creating a user interface &mdash; like a website &mdash; developers typically collaborate with&nbsp;<a href=\"https://www.bluehost.com/blog/website-design/17-web-design-resources-you-need-to-know-2355/\">designers</a>. In that scenario, the designer is the architect who dreams up a vision. The developer is the engineer who turns that vision into reality and ensures it functions properly.&nbsp;</p>\r\n\r\n<h2>What Kinds of Developers Are There?</h2>\r\n\r\n<p>Fully answering the question &ldquo;what is a developer?&rdquo; gets more complicated from here. There are many different types of professional developers.&nbsp;</p>\r\n\r\n<p>Here are some of the most common developer titles.</p>\r\n\r\n<h3>Front-End Developer</h3>\r\n\r\n<p>Front-end developers write code that builds website interfaces, or other applications that the end user sees and interacts with.&nbsp;</p>\r\n\r\n<p>For example, a front-end developer might code an e-commerce website or a&nbsp;<a href=\"https://www.bluehost.com/blog/wordpress/the-14-best-free-wordpress-themes-7703/\">WordPress theme</a>.&nbsp;</p>\r\n\r\n<p><a href=\"https://skillcrush.com/blog/skills-to-become-a-front-end-developer/\">Front-end developers</a>&nbsp;use coding languages like CSS, HTML, JavaScript, and PHP.</p>\r\n\r\n<h3>Back-End Developer</h3>\r\n\r\n<p>Back-end developers work behind-the-scenes, building the aspects of a website or application that people don&rsquo;t see. The programs they write involve&nbsp;<a href=\"https://developer.mozilla.org/en-US/docs/Learn/Server-side/First_steps/Introduction\">server-side systems</a>&nbsp;that put information into databases and then send that data to the front end, where users can see it.</p>\r\n\r\n<p>For instance, a&nbsp;<a href=\"https://www.thebalancecareers.com/the-skills-you-need-to-be-a-backend-developer-2071184\">back-end developer</a>&nbsp;would write the code that processes payments on an eCommerce site.</p>\r\n\r\n<p>Back-end specialists use a variety of languages including Java, C, C++, C#, Ruby, Perl, Python, Scala, PHP, and Go.</p>\r\n\r\n<h3>Full Stack Developer</h3>\r\n\r\n<p>A&nbsp;<a href=\"https://blog.udacity.com/2014/12/front-end-vs-back-end-vs-full-stack-web-developers.html\">full stack developer</a>&nbsp;is the term for someone who engineers both the front and back end of a website.</p>\r\n\r\n<p>When a developer can create both the interface and payment processing system for an&nbsp;<a href=\"https://www.bluehost.com/blog/wordpress/setting-up-an-ecommerce-site-with-wordpress-10953/\">eCommerce site</a>, they can create a seamless user experience.</p>\r\n\r\n<p>Full stack developers use the same code languages that back-end and front-end developers use, including HTML, CSS, JavaScript, Java, C, C++, C#, Ruby, Perl, Python, Scala, and Go.</p>\r\n\r\n<h3>Mobile Developer</h3>\r\n\r\n<p><img alt=\"\" src=\"https://lh3.googleusercontent.com/gCh4ae1jdQqnBT9_xNLOSDnXAOp5lM1NfT4og2X8sE0BAc-xwNShqHRDcp0YREOjlcgXyWYeKiAwPDkcIPtqYEL4gorjJdxpQ1Ti9u4jFnv2UXsFlT2sAWifoWbeOWkQ09qNbDHK\" /></p>\r\n\r\n<p>A mobile developer works on creating mobile applications exclusively.&nbsp;</p>\r\n\r\n<p>This role is typically divided into two specialities:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>iOS developers who program applications for the Apple App Store.</li>\r\n	<li>Android developers who program applications for Google Play.</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.webopedia.com/TERM/M/mobile-developer.html\">Mobile developers</a>&nbsp;typically use Java, Swift, Objective-C, and Kotlin coding languages.</p>\r\n\r\n<h3>Desktop Developer</h3>\r\n\r\n<p>Desktop developers write applications for operating systems like Windows and macOS that can run offline.&nbsp;</p>\r\n\r\n<p>What kind of&nbsp;<a href=\"https://www.noodle.com/articles/how-to-become-a-desktop-developer-desktop-is-not-dead\">applications does a desktop developer</a>&nbsp;work on? The Microsoft Office Suite, Adobe Photoshop, and Zoom are a few well-known examples.</p>\r\n\r\n<p>Desktop developers use coding languages like C#, C++, Scala, Go, and Python.</p>\r\n\r\n<h3>WordPress Developer</h3>\r\n\r\n<p>WordPress developers specialize in coding websites on&nbsp;<a href=\"https://wordpress.org/\">WordPress</a>. WordPress is a popular, open source content management system that powers over&nbsp;<a href=\"https://w3techs.com/technologies/details/cm-wordpress\">37% of all websites</a>.</p>\r\n\r\n<p>A&nbsp;<a href=\"https://skillcrush.com/blog/what-does-a-wordpress-developer-do/\">WordPress developer</a>&nbsp;can create custom WordPress websites, themes, and plugins.</p>\r\n\r\n<p>Developers who code for WordPress need to know PHP &mdash; WordPress&rsquo;s coding language &mdash; as well as HTML, CSS, and JavaScript.</p>\r\n\r\n<h2>The 15 Most Popular Code Languages</h2>\r\n\r\n<p>Now you know what a developer is, what kinds of developers there are, and what they can do. The next thing you&rsquo;re probably curious to know relates to code languages and what the most popular are. This information will help ensure you are hiring the most qualified developer for the needs of your project.&nbsp;</p>\r\n\r\n<p>Here are 15 of the most popular code languages, and how they are typically used by developers.</p>\r\n\r\n<p><strong>Web development code languages</strong>:</p>\r\n\r\n<ul>\r\n	<li><strong>HTML</strong>: This isn&rsquo;t actually a programming language, but a&nbsp;<a href=\"https://www.w3schools.com/whatis/whatis_html.asp\">markup language</a>. It allows developers to add and organize written and visual content to websites and applications.</li>\r\n	<li><strong>CSS</strong>: This code language enables coders to&nbsp;<a href=\"https://www.bluehost.com/blog/website-design/html-css-cheat-sheet-infographic-4181/\">control the style</a>&nbsp;of visual elements on websites and applications.</li>\r\n	<li><strong>JavaScript:&nbsp;</strong>This language is used to increase the utility and interactivity of websites. For example, with JavaScript, developers can program what happens when someone&nbsp;<a href=\"https://www.bluehost.com/blog/account-tips/secret-effective-call-action-buttons-6442/\">clicks on a button</a>&nbsp;on a website.</li>\r\n	<li><strong>PHP</strong>: This is a versatile coding language that&rsquo;s best known as the language of WordPress websites. PHP can also be used for back-end development and desktop application development.</li>\r\n	<li><strong>Java</strong>: This code language<strong>&nbsp;</strong>is often used in the development of mobile applications, desktop applications, and the back-end of websites.</li>\r\n</ul>\r\n\r\n<p><strong>Object-oriented programming code languages</strong>:</p>\r\n\r\n<ul>\r\n	<li><strong>C</strong>: As one of the oldest coding languages, C is the basis for&nbsp;<a href=\"https://www.webopedia.com/TERM/O/object_oriented_programming_OOP.html\">object-oriented programs</a>&nbsp;like C#, C++, and Objective-C. What is a developer working on in C? Operating systems and databases for the most part.&nbsp;</li>\r\n	<li><strong>C++:&nbsp;</strong>This code language is used by developers when performance is critical and the digital product needs to operate quickly. It&rsquo;s typically used for operating systems, desktop applications, and games.</li>\r\n	<li><strong>C#</strong>: This code language is used to program Windows desktop software and video games.</li>\r\n</ul>\r\n\r\n<p><strong>Mobile development code languages</strong>:</p>\r\n\r\n<ul>\r\n	<li><strong>Objective-C:&nbsp;</strong>Originally, this code language was used to make Apple&rsquo;s OSx and iOS operating systems.</li>\r\n	<li><strong>Swift</strong>: Currently, Apple uses this code language for its OSx and iOS operating systems.&nbsp;</li>\r\n	<li><strong>Kotlin</strong>: This code language is increasingly being used by Android developers to code mobile applications.</li>\r\n</ul>\r\n\r\n<p><strong>Back-end development code languages</strong>:</p>\r\n\r\n<ul>\r\n	<li><strong>Go</strong>: This<strong>&nbsp;</strong>is an emerging programming language that is gaining popularity in the world of back-end web development.</li>\r\n	<li><strong>Python</strong>: This is a popular choice for back-end developers coding for websites, as well as desktop and web applications.&nbsp;</li>\r\n	<li><strong>Ruby</strong>: This code language is used for back-end development. The Ruby on Rails&nbsp;<a href=\"https://hackr.io/blog/what-is-frameworks\">framework</a>&nbsp;is widely used to create web applications.</li>\r\n	<li><strong>Perl</strong>: This code language is often used for back-end development.</li>\r\n</ul>\r\n\r\n<p>Now that you know the most popular computer programming languages used by developers today, you can be more specific about the languages you want the developer you hire to be familiar with.&nbsp;</p>\r\n\r\n<p>Building a website or application can be difficult. Fortunately, you don&rsquo;t have to do it yourself. Outsource the work to someone with the right skills, experience, and knowledge for the task.&nbsp;</p>\r\n\r\n<p>If you&rsquo;re&nbsp;<a href=\"https://www.bluehost.com/blog/wordpress/diy-vs-when-to-use-a-developer-6180/\">hiring a developer</a>, your job is to pick the right person, who knows the right languages to make your plans a reality.&nbsp;Depending on your goals, sometimes it&rsquo;s an even better idea to hire a company that can offer more than just development for your website. Reach out to learn more about Bluehost&rsquo;s&nbsp;<a href=\"https://www.bluehost.com/solutions/full-service\">website development services</a>.</p>\r\n', 'active', '63ae86581a843.jpg', 'motinreza', '2022-12-30 06:34:00', '2022-12-30 06:40:30'),
(15, 8, 'What is Laravel?', 'what-is-laravel', '<h2><strong>What is Laravel?</strong></h2>\r\n\r\n<p><a href=\"https://netslovers.com/post/install-laravel-5-on-centos-6-7/\">Laravel</a>&nbsp;is an open-source platform. In fact, Laravel has emerged as the most well-known and widely used PHP framework since its release in 2011. Despite the fact that there are numerous PHP frameworks, including CakePHP and CodeIgniter, the Laravel framework is strongly preferred.&nbsp;</p>\r\n\r\n<p>The majority of developers and business owners are drawn to it by its incredible features and functionalities. The clean and expressive syntax of the Laravel framework is one of its best qualities. It is also created in a way that streamlines and speeds up the entire web development process.</p>\r\n\r\n<p>In addition to these, it has access to pre-loaded in-built features like user authentication, routing, and session management, which makes it easier for developers to work on the PHP Laravel framework.</p>\r\n\r\n<h2><strong>Why is Laravel preferred over other frameworks?</strong></h2>\r\n\r\n<p>There are a lot of things that make Laravel stand out from others, but there are top 5 features that one cannot overlook. Let&rsquo;s have a quick glance over those-</p>\r\n\r\n<h3><strong>1. Blade Template Engine</strong></h3>\r\n\r\n<ul>\r\n	<li>Blade Template Engine is a powerful alternative to conventional PHP template engines.</li>\r\n	<li>The majority of the time, it doesn&#39;t prevent you from utilising simple PHP code in views.</li>\r\n	<li>It comes with convenient shortcuts for standard PHP functions and adds zero overhead to your web application.</li>\r\n	<li>Some of the unique features, such as template inheritance and data visualisation, provide flexibility in the web development process.</li>\r\n</ul>\r\n\r\n<h3><strong>2. Eloquent ORM</strong></h3>\r\n\r\n<ul>\r\n	<li>It provides the ActiveRecord implementation feature, which facilitates simple database interaction, to web developers.</li>\r\n	<li>Developers can create database queries using PHP syntax.</li>\r\n	<li>For either changing or updating the database, little to no SQL expertise is needed.</li>\r\n</ul>\r\n\r\n<h3><strong>3. Laravel MVC Architecture</strong></h3>\r\n\r\n<ul>\r\n	<li>It is an MVC-based PHP framework&nbsp;</li>\r\n	<li>It ensures that presentation layers and business logic are kept strictly separate.</li>\r\n	<li>High performance, improved security, and scalability are some of its benefits.</li>\r\n	<li>Most projects find it convenient to work upon.</li>\r\n</ul>\r\n\r\n<h3><strong>4. Open Source framework&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Open-source PHP Laravel is a framework created specifically for web developers.</li>\r\n	<li>Because it is free, it is easily employed on a big basis.</li>\r\n	<li>A large community is supporting the framework, which is progressively growing more sophisticated and adaptable.</li>\r\n</ul>\r\n\r\n<h3><strong>5. In-built Libraries</strong></h3>\r\n\r\n<ul>\r\n	<li>The framework comes with a ton of incredible built-in object-oriented libraries.</li>\r\n	<li>This increases its tremendous popularity within the IT sector.</li>\r\n</ul>\r\n\r\n<h2><strong>Importance of Laravel for Small and Medium Enterprises</strong></h2>\r\n\r\n<p>As discussed in the above section, the top 5 preferred features that many IT hubs are going ga-ga over PHP Laravel framework, there are other additional things that help many startups and small-medium scale enterprises the best way.&nbsp;</p>\r\n\r\n<p>Let&rsquo;s have a quick glance over those-</p>\r\n\r\n<h3><strong>1. Top-notch security</strong></h3>\r\n\r\n<ul>\r\n	<li>The main reason for selecting the Laravel framework is top-notch high-level security.</li>\r\n	<li>Tools like CSRF tokens monitor the project&#39;s security by vetting each and every request in order to shield it from any security threats.</li>\r\n	<li>With any of the frameworks, there is always a danger of an online security risk, but Laravel provides the best among all of them.</li>\r\n</ul>\r\n\r\n<h3><strong>2. Seamless Programming</strong></h3>\r\n\r\n<ul>\r\n	<li>It offers Laracasts, which are tutorials that teach developers Laravel from scratch.</li>\r\n	<li>It aids programmers in resolving challenging coding problems related to Laravel development.</li>\r\n	<li>This platform&#39;s in-depth research and practical information are framed by expert professionals.</li>\r\n	<li>Larcasts&#39; goal is to simplify this framework as much as possible.</li>\r\n</ul>\r\n\r\n<h3><strong>3. Ample of features</strong></h3>\r\n\r\n<ul>\r\n	<li>PHP development frameworks are without a doubt the most popular web development framework used today in the IT sector.</li>\r\n	<li>The PHP Laravel framework tops the list.</li>\r\n	<li>Features like simple to write, view composers, and flexibility to construct any type of application, from tiny to huge enterprise apps, is what it all comes down to.</li>\r\n	<li>Laravel assists SMEs in the greatest way by enabling the development of high-quality web apps while consuming less time and resources.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>4. Easy to learn and get started with first project</strong></h3>\r\n\r\n<ul>\r\n	<li>Majority of the developers are drawn to work on this framework because it is relatively simple to understand and is quick to get started.</li>\r\n	<li>The finest feature is that a developer may simply create a simple website quickly even if they are unfamiliar with the fundamentals of PHP.</li>\r\n</ul>\r\n\r\n<h3><strong>5. Modular Applications</strong></h3>\r\n\r\n<ul>\r\n	<li>The framework has been developed over 20 different libraries.&nbsp;</li>\r\n	<li>It has been divided into numerous separate modules.</li>\r\n	<li>The framework has included the most recent PHP ideas, enabling developers to create modular, responsive, and user-friendly apps quickly.</li>\r\n</ul>\r\n\r\n<p>Summing up everything, it can be considered that Laravel not only gives developers flexibility, but also ends up with more productive time. Because of MVC architecture, it is less complex and does not require complicated codes for development. Isn&#39;t that wonderful? The majority of IT giants, along with small and medium-sized businesses choose the best&nbsp;<a href=\"https://www.esparkinfo.com/laravel-development-company.html\" target=\"_blank\">Laravel Development Company</a>&nbsp;since they are well-versed in the field and can assist in creating safe, effective websites and web applications.&nbsp;</p>\r\n\r\n<h2><strong>Final Words</strong></h2>\r\n\r\n<p>So finally, we all have seen all the possible and most lucrative reasons to choose PHP Laravel framework over others. The best part about the Laravel framework is it is the most competent PHP framework that not just supports ample of parameters but also has a large community behind it that makes the development process a lot easier just like cherry on the top of the cake.&nbsp;</p>\r\n\r\n<p>So when are you hiring PHP Laravel developers to make your first seamless web application and leverage the advantages of the framework?&nbsp;</p>\r\n\r\n<div id=\"gtx-anchor\" style=\"position: absolute; visibility: hidden; left: 20px; top: 20px; width: 155.969px; height: 22px;\">&nbsp;</div>\r\n\r\n<div aria-describedby=\"bubble-2\" class=\"jfk-bubble gtx-bubble\" role=\"alertdialog\" style=\"visibility: visible; left: 83px; top: 52px; opacity: 1;\">\r\n<div class=\"jfk-bubble-content-id\" id=\"bubble-2\">\r\n<div id=\"gtx-host\" style=\"min-width: 200px; max-width: 400px;\">&nbsp;</div>\r\n</div>\r\n\r\n<div aria-label=\"Close\" class=\"jfk-bubble-closebtn-id jfk-bubble-closebtn\" role=\"button\" tabindex=\"0\">&nbsp;</div>\r\n\r\n<div class=\"jfk-bubble-arrow-id jfk-bubble-arrow jfk-bubble-arrowup\" style=\"left: 78px;\">\r\n<div class=\"jfk-bubble-arrowimplbefore\">&nbsp;</div>\r\n\r\n<div class=\"jfk-bubble-arrowimplafter\">&nbsp;</div>\r\n</div>\r\n</div>\r\n', 'active', '63ae874714821.png', 'motinreza', '2022-12-30 06:37:59', '2022-12-30 06:37:59'),
(16, 9, 'What is php?', 'what-is-php', '<p><strong>PHP</strong><br />\r\nPHP&nbsp;(recursive acronym for&nbsp;<code>PHP: Hypertext Preprocessor</code>) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>\r\n\r\n<p>Nice, but what does that mean? An example:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Example #1 An introductory example</strong></p>\r\n\r\n<p><code>&lt;!DOCTYPE&nbsp;html&gt;<br />\r\n&lt;html&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&lt;head&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Example&lt;/title&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&lt;/head&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&lt;body&gt;<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;?php<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&quot;Hi,&nbsp;I&#39;m&nbsp;a&nbsp;PHP&nbsp;script!&quot;;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&gt;<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&lt;/body&gt;<br />\r\n&lt;/html&gt;</code></p>\r\n\r\n<p>Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does &quot;something&quot; (in this case, output &quot;Hi, I&#39;m a PHP script!&quot;). The PHP code is enclosed in special&nbsp;<a href=\"https://www.php.net/manual/en/language.basic-syntax.phpmode.php\">start and end processing instructions&nbsp;<code>&lt;?php</code>&nbsp;and&nbsp;<code>?&gt;</code></a>&nbsp;that allow you to jump into and out of &quot;PHP mode.&quot;</p>\r\n\r\n<p>What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there&#39;s really no way that users can tell what you have up your sleeve.</p>\r\n\r\n<p>The best part about using PHP is that it is extremely simple for a newcomer, but offers many advanced features for a professional programmer. Don&#39;t be afraid to read the long list of PHP&#39;s features. You can jump in, in a short time, and start writing simple scripts in a few hours.</p>\r\n\r\n<p>Although PHP&#39;s development is focused on server-side scripting, you can do much more with it. Read on, and see more in the&nbsp;<a href=\"https://www.php.net/manual/en/intro-whatcando.php\">What can PHP do?</a>&nbsp;section, or go right to the&nbsp;<a href=\"https://www.php.net/manual/en/tutorial.php\">introductory tutorial</a>&nbsp;if you are only interested in web programming.</p>\r\n', 'active', '63ae87c2c76a3.jpg', 'motinreza', '2022-12-30 06:40:02', '2022-12-30 06:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(3) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `username` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category_name`, `slug`, `status`, `username`, `created_at`, `updated_at`) VALUES
(5, 'Web design', 'web-design', 'active', 'motinreza', '2022-07-17 07:57:57', '2022-07-17 07:57:57'),
(6, 'Web development', 'web-development', 'active', 'motinreza', '2022-07-17 07:58:06', '2022-07-17 07:58:06'),
(8, 'Laravel', 'laravel', 'active', 'motinreza', '2022-07-17 07:58:33', '2022-07-17 07:58:33'),
(9, 'PHP', 'php', 'active', 'motinreza', '2022-12-30 06:36:23', '2022-12-30 06:36:23'),
(10, 'CMS', 'cms', 'active', 'motinreza', '2022-12-30 06:36:28', '2022-12-30 06:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_review`
--

INSERT INTO `customer_review` (`id`, `name`, `comment`, `country`, `review`, `status`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Jeams jekly', 'The expert understand the instructions and created the consultation page as agreed.', 'United state', '5', 'active', '62d3c05266a24.jpg', '2022-07-17 07:54:58', '2022-12-30 06:52:53'),
(7, 'Banana Haven', 'Very friendly communication. Need to work with you again.', 'Islend', '4', 'active', '62d3c073ea38e.jpg', '2022-07-17 07:55:31', '2022-12-30 06:54:09'),
(8, 'Paulacharles', 'Thanks for helping me fix my website problem Recommend', 'Canada', '5', 'active', '62d3c08e2ac79.jpg', '2022-07-17 07:55:58', '2022-12-30 06:51:00'),
(9, 'Salman bin sufi', 'The seller did the work within 1hr. The best expert so far on fiverr, employ him now for positive results', 'Saudi arabia', '5', 'active', '62d3c0ae5d07c.jpg', '2022-07-17 07:56:30', '2022-12-30 06:54:37');

-- --------------------------------------------------------

--
-- Table structure for table `hero_category`
--

CREATE TABLE `hero_category` (
  `id` int(3) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hero_category`
--

INSERT INTO `hero_category` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Web designer', 'active', '2022-07-18 11:38:00', '2022-07-18 11:38:00'),
(9, 'Web developer', 'active', '2022-07-18 11:38:13', '2022-07-18 11:38:13'),
(10, 'Wordpress expert', 'active', '2022-07-18 11:38:26', '2022-07-18 11:38:26'),
(11, 'Web master', 'inactive', '2022-07-18 11:38:39', '2022-12-20 13:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sima`
--

CREATE TABLE `hero_sima` (
  `id` int(3) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `shortcut` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hero_sima`
--

INSERT INTO `hero_sima` (`id`, `owner_name`, `shortcut`, `logo`, `background`, `status`, `created_at`, `update_at`) VALUES
(6, 'Motin Reza', '62d5298b7edf6.png', '62d5298b7edfc.png', '62d5298b7edfd.jpg', 'active', '2022-07-18 09:36:11', '2022-07-18 09:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `portfolio_link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `portfolio_link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Simple Ecommerce website(Basic)', 'NOTE: This website working is continue.(Laravel)', 'motin.foysalfarabi.com/ecommerce_one', '63af0c507de4c.png', 'active', '2022-12-30 14:06:47', '2022-12-30 16:05:36'),
(14, 'Doctor appointment (Laravel)', 'A doctor appointment booking system, available on the internet.', 'doctor_appointment', '63af0bd438c6f.png', 'active', '2022-12-30 14:10:45', '2022-12-30 16:03:32'),
(15, 'Simple LMS (PHP)', 'A learning management system (LMS) is a software application or web-based technology used to plan.', 'https://motin.foysalfarabi.com/lms', '63b6819fddbcd.png', 'active', '2022-12-30 14:14:21', '2023-01-05 07:51:59'),
(16, 'Student management (PHP)', 'These systems work to coordinate scheduling and communications between faculty regarding students.', 'motin.foysalfarabi.com/student_management', '63aef3d9bf101.png', 'active', '2022-12-30 14:21:13', '2022-12-30 14:59:57'),
(17, 'Blog website(PHP)', 'A blog (short for “weblog”) is an online journal or informational website run by an individual, group.', 'motin.foysalfarabi.com/blog', '63b587a3a0ac0.png', 'active', '2022-12-30 14:24:51', '2023-01-04 14:05:23'),
(18, 'Doctor job post circular (Laravel)', '3 system user registration, Category, Employ circular, Applicant apply', 'motin.foysalfarabi.com/doctor_jobpost', '63af0c353c0e0.png', 'active', '2022-12-30 14:49:31', '2022-12-30 16:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `interest` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `behance` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `fiverr` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `title`, `address`, `phone`, `birthday`, `interest`, `email`, `website`, `facebook`, `twitter`, `instagram`, `linkedin`, `behance`, `skype`, `fiverr`, `youtube`, `image`) VALUES
(1, 'Motin Reza', 'Web developer', 'Mirpur 11, 1216 - Bangladesh', '01921272842', '2023-01-03', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.', 'motinreza2000@gmail.com', 'http://localhost/motinreza/', 'https://www.facebook.com/motinreza2021', 'https://twitter.com/motinreza2021', 'https://www.instagram.com/motinreza2021/', 'https://www.linkedin.com/in/motinreza2021/', 'https://www.behance.net/motinreza', 'live:.cid.994abbb65c501f70', 'https://www.fiverr.com/motinreza', 'https://www.youtube.com/channel/UC_JRfHGSYnv-SEvOndHA1kg', '63a1b5cea4d50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Responsive desing', 'I will make all responsive designs. I know all clients love responsive design. my all work Responsive Design. As a developer we need to complete Complete Responsive design', '63b468bddbe27.png', 'active', '2022-12-29 17:52:31', '2023-01-03 17:41:17'),
(14, 'User friendly', 'User-friendly is a term we use to describe anything that is easy to learn how to use. It is also easy to use. In other words, even if it is sophisticated, using it is simple and straightforward.', '63b4697c98f64.png', 'active', '2022-12-29 17:56:05', '2023-01-03 17:44:28'),
(15, 'Customize desing', 'A custom web design is the process of learning and understanding about your business, and applying a sound process of strategy, user experience, design execution, programming, and marketing to form a successful online business presence.', '63b469debb76d.png', 'active', '2022-12-29 18:02:38', '2023-01-03 17:46:06'),
(16, 'Full dynamic website', 'Dynamic Website is a website containing data that can be mutable or changeable. It uses client-side or server scripting to generate mutable content. Like a static website, it also contains HTML data.', '63b46859c999f.png', 'active', '2022-12-29 18:07:23', '2023-01-03 17:39:37'),
(17, 'Bug investigation', 'If your Bug report is effective, then its chances of getting fixed are higher. So fixing a bug depends upon how effectively you report it. Reporting a bug is nothing but a skill and in this tutorial we will explain how to achieve this skill.', '63b46a477e613.png', 'active', '2022-12-29 18:09:48', '2023-01-03 17:47:51'),
(19, 'Clean code', 'Code is clean if it can be understood easily – by everyone on the team. Clean code can be read and enhanced by a developer other than its original author.', '63b46b27a01c6.png', 'active', '2022-12-29 18:17:20', '2023-01-03 17:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `short_review`
--

CREATE TABLE `short_review` (
  `id` int(3) NOT NULL,
  `customer` int(3) NOT NULL,
  `project` int(3) NOT NULL,
  `review` int(3) NOT NULL,
  `running` int(3) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `short_review`
--

INSERT INTO `short_review` (`id`, `customer`, `project`, `review`, `running`, `status`, `created_at`, `updated_at`) VALUES
(5, 5, 11, 5, 1, 'active', '2022-07-17 07:50:51', '2022-12-29 18:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(3) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `percent` int(5) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skill_name`, `percent`, `status`, `created_at`, `updated_at`) VALUES
(10, 'HTML', 80, 'active', '2022-07-17 07:24:29', '2022-07-17 07:24:29'),
(11, 'CSS', 70, 'active', '2022-07-17 07:24:54', '2023-01-04 06:11:46'),
(14, 'Bootstrap', 75, 'active', '2022-07-17 07:27:22', '2022-07-17 07:27:22'),
(15, 'PHP', 55, 'active', '2022-07-17 07:27:34', '2022-07-17 07:27:34'),
(17, 'Laravel', 60, 'active', '2022-12-29 15:49:09', '2023-01-04 06:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `c_password`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 'motinreza', 'motinreza2000@gmail.com', '97399794d9dcb5b432085257ae8e2a6f', '97399794d9dcb5b432085257ae8e2a6f', 'active', '62d950538b4a5', '2022-06-28 17:23:56', '2022-07-21 13:11:19'),
(2, 'kawsarahmed', 'kawsar@gamil.com', 'c673e320869d6d592f5f8c94e0ba64d5', 'c673e320869d6d592f5f8c94e0ba64d5', 'active', NULL, '2022-06-28 17:24:23', '2022-06-28 17:24:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_category`
--
ALTER TABLE `hero_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sima`
--
ALTER TABLE `hero_sima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short_review`
--
ALTER TABLE `short_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hero_category`
--
ALTER TABLE `hero_category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hero_sima`
--
ALTER TABLE `hero_sima`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `short_review`
--
ALTER TABLE `short_review`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
