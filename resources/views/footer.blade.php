<footer>
    <style>
        /* Footer Styles */
        .footer {
            background-color: #333;
            color: #fff;
            padding: 40px 0;
            margin-top: 510px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            /* Adjust the spacing as needed */
        }

        .footer-section {
            flex: 1;
            padding: 20px;
            max-width: 300px;
            /* Adjust the maximum width as needed */
        }

        .footer-section h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        /* Category Links */
        .footer-section.categories ul {
            list-style: none;
            padding: 0;
        }

        .footer-section.categories li {
            margin-bottom: 8px;
        }

        .footer-section.categories a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section.categories a:hover {
            color: #ff9900;
        }

        /* Newsletter Form */
        .footer-section.newsletter form {
            display: flex;
            flex-direction: column;
        }

        .footer-section.newsletter input[type="email"] {
            padding: 10px;
            margin-bottom: 10px;
        }

        .footer-section.newsletter button {
            background-color: #ff9900;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .footer-section.newsletter button:hover {
            background-color: #ff6600;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .footer-section {
                flex: 1;
            }
        }
    </style>
    <div class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about">
                    <h3>XYZ ELECTRONICS</h3>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                        Voluptatem suscipit ea cumque! Facere eius perferendis <br />saepe non
                        ratione fugit accusantium aliquid aliquam <br /></p>
                </div>
                <div class="footer-section categories">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">Audio</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h3>Contact Us</h3>
                    <p>123 Electronics Street</p>
                    <p>Jalandhar , India</p>
                    <p>Email: info@xyzelectronics.com</p>
                </div>
                <div class="footer-section newsletter">
                    <h3>Subscribe to our Newsletter</h3>
                    <form action="#">
                        <input type="email" placeholder="Your email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
