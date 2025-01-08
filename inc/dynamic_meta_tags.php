<?php

$currentUrl = getCurrentUrl();

$metaTitle = "";
$metaDescription = "";

switch ($currentUrl) {
	case "https://designvikings.us/":
	$metaTitle = "Web Development, Logo Design and Digital Marketing Services US | Design Vikings";
	$metaDescription = "Design Vikings is a full-service web development, Logo design and digital marketing agency. We help businesses create a powerful online presence that drives leads and sales.";
	$metakeyword = "web design, digital marketing, SEO, PPC, social media, branding, graphic design, website development, e-commerce, responsive design, mobile optimization. ";
	break;
	case "https://designvikings.us/logo-design":
	$metaTitle = "Custom Logo Design Services USA in $119";
	$metaDescription = "Design Vikings is a professional logo design company that specializes in creating unique and memorable logos for businesses of all sizes.";
	$metakeyword = "logo design USA, Business Logo Design, Restaurant Logo, Construction Logo, Graphic design, business logos, custom logo design services USA ";
	break;
	case "https://designvikings.us/website-development":
	$metaTitle = "Custom Website Design and Development Services USA in $499 | Design Vikings US";
	$metaDescription = "Design Vikings is a professional website design and development company that specializes in creating custom, user-friendly and mobile responsive websites for businesses of all sizes. ";
	$metakeyword ="Custom web design, Custom web development, website design, website development, custom websites.";
	break;
	case "https://designvikings.us/branding-solutions":
	$metaTitle = ": Branding Solutions Service in USA | Design Vikings";
	$metaDescription = "Design Vikings provides branding solutions that help businesses establish a strong brand identity and stand out in their industry. Our branding services include logo design, brand strategy, brand messaging, and more.";
	$metakeyword ="branding solutions, logo design, brand strategy, brand messaging, brand identity, Design Vikings USA";
	break;
	case "https://designvikings.us/video-animation":
	$metaTitle = "Video Animation Services USA in $1599 | Design Vikings";
	$metaDescription = "Design Vikings offers high-quality video animation services for businesses looking to create engaging and dynamic video content. Our team of experienced animators can bring your ideas to life through captivating animations. Contact us today to get started. ";
	$metakeyword ="video animation, explainer videos, motion graphics, animated logos, character animation, 2D animation, 3D animation, whiteboard animation, storyboard, video production. ";
	break;
	case "https://designvikings.us/app-design-development":
	$metaTitle = "Native, Hybrid and Web App Design and Development Services in USA | Design Vikings";
	$metaDescription = "Bring your app idea to life with Design Vikings, custom app design and development services USA. Our team of skilled developers and designers work closely with you to create a unique and user-friendly app that meets your specific needs. ";
	$metakeyword ="Mobile app development USA, App development company, iOS app development, Android app development, Cross-platform app development USA, Custom mobile app development USA, Mobile app design USA, App development services USA";
	
	break;
	case "https://designvikings.us/creative-copywriting":
	$metaTitle = "Creative Copywriting Services USA | Design Vikings";
	$metaDescription = "Design Vikings provides professional and creative copywriting services that help businesses achieve their marketing goals. Our team of experienced writers create engaging content that resonates with your target audience.";
	$metakeyword ="Creative copywriting, professional copywriting, content writing, marketing content, copywriting services.";
	break;
	case "https://designvikings.us/digital-marketing":
	$metaTitle = "Digital Marketing Services in USA | Design Vikings";
	$metaDescription = "Design Vikings offers a wide range of digital marketing services in USA that help businesses establish and grow their online presence. Our team of experts develops customized strategies to increase your website traffic, improve your search engine rankings, and boost your online visibility.";
	$metakeyword ="Digital marketing USA, online marketing USA, internet marketing USA, search engine optimization USA, social media marketing USA, email marketing USA, PPC advertising USA, content marketing.";
	break;
	case "https://designvikings.us/illustration-design":
	$metaTitle = "Illustration Design Services in USA | Design Vikings";
	$metaDescription = "Design Vikings provides high-quality illustration design services for businesses and individuals looking to create unique and eye-catching visuals. Our team of skilled designers bring your ideas to life through custom illustrations that capture the essence of your brand or project.";
	$metakeyword ="Illustration design, custom illustrations, graphic design, visual design, brand identity, marketing visuals.";
	break;
	case "https://designvikings.us/seo-services":
	$metaTitle = "SEO Services in USA | Design Vikings";
	$metaDescription = "Design Vikings offers expert SEO services in USA that help businesses increase their online visibility and drive more traffic to their website. Our team of experienced professionals use proven strategies to improve your search engine rankings, attract more organic traffic, and increase your website's overall visibility.";
	$metakeyword ="SEO services USA, search engine optimization USA, on-page optimization USA, off-page optimization USA, keyword research, link building, organic traffic, website visibility.";
	break;
	case "https://designvikings.us/packages":
	$metaTitle = "Affordable Design Packages | Design Vikings";
	$metaDescription = "Browse Design Vikings' affordable design packages and choose the perfect one for your business needs. Our packages include logo design prices, website design prices, video animation prices, mobile app development prices and many more.";
	$metakeyword ="";
	
    break;
    
    case "https://designvikings.us/about":
	$metaTitle = "About Us | Design Vikings";
	$metaDescription = "";
	$metakeyword ="";
	
    break;
    
     case "https://designvikings.us/combo-package":
	$metaTitle = "Advance Combo Packages | Design Vikings";
	$metaDescription = "";
	$metakeyword ="";
	
    break;
    
     case "https://designvikings.us/showcase":
	$metaTitle = "Our Showcase | Design Vikingss";
	$metaDescription = "";
	$metakeyword ="";
	
    break;
    
     case "https://designvikings.us/testimonials":
	$metaTitle = "Design Vikings Testimonials | Client Reviews and Feedbacks";
	$metaDescription = "";
	$metakeyword ="";
	
    break;
    
     case "https://designvikings.us/contact":
	$metaTitle = "Contact Design Vikings | Get in Touch with Our Design Experts";
	$metaDescription = "";
	$metakeyword ="";
	
    break;
    
    case "https://designvikings.us/services":
	$metaTitle = "Our Services";
	$metaDescription = "";
	$metakeyword ="";
	
    break;
    
    case "https://designvikings.us/privacy-policy":
	$metaTitle = "Privacy Policy";
	$metaDescription = "";
	$metakeyword ="";
	
	break;
	
	case "https://designvikings.us/terms-conditions":
	$metaTitle = "Terms and Condition";
	$metaDescription = "";
	$metakeyword ="";
	
	break;
	
	default:
	$metaTitle = 'Creative Logo Design Company in USA';
	$metaDescription = 'We are a custom logo design company located in USA. We offer logo design and create memorable brand experience. Creative logo design for business, startups, startups companies and small businesses.';
	
}


function getCurrentUrl(){
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$link = "https";
else $link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];

// Print the link
return $link;
}