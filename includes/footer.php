<footer style="background-color: var(--earth-brown); color: var(--warm-beige); padding: 70px 0 30px;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px;">
            
            <div>
                <img src="images/logo.JPG" alt="Naturewise Logo" style="height: 60px; margin-bottom: 20px; border-radius: 4px;">
                <p style="font-size: 0.95rem; color: #ccc;">Tailor-made luxury and adventure safaris crafted by East African experts.</p>
            </div>
            
            <div>
                <h4 style="color: var(--primary-yellow); font-size: 1.2rem; margin-bottom: 20px; font-family: 'Jost', sans-serif;">Discover</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 10px;"><a href="destinations.php" style="color: #ccc; text-decoration: none; transition: 0.3s;">Destinations</a></li>
                    <li style="margin-bottom: 10px;"><a href="safari.php" style="color: #ccc; text-decoration: none; transition: 0.3s;">Safari Packages</a></li>
                    <li style="margin-bottom: 10px;"><a href="climbing.php" style="color: #ccc; text-decoration: none; transition: 0.3s;">Mountain Climbing</a></li>
                </ul>
            </div>
            
            <div>
                <h4 style="color: var(--primary-yellow); font-size: 1.2rem; margin-bottom: 20px; font-family: 'Jost', sans-serif;">Client Support</h4>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 10px;"><a href="faq.php" style="color: #ccc; text-decoration: none; transition: 0.3s;">FAQ & Travel Info</a></li>
                    <li style="margin-bottom: 10px;"><a href="booking.php" style="color: #ccc; text-decoration: none; transition: 0.3s;">Book a Trip</a></li>
                    <li style="margin-bottom: 10px;"><a href="about.php" style="color: #ccc; text-decoration: none; transition: 0.3s;">About Us</a></li>
                </ul>
            </div>
            
            <div>
                <h4 style="color: var(--primary-yellow); font-size: 1.2rem; margin-bottom: 20px; font-family: 'Jost', sans-serif;">Contact Us</h4>
                <p style="color: #ccc; margin-bottom: 10px;">📞 +255 741 950 553</p>
                <p style="color: #ccc; margin-bottom: 10px;">✉️ info@naturewise.tours</p>
                <p style="color: #ccc;">📍 Arusha, Tanzania</p>
            </div>
        </div>

        <div style="text-align: center; margin-bottom: 20px;">
            <a href="https://wa.me/255741950553" target="_blank" style="display: inline-block; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'" title="Chat with us on WhatsApp">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width: 45px; height: 45px;">
            </a>
        </div>

        <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center; font-size: 0.85rem; color: #aaa;">
            <p>&copy; <?php echo date("Y"); ?> Naturewise Tours. All rights reserved. | <a href="#" style="color:#aaa; text-decoration: none;">Privacy Policy</a></p>
        </div>
    </div>
</footer>

<div id="cookieBanner" class="cookie-banner">
    <span>We use cookies to provide you with the best experience on our website, tailor our services, and analyze site traffic.</span>
    <button class="cookie-btn" onclick="acceptCookies()">Accept All</button>
</div>

<div id="google_translate_element" style="display:none;"></div>

<style>
    /* Strictly hide ALL Google branding, popups, and top banners */
    .goog-te-banner-frame.skiptranslate { display: none !important; } 
    body { top: 0px !important; }
    #goog-gt-tt { display: none !important; }
    .goog-tooltip { display: none !important; }
    .goog-tooltip:hover { display: none !important; }
    .goog-text-highlight { background-color: transparent !important; border: none !important; box-shadow: none !important; }
</style>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en', 
            includedLanguages: 'en,sw,de,fr', // Only load the languages we need
            autoDisplay: false
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    // 1. Mobile Menu Toggle
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    if(burger) {
        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');
            burger.classList.toggle('toggle');
        });
    }

    // 2. Scroll Animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-up').forEach((el) => {
        observer.observe(el);
    });

    // 3. Cookie Banner Logic
    function acceptCookies() {
        localStorage.setItem('naturewise_cookies_accepted', 'true');
        document.getElementById('cookieBanner').classList.remove('show');
    }
    
    window.onload = function() {
        if (!localStorage.getItem('naturewise_cookies_accepted')) {
            setTimeout(() => {
                document.getElementById('cookieBanner').classList.add('show');
            }, 2000); 
        }
    };

   // 4. THE BULLETPROOF TRANSLATION TRIGGER
   function switchLanguage(lang) {
        var domain = window.location.hostname;
        
        // Step 1: Aggressively delete any existing translation cookies
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + domain;
        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=." + domain; // Catches www.

        // Step 2: If not English, set the new cookies for the chosen language
        if (lang !== 'en') {
            var cookieString = "/en/" + lang;
            document.cookie = "googtrans=" + cookieString + "; path=/;";
            document.cookie = "googtrans=" + cookieString + "; path=/; domain=" + domain;
            document.cookie = "googtrans=" + cookieString + "; path=/; domain=." + domain;
        }

        // Step 3: Try to force the hidden Google widget to change instantly
        var combo = document.querySelector('.goog-te-combo');
        if (combo) {
            combo.value = lang;
            combo.dispatchEvent(new Event('change'));
        }
        
        // Step 4: Force a reload after a tiny delay to guarantee Google reads the new cookie
        setTimeout(function() {
            window.location.reload();
        }, 250);
    }

    // 3. Bulletproof Cookie Banner Logic
    function acceptCookies() {
        // Save the choice in the browser memory
        localStorage.setItem('naturewise_cookies_accepted', 'true');
        
        var banner = document.getElementById('cookieBanner');
        // Remove the show class to trigger the slide-down animation
        banner.classList.remove('show');
        
        // Wait for the animation to finish (600ms), then completely delete it from the screen
        setTimeout(function() {
            banner.style.display = 'none';
        }, 600);
    }
    
    window.onload = function() {
        if (!localStorage.getItem('naturewise_cookies_accepted')) {
            setTimeout(() => {
                document.getElementById('cookieBanner').classList.add('show');
            }, 2000); 
        } else {
            // If they already accepted it in the past, ensure it is completely deleted immediately
            document.getElementById('cookieBanner').style.display = 'none';
        }
    };
</script>
</body>
</html>