	
UPDATE wp_posts SET post_content = REPLACE(post_content, 'https://template1.masjidassist.com', 'www.yoursite.com/');
UPDATE wp_options SET option_value = 'www.yoursite.com/' WHERE option_name = 'siteurl';
UPDATE wp_options SET option_value = 'www.yoursite.com/' WHERE option_name = 'home';

