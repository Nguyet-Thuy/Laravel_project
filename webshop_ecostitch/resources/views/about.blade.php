<!DOCTYPE html>
<html>

<head>
 
    @include('home.css')

    <style type="text/css">
      h1
      {
        margin-left: 100px;
      }
      li 
      {
        padding: 12px;
      }
      h1 
      {
        padding: 12px;
      }
      h2 
      {
        padding: 12px;
      }
    </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
  
  </div>

  <div class="container">
    <h1>About Us</h1>

    <p>Welcome to EcoStitch Creations!</p>

    <h2>Our Story</h2>
    <p>A few years ago, I began crafting handmade items such as makeup pads, book sleeves, and small pouches. Driven by a passion for creating, I decided to build this webshop to offer these unique products to you. Our online store features a variety of handcrafted goods designed to bring a touch of personal charm to your everyday life.</p>

    <h2>What We Offer</h2>
    <ul>
        <li><strong>Homepage:</strong> For new visitors, our homepage provides a brief introduction to our webshop. You can explore our product range and learn more about what we offer.</li>
        <li><strong>Product Details:</strong> Click on a product for more detailed information. If you'd like to purchase, you’ll be prompted to log in. This helps us ensure a smooth and secure shopping experience.</li>
        <li><strong>Shopping Cart:</strong> Once logged in, you can add products to your shopping cart. An overview page allows you to review and modify your cart, view total costs, and proceed to checkout.</li>
        <li><strong>Contact Form:</strong> We value your feedback! Fill out our contact form, and your message will be sent directly to our admin panel. We’ll get back to you as soon as possible.</li>
        <li><strong>News Page:</strong> Stay updated with the latest news and updates. Our admin can create, edit, and manage news posts to keep you informed.</li>
        <li><strong>FAQ Page:</strong> Find answers to frequently asked questions, categorized for your convenience. Our admin can manage FAQs by adding, editing, or removing questions and answers.</li>
        <li><strong>About Page:</strong> Learn more about us and our journey in creating this webshop.</li>
    </ul>

    <h2>User Features</h2>
    <ul>
        <li><strong>Profile Management:</strong> Users can view and edit their profile information, including username, email, birthday, and a short biography. You can also upload and update your profile picture.</li>
    </ul>

    <h2>For Admins</h2>
    <p>Our admin panel provides comprehensive tools for managing the webshop effectively, with functionalities in English:</p>
    <ul>
        <li><strong>User Management:</strong> Admins can view, edit, and manage user profiles. This includes promoting users to admin status or removing admin rights as needed.</li>
        <li><strong>Product Management:</strong> Admins have full control over product categories and products. You can add, edit, and delete product categories and individual products, ensuring our inventory is up-to-date.</li>
        <li><strong>News Management:</strong> Admins can create, edit, and delete news posts. This feature helps keep the website’s content fresh and relevant.</li>
        <li><strong>FAQ Management:</strong> Admins can handle FAQs by creating, editing, and deleting FAQ categories and question-answer pairs. This ensures users have access to accurate and helpful information.</li>
        <li><strong>Order Management:</strong> Admins have access to a dedicated order page where they can review and process orders from the shopping cart.</li>
        <li><strong>Contact Form Management:</strong> Admins can view and respond to messages submitted through the contact form, ensuring prompt communication with our customers.</li>
    </ul>

    <h2>Technical Details</h2>
    <p>This webshop is built with Laravel 11 Breeze for a streamlined authentication process and Bootstrap for responsive, stylish design. We ensure secure transactions and data handling, with features such as:</p>
    <ul>
        <li>User authentication</li>
        <li>Secure login/logout</li>
        <li>Profile management</li>
        <li>Shopping cart functionality</li>
        <li>Contact form submission</li>
    </ul>
    <p>The user interface is in Dutch to cater to our Dutch-speaking audience, while the admin panel is in English for ease of management.</p>

    <h2>References</h2>
    <ul>
        <li><a href="https://laravel.com/docs/11.x" target="_blank">Laravel Documentation</a></li>
        <li><a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank">Bootstrap Documentation</a></li>
        <li><a href="https://laravel.com/docs/11.x/starter-kits#laravel-breeze" target="_blank">Laravel Breeze</a></li>
        <li><a href="https://www.youtube.com/playlist?list=PLm8sgxwSZofdmlPxaDB7fRLv_NVe2uFKl" target="_blank">Laravel 11 E-commerce Project Tutorial
        </a></li>
    </ul>

    <h2>GitHub Repository</h2>
    <p>You can view the source code for this project on <a href="https://github.com/Nguyet-Thuy/Laravel_project" target="_blank">https://github.com/Nguyet-Thuy/Laravel_project</a>.</p>

    <p>Thank you for visiting our webshop! We hope you enjoy our handcrafted items and have a pleasant shopping experience.</p>
</div>


<style>
    .container {
        margin-top: 20px;
    }
    h1, h2 {
        color: #333;
    }
    p, ul {
        font-size: 18px;
        line-height: 1.6;
    }
    a {
        color: #007bff;
    }
    a:hover {
        text-decoration: underline;
    }
</style>


  @include('home.footer')

  <!-- info section -->

  

</body>

</html>