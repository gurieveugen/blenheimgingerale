<?php
/**
 * @package WordPress
 * @subpackage Blenheim
 */

get_header(); ?>

<div id="maincontainer">
<div id="bottleimg">
<div id="banner">
<div id="historyban"><img src="/wp-content/themes/Blenheim/Images/historybanner.png"  width="189" height="57" alt="History" /></div>
<div id="productsban"><img src="/wp-content/themes/Blenheim/Images/productsbanner.png" width="189" height="57" alt="History" /></div>
</div><!--End of div banner-->
<div id="content">
<div id="leftcontent">
  <p>We welcome you to the Blenheim Ginger Ale Company; the earliest, smallest and many say finest, independent soda bottling company in the United States of America. Located on the grounds of the massive South of the Border Tourist Attraction in Hamer, South Carolina, the company retains the same small town, family-style production as when Good Ole' Blenheim Ginger Ale began being bottled in 1903. Now our official site will bring the history and legend behind Blenheim Ginger Ale, and its century old tradition of excellence and amazing flavor, to soft drink lovers all over the world who value real Old Timey Ginger Ale.  <a href="http://www.blenheimgingerale.com/about-us/blenheim-history/"><span style="color:#e7c65d">   <em>Read More ...</em></span> </a></p>
</div><!--End of div leftcontent-->
<div id="rightcontent">
<ul class="capsrow">
<li><a href="#" onmouseover="swap(lastDiv, 'gold')"><img src="/wp-content/themes/Blenheim/Images/goldbutton.png" width="82" height="82" alt="gold" />  </a></li>
<li><a href="#" onmouseover="swap(lastDiv, 'red')"><img src="/wp-content/themes/Blenheim/Images/redbutton.png" width="81" height="80" alt="Red" /> </a></li>
<li><a href="#" onmouseover="swap(lastDiv, 'white')"><img src="/wp-content/themes/Blenheim/Images/whitebutton.png" width="80" height="81" alt="White" /></a></li>
</ul>
<div id="gold" class="swapDiv"><img src="/wp-content/themes/Blenheim/Images/gold.png" width="255" height="19"  alt="Old #5 Hot" style="padding-left:10px"/><p>Our #5 formula is little bit milder, but still retains that powerful burst of ginger personality that Blenheim fanatics crave. Our secret recipe balances the fiery soul of the ginger with a succulent blend of sweetness to produce a perfectly balanced ginger ale.</p></div>
<div id="red" class="swapDiv"><img src="/wp-content/themes/Blenheim/Images/red.png"  width="211" height="19" alt="New #3 Hot" style="padding-left:30px"/><p>Our boldest flavor that tantalizes and tingles the taste buds, and goes down as smoothly as a firecracker exploding in your throat. Some say its sinus clearing heat snatches their breath away for a bit, while others thrive on the explosion of spicy ginger essence.</p></div>
<div id="white" class="swapDiv"><img src="/wp-content/themes/Blenheim/Images/white.png" width="180" height="19" alt="New #3 Hot" style="padding-left:40px"/><p>This is our newest entry into the Blenheim family of soft drinks, and is an excellent choice for today’s health conscious consumer. It still packs that giant wallop of ginger gusto with every delicious sip, but its low calorie sweeteners make it easy on your hips!</p></div>
</div><!--End of div rightcontent-->
</div><!--End of div content-->
</div><!--End of div bottleimg-->
<div id="bottomnavigation">
<?php if (function_exists('dynamic_sidebar')) dynamic_sidebar(3); ?>
</div><!--End of div bottom navigation-->

</div><!--End of maincontainer-->
<?php get_footer(); ?>
